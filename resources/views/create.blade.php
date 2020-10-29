@extends('layout')

@section("content")

    <form method="view" enctype="multipart/form-data"  action="{{route('views.save')}}">
        <div class="box-body" >
            <div class="form-group">
                <label >Title</label>
                <input type="name" class="form-control"  name="title" >
            </div>
            <div class="form-group">
                <label >body</label>
                <input type="name" class="form-control"   name="post_text">
            </div>
            <div class="form-group">
                Published</label>
                <input type="name" class="form-control"  name="likes">
            </div>
        </div>
        @csrf
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
