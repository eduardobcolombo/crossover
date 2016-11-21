<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_type_test_id','Type of test:') !!}
            {!! Form::select('type_test_id', $typeTests,null,['id'=>'type_test_id']) !!}
        </div>
    </div>

    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::label('lb_result','Result:') !!}
            {!! Form::text( 'result_text',null,['class'=>'form-control', 'id'=>'result_text']) !!}
        </div>
    </div>
    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::button('Save test',['class'=>'btn btn-primary', 'type'=>'button', 'id'=>'newtest', 'value'=>'newtest']) !!}
        </div>
    </div>
</div>


