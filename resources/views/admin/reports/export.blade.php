    <div class="container">
        <h3>Reports of patient</h3>
        <div class="row">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-10">
                        <hr />
                        <strong>Name:</strong> {{ $patient->name }}<br />
                        <strong>email:</strong> {{ $patient->email }}<br />
                        <strong>Phone: </strong>{{ $patient->phone }}<br />
                        <strong>Cellphone:</strong> {{ $patient->cellphone }}<br />
                        <hr />
                    </div>
                </div>

                @foreach($tests as $test)
                <div class="row">
                    <div class="col-md-10">
                        <strong>{{ $test->type_test->title }}</strong>
                        <p>{{ $test->description }}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
