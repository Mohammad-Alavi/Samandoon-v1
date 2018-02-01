<?php

namespace App\Containers\Event\UI\API\Controllers;

use App\Containers\Event\UI\API\Requests\AddImageToEventRequest;
use App\Containers\Event\UI\API\Requests\CreateEventRequest;
use App\Containers\Event\UI\API\Requests\DeleteEventRequest;
use App\Containers\Event\UI\API\Requests\GetEventRequest;
use App\Containers\Event\UI\API\Requests\ListAllEventsRequest;
use App\Containers\Event\UI\API\Requests\SearchEventsRequest;
use App\Containers\Event\UI\API\Requests\UpdateEventRequest;
use App\Containers\Event\UI\API\Transformers\CreateEventTransformer;
use App\Containers\Event\UI\API\Transformers\EventTransformer;
use App\Containers\Event\UI\API\Transformers\ImageTransformer;
use App\Containers\Event\UI\API\Transformers\UpdateEventTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Transporters\DataTransporter;

class Controller extends ApiController
{
    public function listAllEvents(ListAllEventsRequest $request)
    {
        $events = $this->call('Event@ListEventsAction', [$request]);
        return $this->transform($events, EventTransformer::class);
    }

    public function getEvent(GetEventRequest $request)
    {
        $event = $this->call('Event@GetEventAction', [$request]);
        $event->msg = 'Found Event';
        return $this->transform($event, EventTransformer::class);
    }

    public function createEvent(CreateEventRequest $request)
    {
        $event = $this->call('Event@CreateEventAction', [$request]);
        $event->msg = 'Event created';
        return $this->transform($event, EventTransformer::class);
    }

    public function updateEvent(UpdateEventRequest $request)
    {
        $event = $this->call('Event@UpdateEventAction', [$request]);
        $event->msg = 'Event updated';
        return $this->transform($event, EventTransformer::class);
    }

    public function deleteEvent(DeleteEventRequest $request)
    {
        $this->call('Event@DeleteEventAction', [$request]);
        return $this->noContent();
    }

    public function searchEvents(SearchEventsRequest $request)
    {
        $events = $this->call('Event@SearchEventsAction', [new DataTransporter($request)]);
        $events->msg = 'Events found';
        return $this->transform($events, EventTransformer::class);
    }
}