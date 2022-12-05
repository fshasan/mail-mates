<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <table class="table table-sm">
        <thead>
            <tr>
                {{-- <th>#</th> --}}
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr> 
                    {{-- <td>{{$post->id}}</td> --}}
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->created_at}}</td>
                </tr>

            @endforeach
\
        </tbody>
    </table>
        <div style="float: right">
            {{ $posts->withQueryString()->links('pagination::bootstrap-5') }}
        </div>


</div>
</body>
</html>