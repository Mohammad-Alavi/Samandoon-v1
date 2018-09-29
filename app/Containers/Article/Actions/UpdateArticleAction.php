<?php

namespace App\Containers\Article\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Article\Models\Article;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateArticleAction extends Action
{
    public function run(Request $request): Article
    {
        Apiato::call('Article@FindArticleByIdTask', [$request->id]);

        $sanitizedData = $request->sanitizeInput([
            'title',
            'text',
            'article_image'
        ]);

        if (array_key_exists('title', $sanitizedData)) {
            $sanitizedData['title'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($sanitizedData['title']);
        }
        if (array_key_exists('text', $sanitizedData)) {
            $sanitizedData['text'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($sanitizedData['text']);
        }

        return Apiato::call('Article@UpdateArticleTask', [$request->id, $sanitizedData]);
    }
}
