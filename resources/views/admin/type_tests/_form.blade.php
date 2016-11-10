<div class="row">
    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::label('lb_title','Title:') !!}
            {!! Form::text( 'title',null,['class'=>'form-control', 'id'=>'title']) !!}
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_description','description:') !!}
            {!! Form::text( 'description',null,['class'=>'form-control', 'id'=>'description']) !!}
        </div>
    </div>

    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    </div>

</div>