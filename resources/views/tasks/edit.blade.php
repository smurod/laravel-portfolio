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

<form action="{{route('tasks.update', $task)}}" method="post">
    @csrf
    @method('put')
    <label for="">User-id</label><br>
    <select name="user_id" value="{{$task->user_id}}">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select><br>
    <label for="">Title</label><br>
    <input type="text" name="title" id="" value="{{$task->title}}"><br>
    <label for="">Description</label><br>
    <input type="text" name="description" id="" value="{{$task->description}}"><br>
    <label for="">Due_date</label><br>
    <input type="date" name="due_date" id="" value="{{$task->due_date}}"><br>
    <label for="">Status</label><br>
    <select name="status" value="{{$task->status}}">
        <option value="pending">Pending</option>
        <option value="done">Done</option>
        <option value="expired">Expired</option>
    </select><br>
    <label for="">Category-id</label><br>
    <select name="category_id" value="{{$task->category_id}}">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select><br>
    <input type="submit" value="Save">

</form>

</body>
</html>
