<?php

namespace App\Containers\Article\Actions;

use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class CreateArticleAction extends Action
{
    public function run(DataTransporter $data): Article
    {
        $ngo = $this->call('Authentication@GetAuthenticatedUserTask')->ngo;
        if (!$ngo) {
            throw new NotFoundException('User don\'t have a NGO.');
        }

        $data->ngo_id = $ngo->id;

        $sanitizedData = $data->sanitizeInput([
            'title',
            'text',
            'article_image',
            'ngo_id'
        ]);

        return $this->call('Article@CreateArticleTask', [$sanitizedData]);
    }
}
