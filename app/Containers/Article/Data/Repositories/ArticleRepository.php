<?php

namespace App\Containers\Article\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ArticleRepository extends Repository
{

    protected $fieldSearchable = [
        'id' => '=',
        'title' => 'like'
    ];

}
