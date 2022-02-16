<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <a href="/posts/create">store post</a>
        <table class="table">
            <tr>
                <th>
                    id
                </th>
                <th>
                    title
                </th>
                <th>
                    description
                </th>
            </tr>
            @foreach ($data as $post)
                <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td><a href="/posts/{{$post['id']}}">Show</a></td>
                <td><a href="/posts/{{$post['id']}}/edit">edit</a></td>
                <td>
                    <form action="/posts/{{$post['id']}}" method="post">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="delete" name = "delete">
                    </form>
                </td>
                </tr>
            @endforeach 
        </table>
    </body>
</html>
