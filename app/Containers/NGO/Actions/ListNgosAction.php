<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListNgosAction extends Action
{
    public function run(Request $request)
    {
        return $this->call('NGO@ListNgosTask', [], [
            ['orderBy' => [$request->orderBy, $request->sortedBy]],
        ]);
    }
}