@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Type of Tests</h3>

        <p>
            <a href="{{ route('admin.type_tests.create') }}" class="btn btn-default">New Type of Test</a>
        </p>
        @include('admin.type_tests._search')


        <table class="table">
            <thread>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thread>
            <tbody>

            @foreach($type_tests as $type_test)
            <tr>
                <td>{{$type_test->title}}</td>
                <td>{{$type_test->description}}</td>
                <td>
                    <a href="{{route('admin.type_tests.edit',['id'=>$type_test->id])}}" class="btn btn-default btn-sm">
                        Update
                    </a>
                    <a href="{{route('admin.type_tests.destroy',['id'=>$type_test->id])}}" class="btn btn-default btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>



    </div>



@endsection