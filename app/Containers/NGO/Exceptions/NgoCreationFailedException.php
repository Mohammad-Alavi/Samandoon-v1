<?php

namespace App\Containers\NGO\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class NgoCreationFailedException extends Exception
{
    public $httpStatusCode = Response::HTTP_CONFLICT;

    public $message = 'Failed creating new NGO.';
}
