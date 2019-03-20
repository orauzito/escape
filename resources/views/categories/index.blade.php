@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <h3 class="text-black-50">Categories</h3><br>
            <button type="button" class="btn btn-primary"><a href="{{ route('categories.create') }}" class="text-white">Add a category</a></button><br>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <table class="table text-center col-10" id="categories-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $c)
                    <tr>
                        <td>{!! $c->name !!}</td>
                        <td>{!! $c->description !!}</td>
                        <td>
                            {!! Form::open(['route' => ['categories.destroy', $c->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('categories.edit', [$c->id]) !!}" class='btn btn-default btn-xs'><i
                                            class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection