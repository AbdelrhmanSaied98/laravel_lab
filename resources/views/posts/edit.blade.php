@extends("layouts.site_layout.app")
@section('content')
    <form action="/posts/{{$data['id']}}" method="post">
    @csrf
    @method("PATCH")

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">title</label>
    <input type="text" class="form-control" name = "title" value= "{{$data['title']}}" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">description</label>
    <input type="text" class="form-control" name = "description" value= "{{$data['description']}}" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection