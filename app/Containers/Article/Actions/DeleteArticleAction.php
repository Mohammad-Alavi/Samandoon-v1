<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class DeleteArticleAction extends Action
{
    public function run(DataTransporter $request)
    {
        return $this->call('Article@DeleteArticleTask', [$request]);
    }
}
