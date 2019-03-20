@php ($categories = \App\Categories::all())
<div class="container">
    <header class="blog-header py-3 bg-dark">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-white text-uppercase" href="{{route('Welcome')}}">This is News</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-white" href="{{route('categories.index')}}">Categories</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2" style="background-color: slategray;">
        <nav class="nav d-flex justify-content-between">
            @foreach($categories as $c)
                <a class="p-2 text-white" href="#">{{$c->name}}</a>
            @endforeach
        </nav>
    </div>
</div>