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
        <header class="header-account-page bg-gradient-primary d-flex align-items-end">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <span class="h2 mb-0 text-white d-block">Shopping Cart</span>
                                <span class="text-light">Cart information</span>
                            </div>
                        </div>
                        <!-- Checkout navigation -->
                        <div class="d-flex">
                            <div class="btn-group btn-group-nav shadow" role="group" aria-label="Basic example">
                                <div class="btn-group" role="group">
                                    <a href="{{url('cart')}}" class="btn btn-secondary btn-icon active">
                                        <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Cart</span>
                                    </a>
                                    <a href="{{url('shop-checkout')}}" class="btn btn-secondary btn-icon">
                                        <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Customer</span>
                                    </a>
                                    <a href="{{url('shop-checkout-shipping')}}" class="btn btn-secondary btn-icon">
                                        <span class="btn-inner--icon"><i class="far fa-truck"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Shipping</span>
                                    </a>
                                    <a href="{{url('shop-checkout-payment')}}" class="btn btn-secondary btn-icon">
                                        <span class="btn-inner--icon"><i class="far fa-credit-card"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Payment</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <section class="slice slice-lg">
            <div class="container">
                <!-- Shopping cart -->
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cart && count($cart) > 0)
                                <?php $total = 0; ?>
                                @foreach($cart as $key => $item)
                                    <?php $product = App\Products::find($item) ?>
                                    <?php $total += $product->price; ?>
                                <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img alt="Image placeholder" class="mr-3" src="{{asset($product->image_path)}}" style="width: 80px;">
                                        <div class="media-body">
                                            <div class="lh-100">
                                                <span class="text-dark font-weight-bold mb-0">{{$product->title}}</span>
                                            </div>
                                            <span class="font-weight-bold text-muted">{{$product->description}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="font-weight-bold">${{$product->price}} USD</span>
                                </td>
                                <td>
                                    <input type="text" disabled readonly class="form-control form-control-sm text-center" style="width: 80px;" value="1">
                                </td>
                                <td>
                                    <span class="font-weight-bold text-dark">${{$product->price}} USD</span>
                                </td>
                                <td class="text-right">
                                    <a href="{{url('/product/remove/'.$key)}}" class="text-light" data-toggle="tooltip" data-original-title="Remove item">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                      
                                @endforeach
                            @endif
                            
                      
                        </tbody>
                    </table>
                </div>
                <!-- Cart information -->
                <div class="mt-5 pt-5 delimiter-top">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-lg-4 text-center">
                            <h5 class="mb-0">Total: ${{$total}}.00</h5>
                            <p class="small mb-0">Have a voucher? Add the code in the form below</p>
                            <form class="mt-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Type your voucher code ...">
                                    <span class="input-group-append">
                                <button type="button" class="btn btn-sm btn-primary">Apply code</button>
                            </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice bg-gradient-primary">
            <span class="tongue tongue-top">
        <i class="far fa-angle-up"></i>
    </span>
            <div class="container text-center">
                <h6 class="text-white">Checkout or return to shop to add more items</h6>
                <a href="{{url('shop-checkout')}}" class="btn btn-white btn-circle mt-4">Go to Checkout</a>
            </div>
        </section>

    </main>


    <footer class="footer footer-light bg-white">
        @include('layouts/footer')
    </footer>

    @include('layouts/scripts')
</body>
</html>
