@extends('app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="text-center col-10">
                {!! Form::open(['route' => 'categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'id'=>'name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control','id'=>'description']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                    <a href="{!! route('Welcome') !!}" class="btn btn-danger">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection