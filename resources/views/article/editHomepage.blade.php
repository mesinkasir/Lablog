@extends('layouts.app')
@section('title','Home Page Lablog')
@section('content')
<div class="container">
    <div class="masthead-followup row m-0">
        <div class="col-12 col-md-12 p-3 p-md-5">
            <img class="img-fluid" src="{{ asset('images/logotype.min.svg') }}" />
            <h3 class="text-danger"><strong>Update Home Page</strong></h3>
            @include('widget.home.eror')
            <form action="/article/homepage/{{$homepage->id}}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('widget.home.homes')
                @include('widget.home.section')
                <button type="submit" class="btn btn-danger btn-lg btn-block">Update</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection
