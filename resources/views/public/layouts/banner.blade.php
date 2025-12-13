<section class="banner py-80 position-relative overflow-hidden">

    <img src="assets/public/images/shapes/shape1.png" alt="" class="shape one animation-rotation">
    <img src="assets/public/images/shapes/shape2.png" alt="" class="shape two animation-scalation">
    <img src="assets/public/images/shapes/shape3.png" alt="" class="shape three animation-walking">
    <img src="assets/public/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
    <img src="assets/public/images/shapes/shape5.png" alt="" class="shape five animation-walking">

    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-xl-6">
                <div class="banner-content pe-md-4">
                    <div class="flex-align gap-8 mb-16" data-aos="fade-down">
                        <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                        <h5 class="text-main-600 mb-0"> Создавай и делись проектами</h5>
                    </div>

                    <h1 class="display2 mb-24 wow bounceInLeft">Находи <span class="text-main-two-600 wow bounceInRight" data-wow-duration="2s" data-wow-delay=".5s">интересные</span>
                        проекты, вдохновляйся <span class="text-main-600 wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">идеями</span>
                    </h1>
                    <p class="text-neutral-500 text-line-2 wow bounceInUp">Добро пожаловать на платформу проектовб где каждый может публиковать свои работы, делиться идеями и находить вдохновение...</p>
                    <div class="buttons-wrapper flex-align flex-wrap gap-24 mt-40">
                        <a href="{{route('project-list')}}" class="btn btn-main rounded-pill flex-align gap-8" data-aos="fade-right">
                            Смотреть проекты
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </a>
                        <a href="{{route('about-us')}}" class="btn btn-outline-main rounded-pill flex-align gap-8" data-aos="fade-left">
                            О нас
                            <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="banner-thumb position-relative">
                    <img src="{{asset('storage/banner.png')}}" class="banner-thumb__img rounded-12 wow bounceIn" data-wow-duration="3s" data-wow-delay=".5s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening data-tilt-scale="1.02">

                    <img src="assets/public/images/shapes/curve-arrow.png" alt="" class="curve-arrow position-absolute">

                    <div class="banner-box one px-24 py-12 rounded-12 bg-white fw-medium box-shadow-lg d-inline-block" data-aos="fade-down">
                        <span class="text-main-600">{{ $projects->total() }}+</span> Опубликованных проектов
                        <div class="enrolled-students mt-12">
                            @foreach($projects as $project)
                            <img src="{{asset('storage/' . $project->image)}}" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            @endforeach
                        </div>
                    </div>
                    <div class="banner-box two px-24 py-12 rounded-12 bg-white fw-medium box-shadow-lg flex-align d-inline-flex gap-16" data-aos="fade-up">
                        <span class="banner-box__icon flex-shrink-0 w-48 h-48 bg-purple-400 text-white text-2xl flex-center rounded-circle"><i class="ph ph-watch"></i></span>
                        <div>
                            <h6 class="mb-4">Новые проекты</h6>
                            <span class="">Ежедневно</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
