<?php

namespace App\Containers\Event\UI\API\Transformers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Event\Models\Event;
use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Ship\Parents\Transformers\Transformer;
use Illuminate\Support\Facades\App;

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
        'NGO'
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
                'event_date' => $event->event_date,
                'location' => $event->location,
                'banner_image' => $event->banner_image,
                'created_at' => $event->created_at,
                'updated_at' => $event->updated_at,
                'readable_created_at' => $event->created_at->diffForHumans(),
                'readable_updated_at' => $event->updated_at->diffForHumans(),
            ],
            'view_event' => [
                'href' => 'v1/event/' . $event->getHashedKey(),
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
