<form action="/article/blog" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="blogTitle"><i class="fas fa-text-height"></i> Title</label>
        <input type="text" name="title" class="form-control" placeholder="insert title">
    </div>

    <label for="MenuImage"><i class="fas fa-image"></i> Image</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
        </div>
    </div>

    <div class="form-group">
        <label for="Description"><i class="fas fa-text-width"></i> Description</label>
        <input type="text" name="description" class="form-control" placeholder="Description...">
    </div>
    <div class="form-group">
        <label for="Content"><i class="fas fa-spell-check"></i> Content</label>
        <textarea rows="3" type="text" name="content" class="form-control"
            placeholder="Write content in here..."></textarea>
    </div>

    <button type="submit" class="btn btn-lg btn-danger btn-block">Save</button>
</form>
