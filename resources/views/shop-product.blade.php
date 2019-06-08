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

        <header class="slice pt-lg d-flex align-items-end" style="margin-bottom: 100px; background-image: url('{{asset($product->banner)}}'); background-size: cover;">
            <div class="container pt-lg">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-5 mb-4 mb-lg-0">
                                <span class="h2 mb-0 text-white d-block">{{$product->title}}</span>
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-normal">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-normal">Product</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-normal">{{$product->title}}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <section class="slice slice-lg" id="sct-products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Product gallery -->
                        <div class="mb-5">
                            <a href="#">
                                <img alt="Image placeholder" src="{{asset($product->image_path)}}" class="img-fluid rounded shadow shadow-lg--hover">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="pl-lg-4" action="{{url('/product/add/'.$product->title)}}">
                            <!-- Product title -->
                            <h2 class="h5 text-capitalize">{{$product->title}}</h2>

                            <!-- Rating stars -->

                            <span class="static-rating static-rating-sm">
    
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star voted"></i>
                                <i class="star far fa-star"></i>
                                
                            </span>


                            <!-- Product description -->
                            <div class="mt-4">
                                <small class="text-dark font-weight-bold d-block mb-2">Description:</small>
                                <p class="text-sm lh-150">{{$product->description}}</p>
                            </div>

                            <!-- Size -->
                            <!-- <div class="mt-4">
                                <small class="d-block font-weight-bold text-dark mb-2">Size:</small>
                                <div class="d-flex">
                                    <div class="checkbox-alphanumeric">
                                        <input id="size-1" name="size" type="radio">
                                        <label for="size-1">37</label>
                                    </div>
                                    <div class="checkbox-alphanumeric">
                                        <input id="size-2" name="size" type="radio">
                                        <label for="size-2">38</label>
                                    </div>
                                    <div class="checkbox-alphanumeric">
                                        <input id="size-3" name="size" type="radio">
                                        <label for="size-3">39</label>
                                    </div>
                                    <div class="checkbox-alphanumeric">
                                        <input id="size-4" name="size" type="radio">
                                        <label for="size-4">40</label>
                                    </div>
                                    <div class="checkbox-alphanumeric">
                                        <input id="size-5" name="size" type="radio">
                                        <label for="size-5">41</label>
                                    </div>
                                    <div class="checkbox-alphanumeric">
                                        <input id="size-6" name="size" type="radio">
                                        <label for="size-6">42</label>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Color -->
                            <!-- <div class="mt-4">
                                <small class="d-block font-weight-bold text-dark mb-2">Color:</small>
                                <div class="d-flex">
                                    <div class="custom-color">
                                        <input id="color-1" name="size" type="radio">
                                        <label for="color-1" class="rounded-circle" style="background: #59ad46;"></label>
                                    </div>
                                    <div class="custom-color">
                                        <input id="color-2" name="size" type="radio">
                                        <label for="color-2" class="rounded-circle" style="background: #04050a;"></label>
                                    </div>
                                    <div class="custom-color">
                                        <input id="color-3" name="size" type="radio">
                                        <label for="color-3" class="rounded-circle" style="background: #62aedd;"></label>
                                    </div>
                                    <div class="custom-color">
                                        <input id="color-4" name="size" type="radio">
                                        <label for="color-4" class="rounded-circle" style="background: #e84385;"></label>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Quantity -->
                            <div class="mt-4">
                                <small class="d-block font-weight-bold text-dark mb-2">Quantity</small>
                                <div class="d-flex">
                                    <input type="text" class="form-control text-center" placeholder="Qty" style="width: 100px;" value='1' readonly disabled>
                                    <button type="submit" class="btn btn-primary ml-3">Add to cart</button>
                                </div>
                            </div>

                            <!-- Product info -->
                            <!-- <div class="mt-4">
                                <small class="d-block font-weight-bold text-dark">Maintaining</small>
                                <ul class="list-unstyled list-icon">
                                    <li class="text-sm py-1">
                                        <i class="far fa-tshirt mr-3"></i>Exterior: 98% cotton, 2% elastane
                                    </li>
                                    <li class="text-sm py-1">
                                        <i class="far fa-air-freshener mr-3"></i>Machine wash up to 30&deg;/86&deg;F gentle cycle
                                    </li>
                                    <li class="text-sm py-1">
                                        <i class="far fa-charging-station mr-3"></i>Iron up to 110&deg;C/230&deg;F
                                    </li>
                                </ul>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg delimiter-top" id="sct-suggested-products">
            <div class="container">
                <div class="mb-md text-center">
                    <h5>Suggested products</h5>
                    <div class="fluid-paragraph text-center mt-2">
                        <p class="lead lh-180">Check out these special products that we think you might like</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{asset('img/prv/product-1.png')}}" class="img-center">
                                </a>

                                <span class="ribbon ribbon-right ribbon-primary rounded-circle">New</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span> 
                                <div class="product-colors mt-3">
                                    <a href="#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                                    <a href="#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                                    <a href="#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                                    <a href="#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                                </div>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{asset('img/prv/product-2.png')}}" class="img-center">
                                </a>

                                <span class="ribbon ribbon-right ribbon-danger rounded-circle">30%</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span> 
                                <div class="product-colors mt-3">
                                    <a href="#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                                    <a href="#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                                    <a href="#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                                    <a href="#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                                </div>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{asset('img/prv/product-3.png')}}" class="img-center">
                                </a>

                                <span class="ribbon ribbon-right ribbon-dark rounded-circle">Top</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">$199 USD</span> 
                                <div class="product-colors mt-3">
                                    <a href="#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                                    <a href="#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                                    <a href="#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                                    <a href="#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                                </div>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{asset('img/prv/product-4.png')}}" class="img-center">
                                </a>

                                <span class="ribbon ribbon-right ribbon-warning rounded-circle">10%</span>

                            </div>
                            <div class="card-body pt-0 text-center">
                                <a href="shop-product.html" class="card-title">Men's fitness top</a>
                                <span class="card-price">${{$product->price}} USD</span> 
                                <div class="product-colors mt-3">
                                    <a href="#" style="background-color: #59ad46;" data-toggle="tooltip" data-original-title="Green"></a>
                                    <a href="#" style="background-color: #04050a;" data-toggle="tooltip" data-original-title="Black"></a>
                                    <a href="#" style="background-color: #62aedd;" data-toggle="tooltip" data-original-title="Blueish"></a>
                                    <a href="#" style="background-color: #e84385;" data-toggle="tooltip" data-original-title="Pink"></a>
                                </div>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg bg-gradient-warning">
            <div class="position-absolute bottom-0 col-lg-6 col-xl-5 d-none d-lg-block">
                <img alt="Image placeholder" src="{{asset('img/prv/shop-hero-model.png')}}" class="img-fluid">
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xl-7 text-center text-lg-left">
                        <div class="mb-5">
                            <h1 class="text-white">Subscribe for weekly news</h1>
                            <p class="lead text-white mt-2">You get all Bootstrap components fully customized. Besides, you receive another numerous plugins out of the box and ready to use.</p>
                        </div>
                        <form>
                            <div class="input-group input-group-lg mb-3">
                                <input type="text" class="form-control" placeholder="Enter your email address">
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

</html>
