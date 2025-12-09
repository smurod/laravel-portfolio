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
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('tasks.store'), 'tasks'}}" method="post">
    @csrf
    <label for="">User-id</label><br>
    <select name="user_id">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select><br>
    <label for="">Title</label><br>
    <input type="text" name="title" id=""><br>
    <label for="">Description</label><br>
    <input type="text" name="description" id=""><br>
    <label for="">Due_date</label><br>
    <input type="date" name="due_date" id=""><br>
    <label for="">Status</label><br>
    <select name="status">
        <option value="pending">Pending</option>
        <option value="done">Done</option>
        <option value="expired">Expired</option>
    </select><br>
    <label for="">Category-id</label><br>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select><br>
    <input type="submit" value="Save">

</form>

</body>
</html>
