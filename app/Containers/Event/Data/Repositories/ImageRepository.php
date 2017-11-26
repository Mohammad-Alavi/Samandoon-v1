<?php

namespace App\Containers\Event\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ImageRepository
 */
class ImageRepository extends Repository
{

    /**
     * The Container Name.
	 * Must be set when the model has a different name than the container
	 */
    protected $container = 'Event';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
