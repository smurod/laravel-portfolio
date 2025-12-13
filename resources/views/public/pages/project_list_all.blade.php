@extends('public.layouts.app')
@section('content')
<!-- ==================== Mobile Menu Start Here ==================== -->
@include('public.layouts.mobilemenu')
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ==================== Breadcrumb Start Here ==================== -->
<section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">
    <img src="assets/public/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none">
    <img src="assets/public/images/shapes/shape2.png" alt="" class="shape two animation-scalation d-md-block d-none">
    <img src="assets/public/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none">
    <img src="assets/public/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none">
    <img src="assets/public/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
    <img src="assets/public/images/shapes/shape4.png" alt="" class="shape nine animation-scalation">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb__wrapper">
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Список всех проектов</h1>
                    <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                        <li class="breadcrumb__item">
                            <a href="{{route('home')}}" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                <i class="text-lg d-inline-flex ph-bold ph-house"></i> Главная страница</a>
                         </li>
                        <li class="breadcrumb__item">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item">
                            <a href="{{route('project-list')}}" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> Проекты</a>
                        </li>
                        <li class="breadcrumb__item ">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item">
                            <span class="text-main-two-600"> Список всех проектов </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== Course Grid View Section Start ============================== -->
    <section class="course-grid-view py-120">
        <div class="container">
            <div class="flex-between gap-16 flex-wrap mb-40">
                <span class="text-neutral-500">Показано {{ $projects->count() }} из {{ $projects->total() }} проектов</span>
                <div class="flex-align gap-8">
                    <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                    <select class="form-select ps-20 pe-28 py-8 fw-semibold rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                        <option value="1">Newest</option>
                        <option value="1">Trending</option>
                        <option value="1">Popular</option>
                    </select>
                </div>
            </div>
            <div class="row gy-4" id="project-container">
            @foreach($projects as $project)
                <div class="col-lg-4 col-sm-6">
                    <div class="course-item bg-main-25 rounded-16 p-12 h-100 border border-neutral-30">
                        <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                            <a href="course-details.html" class="w-100 h-100">
                                @if($project->image)
                                <img src="{{asset('storage/' . $project->image)}}" class="course-item__img rounded-12 cover-img transition-2">
                                @else
                                Нет Фото
                                @endif
                            </a>
                            <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                <i class="ph ph-heart"></i>
                            </button>
                        </div>
                        <div class="course-item__content">
                            <div class="">
                                <h4 class="mb-28">
                                    <a href="course-details.html" class="link text-line-2">{{$project->title}}</a>
                                </h4>
                                <div class="flex-between gap-8 flex-wrap mb-16">
                                    <div class="flex-align gap-8">
                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                                        <span class="text-neutral-700 text-lg fw-medium">{{$project->tech_stack}}</span>
                                    </div>
                                    <div class="flex-align gap-8">
                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                                        <span class="text-neutral-700 text-lg fw-medium">{{$project->status->name}}</span>
                                    </div>
                                </div>
                                <div class="flex-between gap-8 flex-wrap">
                                    <div class="flex-align gap-4">
                                        <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-lg text-neutral-700">
                                            4.7
                                            <span class="text-neutral-100">(6.4k)</span>
                                        </span>
                                    </div>
                                    <div class="flex-align gap-8">
                                        <span class="text-neutral-700 text-2xl d-flex">
                                            <img src="assets/public/images/thumbs/user-img1.png" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                                        </span>
                                        <span class="text-neutral-700 text-lg fw-medium">{{$project->user->name}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                <h4 class="mb-0 text-main-two-600">$148</h4>
                                <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                                    Enroll Now
                                    <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        {{$projects->onEachSide(2)->links('vendor.pagination.custom')}}
        </div>
    </section>
    <!-- ============================== Course Grid View Section End ============================== -->

    <!-- ================================= Certificate Section Start ================================= -->
@include('public.layouts.certificate')
<!-- ================================= Certificate Section End ================================= -->


@endsection

