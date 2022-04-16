@extends('article::layouts.master')

@section('content')

    <div class="container">
        <div class="row text-center mt-3">
            <h3>نوپایار</h3>
            <p class="text-secondary">
                مقالات شرکت نوپایار
            </p>
        </div>
        <div class="text-center">
            <a href="{{route('articles.create')}}" class="btn btn-outline-primary">
                + افزودن
            </a>
        </div>
        <livewire:search-article />
    </div>
@endsection
