<?php

namespace App\Containers\NotificationCenter\UI\API\Transformers;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\User\Models\User;
use Vinkla\Hashids\Facades\Hashids;

class NotificationTransformer
{
    public function transform($notifications)
    {
        $tempArray = [];

        foreach ($notifications as $notification) {
            $response = [
                'id' => $notification->id,
                'type' => $notification->type,
                'doer_id' => Hashids::encode($notification->data['doer_id']),
                'doer_name' => $notification->data['doer_name'],
                'object_id' => Hashids::encode($notification->data['object_id']),
                'object_text' => $notification->data['object_text'],
                'read_at' => $notification->read_at,
                'created_at' => $notification->created_at,
                'updated_at' => $notification->updated_at,
            ];

            array_push($tempArray, $response);
        }

        $paginatedDataArray = $notifications->toArray();

        $data = [
            'data' => $tempArray,
            'meta' => [
                'pagination' => [
                    'per_page' => $paginatedDataArray['per_page'],
                    'current_page' => $paginatedDataArray['current_page'],
                    'total_pages' => $paginatedDataArray['last_page'],
                ]
            ]
        ];

        return $data;
    }
}
