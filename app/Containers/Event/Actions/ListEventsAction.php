<?php

namespace App\Containers\Event\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListEventsAction extends Action
{
    public function run(Request $request)
    {
        $whereInMethod = $request->has('field') && $request->has('value') ? ['where_in' => [$request->field, $request->value]] : [''];
        $withNgoIdMethod = $request->has('ngo_id') ? ['ngo_id' => [$request->ngo_id]] : [''];

        $events = $this->call('Event@ListEventsTask', [], [
            ['orderBy' => [$request->orderBy, $request->sortedBy]],
            $withNgoIdMethod,
            $whereInMethod
        ]);
        return $events;
    }
}
