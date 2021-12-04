@extends('layouts.app')
@section('title','Lablog A New Laravel Blog CMS')
@section('description','Blast Fast Laravel website with SEO free download source code full ')
@section('content')
<div class="container-fluid">
    <div class="masthead-followup row m-0">
        @foreach($homepages as $homepage)
        @include('widget.home.head')
        @include('widget.home.section1')
        @include('widget.home.section2')
        @include('widget.home.section3')
        @endforeach
    </div>
</div>
@endsection
