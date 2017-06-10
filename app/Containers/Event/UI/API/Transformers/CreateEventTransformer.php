<?php

namespace App\Containers\Event\UI\API\Transformers;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Transformers\Transformer;
class CreateEventTransformer extends Transformer
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
     * @param Event $event
     * @return array
     * @internal param Event $entity
     */
    public function transform(Event $event)
    {
        $eventTransformer = new EventTransformer();

        $response = [
            'msg' => 'Event created',
            'event' => $eventTransformer->transform($event),
            'view_event' => [
                'href'  =>  'v1/event/' . $event->id,
                'method'    =>  'GET'
            ],
        ];

        return $response;
    }
}
