<div class="container-fluid">
    <div class="masthead-followup row m-0">
        @foreach($blogs as $blog)
        <div class="col-md-12 p-3 p-md-5">
            <div class="card rounded">
                <img src="{{asset('blog_images')}}/{{$blog->image}}" alt="{{$blog->title}}" class="img-fluid"
                    width="100%">
                <div class="card-body p-3 p-md-5 bg-light">
                    <h3><strong><a href="{{ url('site/blog') }}">{{$blog->title}}</a></strong></h3>
                    <h5>{{$blog->description}}</h5>
                    <p> {{$blog->content}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="p-3 p-md-5">{{$blogs->links()}}</div>
    </div>
</div>
</div>
</div>