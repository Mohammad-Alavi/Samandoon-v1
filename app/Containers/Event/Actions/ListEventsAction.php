<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListEventsAction extends Action
{
    public function run(Request $request)
    {
        $whereInMethod = $request->has('field') && $request->has('value') ? ['where_in' => [$request->field, $request->value]] : [''];
        $withNgoIdMethod = $request->has('ngo_id') ? ['ngo_id' => [$request->ngo_id]] : [''];

        $events = Apiato::call('Event@ListEventsTask', [], [
            //call ordeyBy method by default
            //if there is no parameters some default params will be used instead
            ['orderBy' => [$request->orderBy, $request->sortedBy]],
            $withNgoIdMethod,
            $whereInMethod
        ]);
        return $events;
    }
}
