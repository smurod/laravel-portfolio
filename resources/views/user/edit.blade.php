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

<form action="{{route('user.update', $user)}}" method="post">
    @csrf
    @method('put')
    <label for="">Name</label><br>
    <input type="text" name="name" value="{{$user->name}}" id=""><br>
    <label for="">E-mail</label><br>
    <input type="text" name="email" value="{{$user->email}}"><br>
    <label for="">Password</label><br>
    <input type="text" name="password" id="" value="{{$user->password}}"><br>
    <label for="">Avatar</label><br>
    <input type="text" name="avatar" id="" value="{{$user->avatar}}"><br>
    <input type="submit" value="Save">
</form>

</body>
</html>
