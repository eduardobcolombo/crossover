@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Patients</h3>

        <p>
            <a href="{{ route('admin.patients.create') }}" class="btn btn-default">New Patient</a>
        </p>
        @include('admin.patients._search')


        <table class="table">
            <thread>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>passcode</th>
                    <th>Phone</th>
                    <th>Cellphone</th>
                    <th>Actions</th>
                </tr>
            </thread>
            <tbody>

            @foreach($patients as $patient)
            <tr>
                <td>{{$patient->name}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->passcode}}</td>
                <td>{{$patient->phone}}</td>
                <td>{{$patient->cellphone  }} </td>
                <td>
                    <a href="{{route('admin.patients.edit',['id'=>$patient->id])}}" class="btn btn-default btn-sm">
                        Update
                    </a>
                    <a href="{{route('admin.patients.destroy',['id'=>$patient->id])}}" class="btn btn-default btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>



    </div>



@endsection