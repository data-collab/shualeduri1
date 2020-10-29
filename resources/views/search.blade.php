<form  method="POST" enctype="multipart/form-data" action="{{route('views.search')}}">
    <div class="box-body">
        <div class="form-group">
            <label >Post Title</label>
            <input type="name" class="form-control"  name="title">
        </div>
        <div class="form-group">
            <label >Post Text</label>
            <input type="name" class="form-control"   name="body">
        </div>
        <div class="form-group">
            <label >Post Likes</label>
            <input type="name" class="form-control"  name="is_published">
        </div>
    </div>
    @csrf
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
