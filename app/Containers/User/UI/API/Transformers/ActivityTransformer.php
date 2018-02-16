<?php
/**
 * Created by PhpStorm.
 * User: Melkor
 * Date: 2/17/2018
 * Time: 1:57 AM
 */

namespace App\Containers\User\UI\API\Transformers;


class ActivityTransformer
{
    public function transformer($activities)
    {
        $activity = [];
        foreach ($activities['results'] as $activityArray) {

            // extract actor type (model) from activity array
            if (stripos($activityArray['actor'], 'ngo:') !== false) {
                $actorType = 'ngo';
            } elseif (stripos($activityArray['actor'], 'user:') !== false) {
                $actorType = 'user';
            }

            // extract object type (model) from activity array
            if (stripos($activityArray['object'], 'event:') !== false) {
                $objectType = 'event';
            } elseif (stripos($activityArray['object'], 'article:') !== false) {
                $objectType = 'article';
            }

            $activityTransformer = [
                'activityId' => $activityArray['id'],
                'actorType' => $actorType,
                'actorId' => substr($activityArray['actor'], stripos($activityArray['actor'], ':') + 1, 16),
                'objectType' => $objectType,
                'objectId' => substr($activityArray['object'], stripos($activityArray['object'], ':') + 1, 16),
                'targetType' => null,
                'targetId' => null,
                'verb' => $activityArray['verb'],
                'time' => $activityArray['time']
            ];
            array_push($activity, $activityTransformer);
        }

        return $activity;
    }
}