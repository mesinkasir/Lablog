<div class="form-group col-md-6">
    <label for="homepageTitile"><i class="fas fa-text-height"></i> Title</label>
    <input type="text" name="title" value="{{$homepage->title}}" class="form-control bg-white text-dark"
        placeholder="Title...">
    <br />
    <label class="p-1" for="MenuImage"><i class="fas fa-image"></i> Image</label>
    <img class="img-fluid" src="{{ url('/') }}/homepage_images/{{$homepage->image}}" />
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Select File</label>
        </div>
    </div>
    <label for="Description"><i class="fas fa-text-width"></i> Description</label>
    <input type="text" name="description" value="{{$homepage->description}}" class="form-control bg-white text-dark"
        placeholder="Description...">
    <label for="Content"><i class="fas fa-spell-check"></i> Content</label>

    <textarea type="text" rows="3" name="content" value="{{$homepage->content}}" class="form-control bg-white text-dark"
        placeholder="write a content...">{{$homepage->content}} </textarea>

</div>
