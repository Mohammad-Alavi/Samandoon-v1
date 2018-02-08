<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class SearchArticlesAction extends Action
{
    public function run(DataTransporter $data)
    {
        return $this->call('Article@SearchArticlesTask', [$data]);
    }
}
