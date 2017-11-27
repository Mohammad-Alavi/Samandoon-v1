<?php

namespace App\Containers\Event\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class UserNgoDontHaveEventsException extends Exception
{
    public $httpStatusCode = Response::HTTP_NOT_FOUND;

    public $message = 'User doesn\'t have any events attached to its ngo';
}
