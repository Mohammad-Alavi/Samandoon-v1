<?php

namespace App\Containers\NGO\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Actions\FindArticleByIdAction;
use App\Containers\NGO\Actions\GetAuthenticatedUserNgoAction;
use App\Containers\NGO\UI\API\Requests\CreateArticleRequest;
use App\Containers\NGO\UI\API\Requests\CreateNgoRequest;
use App\Containers\NGO\UI\API\Requests\DeleteArticleRequest;
use App\Containers\NGO\UI\API\Requests\DeleteNgoRequest;
use App\Containers\NGO\UI\API\Requests\DeletePhoneNumberRequest;
use App\Containers\NGO\UI\API\Requests\FindNgoByNationalIdRequest;
use App\Containers\NGO\UI\API\Requests\GetArticleRequest;
use App\Containers\NGO\UI\API\Requests\GetAuthenticatedUserNgoRequest;
use App\Containers\NGO\UI\API\Requests\GetNgoRequest;
//use App\Containers\NGO\UI\API\Requests\GetProofPhotosRequest;
use App\Containers\NGO\UI\API\Requests\ListAllNgosRequest;
use App\Containers\NGO\UI\API\Requests\SearchNgosRequest;
//use App\Containers\NGO\UI\API\Requests\SendProofPhotoRequest;
use App\Containers\NGO\UI\API\Requests\UpdateArticleRequest;
use App\Containers\NGO\UI\API\Requests\UpdateNgoRequest;
use App\Containers\NGO\UI\API\Transformers\ArticleTransformer;
use App\Containers\NGO\UI\API\Transformers\NGOFromSiteTransformer;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\NGO\UI\API\Transformers\SubjectTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Transporters\DataTransporter;

class Controller extends ApiController
{
    public function listAllNgos(ListAllNgosRequest $request)
    {
        $ngos = Apiato::call('NGO@ListNgosAction', [$request]);
        return $this->transform($ngos, NgoTransformer::class);
    }

    public function getNgo(GetNgoRequest $request)
    {
        $ngo = Apiato::call('NGO@GetNgoAction', [$request]);
        $ngo->msg = 'Found NGO';
        return $this->transform($ngo, NgoTransformer::class);
    }

    public function createNgo(CreateNgoRequest $request)
    {
        $ngo = Apiato::call('NGO@CreateNgoAction', [$request]);
        $ngo->msg = 'NGO Created';
        return $this->transform($ngo, NgoTransformer::class);
    }

    public function updateNgo(UpdateNgoRequest $request)
    {
        $ngo = Apiato::call('NGO@UpdateNgoAction', [$request]);
        $ngo->msg = 'NGO Updated';
        return $this->transform($ngo, NgoTransformer::class);
    }

    public function deleteNgo(DeleteNgoRequest $request)
    {
        Apiato::call('NGO@DeleteNgoAction', [$request]);
        return $this->noContent();
    }

    public function getNgoSubjects()
    {
        $subjects = Apiato::call('NGO@GetNgoSubjectsAction');
        return $this->transform($subjects, SubjectTransformer::class);
    }

    public function findNgoByNationalId(FindNgoByNationalIdRequest $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByNationalIdAction', [$request]);
        $ngo->msg = 'NGO Found';
        return $this->transform($ngo, NGOTransformer::class);
    }

    public function searchNgos(SearchNgosRequest $request)
    {
        $ngos = Apiato::call('NGO@SearchNgosAction', [new DataTransporter($request)]);
        $ngos->msg = 'NGOs found';
        return $this->transform($ngos, NgoTransformer::class);
    }

    public function deletePhoneNumber(DeletePhoneNumberRequest $request)
    {
        Apiato::call('NGO@DeletePhoneNumberAction', [$request]);
        return $this->noContent();
    }
//
//    public function sendProofPhoto(SendProofPhotoRequest $request)
//    {
//        Apiato::call('NGO@SendProofPhotoAction', [new DataTransporter($request)]);
//        return $this->json('Media updated');
//    }
//
//    public function getProofPhotos(GetProofPhotosRequest $request)
//    {
//        $proofPhotos = Apiato::call('NGO@GetProofPhotosAction', [new DataTransporter($request)]);
//        return $proofPhotos; // TODO
//    }
}