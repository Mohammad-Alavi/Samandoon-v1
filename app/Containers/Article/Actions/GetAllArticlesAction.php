<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllArticlesAction extends Action
{
    public function run(Request $request)
    {
        $ngoIdmethodWithParams = $request->has('ngo_id') ? ['ngo_id' => [$request->ngo_id]] : null;

        is_null($ngoIdmethodWithParams) ?
            $articles = $this->call('Article@GetAllArticlesTask', [], [
                ['orderBy' => [$request->orderBy, $request->sortedBy]]
            ]) :
            $articles = $this->call('Article@GetAllArticlesTask', [], [
                ['orderBy' => [$request->orderBy, $request->sortedBy]],
                $ngoIdmethodWithParams
            ]);
        return $articles;
    }
}
