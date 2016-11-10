@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Updating Type of Tests: {{ $type_test->name }} </h3>

        @include('errors._check')

        {!! Form::model($type_test, ['route'=>['admin.type_tests.update',$type_test->id]]) !!}

        @include('admin.type_tests._form')

        {!! Form::close() !!}

    </div>


@endsection