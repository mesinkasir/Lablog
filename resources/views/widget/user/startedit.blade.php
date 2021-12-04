<div class="container">
    <div class="masthead-followup row m-0">
        <div class="col-12 col-md-12 p-3 p-md-5">
            <img class="img-fluid" src="{{ asset('images/logotype.min.svg') }}" />
            <h3 class="text-danger"><strong>Update User Account</strong></h3>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif