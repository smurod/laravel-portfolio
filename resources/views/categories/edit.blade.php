<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('categories.update', $category)}}" method="post">
    @csrf
    @method('put')
    <label for="">Name</label><br>
    <input type="text" name="name" id="" value="{{$category->name}}"><br>
        <label for="">User-id</label><br>
    <select name="user_id" id="" value="{{$category->user_id}}">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{ $user->name }}</option>
        @endforeach
    </select><br>
    <input type="submit" value="Save">
</form>

</body>
</html>
