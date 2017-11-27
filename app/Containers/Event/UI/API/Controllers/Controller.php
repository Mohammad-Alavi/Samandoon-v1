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
        $event = $this->call('Event@DeleteEventAction', [$request]);
        return $this->deleted($event);
    }

    public function addImageToEvent(AddImageToEventRequest $request)
    {
        $image = $this->call('Event@AddImageToEventAction', [$request]);
        $image->msg = 'Found Image';
        return $this->transform($image, ImageTransformer::class);
    }
}