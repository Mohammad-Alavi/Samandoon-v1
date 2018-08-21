<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Models\Phone;
use App\Containers\NGO\Models\Subject;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class UpdateNgoTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Ngo $ngo, array $data): Ngo
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty');
        }

        try {
            DB::beginTransaction();
            $updatedNgo = $this->repository->update($data, $ngo->id);
            if (array_key_exists('ngo_logo', $data)) {
                $ngo->clearMediaCollection('ngo_logo');
                $ngo->addMediaFromRequest('ngo_logo')->toMediaCollection('ngo_logo');
            }

            if (array_key_exists('ngo_banner', $data)) {
                $ngo->clearMediaCollection('ngo_banner');
                $ngo->addMediaFromRequest('ngo_banner')->toMediaCollection('ngo_banner');
            }

            if (array_key_exists('phone', $data)) {
                Phone::whereNgoId($ngo->id)->delete();
                $phoneArray = json_decode($data['phone'], true);
                foreach ($phoneArray as $phone) {
                    Phone::create(
                        [
                            'ngo_id' => $ngo->id,
                            'phone_number' => $phone['phone_number'],
                            'label' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($phone['label']),
                            'ngo_id' => $ngo->id
                        ]
                    );
                }
            }

            if (array_key_exists('subject', $data)) {
                $ngo->subjects()->detach();
                $subjectIdArray = json_decode($data['subject'], true);
                if (!empty($subjectIdArray))
                    foreach ($subjectIdArray as $subjectId) {
                        $subjectExist = Subject::find($subjectId);
                        abort_if(empty($subjectExist), 404, 'Subject with id: ' . $subjectId . ' not found');
                        $ngo->subjects()->attach($subjectId);
                    }
            }
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Updating NGO failed' . $exception->getMessage());
        } finally {
            DB::commit();
        }
        return $updatedNgo;
    }
}