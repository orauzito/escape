<main role="main" class="container">
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        Latest news
    </h3>
    @foreach($articles as $a)
        <div class="row">
            <div class="col-md-12 blog-main">
                <div class="blog-post">
                    <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3 text-center bg-light">
                        <div class="col-md-5 p-lg-5 mx-auto my-5">
                            <h2 class="blog-post-title">{{$a->title}}</h2>
                            <p class="blog-post-meta">{{$a->created_at}}</p>
                            @if(isset($a->updated_at)) <p class="blog-post-meta">{{$a->updated_at}}</p> @endif
                        </div>
                        <img src="{{$a->pic_path}}">
                        <p>Article : {{$a->text}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <button type="button" class="btn btn-primary"><a href="{{ route('article.create') }}" class="text-white">Add</a></button>
</main>