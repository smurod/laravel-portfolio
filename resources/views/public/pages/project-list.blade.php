@extends('public.layouts.app')
@section('content')

    <!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

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
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Список проектов</h1>
                    <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                        <li class="breadcrumb__item">
                            <a href="{{route('home')}}" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                <i class="text-lg d-inline-flex ph-bold ph-house"></i> Главная страница</a>
                         </li>
                        <li class="breadcrumb__item">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item">
                            <span class="text-main-two-600"> Проекты </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== Course List View Section Start ============================== -->
    <section class="course-list-view py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar rounded-12 bg-main-25 p-32 border border-neutral-30">
                        <form action="{{route('project-list')}}" method="get">
                            <div class="flex-between mb-24">
                                <h4 class="mb-0">Поиск</h4>
                                <button type="button" class="sidebar-close text-xl text-neutral-500 d-lg-none hover-text-main-600">
                                    <i class="ph-bold ph-x"></i>
                                </button>
                            </div>

                            <div class="position-relative">
                                <input type="text" class="common-input pe-48 rounded-pill" placeholder="Поиск по названию...">
                                <button type="submit" class="text-neutral-500 text-xl d-flex position-absolute top-50 translate-middle-y inset-inline-end-0 me-24 hover-text-main-600"><i class="ph-bold ph-magnifying-glass"></i></button>
                            </div>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>

                            <h6 class="text-lg mb-24 fw-medium">Поиск по тегам</h6>
                            <div class="flex-align flex-wrap gap-12">

                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">UI/UX Design</a>

                            </div>
                            <a href="course.html" class="text-sm text-main-600 fw-semibold mt-24 hover-text-decoration-underline">More Tags </a>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>


                            <h6 class="text-lg mb-24 fw-medium">Поиск по категориям</h6>
                            <div class="d-sm-block d-none">
                                <div class="header-select border border-neutral-30 bg-main-25 rounded-pill position-relative">
    <span class="select-icon position-absolute top-50 translate-middle-y inset-inline-start-0 z-1 ms-lg-4 ms-12 text-xl pointer-event-none d-flex">
        <i class="ph-bold ph-squares-four"></i>
    </span>
                                    <select class="js-example-basic-single border-0" name="category_id[]" multiple>
                                        <option value="1" selected disabled>Categories</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>

                            <div class="flex-align flex-wrap gap-32 pt-40 border-top border-neutral-50 mt-40 border-dashed border-0" data-aos="fade-left" data-aos-duration="600">
                                <input type="submit" value="Применить" class="btn btn-main rounded-pill flex-align gap-8 flex-center gap-16 fw-semibold w-100">
                            <button type="reset" class="btn btn-outline-main rounded-pill flex-center gap-16 fw-semibold w-100">
                                <i class="ph-bold ph-arrow-clockwise d-flex text-lg"></i>
                                Reset Filters
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-list-wrapper">
                        <div class="flex-between gap-16 flex-wrap mb-40">
                            <span class="text-neutral-500">
                            Показано {{ $projects->count() }} из {{ $projects->total() }} проектов
                        </span>
                            <div class="flex-align gap-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                                    <select class="form-select ps-20 pe-28 py-8 fw-medium rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                                        <option value="1">Newest</option>
                                        <option value="1">Trending</option>
                                        <option value="1">Popular</option>
                                    </select>
                                </div>
                                <button type="button" class="list-bar-btn text-xl w-40 h-40 bg-main-600 text-white rounded-8 flex-center d-lg-none">
                                    <i class="ph-bold ph-funnel"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row gy-4">

                        @foreach($projects as $project)
                            {{$project->category->name}}
                            <div class="col-12">
                                <div class="course-item bg-main-25 rounded-16 p-12 h-100 border border-neutral-30 list-view">
                                    <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                        <a href="{{route('project-details', $project)}}" class="w-100 h-100">
                                            @if($project->image)
                                                <img src="{{asset('storage/' . $project->image)}}" class="course-item__img rounded-12 cover-img transition-2">
                                            @else
                                                Нет фото
                                            @endif
                                        </a>
                                        <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                            <i class="ph ph-heart"></i>
                                        </button>
                                    </div>
                                    <div class="course-item__content flex-grow-1">
                                        <div class="">
                                            <h4 class="mb-28">
                                                <a href="course-details.html" class="link text-line-2">{{$project->title}} 1 </a>
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
                    </div>
                    {{$projects->onEachSide(2)->links('vendor.pagination.custom')}}
                    <div class="explore-course py-120 position-relative z-1">
                    <div class="section-heading text-center style-flex gap-24">
                        <div class="container section-heading__content">
                            <a href="{{route('project-list-all')}}" class="btn btn-main rounded-pill flex-align gap-8" tabindex="0">
                                Смотреть все проекты
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ============================== Course List View Section End ============================== -->

    <!-- ================================= Certificate Section Start ================================= -->
@include('public.layouts.certificate')
<!-- ================================= Certificate Section End ================================= -->


@endsection
