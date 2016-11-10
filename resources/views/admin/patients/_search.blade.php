@include('errors._check')

    <div class="container">
        {!! Form::open(['route'=>'admin.patients.filter']) !!}

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('lb_name','Find a patient:') !!}
                    {!! Form::text( 'name',null,['class'=>'form-control', 'id' => 'name']) !!}

                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <br />
                    {!! Form::submit('Filter',['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
