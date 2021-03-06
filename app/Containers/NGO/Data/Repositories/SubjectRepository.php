<?php

namespace App\Containers\NGO\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SubjectRepository
 */
class SubjectRepository extends Repository
{

    /**
     * The Container Name.
	 * Must be set when the model has a different name than the container
	 */
    protected $container = 'NGO';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
