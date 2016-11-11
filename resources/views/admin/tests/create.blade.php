
    <div class="container">
        <h3>New Test</h3>

        @include('errors._check')

        {!! Form::open(['url'=>'#']) !!}

        @include('admin.tests._form')

        {!! Form::close() !!}

    </div>

@section('post-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#Save').click(function () {
                var type_test_id = $('#type_test_id').val();
//                $.post('tests/store',{type_test_id:type_test_id}, function (data) {
//                    console.log(data);
//                    $('#testsInserteds').html(data);
//                });

                var dataString = "type_test_id="+type_test_id;
                $.ajax({
                    type: "POST",
                    url: "tests/store",
                    data: dataString,
                    success: function(data){
                        console.log(data);
                    }

                });
            });
        });
    </script>
@endsection