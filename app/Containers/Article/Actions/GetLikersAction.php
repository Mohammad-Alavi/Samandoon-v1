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
        $article = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);
        return Apiato::call('Article@GetLikersTask', [$article]);
    }
}
