<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Str;

class GetAllCommentsTask extends Task
{
    private $field;
    private $sortOrder;

    public function run(Article $article, $field, $sortOrder)
    {
        $field = Str::lower($field);
        $sortOrder = Str::lower($sortOrder);
        empty($field) ? $this->field = 'created_at' : $this->field = $field;
        empty($sortOrder) ? $this->sortOrder = 'asc' : $this->sortOrder = $sortOrder;
        $comments =  $article->comments()->orderBy($this->field, $this->sortOrder)->paginate(10);
        $data = [
            'comment' => $comments,
            'ngo'   => $article->ngo
        ];
        return $data;
    }
}
