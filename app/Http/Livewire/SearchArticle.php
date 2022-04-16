<?php

namespace App\Http\Livewire;

use App\Repositories\articles\ArticleInterface;
use Livewire\Component;

class SearchArticle extends Component
{

    protected $repository;

    public $search = "";

    public function boot(ArticleInterface $repo)
    {
        $this->repository = $repo;
    }

    public function render()
    {
        sleep(1);

        $articles = $this->repository->where('title' , "%".$this->search."%" , 'like')->get();
        return view('livewire.search-article' , compact('articles'));
    }
}
