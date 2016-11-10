@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>New Type of Test</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.type_tests.store']) !!}

        @include('admin.type_tests._form')

        {!! Form::close() !!}

    </div>



@endsection