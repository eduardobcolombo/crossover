<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_type_test_id','Type of test:') !!}
            {!! Form::select('type_test_id', $typeTests) !!}
        </div>
    </div>

    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::submit('Save',['class'=>'btn btn-primary', 'value'=>'Save']) !!}
        </div>
    </div>
</div>



<div id="testsInserteds" class="row">



</div>