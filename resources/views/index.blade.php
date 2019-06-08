<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
</head>

<body>
    <header class="header-transparent" id="header-main">
        @include('layouts/header')
    </header>

    <main>
        <section class="slice slice-lg bg-cover bg-size--cover"
            style="background-image: url('{{ asset('img/backgrounds/banner.1.jpg')}}');">
            <div class="container py-lg">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="h1 text-white">Neon 2 Classic</h2>
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-normal">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-normal">Products</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-normal">Neon 2 Classic</a>
                            </li>
                        </ol>
                        <p class="lead text-white mt-4">Designed for all kinds of indoor and outdoor activities. Built
                            for your kind of lifestyle</p>
                        <a href="{{url('/product/Neon 2/')}}" class="btn btn-white btn-circle mt-4">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="shape-container" data-shape-style="wavify" data-shape-position="bottom">
                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    class="shape-fill-white" data-toggle="wavify">
                    <defs></defs>
                    <path d="" class="shape-fill-white" />
                </svg>
            </div>
        </section>

        <section class="slice slice-lg" id="sct-products">
            <div class="container">
                @if($products && count($products) > 0)
                    <div class="row">
                    @foreach($products as $item)
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card card-product no-border shadow shadow--hover">
                                <div class="card-image">
                                    <a href="{{url('/product/'.$item->title)}}">
                                        <img alt="Image placeholder" src="{{ asset($item->image_path)}}" class="img-center shop-img">
                                    </a>

                                    @if($item->label)
                                    <span class="ribbon ribbon-right ribbon-primary rounded-circle">{{$item->label}}</span>
                                    @endif
                                </div>
                                <div class="card-body pt-0 text-center">
                                    <a href="{{url('/product/'.$item->title)}}" class="card-title">{{ $item->title }}</a>
                                    <span class="card-price">${{$item->price}} USD</span>
                                </div>
                                <div class="card-product-actions" data-animation-in="slideInLeft"
                                    data-animation-out="slideOutLeft">
                                    <button type="button" class="btn-product-action" data-toggle="tooltip"
                                        data-original-title="Add to cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                    <button type="button" class="btn-product-action" data-toggle="tooltip"
                                        data-original-title="Wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @endif
<!-- 
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/watch-black.1.png')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-primary rounded-circle">New</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/watch-rose.2png.png')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-danger rounded-circle">30%</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/watch-black.2.png')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-dark rounded-circle">Top</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/watch-black.3.png')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-warning rounded-circle">10%</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/watch-silver.3.png')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-danger rounded-circle">50%</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/audio-black.1.jpg')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-primary rounded-circle">New</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/pods-black.1.png')}}"
                                        class="img-center shop-img">
                                </a>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/dock-black-1.jpg')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-dark rounded-circle">Top</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{ asset('img/brand/strap-black-1.jpg')}}"
                                        class="img-center shop-img">
                                </a>

                                <span class="ribbon ribbon-right ribbon-primary rounded-circle">New</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft"
                                data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip"
                                    data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{$products->links()}}
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">6</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-right"></i></a>
                        </li> -->
                    </ul>
                </nav>


            </div>
        </section>


        <section class="slice slice-lg bg-gradient-warning">
            <div class="position-absolute bottom-0 col-lg-6 col-xl-5 d-none d-lg-block">
                <img alt="Image placeholder" src="{{ asset('img/prv/shop-hero-model.png')}}" class="img-fluid">
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xl-7 text-center text-lg-left">
                        <div class="mb-5">
                            <h1 class="text-white">Subscribe for weekly news</h1>
                            <p class="lead text-white mt-2">You get all News and Updates on Tickie products Before they get launched. We promise we don't spam.</p>
                        </div>
                        <form>
                            <div class="input-group input-group-lg mb-3">
                                <input type="text" class="form-control" placeholder="Enter your email address"
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="button">Subcribe now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </main>


    <footer class="footer footer-light bg-white">
        @include('layouts/footer')
    </footer>

    @include('layouts/scripts')

</body>

</html>