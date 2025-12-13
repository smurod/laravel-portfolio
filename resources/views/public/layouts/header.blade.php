<header class="header">
    <div class="container container--xl">
        <nav class="header-inner flex-between gap-8">

            <div class="header-content-wrapper flex-align flex-grow-1">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="index.html" class="link">
                        <img src="{{asset('storage/logo.png')}}" alt="Logo">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Select Start -->
                <div class="d-sm-block d-none">
                    <div class="header-select border border-neutral-30 bg-main-25 rounded-pill position-relative">
                    </div>
                </div>
                <!-- Select End -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">

                    <ul class="nav-menu flex-align ">
                        <li class="activePage">
                            <a href="{{route('home')}}" class="nav-menu__link">Главная страница</a>
                        </li>
                        <li class="">
                            <a href="{{route('project-list')}}" class="nav-menu__link">Проекты</a>

                        </li>

                        <li class="">
                            <a href="{{route('developers')}}" class="nav-menu__link">Разработчики</a>

                        </li>

                        <li class="">
                            <a href="{{route('about-us')}}" class="nav-menu__link">О нас</a>

                        </li>

                        <li class="nav-menu__item">
                            <a href="{{route('contact-us')}}" class="nav-menu__link">Связатся с нами</a>
                        </li>
                    </ul>
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">
                <form action="#" class="search-form position-relative d-xl-block d-none">
                    <input type="text" class="common-input rounded-pill bg-main-25 pe-44 border-neutral-30" placeholder="Search...">
                    <button type="submit" class="w-36 h-36 bg-main-600 hover-bg-main-700 rounded-circle flex-center text-md text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                        <i class="ph-bold ph-magnifying-glass"></i>
                    </button>
                </form>
                <a href="{{route('login')}}" class="info-action w-52 h-52 bg-main-25 hover-bg-main-600 border border-neutral-30 rounded-circle flex-center text-2xl text-neutral-500 hover-text-white hover-border-main-600">
                    <i class="ph ph-user-circle"></i>
                </a>
                <button type="button" class="toggle-mobileMenu d-lg-none text-neutral-200 flex-center">
                    <i class="ph ph-list"></i>
                </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>
