<?php

namespace App\Containers\Event\UI\API\Transformers;

use App\Containers\Event\Models\Image;
use App\Ship\Parents\Transformers\Transformer;

class ImageTransformer extends Transformer
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

    public function transform(Image $entity)
    {
        $response = [
            'msg' => $entity->msg,
            'object' => [
                'object' => 'Image',
                'id' => $entity->getHashedKey(),
                'image' => $entity->image,
                'event_id' => $entity->event_id,
                'created_at' => $entity->created_at,
                'updated_at' => $entity->updated_at,

            ],
        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
