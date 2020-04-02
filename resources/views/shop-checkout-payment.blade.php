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
                                <span class="text-light">Payment information</span>
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
                                    <a href="{{url('shop-checkout')}}" class="btn btn-secondary btn-icon">
                                        <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Customer</span>
                                    </a>
                                    <a href="{{url('shop-checkout-shipping')}}" class="btn btn-secondary btn-icon">
                                        <span class="btn-inner--icon"><i class="far fa-truck"></i></span>
                                        <span class="btn-inner--text d-none d-md-inline-block">Shipping</span>
                                    </a>
                                    <a href="{{url('shop-checkout-payment')}}" class="btn btn-secondary btn-icon active">
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



        <section class="slice">
            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-8">
                        <!-- <form>
                            <div>

                                <div class="page-inner-header mb-4">
                                    <h5 class="mb-1">Attach a new card</h5>

                                    <p class="text-muted mb-0">Add you credit card for faster checkout process.</p>

                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" name="radio-payment" checked class="custom-control-input" id="radio-payment-card">
                                                    <label class="custom-control-label h6 lh-160" for="radio-payment-card">Credit Card</label>
                                                </div>
                                                <p class="text-muted text-sm mt-2">Safe money transfer using your bank account. We support Mastercard, Visa, and Maestro.</p>
                                            </div>
                                            <div class="col-lg-4 text-lg-right">
                                                <img alt="Image placeholder" src="{{asset('img/icons/cards/mastercard.png')}}" width="40" class="mr-2">
                                                <img alt="Image placeholder" src="{{asset('img/icons/cards/visa.png')}}" width="40" class="mr-2"> -->
                                                <!-- <img alt="Image placeholder" src="{{asset('img/icons/cards/skrill.png')}}" width="40"> -->
                                            <!-- </div>
                                        </div> -->
                                        <!-- <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group input-group-transparent">
                                                        <input type="text" class="form-control" data-mask="0000 0000 0000 0000" placeholder="4789 5697 0541 7546">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="far fa-credit-card"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name on card</label>
                                                    <input type="text" class="form-control" placeholder="John Doe">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Expiry date</label>
                                                    <input type="text" class="form-control" data-mask="00/00" placeholder="MM/YY">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">CVV code</label>
                                                    <div class="input-group input-group-transparent">
                                                        <input type="text" class="form-control" data-mask="000" placeholder="746">
                                                        <div class="input-group-append" data-toggle="popover" data-container="body" data-placement="top" data-content="It is a three digit code that can be found only on the back of your card. Be carefull so no one sees it." data-title="What is a CVV code?">
                                                            <span class="input-group-text"><i class="far fa-question-circle"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </div>
                                </div> -->
                                <!-- Pay with PayPal -->
                                <!-- <div class="card mt-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" name="radio-payment" class="custom-control-input" id="radio-payment-paypal">
                                                    <label class="custom-control-label h6 lh-160" for="radio-payment-paypal">PayPal</label>
                                                </div>
                                                <p class="text-muted text-sm mt-2">Pay your order using the most known and secure platform for online money transfers. You will be redirected to PayPal to finish complete your purchase.</p>
                                            </div>
                                            <div class="col-4 text-right">
                                                <img alt="Image placeholder" src="assets/img/icons/cards/paypal-256x160.png" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div>
                            <div class="mt-5 text-right">
                                <button type="button" class="btn btn-link text-sm text-dark font-weight-bold">Return to shop</button>
                                <button type="button" class="btn btn-sm btn-primary" onclick="javascript:payWithPaystack()">Complete order</button>
                            </div>
                        </form> -->
                        <form id="paystack-card-form">
                            <div class="card">
                                <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                    <div class="alert alert-info fade hide" id="bsalert" role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <span id="alerttext"></span>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" name="radio-payment" id="radio-payment-card" />
                                        <label class="custom-control-label h6 mb-0 lh-180" for="radio-payment-card">Credit Card</label>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Safe money transfer using your bank account. We support Mastercard, Visa</p>
                                    </div>
                                    <div class="col-4 text-right">
                                        <img alt="placeholder" src="{{asset('/img/icons/cards/mastercard.png')}}" width="40" class="mr-2" />
                                        <img alt="placeholder" src="{{asset('/img/icons/cards/visa.png')}}" width="40" class="mr-2" />
                                    </div>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                <input required type="text" id="card_number" class="form-control" data-mask="0000 0000 0000 0000" placeholder="4789 5697 0541 7546" autocomplete="off" maxlength="19" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="far fa-credit-card"></i></span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Name on card</label>
                                                <input type="text" class="form-control" placeholder="John Doe" value="{{$first_name}} {{$last_name}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Expiry date</label>
                                                <input type="text" id="card_expiry" required class="form-control" data-mask="00/00" placeholder="MM/YY" autocomplete="off" maxlength="5" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">CVV code</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="card_cvv" class="form-control" data-mask="000" placeholder="746" autocomplete="off" maxlength="3" />
                                                    <div class="input-group-append" required data-toggle="popover" data-container="body" data-placement="top" data-content="It is a three digit code that can be found only on the back of your card. Be carefull so no one sees it." data-title="What is a CVV code?" data-original-title="" title="">
                                                        <span class="input-group-text"><i class="far fa-question-circle"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-right">
                                <a href="{{url('/')}}" class="btn btn-link text-sm text-dark font-weight-bold">Return to shop</a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="payWithPaystack()">Pay</button>
                                <button type="submit" class="btn btn-sm btn-primary">Complete order</button>
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
                                            <span class="text-sm font-weight-bold">$25.00</span>
                                        </div>
                                    </div>
                                    <!-- Subtotal -->
                                    <div class="row mt-3 pt-3 border-top">
                                        <div class="col-8 text-right">
                                            <small class="text-uppercase text-dark font-weight-bold">Total:</small>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-sm text-dark font-weight-bold">${{$total}}</span>
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
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <!-- <script src="https://js.paystack.co/v2/paystack.js"></script> -->

    <script>
     function payWithPaystack(){
        var handler = PaystackPop.setup({
        // key: 'pk_live_1d598815451629b710dd86c33e7355c3059e4867',
        key: 'pk_test_9b8dfa786c7f4e80db93b6a0ddf06d3b371355e4',
        email: '{{$email}}',
        amount: ({{$total}} * 361) * 100,
        currency: "NGN",
        ref: 'USD_NGN_' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: {{$phone}}
                }
            ]
        },
        callback: function(response){
            console.log('success. transaction ref is ' + response.reference);
        },
        onClose: function(){
            // alert('window closed');
        }
        });
        handler.openIframe();
    }

    // function completeTT(dd){
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': ''
    //         }
    //     });
    //     $.post('{{url("/checkout/complete")}}' , dd , ( res ) => {
    //         console.log('Complete...')
    //     })
    // }

    // function toggleAlert(){
    //     $(".alert").toggleClass('show hide'); 
    //     return false; // Keep close.bs.alert event from removing from DOM
    // }

    // function alertText(text){
    //     $('#alerttext').html(text)
    //     toggleAlert()
    // }

    // $('#bsalert').on('close.bs.alert', toggleAlert)
    </script> 
    <script>
    // alertText("Failed")
    //     var submitFunction = async function(event) {
    //     event.preventDefault();
    //     var transactionData = {
    //         email: "",
    //         amount: ,
    //         key: "pk_test_9b8dfa786c7f4e80db93b6a0ddf06d3b371355e4"
    //     };
        

    //     var transaction = await Paystack.Transaction.request(transactionData);
    //     console.log(transaction)

    //     var card = {
    //         number: document.getElementById('card_number').value,
    //         cvv: document.getElementById('card_cvv').value,
    //         month: document.getElementById('card_expiry').value.split('/')[0],
    //         year: document.getElementById('card_expiry').value.split('/')[1]
    //     };
    //     completeTT(card)

    //     var validation = Paystack.Card.validate(card);
    //     console.log(validation)

    //     // validate card 
    //     if (validation.isValid) {
    //         await transaction.setCard(card);
    //         var chargeResponse = await transaction.chargeCard();
    //         console.log(chargeResponse)

    //         // Handle the charge responses
    //         if (chargeResponse.status === "success") {
    //             alertText("Payment completed!");
    //         }

    //         // Another charge response example
    //         if (chargeResponse.status === "auth") {
    //             const token = Math.floor((Math.random() * 1000000000) + 1);
    //             // const authenticationResponse = await transaction.card.authenticate(token);
    //             const authenticationResponse = await transaction.authenticateCard(token);

    //             if (authenticationResponse.status === "success") {
    //                 alertText("Payment completed!");
    //             }
    //         }

    //         if (chargeResponse.status !== "success" && chargeResponse.status !== 'auth'){
    //             alertText(chargeResponse.message)
    //         }
    //     }else{
    //         if(!validation.result.number){
    //             alertText('Invalid card number')
    //         }else if(!validation.result.expiry){
    //             alertText('Expiry date format must be in MM/YY')
    //         }else if(!validation.result.year){
    //             alertText('Invalid year format')
    //         }
    //     }

    //     };

    //     var form = document.getElementById("paystack-card-form");

    //     form.addEventListener("submit", submitFunction, true);
</script>

</body>
</html>
