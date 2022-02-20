@extends("layouts.site_layout.app")
@section('content')

<body>
  <form action="/posts" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">title</label>
      <input type="text" name = "title" value="{{ old('title') }}" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword2" class="form-label">description</label>
      <input type="text" name = "description" value="{{ old('description') }}" class="form-control" id="exampleInputPassword2">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection