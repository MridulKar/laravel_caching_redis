<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

    <form action="{{ route('post.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <button type="sumbit">Submit</button>
    </form>

<table>
    <tr>
        <td>SL</td>
        <td>Name</td>
        <td>Description</td>
    </tr>

    @foreach($posts as $key=>$post)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->description }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>


