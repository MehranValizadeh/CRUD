<?php

namespace App\Repositories\articles;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use JasonGuru\LaravelMakeRepository\Repository\RepositoryContract;
use Modules\Article\Entities\Article;

//use Your Model

/**
 * Class articles.
 */
class articles extends BaseRepository implements ArticleInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Article::class;
    }
}
