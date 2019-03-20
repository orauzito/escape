@extends('app')
@section('content')
<div class="box-body">
    <div class="row">
        {!! Form::open(['route' => 'articles.store']) !!}
        <div class="form-group col-lg-6 col-md-6 col-xs-12 col-sm-12">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'id'=>'title']) !!}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-xs-12 col-sm-12">
            {!! Form::label('text', 'Text:') !!}
            {!! Form::text('text', null, ['class' => 'form-control','id'=>'text']) !!}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <b>Projetos:</b>
            <select name="cat_id" class="dropdown form-control btn-md" id="cat_id">
                @if ($categories == null) <option value="0"> <b>Ainda não existem categorias cadastrados!</b></option>
                @else
                @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group col-sm-12">
            {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
            <a href="{!! route('Welcome') !!}" class="btn btn-danger">Cancelar</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
    @endsection