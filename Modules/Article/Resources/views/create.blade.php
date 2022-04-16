@extends('article::layouts.master')


@section('content')

    <div class="container">
        <h3 class="text-center mt-5">+ ایجاد </h3>

        <div class="row mt-3 mx-auto w-sm-100">
            <form action="{{route('articles.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>عنوان (اختیاری)</label>
                    <input type="text" class="form-control mt-1" name="title">
                </div>
                <div class="form-group mt-2">
                    <label>محتوا</label>
                    @error('body')
                    <p class="text-danger d-inline">لطفا محتوا بنویسید !</p>
                    @enderror
                    <textarea name="body" id="" cols="30" rows="10" class="form-control mt-1"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">افزودن</button>
            </form>

        </div>
    </div>
@endsection
