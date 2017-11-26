<?php

namespace App\Containers\NGO\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Actions\GetAuthenticatedUserNgoAction;
use App\Containers\NGO\UI\API\Requests\CreateNgoRequest;
use App\Containers\NGO\UI\API\Requests\DeleteNgoRequest;
use App\Containers\NGO\UI\API\Requests\FindNgoByNationalIdRequest;
use App\Containers\NGO\UI\API\Requests\GetAuthenticatedUserNgoRequest;
use App\Containers\NGO\UI\API\Requests\GetNgoRequest;
use App\Containers\NGO\UI\API\Requests\ListAllNgosRequest;
use App\Containers\NGO\UI\API\Requests\UpdateNgoRequest;
use App\Containers\NGO\UI\API\Transformers\CreateNgoTransformer;
use App\Containers\NGO\UI\API\Transformers\NGOFromSiteTransformer;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\NGO\UI\API\Transformers\SubjectTransformer;
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

        $ngos = Apiato::call('NGO@ListNgosAction', [$request]);
        return $this->transform($ngos, NgoTransformer::class);
    }

    /**
     * Show one ngo
     * @param GetNgoRequest $request
     * @return mixed
     */
    public function getNgo(GetNgoRequest $request) {

        $ngo = Apiato::call('NGO@GetNgoAction', [$request]);
        return $this->transform($ngo, NgoTransformer::class);
    }

    /**
     * Add a new ngo
     * @param CreateNgoRequest $request
     * @return mixed
     */
    public function createNgo(CreateNgoRequest $request) {

        $ngo = Apiato::call('NGO@CreateNgoAction', [$request]);
        return $this->transform($ngo, CreateNgoTransformer::class);
    }

    /**
     * Update a given ngo
     * @param UpdateNgoRequest $request
     * @return mixed
     */
    public function updateNgo(UpdateNgoRequest $request) {

        $ngo = Apiato::call('NGO@UpdateNgoAction', [$request]);
        return $this->transform($ngo, UpdateNgoTransformer::class);
    }

    /**
     * Delete a given ngo
     * @param DeleteNgoRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteNgo(DeleteNgoRequest $request) {

        $ngo = Apiato::call('NGO@DeleteNgoAction', [$request]);
        return $this->deleted($ngo);
    }

    public function getNgoSubjects() {
        $subjects = Apiato::call('NGO@GetNgoSubjectsAction');
        return $this->transform($subjects,SubjectTransformer::class);
    }

    public function findNgoByNationalId(FindNgoByNationalIdRequest $request) {
        $ngo = $this->call('NGO@FindNgoByNationalIdAction',[$request]);
        return $this->transform($ngo, NGOTransformer::class);
    }
}
