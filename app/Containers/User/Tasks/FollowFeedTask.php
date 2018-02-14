<?php

namespace App\Containers\User\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;
use GetStream\Stream\Client;

class FollowFeedTask extends Task
{
    public function run(DataTransporter $dataTransporter)
    {
        $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
        $feed = $client->feed($dataTransporter->feed, $dataTransporter->id);
        $feed->follow($dataTransporter->target_feed, $dataTransporter->target_id);
    }
}
