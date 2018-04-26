<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Containers\User\Models\Feed;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class GetUserFeedTask extends Task
{
    public function run(User $user, $limit)
    {
        // get feed
        $articles = [];
        $ngos = $user->subscriptions(Ngo::class)->get();
        foreach ($ngos as $ngo) {
            foreach ($ngo->articles()->orderBy('created_at', 'desc')->get() as $article) {
                array_push($articles, $article);
            }
        }
        return $this->paginate($articles, $limit ? $limit : 10);
    }

    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
