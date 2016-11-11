@extends('layouts.app')

@section('content')

    {{--<div class="col-md-10">--}}
    {{--<div class="'form-group">--}}
        {{--{!! Form::label('lb_patients','Patients:') !!}--}}
        {{--{!! Form::select('patients_id', $patients) !!}--}}
    {{--</div>--}}
{{--</div>--}}


@include('admin.reports._search_patient')


<table class="table">
    <thread>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thread>
    <tbody>

    @if(!is_null($patients))
        @foreach($patients as $patient)
            <tr>
                <td>{{$patient->name}}</td>
                <td>
                    <a href="{{route('admin.reports.create',['patient_id'=>$patient->id])}}" class="btn btn-default btn-sm">
                        Create Report
                    </a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>


@endsection

