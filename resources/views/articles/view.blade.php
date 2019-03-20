<div class="sidebar-sticky" id="newsPanel">
    <ul class="nav flex-column">
        <li class="nav-item">
            @if(isset($a->pic_path))<img src="{{ url("upload/{$a->pic_path}") }}">@endif
        </li>
        <li class="nav-item">
            <h3>{{$article->title}}</h3>
        </li>
        <li class="nav-item">
            <p>{{$article->text}}</p>
        </li>
        <li class="nav-item">
            <small>Posted:{{$article->posted_at}}</small>
            @if(isset($a->updated_at) and $a->updated_at != $a->created_at)<small>Update:{{$article->updated_at}}</small>@endif
        </li>
    </ul>
</div>