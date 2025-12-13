@extends('public.layouts.app')

@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <tr>
        <th>ID</th>
        <th>User_id</th>
        <th>Status</th>
        <th>Title</th>
        <th>Description</th>
        <th>Tech_stack</th>
        <th>Links</th>
        <th>Image</th>
        <th>Tags</th>
    </tr>
    <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->user->name}}</td>
            <td>{{$project->status->name}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->tech_stack}}</td>
            <td>{{$project->links ?? 'Не указано'}}</td>
            <td>
                @if($project->image)
                    <img src="{{asset('storage/' . $project->image)}}" alt="Фото" width="100">
                @else
                    Нет фото
                @endif
            </td>
            <td>{{$project->tags ?? 'Нет тегов'}}</td>
        </tr>
</table>

</body>
</html>

@endsection
