@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Reports</h3>

        <p>
        </p>


        <div class="row">
            <div class="col-md-5">
                <p>
                    Request a new Report/Exam
                </p>
                <a href="{{ route('admin.reports.select_patient') }}" class="btn btn-default">Request a Report/Test</a>
            </div>
            <div class="col-md-5">
                <p>
                    Or put retults on Report/Exam
                </p>
                @include('admin.patients._search')
            </div>
        </div>



    </div>



@endsection