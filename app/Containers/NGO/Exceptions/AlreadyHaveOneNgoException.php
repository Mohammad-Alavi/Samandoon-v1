<?php

namespace App\Containers\NGO\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class AlreadyHaveOneNgoException extends Exception
{
    public $httpStatusCode = Response::HTTP_CONFLICT;

    public $message = 'User already have a NGO in the database';
}
