<?php

namespace App\Containers\User\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;
use GetStream\Stream\Client;

class UnfollowFeedTask extends Task
{
    public function run(DataTransporter $dataTransporter)
    {
        $client = new Client(config('getStream.stream_api_key'), config('getStream.stream_api_secret'));
        $feed = $client->feed($dataTransporter->feed, $dataTransporter->id);
        return $feed->unfollow($dataTransporter->target_feed, $dataTransporter->target_id);
    }
}
