<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteFileTask extends Task
{
    public function run($request, $media)
    {
        try {
            $media->delete();
            return new JsonResponse('Media (' . $request->resource_name . ') deleted.', 200);
        }
        catch (Exception $exception)
        {
            throw new DeleteResourceFailedException('Failed to delete Media.');
        }
    }
}
