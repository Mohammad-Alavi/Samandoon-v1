<?php

namespace App\Containers\Event\UI\API\Transformers;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Ship\Parents\Transformers\Transformer;
use Illuminate\Support\Carbon;

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
        'ngo'
    ];

    public function transform(Event $event)
    {
        $response = [
            'msg' => $event->msg,
            'object' => [
                'object' => 'Event',
                'id' => $event->getHashedKey(),
                'title' => $event->title,
                'description' => $event->description,
                'event_image' => empty($event->getFirstMediaUrl('event_image')) ? null :
                    'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $event->getFirstMediaUrl('event_image')),
                'location' => $event->location,
                'ngo_id' => $event->ngo->getHashedKey(),
                'event_date' => $event->event_date,
                'created_at' => $event->created_at,
                'updated_at' => $event->updated_at,
                'readable_created_at' => $event->created_at->diffForHumans(),
                'readable_updated_at' => $event->updated_at->diffForHumans(),
            ],
            'view_event' => [
                'href' => 'v1/ngo/event/' . $event->getHashedKey(),
                'method' => 'GET'
            ],
        ];

        $response = $this->ifAdmin([
            'real_id' => $event->id,
        ], $response);

        return $response;
    }

    public function includeNGO(Event $event)
    {
        // use `item` with single relationship
        return $this->item($event->ngo, new NgoTransformer());
    }
}
