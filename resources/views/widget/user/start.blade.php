<div class="container">
    <div class="masthead-followup row m-0">
        <div class="col-12 col-md-12 p-3 p-md-5">
            <img class="img-fluid" src="{{ asset('images/logotype.min.svg') }}" />
            <h3 class="text-danger"><strong>User Account Page</strong> <a href="{{ url('/management/user/create') }}"
                    class="btn btn-outline-danger float-right"><i class="fas fa-plus"></i> Create User</a></h3>


            @if(Session()->has('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{Session()->get('status')}}
            </div>
            @endif