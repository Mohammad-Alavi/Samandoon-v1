<?php

namespace App\Containers\Event\UI\API\Transformers;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Transformers\Transformer;

class EventTransformer extends Transformer
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
     */
    public function transform(Event $event)
    {
        $response = [
            'object' => 'Event',
            'id' => $event->getHashedKey(),
            'title' => $event->title,
            'description' => $event->description,
            'event_date' => $event->event_date,
            'photo_path' => $event->photo_path,
            'created_at'           => $event->created_at,
            'updated_at'           => $event->updated_at,
            'readable_created_at'  => $event->created_at->diffForHumans(),
            'readable_updated_at'  => $event->updated_at->diffForHumans(),
        ];

        $response = $this->ifAdmin([
            'real_id'    => $event->id,
        ], $response);

        return $response;
    }
}
