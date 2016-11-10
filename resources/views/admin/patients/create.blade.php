@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>New Patient</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.patients.store']) !!}

        @include('admin.patients._form')

        {!! Form::close() !!}

    </div>



@endsection