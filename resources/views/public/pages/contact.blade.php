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
                    <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Связатся с нами</h1>
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
                            <span class="text-main-two-600"> Контакты </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcrumb End Here ==================== -->

    <!-- =============================== Contact Section Start ================================== -->
    <section class="contact py-120">
        <div class="container">
            <div class="section-heading text-center">
            <div class="flex-align d-inline-flex gap-8 mb-16">
                <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                <h5 class="text-main-600 mb-0">Связатся с нами</h5>
            </div>
            <h2 class="mb-24">Напишите нам</h2>
            <p class="">Наша платформа создана для демонстрации ваших проектов, объеденяя инновации, качество и открытость</p>
        </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="contact-item bg-main-25 border border-neutral-30 rounded-12 px-32 py-40 d-flex align-items-start gap-24 hover-bg-main-600 transition-2 hover-border-main-600">
                        <span class="contact-item__icon w-60 h-60 text-32 flex-center rounded-circle bg-main-600 text-white flex-shrink-0">
                            <i class="ph ph-map-pin-line"></i>
                        </span>
                        <div class="flex-grow-1">
                            <h4 class="mb-12">Наш оффис</h4>
                            <p class="text-neutral-500">2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
                            <a href="javascript:void(0)" class="text-main-600 fw-semibold text-decoration-underline mt-16">Find Location</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-item bg-main-25 border border-neutral-30 rounded-12 px-32 py-40 d-flex align-items-start gap-24 hover-bg-main-600 transition-2 hover-border-main-600">
                        <span class="contact-item__icon w-60 h-60 text-32 flex-center rounded-circle bg-main-600 text-white flex-shrink-0">
                            <i class="ph ph-envelope-open"></i>
                        </span>
                        <div class="flex-grow-1">
                            <h4 class="mb-12">Почта поддержки</h4>
                            <p class="text-neutral-500">infoexample@gmail.com</p>
                            <p class="text-neutral-500">example@gmail.com</p>
                            <a href="mailto:infoexample@gmail.com" class="text-main-600 fw-semibold text-decoration-underline mt-16">Get In Touch</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-item bg-main-25 border border-neutral-30 rounded-12 px-32 py-40 d-flex align-items-start gap-24 hover-bg-main-600 transition-2 hover-border-main-600">
                        <span class="contact-item__icon w-60 h-60 text-32 flex-center rounded-circle bg-main-600 text-white flex-shrink-0">
                            <i class="ph ph-phone-call"></i>
                        </span>
                        <div class="flex-grow-1">
                            <h4 class="mb-12">Номера телефонов</h4>
                            <p class="text-neutral-500">(505) 555-0125</p>
                            <p class="text-neutral-500">(406) 555-0120</p>
                            <a href="tel:(406)555-0120" class="text-main-600 fw-semibold text-decoration-underline mt-16">Contact Us Today!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Contact Section End ================================== -->

    <!-- ====================== Contact Form Section Start ========================= -->
    <section class="contact-form-section py-240 bg-main-25 position-relative z-1">
        <img src="assets/public/images/bg/wave-bg.png" alt="" class="position-absolute top-0 start-0 w-100 h-100 z-n1 d-lg-block d-none">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-xl-7 col-lg-6 pe-lg-5">
                    <div class="mb-40 md-xl-5">
                        <div class="flex-align d-inline-flex gap-8 mb-16">
                            <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                            <h5 class="text-main-600 mb-0">Contact Us</h5>
                        </div>
                        <h2 class="mb-24">Есть вопросы? Свяжитесь с нашей командой</h2>
                        <p class="text-neutral-500 text-line-3 max-w-636">Мы создаём платформу, где разработчики и дизайнеры могут делиться своими проектами, находить единомышленников и работодателей. Наша цель — объединить инновации, качество и открытость, чтобы каждый мог показать свои работы и развиваться вместе с сообществом.</p>
                    </div>
                    <div class="flex-align gap-40 flex-wrap">
                        <div class="enrolled-students mt-12 d-block">
                            <img src="assets/public/images/thumbs/enroll-student-img1.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/public/images/thumbs/enroll-student-img2.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/public/images/thumbs/enroll-student-img3.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/public/images/thumbs/enroll-student-img4.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/public/images/thumbs/enroll-student-img5.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            <img src="assets/public/images/thumbs/enroll-student-img6.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                        </div>
                        <div class="">
                            <ul class="flex-align gap-4 mb-10">
                                <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star-half"></i></li>
                            </ul>
                            <span class="text-neutral-700 fw-medium"> 2.5k+ reviews (4.95 of 5)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="p-24 bg-white rounded-12 box-shadow-md">
                        <div class="border border-neutral-30 rounded-8 bg-main-25 p-24">
                            <form action="#" id="commentForm">
                                <h4 class="mb-0">Напишите нам</h4>
                                <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                                <div class="mb-24">
                                    <label for="name" class="text-neutral-700 text-lg fw-medium mb-12">Имя </label>
                                    <input type="text" class="common-input rounded-pill border-transparent focus-border-main-600" id="name" placeholder="Введите ваше имя...">
                                </div>
                                <div class="mb-24">
                                    <label for="email" class="text-neutral-700 text-lg fw-medium mb-12">Email </label>
                                    <input type="email" class="common-input rounded-pill border-transparent focus-border-main-600" id="email" placeholder="Введите E-mail...">
                                </div>
                                <div class="mb-24">
                                    <label for="phone" class="text-neutral-700 text-lg fw-medium mb-12">Номер телефона </label>
                                    <input type="tel" class="common-input rounded-pill border-transparent focus-border-main-600" id="phone" placeholder="Введите ваш номер телефона...">
                                </div>
                                <div class="mb-24">
                                    <label for="desc" class="text-neutral-700 text-lg fw-medium mb-12">Сообщение</label>
                                    <textarea id="desc" class="common-input rounded-24 border-transparent focus-border-main-600 h-110" placeholder="Опишите вашу проблему/вопрос..."></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="submit" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                        Отправить письмо
                                        <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================== Contact Form Section End ========================= -->


@endsection
