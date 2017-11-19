<?php

namespace App\Containers\Event\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class UserDontHaveNgoException extends Exception
{
    public $httpStatusCode = Response::HTTP_NOT_FOUND;

    public $message = 'User don\'t have an NGO.';

    public $code = 0;
}
