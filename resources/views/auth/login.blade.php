@extends('yield')

@section('main_content')
<main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <div class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Account Page</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">
                <div class="login__section--inner">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col">
                            <form action="{{ route('login.perform') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title mb-15">Login</h2>
                                        <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" placeholder="Email Addres" type="email" name="username" value="{{ old('username') }}">
                                            @if ($errors->has('username'))
                                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Password" type="password" name="password" value="{{ old('password') }}">
                                            @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                            @endif
                                        </label>
                                        <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check_remember" type="checkbox" name="check_remember">
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label" for="check_remember">
                                                    Remember me</label>
                                            </div>
                                            <button class="account__login--forgot"  type="submit">Forgot Your Password?</button>
                                        </div>
                                        @include('auth.message')
                                        <button class="account__login--btn primary__btn" type="submit">Login</button>
                                        <div class="account__login--divide">
                                            <span class="account__login--divide__text">OR</span>
                                        </div>
                                        <div class="account__social d-flex justify-content-center mb-15">
                                            <a class="account__social--link facebook" target="_blank" href="/auth/facebook">Facebook</a>
                                            <a class="account__social--link google" target="_blank" href="/auth/google">Google</a>
                                            <a class="account__social--link twitter" target="_blank" href="/auth/twitter">Twitter</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <form action="{{ route('register.perform') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title mb-15">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" placeholder="Username" type="text" name="username" value="{{ old('username') }}">
                                            @if ($errors->has('username'))
                                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Email Addres" type="email" name="email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Password" type="password" name="password" value="{{ old('password') }}">
                                            @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Confirm Password" type="password" name="password_confirmation">
                                            @if ($errors->has('password_confirmation'))
                                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </label>
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check_agreement" type="checkbox" name="check_agreement">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check_agreement">
                                                I have read and agree to the terms & conditions</label>
                                        </div>
                                        <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        <!-- End login section  -->

        <!-- Start feature section -->
       <section class="feature__section section--padding pt-0">
            <div class="container">
                <div class="feature__inner d-flex justify-content-between">
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">  
                            <img src="assets/img/other/feature1.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Free Shipping</h2>
                            <p class="feature__content--desc">Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon ">  
                            <img src="assets/img/other/feature2.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Support 24/7</h2>
                            <p class="feature__content--desc">Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">  
                            <img src="assets/img/other/feature3.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">100% Money Back</h2>
                            <p class="feature__content--desc">You have 30 days to Return</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">  
                            <img src="assets/img/other/feature4.webp" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Payment Secure</h2>
                            <p class="feature__content--desc">We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feature section -->
    </main>
@endsection