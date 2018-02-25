<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
//use Berkayk\OneSignal\OneSignalClient;
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
            $client = new Client(config('getStream.stream_api_key'), config('getStream.stream_api_secret'));
            $userFeed = $client->feed('ngo', $event->ngo->getHashedKey());
            $feedData = [
                'actor' => 'NGO:' . $event->ngo->getHashedKey(),
                'verb' => "create",
                'object' => 'Event:' . $event->getHashedKey(),
                'foreign_id' => 'Event:' . $event->getHashedKey(),
                'time' => Carbon::now()->toIso8601String()
            ];
            $userFeed->addActivity($feedData);

//            $OneSignalClient = new OneSignalClient(
//                config('onesignal.app_id'),
//                config('onesignal.rest_api_key'),
//                config('onesignal.user_auth_key'));
//
//            $OneSignalClient->sendNotificationUsingTags(
//                'Ngo Created Event',
//                array(["field" => "email", "relation" => "=", "value" => "m.alavi1989@gmail.com"]), 'www.samandoon.ngo/event/' . $event->id);

            return $event;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Event');
        }
    }
}