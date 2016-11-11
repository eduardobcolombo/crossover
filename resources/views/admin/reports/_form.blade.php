<div class="row">




    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::label('lb_descriptions','Descriptions:') !!}
            {!! Form::text( 'descriptions',null,['class'=>'form-control', 'id'=>'descriptions']) !!}
        </div>
    </div>




    <div class="col-md-10">
        <div class="'form-group">
            <br /><br />
        </div>
    </div>
    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
</div>