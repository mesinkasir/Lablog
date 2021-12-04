<form action="/article/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="blogTitile"><i class="fas fa-text-height"></i> Title</label>
        <input type="text" name="title" value="{{$blog->title}}" class="form-control bg-white text-dark"
            placeholder="Title...">
    </div>

    <label for="MenuImage"><i class="fas fa-image"></i> Image</label><br />
    <img class="img-fluid" src="/blog_images/{{$blog->image}}" />
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Select File</label>
        </div>
    </div>

    <div class="form-group">
        <label for="Description"><i class="fas fa-text-width"></i> Description</label>
        <input type="text" name="description" value="{{$blog->description}}" class="form-control bg-white text-dark"
            placeholder="Description...">
    </div>

    <div class="form-group">
        <label for="Content"><i class="fas fa-spell-check"></i> Content</label>

        <textarea type="text" rows="3" name="content" value="{{$blog->content}}"
            class="form-control bg-white text-dark">{{$blog->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-danger btn-lg btn-block">Update</button>
    </div>

</form>
</div>
</div>
</div>
