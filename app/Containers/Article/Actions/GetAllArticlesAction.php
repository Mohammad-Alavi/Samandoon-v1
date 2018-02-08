<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllArticlesAction extends Action
{
    public function run(Request $request)
    {
        $whereInMethod = $request->has('field') && $request->has('value') ? ['where_in' => [$request->field, $request->value]] : [''];
        $withNgoIdMethod = $request->has('ngo_id') ? ['ngo_id' => [$request->ngo_id]] : [''];

        $articles = $this->call('Article@GetAllArticlesTask', [], [
            ['orderBy' => [$request->orderBy, $request->sortedBy]],
            $withNgoIdMethod,
            $whereInMethod
        ]);

        return $articles;
    }
}
