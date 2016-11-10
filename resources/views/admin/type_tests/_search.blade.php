@include('errors._check')

    <div class="container">
        {!! Form::open(['route'=>'admin.type_tests.filter']) !!}

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('lb_title','Title:') !!}
                    {!! Form::text( 'title',null,['class'=>'form-control', 'id' => 'title']) !!}

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
