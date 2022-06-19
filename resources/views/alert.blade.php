@if ($errors->any())

            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
        </div>
            @endforeach


@endif


@if(Session::has('err'))
<div class="alert alert-danger">
    {{session()->get('err') }}

</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}

</div>
@endif
