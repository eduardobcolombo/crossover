@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Patient:  {{ $patient_name }}</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.tests.store']) !!}

        @include('admin.tests.create')

        {!! Form::close() !!}

        {!! Form::open(['route'=>'admin.reports.store']) !!}

        @include('admin.reports._form')

        {!! Form::close() !!}


        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <div id="testsInserteds" class="row">
                    </div>
                </div>
            </div>
    </div>



@endsection