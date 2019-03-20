@extends('app')

@section('content')
<div class="container">
    <header class="blog-header py-3 bg-dark">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center"></div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-white" href="#">This is News</a>
            </div>
            <div class="col-4 text-center"></div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach($categories as $c)
                <a class="p-2 text-muted" href="#">{{$c->name}}</a>
            @endforeach
        </nav>
    </div>

</div>

@include('articles.index')
@endsection

@section('footer')
<footer class="blog-footer">
    <div class="text-center">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </div>
</footer>
@endsection