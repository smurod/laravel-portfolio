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
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Подробности проекта</h1>
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
                            <span class="text-main-two-600"> Детали проекта </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== Course Details Section Start ============================== -->
    <section class="course-details py-120">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-8">
                    <!-- Details Content Start -->
                    <div class="course-details__content border border-neutral-30 rounded-12 bg-main-25 p-12">
                        <img src="{{asset('storage/' . $project->image)}}" alt="" class="rounded-8 cover-img">
                        <div class="p-20">
                            <h2 class="mt-24 mb-24">{{$project->title}}:</h2>
                            <p class="text-neutral-700">{{$project->description}}.</p>
                        </div>
                    </div>
                    <!-- Details Content End -->

                    <!-- Curriculum Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <h5 class="mb-0">Curriculum</h5>
                        <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                        <div class="accordion common-accordion style-three" id="accordionExampleTwo">

                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneTwo" aria-expanded="true" aria-controls="collapseOneTwo">
                                    Introduction to Python
                                </button>
                              </h2>
                              <div id="collapseOneTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleTwo">
                                <div class="accordion-body p-0">
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">What is Python?</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Setting up your Python environment</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Writing your first Python program</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Understanding Python syntax and structure</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                                    Will I receive a certificate upon completion?
                                </button>
                              </h2>
                              <div id="collapseTwoTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleTwo">
                                <div class="accordion-body p-0">
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">What is Python?</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Setting up your Python environment</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Writing your first Python program</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Understanding Python syntax and structure</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeTwo" aria-expanded="false" aria-controls="collapseThreeTwo">
                                    What if I have questions during the course?
                                </button>
                              </h2>
                              <div id="collapseThreeTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleTwo">
                                <div class="accordion-body p-0">
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">What is Python?</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Setting up your Python environment</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Writing your first Python program</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Understanding Python syntax and structure</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourTwo" aria-expanded="false" aria-controls="collapseFourTwo">
                                    Can I access the course materials after completion?
                                </button>
                              </h2>
                              <div id="collapseFourTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleTwo">
                                <div class="accordion-body p-0">
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">What is Python?</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Setting up your Python environment</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Writing your first Python program</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Understanding Python syntax and structure</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveTwo" aria-expanded="false" aria-controls="collapseFiveTwo">
                                    Do I need any prior programming experience to take this course?
                                </button>
                              </h2>
                              <div id="collapseFiveTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleTwo">
                                <div class="accordion-body p-0">
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">What is Python?</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Setting up your Python environment</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Writing your first Python program</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0)" class="curriculam-item flex-between gap-16 text-neutral-500 fw-medium hover-text-main-600">
                                        <span class="flex-align gap-12">
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                            <span class="text-line-1">Understanding Python syntax and structure</span>
                                        </span>
                                        <span class="flex-align gap-12 flex-shrink-0">
                                            30:25
                                            <i class="text-xl d-flex ph-bold ph-video-camera"></i>
                                        </span>
                                    </a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- Curriculum End -->

                    <!-- FAQs Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <h5 class="mb-0">FAQs</h5>
                        <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                        <div class="accordion common-accordion style-two" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long is the course?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-body__desc">You can reach out to the instructor via the course forum or email. We also have weekly Q&A sessions where you can get your questions answered live.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Will I receive a certificate upon completion?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-body__desc">You can reach out to the instructor via the course forum or email. We also have weekly Q&A sessions where you can get your questions answered live.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What if I have questions during the course?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-body__desc">You can reach out to the instructor via the course forum or email. We also have weekly Q&A sessions where you can get your questions answered live.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I access the course materials after completion?
                                </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-body__desc">You can reach out to the instructor via the course forum or email. We also have weekly Q&A sessions where you can get your questions answered live.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do I need any prior programming experience to take this course?
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="accordion-body__desc">You can reach out to the instructor via the course forum or email. We also have weekly Q&A sessions where you can get your questions answered live.</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQs End -->

                    <!-- Instructor Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <div class="d-flex align-items-start flex-wrap flex-md-nowrap gap-32">
                            <img src="assets/public/images/thumbs/details-instructor.png" alt="" class="">
                            <div class="">
                                <div class="flex-between gap-16">
                                    <h4 class="mb-0">Denial Lie</h4>
                                    <div class="dropdown flex-shrink-0">
                                        <button class="text-gray-600 text-xl d-flex rounded-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ph-fill ph-dots-three-outline"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                            <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                                <div class="card-body p-12">
                                                    <div class="max-h-200 overflow-y-auto scroll-sm pe-8">
                                                        <ul>
                                                            <li class="mb-0">
                                                                <button type="button" class="delete-item-btn py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 w-100 rounded-8 fw-normal text-xs d-block text-start">
                                                                    <span class="text">Delete</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block border border-neutral-30 my-20 border-dashed"></span>
                                <div class="d-flex flex-column gap-16 flex-wrap max-w-340">
                                    <div class="flex-between gap-8">
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-lightbulb"></i></span>
                                            <span class="text-neutral-700 text-lg fw-medium">UI/UX Designer</span>
                                        </div>
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                            <span class="text-neutral-700 text-lg fw-medium">12 Course</span>
                                        </div>
                                    </div>
                                    <div class="flex-between gap-8 flex-wrap">
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                            <span class="text-neutral-700 text-lg fw-medium">36k Students</span>
                                        </div>
                                        <div class="flex-align gap-4">
                                            <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            <span class="text-lg text-neutral-700 fw-semibold">
                                                4.7
                                                <span class="text-neutral-100 fw-normal">(6.4k)</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block border border-neutral-30 my-20 border-dashed"></span>
                                <p class="text-neutral-500">Offer brief biographies or profiles of each instructor. These may include details about their careers, achievements, and interests.</p>
                                <span class="d-block border border-neutral-30 my-20 border-dashed"></span>
                                <ul class="social-list flex-align gap-16">
                                    <li class="social-list__item">
                                        <a href="https://www.facebook.com" class="text-main-600 text-xl hover-text-white w-40 h-40 rounded-circle border border-main-600 hover-bg-main-600 flex-center"><i class="ph-bold ph-facebook-logo"></i></a>
                                    </li>
                                    <li class="social-list__item">
                                        <a href="https://www.twitter.com" class="text-main-600 text-xl hover-text-white w-40 h-40 rounded-circle border border-main-600 hover-bg-main-600 flex-center"> <i class="ph-bold ph-twitter-logo"></i></a>
                                    </li>
                                    <li class="social-list__item">
                                        <a href="https://www.linkedin.com" class="text-main-600 text-xl hover-text-white w-40 h-40 rounded-circle border border-main-600 hover-bg-main-600 flex-center"><i class="ph-bold ph-instagram-logo"></i></a>
                                    </li>
                                    <li class="social-list__item">
                                        <a href="https://www.pinterest.com" class="text-main-600 text-xl hover-text-white w-40 h-40 rounded-circle border border-main-600 hover-bg-main-600 flex-center"><i class="ph-bold ph-pinterest-logo"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Instructor End -->

                    <!-- Review Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <h5 class="mb-0">Average Reviews</h5>
                        <span class="d-block border border-neutral-30 my-32 border-dashed"></span>

                        <div class="d-flex flex-sm-row flex-column gap-36">
                            <div class="rounded-16 px-40 py-24 flex-center flex-column flex-shrink-0 text-center bg-main-600 text-white">
                                <h2 class="mb-8 text-white">4.8</h2>
                                <div class="flex-center gap-4">
                                    <span class="text-15 fw-medium text-white d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-15 fw-medium text-white d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-15 fw-medium text-white d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-15 fw-medium text-white d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-15 fw-medium text-white d-flex"><i class="ph-fill ph-star-half"></i></span>
                                </div>
                                <span class="mt-8 text-gray-500">26 Rating</span>
                            </div>

                            <div class="flex-grow-1">
                                <div class="flex-align gap-20 mb-8">
                                    <div class="flex-align gap-8">
                                        <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                    </div>
                                    <div class="progress w-100 bg-white rounded-pill h-12" role="progressbar" aria-label="Basic example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 90%"></div>
                                    </div>
                                    <span class="text-gray-900 flex-shrink-0">90%</span>
                                </div>
                                <div class="flex-align gap-20 mb-8">
                                    <div class="flex-align gap-8">
                                        <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                    </div>
                                    <div class="progress w-100 bg-white rounded-pill h-12" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 75%"></div>
                                    </div>
                                    <span class="text-gray-900 flex-shrink-0">75%</span>
                                </div>
                                <div class="flex-align gap-20 mb-8">
                                    <div class="flex-align gap-8">
                                        <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                    </div>
                                    <div class="progress w-100 bg-white rounded-pill h-12" role="progressbar" aria-label="Basic example" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 67%"></div>
                                    </div>
                                    <span class="text-gray-900 flex-shrink-0">67%</span>
                                </div>
                                <div class="flex-align gap-20 mb-8">
                                    <div class="flex-align gap-8">
                                        <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                    </div>
                                    <div class="progress w-100 bg-white rounded-pill h-12" role="progressbar" aria-label="Basic example" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 44%"></div>
                                    </div>
                                    <span class="text-gray-900 flex-shrink-0">44%</span>
                                </div>
                                <div class="flex-align gap-20">
                                    <div class="flex-align gap-8">
                                        <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                    </div>
                                    <div class="progress w-100 bg-white rounded-pill h-12" role="progressbar" aria-label="Basic example" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 21%"></div>
                                    </div>
                                    <span class="text-gray-900 flex-shrink-0">21%</span>
                                </div>
                            </div>
                        </div>
                        <span class="d-block border border-neutral-30 my-32 border-dashed"></span>
                        <div class="flex-between gap-16 flex-wrap mb-24">
                            <h6 class="mb-0">All Reviews</h6>
                            <div class="flex-align gap-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                                    <select class="form-select ps-20 pe-28 py-8 fw-medium rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                                        <option value="1">Newest</option>
                                        <option value="1">Trending</option>
                                        <option value="1">Popular</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Review Item -->
                        <div class="border border-neutral-30 rounded-12 bg-white p-32">
                            <div class="flex-align gap-8 mb-16">
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star-half"></i></span>
                            </div>
                            <p class="text-neutral-700">"This course was fantastic! The instructor's explanations were clear and concise, making it easy to understand even the more complex topics."</p>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                            <div class="flex-align gap-24">
                                <img src="assets/public/images/thumbs/reviewer-img1.png" alt="" class="w-60 h-60 rounded-circle cover-img">
                                <div class="">
                                    <h6 class="text-xl mb-8 fw-medium">Mary Johnson</h6>
                                    <span class="text-neutral-700 text-sm">Project Manager</span>
                                </div>
                            </div>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>

                            <div class="flex-align flex-wrap gap-40">
                                <button type="button" class="like-button flex-align gap-8 text-neutral-500 hover-text-main-600">
                                    <span class="like-button__icon text-xl d-flex"><i class="ph-bold ph-thumbs-up"></i></span>
                                    <span class="like-button__text">178</span>
                                </button>
                                <a href="#commentForm" class="flex-align gap-8 text-neutral-500 hover-text-main-600">
                                    <i class="text-xl d-flex ph-bold ph-chat-centered-text"></i>
                                    Reply
                                </a>
                            </div>
                            <div class="flex-align gap-20 mt-24">
                                <img src="assets/public/images/thumbs/reviewer-img2.png" alt="" class="w-60 h-60 rounded-circle cover-img">
                                <input type="text" class="common-input rounded-pill bg-main-25 border-neutral-30 py-16" placeholder="Join the discussion...">
                            </div>
                        </div>
                        <!-- Review Item -->

                        <!-- Review Item -->
                        <div class="border border-neutral-30 rounded-12 bg-white p-32 mt-24">
                            <div class="flex-align gap-8 mb-16">
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star-half"></i></span>
                            </div>
                            <p class="text-neutral-700">"Great course for beginners and advanced learners alike. The projects were particularly helpful in applying what I learned. Highly recommend!"</p>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                            <div class="flex-align gap-24">
                                <img src="assets/public/images/thumbs/reviewer-img2.png" alt="" class="w-60 h-60 rounded-circle cover-img">
                                <div class="">
                                    <h6 class="text-xl mb-8 fw-medium">Alice Brown</h6>
                                    <span class="text-neutral-700 text-sm">Software Developer</span>
                                </div>
                            </div>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>

                            <div class="flex-align flex-wrap gap-40">
                                <button type="button" class="like-button flex-align gap-8 text-neutral-500 hover-text-main-600">
                                    <span class="like-button__icon text-xl d-flex"><i class="ph-bold ph-thumbs-up"></i></span>
                                    <span class="like-button__text">178</span>
                                </button>
                                <a href="#commentForm" class="flex-align gap-8 text-neutral-500 hover-text-main-600">
                                    <i class="text-xl d-flex ph-bold ph-chat-centered-text"></i>
                                    Reply
                                </a>
                            </div>
                        </div>
                        <!-- Review Item -->

                        <!-- Review Item -->
                        <div class="border border-neutral-30 rounded-12 bg-white p-32 mt-24">
                            <div class="flex-align gap-8 mb-16">
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star-half"></i></span>
                            </div>
                            <p class="text-neutral-700">"Dr. Smith is an amazing instructor. Her real-world experience and teaching style made this course one of the best I've ever taken."</p>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                            <div class="flex-align gap-24">
                                <img src="assets/public/images/thumbs/reviewer-img3.png" alt="" class="w-60 h-60 rounded-circle cover-img">
                                <div class="">
                                    <h6 class="text-xl mb-8 fw-medium">David Wilson</h6>
                                    <span class="text-neutral-700 text-sm">Ethical Hacker</span>
                                </div>
                            </div>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>

                            <div class="flex-align flex-wrap gap-40">
                                <button type="button" class="like-button flex-align gap-8 text-neutral-500 hover-text-main-600">
                                    <span class="like-button__icon text-xl d-flex"><i class="ph-bold ph-thumbs-up"></i></span>
                                    <span class="like-button__text">178</span>
                                </button>
                                <a href="#commentForm" class="flex-align gap-8 text-neutral-500 hover-text-main-600">
                                    <i class="text-xl d-flex ph-bold ph-chat-centered-text"></i>
                                    Reply
                                </a>
                            </div>
                        </div>
                        <!-- Review Item -->

                        <button type="button" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                            See All Reviews
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </button>
                    </div>
                    <!-- Review End -->

                    <!-- Review Form Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <form action="#" id="commentForm">
                            <h5 class="mb-0">Write a Review</h5>
                            <span class="d-block border border-neutral-30 my-32 border-dashed"></span>
                            <div class="mb-24">
                                <label for="name" class="text-neutral-700 text-lg fw-medium mb-12">Name </label>
                                <input type="text" class="common-input rounded-pill" id="name" placeholder="Enter Name...">
                            </div>
                            <div class="mb-24">
                                <label for="email" class="text-neutral-700 text-lg fw-medium mb-12">Email </label>
                                <input type="email" class="common-input rounded-pill" id="email" placeholder="Enter Email...">
                            </div>
                            <div class="mb-24">
                                <label class="text-neutral-700 text-lg fw-medium mb-12">Star Reviews </label>

                                <div id="half-star-rating">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                        <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                        <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                        <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                        <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                                    </div>
                                </div>

                            </div>
                            <div class="mb-24">
                                <label for="desc" class="text-neutral-700 text-lg fw-medium mb-12">Your Question </label>
                                <textarea id="desc" class="common-input rounded-24" placeholder="Write you question..."></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                    Submit Review
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Review Form End -->
                </div>
                <div class="col-xl-4">
                    <div class="course-details__sidebar border border-neutral-30 rounded-12 bg-white p-8">
                        <div class="border border-neutral-30 rounded-12 bg-main-25 p-24 bg-main-25">
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-normal">Название проекта:</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">{{$project->title}}</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-video-camera"></i></span>
                                    <span class="text-neutral-700 text-lg fw-normal">Статус:</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">{{$project->status->name}}</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph ph-globe"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Стек технологий:</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">{{$project->tech_stack}}</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-certificate"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Ссылки:</span><br>

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
                                </div>
                                <span class="text-lg fw-medium text-neutral-700"></span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-user-circle"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Разработчик: </span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">{{$project->user->name}}</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-star"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Понравилось:</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">--</span>
                            </div>

                            <a href="contact.html" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                See All Reviews
                                <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                            </a>
                            <div class="mt-24 flex-center gap-24">
                                <button type="button" class="w-44 h-44 flex-center bg-white rounded-circle text-main-600 text-lg hover-text-white hover-bg-main-600 transition-1">
                                    <i class="ph-bold ph-shopping-cart-simple"></i>
                                </button>
                                <div class="dropdown flex-shrink-0">
                                    <button class="w-44 h-44 flex-center bg-white rounded-circle text-main-600 text-lg hover-text-white hover-bg-main-600 transition-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ph-bold ph-share-network"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                        <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                            <div class="card-body p-16">
                                                <ul class="social-list flex-align gap-8">
                                                    <li class="social-list__item">
                                                        <a href="https://www.facebook.com" class="text-main-600 text-md hover-text-white w-36 h-36 rounded-circle border border-main-200 hover-bg-main-600 hover-border-main-600 flex-center"><i class="ph-bold ph-facebook-logo"></i></a>
                                                    </li>
                                                    <li class="social-list__item">
                                                        <a href="https://www.twitter.com" class="text-main-600 text-md hover-text-white w-36 h-36 rounded-circle border border-main-200 hover-bg-main-600 hover-border-main-600 flex-center"> <i class="ph-bold ph-twitter-logo"></i></a>
                                                    </li>
                                                    <li class="social-list__item">
                                                        <a href="https://www.linkedin.com" class="text-main-600 text-md hover-text-white w-36 h-36 rounded-circle border border-main-200 hover-bg-main-600 hover-border-main-600 flex-center"><i class="ph-bold ph-instagram-logo"></i></a>
                                                    </li>
                                                    <li class="social-list__item">
                                                        <a href="https://www.pinterest.com" class="text-main-600 text-md hover-text-white w-36 h-36 rounded-circle border border-main-200 hover-bg-main-600 hover-border-main-600 flex-center"><i class="ph-bold ph-pinterest-logo"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Course Details Section End ============================== -->


@endsection
