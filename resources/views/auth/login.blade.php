@extends('frontend.main_master')
@section('section')
    <!-- title page -->
    <section class="flat-title-page inner">
        <div class="overlay"></div>
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading mg-bt-12">
                        <h1 class="heading text-center">Login</h1>
                    </div>
                    <div class="breadcrumbs style2">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-login tf-section">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-12">
                    <h2 class="tf-title-heading ct style-1">
                        Login To NFTs
                    </h2>

                    <div class="flat-form box-login-email">
                        <div class="box-title-login">
                            <h5> login with email</h5>
                        </div>

                        <div class="form-inner">
                            <form method="POST" action="{{ route('login') }}" id="contactform">
                                @csrf
                                <input id="email" name="email" tabindex="2"  value="" aria-required="true" type="email" placeholder="Your Email Address" required >
                                <input id="password"  name="password" tabindex="2"  value="" aria-required="true" type="password" placeholder="Your Password" required >
                                <div class="row-form style-1">
                                    <label>Remember me
                                        <input type="checkbox">
                                        <span class="btn-checkbox"></span>
                                    </label>
                                    <a href="#" class="forgot-pass">Forgot Password ?</a>
                                </div>

                                <button class="submit">Login</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
