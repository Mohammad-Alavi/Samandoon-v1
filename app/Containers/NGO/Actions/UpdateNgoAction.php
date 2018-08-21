<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class UpdateNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo]);

        $data = $request->sanitizeInput([
            'description',
            'public_name',
            'area_of_activity',
            'subject',
            'city',
            'province',
            'address',
            'zip_code',
            'ngo_logo',
            'ngo_banner',
            'phone'
        ]);


        if (array_key_exists('description', $data)) {
            $data['description'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($data['description']);
        }

        if (array_key_exists('address', $data)) {
            $data['address'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($data['address']);
        }

        if (array_key_exists('public_name', $data)) {
            $data['public_name'] = strtolower($data['public_name']);

            // try to find ngo with public_name
            try {
                $ngo_with_public_name = Apiato::call('NGO@FindNgoByPublicNameTask', [$data['public_name']]);
            } catch (\Exception $exception) {
                // don't throw exception if not found
            }

            // if found then check if we are the owner of it
            if (isset($ngo_with_public_name))
                throw_if($ngo->id !== $ngo_with_public_name->id, AccessDeniedException::class, 'This NGO public name has already been taken');
        }

        return Apiato::call('NGO@UpdateNgoTask', [$ngo, $data]);
    }
}