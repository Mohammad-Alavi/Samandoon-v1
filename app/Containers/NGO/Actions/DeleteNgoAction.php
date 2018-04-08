<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Requests\Request;

class DeleteNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);

        // check if has access to manage and delete ngo then deletes the ngo
        if ($this->call('NGO@CheckHasAccessToNgoTask', [$ngo])) {
            try {
                $ngo->clearMediaCollection('ngo_logo');
                $ngo->clearMediaCollection('ngo_banner');
                Apiato::call('NGO@DeleteNgoTask', [$ngo]);
                return $ngo;
            } catch (Exception $exception) {
                throw new DeleteResourceFailedException("Failed to delete NGO");
            }
        }
    }
}
