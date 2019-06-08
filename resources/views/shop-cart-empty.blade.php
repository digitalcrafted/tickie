<!DOCTYPE html>
<html lang="en">
<head>

@include('layouts/head')

</head>

<body class="bg-secondary">


    <header class="header-transparent" id="header-main">

        @include('layouts/header')

    </header>
    <main>

        <section class="slice slice-xl h-100vh d-flex align-items-center">
            <div class="container pt-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center">
                            <div class="icon icon-xl icon-shape icon-pink rounded-circle">
                                <i class="far fa-shopping-cart"></i>
                            </div>
                            <h6 class="h4 my-4">Your cart is empty.</h6>
                            <p class="px-5">
                                Your cart is currently empty. Return to our shop and check out the latest offers. We have some great items that are waiting for you.
                            </p>
                            <a href="#" class="btn btn-dark btn-circle mt-5">Return to shop</a>
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
