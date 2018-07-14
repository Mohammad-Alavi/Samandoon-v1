<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\KYCPhoto;
use App\Ship\Parents\Transformers\Transformer;
use Vinkla\Hashids\Facades\Hashids;

class KYCPhotoTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param KYCPhoto $entity
     *
     * @return array
     */
    public function transform(KYCPhoto $entity)
    {
        $response = [
            'object' => 'KYCPhoto',
            'msg' => $entity->msg,
            'id' => $entity->getHashedKey(),
            'file_name' => $entity->file_name,
            'image' => config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $entity->ngo->getFirstMediaUrl($entity->label)),
            'label' => $entity->label,
            'status' => $entity->status,
            'text' => $entity->text,
            'ngo_id' => Hashids::encode($entity->ngo_id),
            'admin_id' => Hashids::encode($entity->admin_id)
//            'created_at' => $entity->created_at,
//            'updated_at' => $entity->updated_at,
//            'view_kyc_photo' => [
//                'href' => $entity->id ? 'v1/ngo/kycphoto/' . $entity->getHashedKey() : null,
//                'method' => 'GET'
//            ],
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
