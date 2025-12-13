<section class="explore-course py-120 bg-main-25 position-relative z-1">
    <img src="assets/public/images/shapes/shape2.png" alt="" class="shape six animation-scalation">

    <div class="container">
        <div class="section-heading text-center style-flex gap-24">
            <div class="section-heading__inner text-start">
                <h2 class="mb-0 wow bounceIn">Исследуй тысячи проектов, созданных пользователями</h2>
            </div>
            <div class="section-heading__content">
                <p class="section-heading__desc text-start mt-0 text-line-2 wow bounceInUp">Добро пожаловать в каталог проектов, где пользователи делятся своими работами и идеями</p>
                <a href="{{route('project-list-all')}}" class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1" tabindex="0">
                    Смотреть все проекты
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="nav-tab-wrapper bg-white p-16 mb-40"  data-aos="zoom-out">
            <ul class="nav nav-pills common-tab gap-16" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8 active" id="pills-categories-tab" data-bs-toggle="pill" data-bs-target="#pills-categories" type="button" role="tab" aria-controls="pills-categories" aria-selected="true">
                        <i class="text-xl d-flex ph-bold ph-squares-four"></i>
                        Все категории
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design" aria-selected="false">
                        <i class="text-xl d-flex ph-bold ph-magic-wand"></i>
                        Дизайн
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-programming-tab" data-bs-toggle="pill" data-bs-target="#pills-programming" type="button" role="tab" aria-controls="pills-programming" aria-selected="false">
                        <i class="text-xl d-flex ph-bold ph-code"></i>
                        Programming
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-webDesign-tab" data-bs-toggle="pill" data-bs-target="#pills-webDesign" type="button" role="tab" aria-controls="pills-webDesign" aria-selected="false">
                        <i class="text-xl d-flex ph-bold ph-code"></i>
                        Веб-дизайн
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-Academic-tab" data-bs-toggle="pill" data-bs-target="#pills-Academic" type="button" role="tab" aria-controls="pills-Academic" aria-selected="false">
                        <i class="text-xl d-flex ph-bold ph-graduation-cap"></i>
                        Academic
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8" id="pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing" aria-selected="false">
                        <i class="text-xl d-flex ph-bold ph-chart-pie-slice"></i>
                        Маркетинг
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-categories" role="tabpanel" aria-labelledby="pills-categories-tab" tabindex="0">
                <div class="row gy-4">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200" id="project-container">
                        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                <a href="course-details.html" class="w-100 h-100">
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
                            <div class="course-item__content">
                                <div class="">
                                    <h4 class="mb-28">
                                        <a href="{{route('project-details', $project->id)}}" class="link text-line-2">{{$project->title}}</a>
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
                                    <a href="{{route('project-details', $project->id)}}" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                                        Смотреть проект
                                        <i class="ph ph-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</section>

<div class="explore-course py-120 bg-main-25 position-relative z-1">
    <div class="section-heading text-center style-flex gap-24">
        <div class="container section-heading__content">
            <a href="{{route('project-list')}}" class="btn btn-main rounded-pill flex-align gap-8" tabindex="0">
                Смотреть проекты
                <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
