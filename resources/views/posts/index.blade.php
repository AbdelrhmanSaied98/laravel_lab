@extends("layouts.site_layout.app")
@section('content')
        <a href="/posts/create">store post</a>
        <table class="table">
            <tr>
                <th>
                    id
                </th>
                <th>
                    user_name
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
                <td>{{ $post->user->name }}</td>
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
@endsection
