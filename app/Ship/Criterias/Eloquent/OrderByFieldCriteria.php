<?php

namespace App\Ship\Criterias\Eloquent;

use App\Ship\Parents\Criterias\Criteria;
use Illuminate\Support\Str;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

class OrderByFieldCriteria extends Criteria
{
    private $field;
    private $sortOrder;

    public function __construct($field, $sortOrder)
    {
        $field = Str::lower($field);
        $sortOrder = Str::lower($sortOrder);
        empty($field) ? $this->field = 'created_at' : $this->field = $field;
        empty($sortOrder) ? $this->sortOrder = 'asc' : $this->sortOrder = $sortOrder;

//        $availableDirections = [
//            'asc',
//            'desc',
//        ];

//        // check if the value is available, otherwise set "default" sort order to ascending!
//        if (!array_search($sortOrder, $availableDirections)) {
//            $sortOrder = 'asc';
//        }

//        $this->sortOrder = $sortOrder;
    }

    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->orderBy($this->field, $this->sortOrder);
    }
}