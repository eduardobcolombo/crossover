@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Reports of patient</h3>

        <p>
        </p>


        <div class="row">
            <div class="col-md-5">


                <table class="table">
                    <thread>
                        <tr>
                            <th>Report Code</th>
                            <th>Actions</th>
                        </tr>
                    </thread>
                    <tbody>

                    @foreach($reports as $report)
                        <tr>
                            <td>{{$report->id}}</td>
                            <td>
                                <a href="{{route('admin.reports.show',['patient_id'=>$patient_id,'id'=>$report->id])}}" class="btn btn-primary btn-sm">
                                    Show
                                </a>

                                <a href="{{route('admin.reports.export',['id'=>$report->id])}}" class="btn btn-primary btn-sm">
                                    Export
                                </a>
                                <a href="{{route('admin.reports.mail',['patient_id'=>$patient_id,'id'=>$report->id])}}" class="btn btn-default btn-sm">
                                    Send by mail
                                </a>
                                <a href="{{route('admin.reports.destroy',['patient_id'=>$patient_id,'id'=>$report->id])}}" class="btn btn-default btn-sm">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>



    </div>



@endsection