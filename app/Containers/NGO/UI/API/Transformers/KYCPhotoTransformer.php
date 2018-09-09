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
//            'file_name' => $entity->file_name,
            'image' => config('samandoon.storage_path') . str_replace(config('samandoon.storage_path_replace'), '', $entity->ngo->getMedia($entity->label)->last()->getUrl()),
            'label' => $entity->label,
            'status' => $entity->status,
            'text' => is_null($entity->text) ? '' : $entity->text,
            'ngo_id' => Hashids::encode($entity->ngo_id),
            'admin_id' => Hashids::encode($entity->admin_id),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
            'readable_created_at' => $entity->created_at ? $entity->created_at->diffForHumans() : null,
            'readable_updated_at' => $entity->updated_at ? $entity->updated_at->diffForHumans() : null,
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
