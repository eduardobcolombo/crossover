
    <div class="container">
        <h2>Select the test:</h2>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.tests.store']) !!}
        {{--'url'=>'#'--}}
        @include('admin.tests._form')

        {!! Form::close() !!}


    </div>

@section('post-script')
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            $('#newtest').click(function () {
                var type_test_id = $('#type_test_id option:selected').val();
                var result_text = $('#result_text').val();
                var report_id = {{ $report_id }};
//                $.post('/admin/tests/store',{type_test_id:type_test_id, result_text:result_text}, function (data) {
//                    console.log(data);
//                    $('#testsInserteds').append(data);
//                });
                var dataString = "report_id="+report_id+"&type_test_id="+type_test_id+"&result_text="+result_text;
                $.ajax({
                    type: "POST",
                    url: "/admin/tests/store",
                    data: dataString,
                    success: function(data){
//                        console.log(data);
                        $('#testsInserteds').append("<p>"+data+"</p>");
                        $('#result_text').val("");
                    }
                });
            });
        });
    </script>
@endsection