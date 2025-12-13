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
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Разработчики</h1>
                    <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                        <li class="breadcrumb__item">
                            <a href="{{route('home')}}" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                <i class="text-lg d-inline-flex ph-bold ph-house"></i> Главная страница</a>
                         </li>
                        <li class="breadcrumb__item">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item">
                            <a href="course.html" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> </a>
                        </li>
                        <li class="breadcrumb__item d-none">
                            <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                        </li>
                        <li class="breadcrumb__item">
                            <span class="text-main-two-600"> Разработчики </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ================================ Instructor Section Start ==================================== -->
    <section class="instructor py-120 position-relative z-1">
        <img src="assets/public/images/shapes/shape2.png" alt="" class="shape one animation-scalation">
        <img src="assets/public/images/shapes/shape6.png" alt="" class="shape six animation-scalation">

        <div class="container">
            <div class="section-heading text-center">
                <h2 class="mb-24">Наши разработчики</h2>
                <p class="">Присоеденяйтесь к разработчикам, исследуйте, создовайте и раелизуйте свои идеи</p>
            </div>
            <div class="row gy-4">
                @foreach($users as $user)
                <div class="col-lg-4 col-sm-6">
                    <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30">
                        <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                            <a href="instructor-details.html" class="w-100 h-100 d-flex align-items-end">
                                <img src="assets/public/images/thumbs/instructor-img4.png" alt="Course Image" class="scale-hover-item__img rounded-12 cover-img transition-2">
                            </a>
                        </div>
                        <div class="p-24 position-relative">
                            <div class="social-infos">
                                <ul class="social-list flex-align flex-column gap-12 mb-12">
    <li class="social-list__item">
        <a href="https://www.facebook.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-facebook-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.twitter.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"> <i class="ph-bold ph-twitter-logo"></i></a>
    </li>
    <li class="social-list__item">
        <a href="https://www.linkedin.com" class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i class="ph-bold ph-instagram-logo"></i></a>
    </li>
</ul>
                                <button class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                    <i class="ph-bold ph-plus"></i>
                                </button>
                            </div>
                            <div class="">
                                <h4 class="mb-28 pb-24 border-bottom border-neutral-50 mb-24 border-dashed border-0">
                                    <a href="instructor-details.html" class="link text-line-2">{{$user->name}}</a>
                                </h4>
                                <div class="flex-between gap-8 flex-wrap mb-16">
                                    <div class="flex-align gap-8">
                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-lightbulb"></i></span>
                                        <span class="text-neutral-700 text-lg fw-medium">
                                            @if($user->description)
                                                {{$user->description}}
                                            @else
                                                Не указано
                                            @endif
                                        </span>
                                    </div>
                                    <div class="flex-align gap-8">
                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                        <span class="text-neutral-700 text-lg fw-medium">
                                            @if($user->nickname)
                                                {{$user->nickname}}
                                            @else
                                                Не указано
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-between gap-8 flex-wrap">
                                    <div class="flex-align gap-8">
                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                        <span class="text-neutral-700 text-lg fw-medium">
                                            @if($user->social_links)
                                                {{$user->social_links}}
                                            @else
                                                Не указано
                                            @endif
                                        </span>
                                    </div>
                                    <div class="flex-align gap-4">
                                        <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-lg text-neutral-700">
                                            4.6
                                            <span class="text-neutral-100">(2.4k)</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                <a href="instructor-details.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                                    View Profile
                                    <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{$users->onEachSide(2)->links('vendor.pagination.custom')}}
        </div>
    </section>
    <!-- ================================ Instructor Section End ==================================== -->


    <!-- ================================= Certificate Section Start ================================= -->
@include('public.layouts.certificate')
<!-- ================================= Certificate Section End ================================= -->

@endsection
