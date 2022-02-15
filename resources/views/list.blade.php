<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('post/create')}}">Create New Post</a>
    @foreach($posts as $post) 
        <br/>
        <br/>
        {{  $post->subject }} 
        {!! link_to('/post/' .$post->id, 'View') !!}
        {!! link_to('/post/' .$post->id. '/edit','Edit')!!}
        {!! Form::open(['url'=>['post/delete', $post->id], 'method'=>'POST'])!!}
        {!! Form::submit('Delete')!!}
        {!! Form::close() !!}
        <br/>
    @endforeach
    
</body>
</html>