<?php

namespace App\Containers\NGO\UI\API\Controllers;

use App\Containers\NGO\Actions\CreateNgoAction;
use App\Containers\NGO\Actions\DeleteNgoAction;
use App\Containers\NGO\Actions\GetAuthenticatedUserNgoAction;
use App\Containers\NGO\Actions\GetNgoAction;
use App\Containers\NGO\Actions\ListNgosAction;
use App\Containers\NGO\Actions\UpdateNgoAction;
use App\Containers\NGO\UI\API\Requests\CreateNgoRequest;
use App\Containers\NGO\UI\API\Requests\DeleteNgoRequest;
use App\Containers\NGO\UI\API\Requests\GetAuthenticatedUserNgoRequest;
use App\Containers\NGO\UI\API\Requests\GetNgoRequest;
use App\Containers\NGO\UI\API\Requests\ListAllNgosRequest;
use App\Containers\NGO\UI\API\Requests\UpdateNgoRequest;
use App\Containers\NGO\UI\API\Transformers\CreateNgoTransformer;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\NGO\UI\API\Transformers\UpdateNgoTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    /**
     * Show all ngos
     * @param ListAllNgosRequest $request
     * @return mixed
     */
    public function listAllNgos(ListAllNgosRequest $request) {

        $ngos = $this->call(ListNgosAction::class, [$request]);
        return $this->transform($ngos, NgoTransformer::class);
    }

    /**
     * Show one ngo
     * @param GetNgoRequest $request
     * @return mixed
     */
    public function getNgo(GetNgoRequest $request) {

        $ngo = $this->call(GetNgoAction::class, [$request]);
        return $this->transform($ngo, NgoTransformer::class);
    }

    /**
     * Add a new ngo
     * @param CreateNgoRequest $request
     * @return mixed
     */
    public function createNgo(CreateNgoRequest $request) {

        $ngo = $this->call(CreateNgoAction::class, [$request]);
        return $this->transform($ngo, CreateNgoTransformer::class);
    }

    /**
     * Update a given ngo
     * @param UpdateNgoRequest $request
     * @return mixed
     */
    public function updateNgo(UpdateNgoRequest $request) {

        $ngo = $this->call(UpdateNgoAction::class, [$request]);
        return $this->transform($ngo, UpdateNgoTransformer::class);
    }

    /**
     * Delete a given ngo
     * @param DeleteNgoRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteNgo(DeleteNgoRequest $request) {

        $ngo = $this->call(DeleteNgoAction::class, [$request]);
        return $this->deleted($ngo);
    }
}
