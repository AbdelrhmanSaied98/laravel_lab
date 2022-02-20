<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <form action="/users" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">name</label>
      <input type="text" name = "name" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword3" class="form-label">email</label>
      <input type="email" name = "email" class="form-control" id="exampleInputPassword3">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword2" class="form-label">password</label>
      <input type="password" name = "password" class="form-control" id="exampleInputPassword2">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>