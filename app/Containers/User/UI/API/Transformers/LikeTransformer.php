<?php

namespace App\Containers\User\UI\API\Transformers;

class LikeTransformer
{
    public function transform($likePayload)
    {
                if ($likePayload['is_liked']) {
                    $msg = class_basename($likePayload['user']) . ' (' . $likePayload['user']->getHashedKey() . ') liked ' . class_basename($likePayload['target']) . ' (' . $likePayload['target']->getHashedKey() . ').';
                }
                else {
                    $msg = class_basename($likePayload['user']) . ' (' . $likePayload['user']->getHashedKey() . ') unliked ' . class_basename($likePayload['target']) . ' (' . $likePayload['target']->getHashedKey() . ').';
                }
            $response = [
                'msg' => $msg,
                'is_liked' => $likePayload['is_liked'],
            ];
        return $response;
    }
}
