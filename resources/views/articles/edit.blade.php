@extends('app')
@php($categories = \App\Categories::all())
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="text-center col-10">
            {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'patch']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', $article->title, ['class' => 'form-control', 'id'=>'title']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('text', 'Text:') !!}
                {!! Form::text('text', $article->text, ['class' => 'form-control','id'=>'text']) !!}
            </div>
            <div class="form-group">
                <b>Category:</b>
                <select name="cat_id" class="dropdown form-control btn-md">
                    @if ($categories == null)
                        <option value="0"><b>Ainda não existem categorias cadastrados!</b></option>
                    @endif
                    @foreach($categories as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                <a href="{!! route('Welcome') !!}" class="btn btn-danger">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection