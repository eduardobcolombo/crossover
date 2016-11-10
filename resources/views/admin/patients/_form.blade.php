<div class="row">
    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::label('lb_name','Name:') !!}
            {!! Form::text( 'name',null,['class'=>'form-control', 'id'=>'name']) !!}
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_email','email:') !!}
            {!! Form::text( 'email',null,['class'=>'form-control', 'id'=>'email']) !!}
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_address','Address:') !!}
            {!! Form::text( 'address',null,['class'=>'form-control', 'id'=>'address']) !!}
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_phone','Phone:') !!}
            {!! Form::text( 'phone',null,['class'=>'form-control', 'id'=>'phone']) !!}
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            {!! Form::label('lb_cellphone','Cellphone:') !!}
            {!! Form::text( 'cellphone',null,['class'=>'form-control', 'id'=>'cellphone']) !!}
        </div>
    </div>

    <div class="col-md-10">
        <div class="'form-group">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
</div>