<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllArticlesAction extends Action
{
    public function run(Request $request)
    {
        return $this->call('Article@GetAllArticlesTask', [], [
            ['orderBy' => [$request->orderBy, $request->sortedBy]],
        ]);
    }
}
