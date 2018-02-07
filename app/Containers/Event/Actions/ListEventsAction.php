<?php

namespace App\Containers\Event\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListEventsAction extends Action
{
    public function run(Request $request)
    {
        $ngoIdmethodWithParams = $request->has('ngoId') ? ['ngoId' => [$request->ngoId]] : null;

        is_null($ngoIdmethodWithParams) ?
            $events = $this->call('Event@ListEventsTask', [], [
                ['orderBy' => [$request->orderBy, $request->sortedBy]]
            ]) :
            $events = $this->call('Event@ListEventsTask', [], [
                ['orderBy' => [$request->orderBy, $request->sortedBy]],
                $ngoIdmethodWithParams
            ]);
        return $events;
    }
}
