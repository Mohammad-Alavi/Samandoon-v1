<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
//use GetStream\Stream\Client;

class CreateEventTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data): Event
    {
        try {
            $event = $this->repository->create($data);
            if (array_key_exists('event_image', $data)) {
                $event->addMediaFromRequest('event_image')->toMediaCollection('event_image');
            }
//            $client = new Client('d4kxkrumnn73', 'jxjgfdpv3dw7fqq8brsfznsfkf7ty78gmpuj4stdsgeu4duem5wn9e9e242qx3fa');
//            $client->setLocation('us-east');
//            $userFeed = $client->feed('ngo', $event->ngo->id);
//            $feedData = [
//                "actor" => 'App\Containers\NGO\Models\NGO:' . $event->ngo->id,
//                "verb" => "created event",
//                "object" => 'App\Containers\Event\Models\Event:' . $event->id,
//                "foreign_id" => 'App\Containers\Event\Models\Event:' . $event->id,
//            ];
//            $userFeed->addActivity($feedData);
//            info($userFeed->getActivities());
            return $event;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Event');
        }
    }
}