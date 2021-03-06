<?php

namespace App\Containers\Article\Actions;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class CreateArticleAction extends Action
{
    public function run(DataTransporter $data): Article
    {
        // throw 404 exception if user doesn't have a ngo
        $ngo = $this->call('Authentication@GetAuthenticatedUserTask')->ngo;
        throw_unless($ngo->id, NotFoundException::class, 'User don\'t have a NGO');

        $data->ngo_id = $ngo->id;

        $sanitizedData = $data->sanitizeInput([
            'title',
            'text',
            'article_image',
            'ngo_id'
        ]);

        if (array_key_exists('text', $sanitizedData)) {
            $sanitizedData['text'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($sanitizedData['text']);
        }
        if (array_key_exists('title', $sanitizedData)) {
            $sanitizedData['title'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($sanitizedData['title']);
        }

        return $this->call('Article@CreateArticleTask', [$sanitizedData]);
    }
}
