<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;

class SearchArticlesTask extends Task
{
    public function run(DataTransporter $data)
    {
        return Article::Search($data->q)->paginate($data->limit);
    }
}
