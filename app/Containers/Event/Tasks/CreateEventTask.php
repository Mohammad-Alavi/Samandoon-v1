<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
//use DateTime;
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

            // Add activity
//            $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
//            $userFeed = $client->feed('ngo', $event->ngo->id);
//            $now = new DateTime();
//            $feedData = [
//                'actor' => 'App\Containers\NGO\Models\NGO:' . $event->ngo->getHashedKey(),
//                'verb' => "created event",
//                'object' => 'App\Containers\Event\Models\Event:' . $event->getHashedKey(),
//                'foreign_id' => 'App\Containers\Event\Models\Event:' . $event->getHashedKey(),
//                'time' => $now->format(DATE_ISO8601)
//            ];
//            $userFeed->addActivity($feedData);

            return $event;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Event');
        }
    }
}