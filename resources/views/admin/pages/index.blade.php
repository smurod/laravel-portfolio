@extends('admin.layouts.app')

@section('content')

    <div class="card mb-4">
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User_id</th>
                    <th>Status</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category_id</th>
                    <th>Tech_stack</th>
                    <th>Links</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->user->name}}</td>
                        <td>{{$project->status->name}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->category_id}}</td>
                        <td>{{$project->tech_stack}}</td>
                        <td>
                            @if(!empty($project->links))
                                <ul>
                                    @foreach($project->links as $type => $url)
                                        <li>
                                            <strong>{{ ucfirst($type) }}:</strong>
                                            @if(is_array($url))
                                                <ul>
                                                    @foreach($url as $link)
                                                        <li><a href="{{ $link }}" target="_blank">{{ $link }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Не указано</p>
                            @endif
                        </td>
                        <td>
                            @if($project->image)
                                <img src="{{asset('storage/' . $project->image)}}" alt="Фото" width="100">
                            @else
                                Нет фото
                            @endif
                        </td>
                        <td>
                            @if(!empty($project->tags))
                            @foreach($project->tags as $tag)
                                {{$tag}}
                            @endforeach
                            @else
                                Не указано
                            @endif

                        </td>
                        <td><a href="{{route('project.show', $project)}}" class="btn btn-outline-info">Show</a></td>
                        <td><a href="{{route('project.edit', $project)}}" class="btn btn-outline-primary">Edit</a></td>
                        <td>
                            <form action="{{route('project.destroy', $project)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-outline-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
