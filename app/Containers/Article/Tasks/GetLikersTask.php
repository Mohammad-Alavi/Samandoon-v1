<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Str;

class GetLikersTask extends Task
{
    private $field;
    private $sortOrder;

    public function run(Article $article, $field, $sortOrder)
    {
        $field = Str::lower($field);
        $sortOrder = Str::lower($sortOrder);
        empty($field) ? $this->field = 'created_at' : $this->field = $field;
        empty($sortOrder) ? $this->sortOrder = 'asc' : $this->sortOrder = $sortOrder;
        return $article->likers()->orderBy($this->field, $this->sortOrder)->paginate(10);
    }
}
