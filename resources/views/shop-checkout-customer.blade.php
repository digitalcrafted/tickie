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
                                <span class="h2 mb-0 text-white d-block">Checkout</span>
                                <span class="text-light">Customer information</span>
                            </div>
                        </div>
                        <!-- Checkout navigation -->
                        <div class="d-flex">
                            <div class="btn-group btn-group-nav shadow" role="group" aria-label="Basic example">
                                <div class="btn-group" role="group">
                                    <a href="{{url('cart')}}" class="btn btn-secondary btn-icon">
                                        <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Cart</span>
                                    </a>
                                    <a href="{{url('shop-checkout')}}" class="btn btn-secondary btn-icon active">
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
                <div class="row row-grid">
                    <div class="col-lg-8">
                        <form action="{{url('checkout-shipping')}}" method="post">
                            @csrf
                            <!-- General -->

                            <div class="page-inner-header mb-4">
                                <h5 class="mb-1">Billing information</h5>

                                <p class="text-muted mb-0">Fill the form below so we can send you the order's invoice.</p>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">First name</label>
                                        <input class="form-control" required type="text" name="first_name" placeholder="Enter your first name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Last name</label>
                                        <input class="form-control" required type="text" name="last_name" placeholder="Enter your last name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Address</label>
                                        <input class="form-control" required type="text" name="address" placeholder="Address, Number" />
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input required class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Country</label>
                                        <select required class="form-control" name="country" data-toggle="select" title="Country">
                                            <option >Select your country</option>
                                            <option selected value="7">United States</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">City</label>
                                        <select required class="form-control" name="city" data-toggle="select" title="City">
                                            <option selected>Select your city</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Postal code</label>
                                        <input class="form-control" required type="text" name="zip" placeholder="Zip code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input class="form-control" name="phone" type="text" placeholder="+1-513 900 3549">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="button" class="btn btn-link text-sm text-dark font-weight-bold">Return to shop</button>
                                <button type="submit" class="btn btn-sm btn-primary">Next step</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">

                        <div data-toggle="sticky" data-sticky-offset="100">

                            <div class="card" id="card-summary">
                                <div class="card-header py-3">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="h6">Summary</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="badge badge-md badge-pill badge-info">{{count($cart)}} items</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">

                                    @if($cart && count($cart) > 0)
                                        <?php $total = 0; ?>
                                        @foreach($cart as $item)
                                            <?php $product = App\Products::find($item); ?>
                                            <?php $total += $product->price; ?>
                                            <div class="row mt-3 pt-3 delimiter-top">
                                                <div class="col-8">
                                                    <div class="media align-items-center">
                                                        <img alt="Image placeholder" class="mr-2" src="{{asset($product->image_path)}}" style="width: 42px;">
                                                        <div class="media-body">
                                                            <div class="text-limit lh-100">
                                                                <small class="text-dark font-weight-bold mb-0">{{$product->title}}</small>
                                                            </div>
                                                            <small class="text-muted">${{$product->price}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right lh-100">
                                                    <small class="text-dark">${{$product->price}}</small>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    <!-- Subtotal -->
                                    <div class="row mt-3 pt-3 border-top">
                                        <div class="col-8 text-right">
                                            <small class="text-dark font-weight-bold">Subtotal:</small>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-sm font-weight-bold">${{$total}}</span>
                                        </div>
                                    </div>
                                    <!-- Shipping -->
                                    <div class="row mt-3 pt-3 border-top">
                                        <div class="col-8 text-right">
                                            <div class="media align-items-center">
                                                <i class="far fa-shipping-fast"></i>
                                                <div class="media-body">
                                                    <div class="text-limit lh-100">
                                                        <small class="text-dark font-weight-bold mb-0">Shipping</small>
                                                    </div>
                                                    <small class="text-muted">Fast Delivery</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-sm font-weight-bold">$25</span>
                                        </div>
                                    </div>
                                    <!-- Subtotal -->
                                    <div class="row mt-3 pt-3 border-top">
                                        <div class="col-8 text-right">
                                            <small class="text-uppercase text-dark font-weight-bold">Total:</small>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-sm text-dark font-weight-bold">${{$total + 25}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

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
