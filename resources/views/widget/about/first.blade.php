<div class="form-group">
    <label for="aboutTitile"><i class="fas fa-text-height"></i> Title</label>
    <input type="text" name="title" value="{{$about->title}}" class="form-control bg-white text-dark"
        placeholder="Title...">
</div>
<label for="MenuImage"><i class="fas fa-image"></i> Image</label>
<img class="img-fluid" src="{{ url('/') }}/about_images/{{$about->image}}" />
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
    </div>
    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
        <label class="custom-file-label" for="inputGroupFile01">Select File</label>
    </div>
</div>
