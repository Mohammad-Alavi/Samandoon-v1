<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
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
////            $followersChunk = $event->ngo->subscribers()->get()->chunk(1);
//            OneSignal::sendNotificationUsingTags(
//                $event->ngo->name . 'یک رخداد جدید ساخت',
//                array(["field" => "email", "relation" => "=", "value" => "m.alavi1989@gmail.com"]), 'www.samandoon.ngo/event/' . $event->id);
////                array(["field" => "tag", 'key' => 'gender', "relation" => "=", "value" => "male"]), 'www.samandoon.ngo/event/' . $event->id);

            return $event;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Event' . $exception->getMessage());
        }
    }
}