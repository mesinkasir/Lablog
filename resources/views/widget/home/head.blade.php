<div class="col-12 col-md-12 p-3 p-md-5 text-center">
    <h1><strong><a href="" class="text-danger">{{$homepage->title}}</a></strong></h1>
    <h3>{{$homepage->description}}</h3>
    <div class="p-0"><img src="{{asset('homepage_images')}}/{{$homepage->image}}" width="100%"
            alt="{{$homepage->title}}" class="img-fluid"></div>
    <div class="p-3 p-md-5 bg-light">
        <p>{{$homepage->content}}</p>
    </div>

    <div class="row">