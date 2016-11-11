<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_type_test_id','Type of test:') !!}
            {!! Form::select('type_test_id', $typeTests) !!}
        </div>
    </div>

    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::button('newtest',['class'=>'btn btn-primary', 'type'=>'button', 'id'=>'newtest', 'value'=>'newtest']) !!}
        </div>
    </div>
</div>


