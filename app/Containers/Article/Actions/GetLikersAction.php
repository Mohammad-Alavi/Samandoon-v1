<?php

namespace App\Containers\Article\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetLikersAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $field = '';
        $value = '';
        if($dataTransporter->exists('orderBy') && $dataTransporter->exists('sortedBy')) {
            $field = $dataTransporter->orderBy;
            $value = $dataTransporter->sortedBy;
        }

        $article = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);

        $likers = Apiato::call('Article@GetLikersTask', [$article, $field, $value]);

        return $likers;
    }
}
