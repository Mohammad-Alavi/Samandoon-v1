<?php

namespace App\Containers\Event\UI\API\Controllers;

use App\Containers\Event\Actions\CreateEventAction;
use App\Containers\Event\Actions\DeleteEventAction;
use App\Containers\Event\Actions\GetEventAction;
use App\Containers\Event\Actions\ListEventsAction;
use App\Containers\Event\Actions\UpdateEventAction;
use App\Containers\Event\UI\API\Requests\AddImageToEventRequest;
use App\Containers\Event\UI\API\Requests\CreateEventRequest;
use App\Containers\Event\UI\API\Requests\DeleteEventRequest;
use App\Containers\Event\UI\API\Requests\GetEventRequest;
use App\Containers\Event\UI\API\Requests\ListAllEventsRequest;
use App\Containers\Event\UI\API\Requests\UpdateEventRequest;
use App\Containers\Event\UI\API\Transformers\CreateEventTransformer;
use App\Containers\Event\UI\API\Transformers\EventTransformer;
use App\Containers\Event\UI\API\Transformers\ImageTransformer;
use App\Containers\Event\UI\API\Transformers\UpdateEventTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Parents\Requests\Request;

class Controller extends ApiController
{
    /**
     * Show all events
     * @param ListAllEventsRequest|Request $request
     * @return mixed
     */
    public function listAllEvents(ListAllEventsRequest $request) {

        $events = $this->call('Event@ListEventsAction', [$request]);
        return $this->transform($events, EventTransformer::class);
    }

    /**
     * Show one event
     * @param GetEventRequest|Request $request
     * @return mixed
     */
    public function getEvent(GetEventRequest $request) {

        $event = $this->call('Event@GetEventAction', [$request]);
        return $this->transform($event, EventTransformer::class);
    }

    /**
     * Add a new event
     * @param CreateEventRequest|Request $request
     * @return mixed
     */
    public function createEvent(CreateEventRequest $request) {

        $event = $this->call('Event@CreateEventAction', [$request]);
        return $this->transform($event, CreateEventTransformer::class);
    }

    /**
     * Update a given event
     * @param UpdateEventRequest|Request $request
     * @return mixed
     */
    public function updateEvent(UpdateEventRequest $request) {

        $event = $this->call('Event@UpdateEventAction', [$request]);
        return $this->transform($event, UpdateEventTransformer::class);
    }

    /**
     * Delete a given event
     * @param DeleteEventRequest|Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteEvent(DeleteEventRequest $request) {

        $event = $this->call('Event@DeleteEventAction', [$request]);
        return $this->deleted($event);
    }

    public function addImageToEvent(AddImageToEventRequest $request) {
        $image = $this->call('Event@AddImageToEventAction', [$request]);
        return $this->transform($image, ImageTransformer::class);
    }
}
