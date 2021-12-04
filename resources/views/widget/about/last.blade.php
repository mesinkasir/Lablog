<div class="form-group">
    <label for="Description"><i class="fas fa-text-width"></i> Description</label>
    <input type="text" name="description" value="{{$about->description}}" class="form-control bg-white text-dark"
        placeholder="Description...">
</div>
<div class="form-group">
    <label for="Content"><i class="fas fa-spell-check"></i> Content</label>
    <textarea type="text" rows="3" name="content" value="{{$about->content}}" class="form-control bg-white text-dark"
        placeholder="write a content...">{{$about->content}} </textarea>
</div>
<button type="submit" class="btn btn-lg btn-danger btn-block">Update</button>
</div>
