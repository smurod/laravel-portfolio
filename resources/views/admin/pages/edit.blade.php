@extends('admin.layouts.app')

@section('content')
    <div class="col-md-6">
        <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Добавть проект</div></div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{route('project.update', $project)}}" method="post" enctype="multipart/form-data">
                <!--begin::Body-->
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Название проекта</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            value="{{$project->title}}"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Краткое описание</label>
                        <input
                            type="text"
                            class="form-control"
                            name="description"
                            value="{{$project->description}}"
                        />
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="validationCustom04" class="form-label">Статус</label>
                        <select name="status_id" class="form-select" required>
                            <option value="1">Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="validationCustom04" class="form-label">Статус</label>
                        <select name="status_id" class="form-select" required>
                            <option value="1">Выберите статус</option>
                            @foreach($statuses as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Стек технологий</label>
                        <input
                            type="text"
                            class="form-control"
                            name="tech_stack"
                            value="{{$project->tech_stack}}"
                        />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ссылки на проект</label>
                        <input
                            type="text"
                            class="form-control"
                            name="links"
                        />
                    </div>


                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control"
                               value="{{$project->image}}" />
                        <label class="input-group-text">Изменить изображение</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Теги</label>
                        <input
                            type="text"
                            class="form-control"
                            name="tags"
                        />
                    </div>


                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex justify-content-between">
                    <button type="submit" class="btn btn-outline-success">Сохранить изменение</button>
                    <a href="{{route('project.index')}}" class="btn btn-outline-warning">Вернуться назад</a>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Quick Example-->
    </div>
@endsection
