@extends('public.layouts.app')
@section('content')

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
<form action="{{route('project.update', $project, $statuses)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label>Status_id</label><br>
    <select name="status_id">
        <option value="1">Выберите статус</option>
        @foreach($statuses as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>
        @endforeach
    </select><br>
    <label>Title</label><br>
    <input type="text" name="title" id="" value="{{$project->title}}"><br>
    <label>Description</label><br>
    <input type="text" name="description" id="" value="{{$project->description}}"><br>
    <label>Tech_stack</label><br>
    <input type="text" name="tech_stack" id="" value="{{$project->tech_stack}}"><br>
    <label>Links</label><br>
    <input type="text" name="links" id=""><br>
    <label>Image</label><br>
    <input type="file" name="image" id="" value="{{$project->image}}"><br>
    <label>Tags</label><br>
    <input type="text" name="tags" id=""><br>
    <input type="submit" value="Сохранить проект">
</form>

</body>
</html>
@endsection
