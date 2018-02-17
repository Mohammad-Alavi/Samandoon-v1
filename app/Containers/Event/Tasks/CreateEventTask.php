<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use DateTime;
use Exception;
use GetStream\Stream\Client;
use Illuminate\Support\Carbon;

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
            $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
            $userFeed = $client->feed('ngo', $event->ngo->getHashedKey());
            $feedData = [
                'actor' => 'App\Containers\NGO\Models\NGO:' . $event->ngo->getHashedKey(),
                'verb' => "create",
                'object' => 'App\Containers\Event\Models\Event:' . $event->getHashedKey(),
                'foreign_id' => 'App\Containers\Event\Models\Event:' . $event->getHashedKey(),
                'time' => Carbon::now()->toIso8601String()
            ];
            $userFeed->addActivity($feedData);

            return $event;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Event');
        }
    }
}