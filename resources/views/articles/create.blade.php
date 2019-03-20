@extends('app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="text-center col-10">
                {!! Form::open(['route' => 'articles.store', 'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'id'=>'title']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('text', 'Text:') !!}
                    {!! Form::text('text', null, ['class' => 'form-control','id'=>'text']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('pic_path', 'Select a picture',['class'=>'control-label btn btn-success btn-md', 'for'=>'files']) !!}
                    {!! Form::file('pic_path', ['style'=>'display:none']) !!}
                </div>
                <div class="form-group">
                    <b>Category:</b>
                    <select name="cat_id" class="dropdown form-control btn-md" id="cat_id">
                        @if ($categories == null)
                            <option value="0"><b>Ainda não existem categorias cadastrados!</b></option>
                        @else
                            @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                    <a href="{!! route('Welcome') !!}" class="btn btn-danger">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection