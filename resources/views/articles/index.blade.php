<main role="main" class="container">
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        Latest news
    </h3>
    @foreach($articles as $a)
        <div class="row">
            <div class="col-md-12 blog-main">
                <div class="blog-post">
                    <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3 text-center bg-light">
                        @if(isset($a->pic_path))<img src="{{ url("upload/{$a->pic_path}") }}">@endif
                        <div class="col-md-6 p-lg-1 mx-auto my-3">
                            <h2 class="blog-post-title">{{$a->title}}</h2>
                        </div>
                        <p>Article : {{$a->text}}</p>
                        <br>
                        <small> Posted in: {{$a->created_at}}</small>
                        <br>
                        @if(isset($a->updated_at) and $a->updated_at != $a->created_at)
                            <small> Updated in: {{$a->updated_at}}</small> @endif
                        <br>
                        <button class='btn btn-default btn-xs' id="show"><i class="glyphicon glyphicon-eye-open"
                                                                            id="showId">{{$a->id}}</i></button>
                        {!! Form::open(['route' => ['articles.destroy', $a->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('articles.edit', [$a->id]) !!}" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <button type="button" class="btn btn-primary"><a href="{{ route('article.create') }}" class="text-white">Add</a>
    </button>
</main>