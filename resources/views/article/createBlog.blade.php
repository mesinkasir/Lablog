@extends('layouts.app')
@section('title','Create New Blogs')
@section('content')
<div class="container">
<div class="masthead-followup row m-0">
      <div class="col-12 col-md-12 p-3 p-md-5">
      @include('widget.blog.add')
      @include('widget.blog.formadd')
      </div>
    </div>
  </div>
@endsection