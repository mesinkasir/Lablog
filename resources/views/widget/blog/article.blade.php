<div class="col-md-12 p-3 card">
    <div class="row">
        <div class="col-md-2 p-3 card-body ">
            <img src="{{asset('blog_images')}}/{{$blog->image}}" alt="{{$blog->title}}" class="img-fluid rounded">
        </div>
        <div class="p-3 bg-light col-md-7">
            <h5><strong>{{$blog->title}}</strong></h5>
            <p>{{$blog->description}}</p>
        </div>
        <div class="p-3 bg-light col-md-3">
            <a href="/article/blog/{{$blog->id}}/edit" class="btn btn-block btn-danger text-white">Edit</a>

            <form action="/article/blog/{{$blog->id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-block btn-dark">
            </form>
        </div>
    </div>
</div>
