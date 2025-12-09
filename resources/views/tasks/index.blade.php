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
@if(@session('success'))
    {{session('success')}}
@endif

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>User-id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Due_date</th>
        <th>Status</th>
        <th>Category-id</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->user_id}}</td>
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->due_date}}</td>
            <td>{{$task->status}}</td>
            <td>{{$task->category_id}}</td>
            <td><a href="{{ route('tasks.edit', $task) }}">Edit</a></td>
            <td>
                <form action="{{route('tasks.destroy', $task)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
