<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\Subject;
use App\Ship\Parents\Transformers\Transformer;

class SubjectTransformer extends Transformer
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
     * @param Subject $entity
     *
     * @return array
     */
    public function transform(Subject $entity)
    {
        $response = [
            'msg' => 'Found Subject',
            'object' => [
                'object' => 'Subject',
                'id' => $entity->id,
                'subject' => $entity->subject,
            ]
        ];
        return $response;
    }
}
