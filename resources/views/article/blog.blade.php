@extends('layouts.app')
@section('title','Blog List Lablog')
@section('content')
<div class="container">
    <div class="masthead-followup row m-0">
        @include('widget.blog.intro')
        <div class="col-12 col-md-12 p-3 p-md-5">
            <div class="row">
                @foreach($blogs as $blog)
                @include('widget.blog.article')
                @endforeach
            </div>
            @include('widget.blog.link')
        </div>
    </div>
</div>
@endsection
