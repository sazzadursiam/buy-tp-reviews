@extends('frontend.layouts.app')
@section('page_title')
    Home
@endsection
@section('custom_css')
    <style>
        .pricing .box_top {
            padding: 15px 20px;
            background: #188a91;
            text-align: center;
            color: #fff width: 100%;
        }

        .pricing .box .inner {
            padding: 40px 20px;
        }

        .pricing .box_top p {
            color: #ffffff;
            font-weight: 700;
        }

        .pricing .box {
            padding: 0 0 40px 0;
            background: #fff;
            text-align: center;
            box-shadow: 0px 0 5px rgba(1, 41, 112, 0.08);
            border-radius: 4px;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
            width: 100%;
            border: 2px solid #188a91;
        }

        .pricing .box:hover {
            /* transform: scale(1.1); */
            box-shadow: 0px 0 10px rgba(1, 41, 112, 0.1);
            margin-top: -40px;
        }

        .pricing h3 {
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .pricing .price {
            font-size: 36px;
            color: #ffffff;
            font-weight: 700;
            font-family: "Poppins", sans-serif;
            line-height: 1.2;
        }

        .pricing .price sup {
            font-size: 20px;
            top: -15px;
            left: -3px;
        }

        .pricing .price span {
            color: #bababa;
            font-size: 16px;
            font-weight: 300;
        }

        .pricing img {
            padding: 30px 40px;
        }

        .pricing ul {
            padding: 0;
            list-style: none;
            color: #444444;
            text-align: center;
            line-height: 26px;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .pricing ul li {
            padding: 15px;
            border-bottom: 1px dotted #188a91;
        }

        .pricing ul .na {
            color: #ccc;
            text-decoration: line-through;
        }

        .pricing .btn-buy {
            display: inline-block;
            padding: 8px 40px 10px 40px;
            border-radius: 50px;
            color: #ffffff;
            transition: none;
            font-size: 16px;
            font-weight: 400;
            font-family: "Nunito", sans-serif;
            font-weight: 600;
            transition: 0.3s;
            background: #1788ad;
            /* border: 1px solid #4154f1; */
        }

        .pricing .btn-buy:hover {
            background: #0399c9;
        }



        .pricing .featured {
            width: 200px;
            position: absolute;
            top: 18px;
            right: -68px;
            transform: rotate(45deg);
            z-index: 1;
            font-size: 14px;
            padding: 1px 0 3px 0;
            background: #4154f1;
            color: #fff;
        }
    </style>
@endsection

@section('content')
    <!-- ======= About Section ======= -->
    {{-- @include('frontend._partials.about') --}}
    <!-- End About Section -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Authentic Trustpilot Reviews for Credibility!</h1>
            <h2>Unlock Success: Your Path to Trustworthy Reviews Starts Here!</h2>
            {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us pricing">
            <div class="container">

                <div class="row">
                    {{-- <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Medilab?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                                optio ad corporis.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="box">

                                        <div class="box_top">
                                            <div class="price"><sup>$</sup>5</div>
                                            <p class="mb-0">1/ Reviews </p>
                                        </div>
                                        <div class="inner">
                                            <ul>

                                                <li>
                                                    Custom Content
                                                </li>
                                                <li>
                                                    Start Within 24 hours
                                                </li>
                                                <li>
                                                    Custom Country
                                                </li>
                                                <li>
                                                    Non Drop Reviews Only
                                                </li>
                                                <li>
                                                    Custom Content
                                                </li>
                                                <li>
                                                    Permanent
                                                </li>
                                            </ul>
                                            <a target="_blank" class="btn-buy basic_btn"
                                                href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order for: 1 TrustPilot Review.">
                                                Buy Now
                                            </a>
                                        </div>
                                        {{-- <h3 style="color: #07d5c0;">Basic Plan</h3> --}}

                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="box">
                                        <span class="featured">Featured</span>
                                        <h3 style="color: #65c600;">Starter Plan</h3>
                                        <div class="price"><sup>$</sup>50</div>
                                        <h3 style="color: #65c600;" class="py-4 mb-0">5 TrustPilot Review</h3>
                                        <ul>
                                            <li>
                                                Custom Content
                                            </li>
                                            <li>
                                                Start Within 24 hours
                                            </li>
                                            <li>
                                                Custom Country
                                            </li>
                                            <li>
                                                Non Drop Reviews Only
                                            </li>
                                            <li>
                                                Custom Content
                                            </li>
                                            <li>
                                                Permanent
                                            </li>

                                        </ul>
                                        <a target="_blank" class="btn-buy starter_btn"
                                            href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order for: 5 TrustPilot Review.">
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="box">
                                        <span class="featured" style="background:#ff901c;">Best</span>
                                        <h3 style="color: #ff901c;">Business Plan</h3>
                                        <div class="price"><sup>$</sup>90</div>
                                        <h3 style="color: #ff901c;" class="py-4 mb-0">10 TrustPilot Review</h3>
                                        <ul>
                                            <li>
                                                Custom Content
                                            </li>
                                            <li>
                                                Start Within 24 hours
                                            </li>
                                            <li>
                                                Custom Country
                                            </li>
                                            <li>
                                                Non Drop Reviews Only
                                            </li>
                                            <li>
                                                Custom Content
                                            </li>
                                            <li>
                                                Permanent
                                            </li>
                                        </ul>
                                        <a target="_blank" class="btn-buy business_btn"
                                            href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order for: 10 TrustPilot Review.">
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->


        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Counts Section -->



        <!-- ======= Frequently Asked Questions Section ======= -->

        @include('frontend._partials.faq')

        <!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection
