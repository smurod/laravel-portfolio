@extends('admin.layouts.app')
@section('content')
<div class="col-md-6">
    <!--begin::Quick Example-->
    <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">Добавть проект</div></div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
            <!--begin::Body-->
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Название проекта</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                    />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Краткое описание</label>
                    <input
                        type="text"
                        class="form-control"
                        name="description"
                    />
                </div>

                <div class="mb-3 col-md-6">
                    <label for="validationCustom04" class="form-label">Категория</label>
                    <select name="category_id" class="form-select" required>
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
                    />
                </div>

                <div class="mb-3 col-md-6" id="links-container">
                    <label class="form-label">Ссылки на проект</label><br>
                    <button type="button" onclick="addLink()" class="btn btn-outline-success">+ Добавить ссылку</button>
                    <br>
                    <div class="link-item">
                        <br>
                        <select name="link_type[]" class="form-select" required>
                            <option value="">Выберите тип ссылки</option>
                            <option value="github">GitHub</option>
                            <option value="project">Проект</option>
                            <option value="portfolio">Портфолио</option>
                            <option value="demo">Демо</option>
                        </select><br>

                        <input type="url" class="form-control" name="link_url[]" placeholder="https://example.com" required>
                    </div>
                    <br>

                </div>


                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control"/>
                    <label class="input-group-text">Загрузите изображение</label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Теги</label>
                    <input

                        name="tags"
                        autofocus
                    />
                </div>


            </div>
            <!--end::Body-->
            <div class="card-footer d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-success">Добаить проект</button>
                <a href="{{route('project.index')}}" class="btn btn-outline-warning">Вернуться назад</a>
            </div>

        </form>
        @if($errors->any())
            <div style="color: red; margin-top: 20px;">
                <ul>
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <!--end::Form-->
    </div>
    <!--end::Quick Example-->
</div>
@endsection
