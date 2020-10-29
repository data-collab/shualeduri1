<!DOCTYPE html>
<html>
<body style="text-align: center">

<h1>Edit Post</h1>

<form method="post" enctype="multipart/form-data"  action="{{route('views.update',$view->id)}}">
    {{--    @csrf--}}
    @method("PUT")
    @csrf
    <label for="fname">Title:</label>
    <input type="name"  name="title" value="{{old('title', $view->title)}}" ><br><br>
    <label for="fname">Post text:</label>
    <input type="text"  name="body" value="{{old('title', $view->body)}}"><br><br>
    <label for="lname">Likes:</label>
    <input type="text"  name="is_published" value="{{old('title', $view->is_published}}"><br><br>
    <input type="submit" value="Submit">

</form>



</body>
</html>
