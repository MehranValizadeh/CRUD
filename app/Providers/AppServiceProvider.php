<?php

namespace App\Providers;

use App\Repositories\articles\ArticleInterface;
use App\Repositories\articles\articles;
use Illuminate\Support\ServiceProvider;
use JasonGuru\LaravelMakeRepository\Repository\RepositoryContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ArticleInterface::class , articles::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
