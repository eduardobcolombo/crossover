@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Updating Patient: {{ $patient->name }} </h3>

        @include('errors._check')

        {!! Form::model($patient, ['route'=>['admin.patients.update',$patient->id]]) !!}

        @include('admin.patients._form')

        {!! Form::close() !!}

    </div>


@endsection