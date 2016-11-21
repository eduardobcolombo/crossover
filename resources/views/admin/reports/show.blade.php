@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Reports of patient</h3>

        <div class="row">
            <div class="col-md-10">
                <a href="{{route('admin.reports.export',['id'=>$report->id])}}" class="btn btn-primary btn-sm">
                    Export
                </a>
                <a href="{{route('admin.reports.mail',['id'=>$report->id])}}" class="btn btn-primary btn-sm">
                    Send by e-mail
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-10">
                        <hr />
                        <strong>Name:</strong> {{ $patient->name }}<br />
                        <strong>email:</strong> {{ $patient->email }}<br />
                        <strong>Phone: </strong>{{ $patient->phone }}<br />
                        <strong>Cellphone:</strong> {{ $patient->cellphone }}<br />
                        <hr />
                    </div>
                </div>

                @foreach($tests as $test)
                <div class="row">
                    <div class="col-md-10">
                        <strong>{{ $test->type_test->title }}</strong>
                        <p>{{ $test->description }}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>



@endsection