<div class="container-fluid">
    <div class="masthead-followup row m-0">
        <div class="col-12 col-md-12 p-3 p-md-5">
            @foreach($abouts as $about)
            <div class="card"><img src="{{asset('about_images')}}/{{$about->image}}" width="100%"
                    alt="{{$about->title}}" class="img-fluid">
                <div class="p-3 p-md-5 bg-light text-secondary">
                    <h1 class="text-danger"><strong><a href="{{ url('site/about') }}">{{$about->title}}</a></strong>
                    </h1>
                    <h3>{{$about->description}}</h3>
                    <p>{{$about->content}}</p>
                    @endforeach
                </div>
            </div>
            {{$abouts->links()}}
        </div>
    </div>
</div>