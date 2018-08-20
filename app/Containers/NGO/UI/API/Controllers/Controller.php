<?php

namespace App\Containers\NGO\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\UI\API\Requests\CreateNgoRequest;
use App\Containers\NGO\UI\API\Requests\DeleteNgoRequest;
use App\Containers\NGO\UI\API\Requests\DeletePhoneNumberRequest;
use App\Containers\NGO\UI\API\Requests\FindNgoByNationalIdRequest;
use App\Containers\NGO\UI\API\Requests\FindNgoByPublicNameRequest;
use App\Containers\NGO\UI\API\Requests\GetAllVerificationRequestsRequest;
use App\Containers\NGO\UI\API\Requests\GetKYCPhotosRequest;
use App\Containers\NGO\UI\API\Requests\GetNgoByPublicNameRequest;
use App\Containers\NGO\UI\API\Requests\GetNgoRequest;
use App\Containers\NGO\UI\API\Requests\KYCNgoAdminVerificationRequest;
use App\Containers\NGO\UI\API\Requests\KYCPhotoAdminVerificationRequest;
use App\Containers\NGO\UI\API\Requests\KYCPhotoVerifyRequestRequest;
use App\Containers\NGO\UI\API\Requests\KYCVerifyRequestRequest;
use App\Containers\NGO\UI\API\Requests\ListAllNgosRequest;
use App\Containers\NGO\UI\API\Requests\SearchNgosRequest;
use App\Containers\NGO\UI\API\Requests\SendKYCPhotoRequest;
use App\Containers\NGO\UI\API\Requests\UpdateNgoRequest;
use App\Containers\NGO\UI\API\Transformers\ArticleTransformer;
use App\Containers\NGO\UI\API\Transformers\KYCPhotoTransformer;
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

    public function getNgoByPublicName(GetNgoByPublicNameRequest $request)
    {
        $ngo = Apiato::call('NGO@GetNgoByPublicNameAction', [new DataTransporter($request)]);
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

    public function findNgoByPublicName(FindNgoByPublicNameRequest $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByPublicNameAction', [new DataTransporter($request)]);
        $ngo->msg = 'NGO Found';
        return $this->transform($ngo, NGOTransformer::class);
    }

    public function searchNgos(SearchNgosRequest $request)
    {
        $ngos = Apiato::call('NGO@SearchNgosAction', [$request]);
        $ngos->msg = 'NGOs found';
        return $this->transform($ngos, NgoTransformer::class);
    }

    public function deletePhoneNumber(DeletePhoneNumberRequest $request)
    {
        Apiato::call('NGO@DeletePhoneNumberAction', [$request]);
        return $this->noContent();
    }

    public function sendKYCPhoto(SendKYCPhotoRequest $request)
    {
        $kycPhoto = Apiato::call('NGO@SendKYCPhotoAction', [$request]);
        $kycPhoto->msg = 'Media created';
        return $this->transform($kycPhoto, KYCPhotoTransformer::class);
    }

    public function getKYCPhotos(GetKYCPhotosRequest $request)
    {
        $kycPhotos = Apiato::call('NGO@GetKYCPhotosAction', [new DataTransporter($request)]);
        return $this->transform($kycPhotos, KYCPhotoTransformer::class);
    }

    public function kycVerifyRequest(KYCVerifyRequestRequest $request)
    {
        $result = Apiato::call('NGO@KYCVerifyRequestAction', [new DataTransporter($request)]);
        $result->msg = 'Photo verification request has been submitted';
        return $this->json($result->msg);
    }

    public function getAllVerificationRequests(GetAllVerificationRequestsRequest $request)
    {
        $ngo = Apiato::call('NGO@GetAllVerificationRequestsAction', [new DataTransporter($request)]);
        return $this->transform($ngo, NgoTransformer::class);
    }

        public function kycPhotoAdminVerification(KYCPhotoAdminVerificationRequest $request)
    {
        $kycPhoto = Apiato::call('NGO@KYCPhotoAdminVerificationAction', [new DataTransporter($request)]);
        $kycPhoto->msg = 'Verification result has been submitted';
        return $this->transform($kycPhoto, KYCPhotoTransformer::class);
    }

    public function kycNgoAdminVerification(KYCNgoAdminVerificationRequest $request)
    {
        $ngo = Apiato::call('NGO@KYCNgoAdminVerificationAction', [new DataTransporter($request)]);
        $ngo->msg = 'Verification result has been submitted';
        return $this->transform($ngo, NgoTransformer::class);
    }
}