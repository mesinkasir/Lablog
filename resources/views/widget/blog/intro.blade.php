<div class="col-12 col-md-12 p-1">
    <img class="img-fluid" src="{{ asset('images/logotype.min.svg') }}" />
    <h3 class="text-danger"><strong>Blog Page</strong> <a href="{{ url('/article/blog/create') }}"
            class="btn btn-outline-danger float-right"><i class="fas fa-plus"></i> Create Blog</a></h3>
    @include('widget.blog.alert')
</div>
