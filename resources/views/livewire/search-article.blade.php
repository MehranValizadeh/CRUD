<div class="row mt-4 mx-auto w-sm-100">
    <div class="form-group has-search">
        <input wire:model="search" type="text" class="form-control" placeholder="جستجو کنید ..."/>
        <div class="row my-5 pt-3">
            @if($articles->count() == 0)
                <span class="badge text-dark">موردی یافت نشد ...</span>
            @endif
            @foreach($articles as $article)
                <div class="col-12 col-md-4 my-2 mx-1">
                    <div class="card mx-auto w-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">{{$article->title ?? ""}}</h5>
                                <form action="{{route('articles.destroy' , $article->id)}}" method="post"
                                      onclick="return confirm('آیا از حذف این مورد اطمینان دارید ؟ ')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn">
                                        <i class="fa fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                            <p class="card-text text-justify pt-3">
                                {{$article->body}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div wire:loading wire:target="search">

            در حال جستجو ...

        </div>
    </div>
</div>

