        <!-- Search -->
        <div id="search-main" class="navbar-search">
            <div class="container">
                <!-- Search form -->
                <form class="navbar-search-form" role="form">
                    <div class="form-group">
                        <div class="input-group input-group-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="navbar-search-suggestions">
                    <h6>Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>Neon Classic</span> in Watches
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>Neon sport</span> in Watches
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>Neon pods</span> in Audio
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>Straps</span> in Accessories
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>Dock</span> in Accessories
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Topbar -->
        <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
            <div class="container">
                <div class="navbar-nav align-items-center">
                    <div class="d-none d-lg-inline-block">
                        <span class="navbar-text mr-3">Smart Watch Pro</span>
                    </div>
                    <div>
                        <ul class="nav">
                            <li class="nav-item dropdown ml-lg-2 dropdown-animate" data-toggle="hover">
                                <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img alt="Image placeholder" src="{{ asset('img/icons/flags/us.svg')}}">
                                    <span class="d-none d-lg-inline-block">United States</span>
                                    <span class="d-lg-none">EN</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item">
                                        <img alt="Image placeholder" src="{{ asset('img/icons/flags/es.svg')}}">Spanish</a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="Image placeholder" src="{{ asset('img/icons/flags/ro.svg')}}">Romanian</a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="Image placeholder" src="{{ asset('img/icons/flags/gr.svg')}}">Greek</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="support">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-action="search-open" data-target="#search-main"><i class="far fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('cart')}}"><i class="far fa-shopping-cart"></i></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="login.html"><i class="far fa-user-circle"></i></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main navbar -->

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark"
            id="navbar-main">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="#">
                    <img alt="Image placeholder" src="{{ asset('img/brand/logo.png')}}" style="height: 50px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                    aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Products</a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder"
                                                src="{{ asset('img/brand/menu.1.jpg')}}" class="img-saturate"
                                                style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Landing Pages</h6>
                                                <p class="mb-0">A great point to start from.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{ asset('img/brand/menu.2.jpg')}}"
                                                class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Secondary Pages</h6>
                                                <p class="mb-0">Build your website with these demos.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{ asset('img/brand/menu.3.jpg')}}"
                                                class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Account Pages</h6>
                                                <p class="mb-0">Account management made easy.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="{{ asset('img/brand/menu.4.jpg')}}"
                                                class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Shop Pages</h6>
                                                <p class="mb-0">Explore the full ecommerce website flow.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button">About us</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">

                        <li class="nav-item mr-0">
                            <a href="#" target="_blank" class="nav-link d-lg-none">30% OFF: Buy now</a>
                            <a href="#" target="_blank"
                                class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                                <span class="btn-inner--text">30% OFF: Buy now</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>