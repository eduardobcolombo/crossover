@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Updating Report/Exam: {{ $report->id }} </h3>

        @include('errors._check')

        {!! Form::model($report, ['route'=>['admin.reports.update',$report->id]]) !!}

        @include('admin.reports._form')

        {!! Form::close() !!}

    </div>


@endsection