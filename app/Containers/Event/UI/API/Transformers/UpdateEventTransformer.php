<?php

namespace App\Containers\Event\UI\API\Transformers;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Transformers\Transformer;

class UpdateEventTransformer extends Transformer
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
     * @internal param Event $event
     */
    public function transform(Event $event)
    {
        $eventTransformer = new EventTransformer();

        $response = [
            'msg' => 'Event updated',
            'event' => $eventTransformer->transform($event),
            'view_event' => [
                'href'  =>  'v1/event/' . $event->getHashedKey(),
                'method'    =>  'GET'
            ],
        ];

        return $response;
    }
}
