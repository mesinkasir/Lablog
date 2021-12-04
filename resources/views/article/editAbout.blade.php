@extends('layouts.app')
@section('title','About Page Lablog')
@section('content')
<div class="container">
    <div class="masthead-followup row m-0">
        <div class="col-12 col-md-12 p-3 p-md-5">
            <img class="img-fluid" src="{{ asset('images/logotype.min.svg') }}" />
            <h3 class="text-danger"><strong>Update About Page</strong></h3>
            @include('widget.about.eror')
            <form action="/article/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('widget.about.first')
                @include('widget.about.last')
            </form>
        </div>
    </div>
</div>
@endsection
