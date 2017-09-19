<?php

namespace App\Containers\NGO\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class DontHaveAccessToNgoException extends Exception
{
    public $httpStatusCode = Response::HTTP_UNAUTHORIZED;

    public $message = 'You don\'t have access to manage this ngo.';
}
