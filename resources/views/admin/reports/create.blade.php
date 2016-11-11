@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>New Report/Exam</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.tests.store']) !!}

        @include('admin.tests.create')

        {!! Form::close() !!}



        {!! Form::open(['route'=>'admin.reports.store']) !!}

        @include('admin.reports._form')

        {!! Form::close() !!}


    </div>



@endsection