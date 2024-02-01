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
            margin-top: -20px;
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
            <a href="#buy_services" class="btn-get-started scrollto">Buy Now</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="buy_services" class="why-us pricing">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                                    <div class="box">

                                        <div class="box_top">
                                            <div class="price"><sup>$</sup>4.5</div>
                                            <p class="mb-0">1/ Reviews </p>
                                        </div>
                                        <div class="inner">
                                            <ul>

                                                <li style="color: #ff901c;font-weight:700;">
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
                                                href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order.">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                                    <div class="box">
                                        <div class="box_top">
                                            <div class="price"><sup>$</sup>6</div>
                                            <p class="mb-0">1/Verified Reviews</p>
                                        </div>
                                        <div class="inner">
                                            <span class="featured">Featured</span>
                                            <ul>
                                                <li style="color: #ff901c;font-weight:700;">
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
                                                href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order.">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                                    <div class="box">
                                        <div class="box_top">
                                            <div class="price"><sup>$</sup>5.5</div>
                                            <p class="mb-0">1/Verified & non-verified mixed</p>
                                        </div>
                                        <div class="inner">
                                            <span class="featured" style="background:#ff901c;">Hot</span>

                                            <ul>
                                                <li style="color: #ff901c;font-weight:700;">
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
                                                href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order.">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-0 mt-lg-4">
                                <div class="col-xl-4 d-flex align-items-center mb-3">
                                    <div class="box">
                                        <div class="box_top">
                                            <div class="price"><sup>$</sup>5</div>
                                            <p class="mb-0">1/invite Reviews </p>
                                        </div>
                                        <div class="inner">
                                            {{-- <span class="featured" style="background:#ff901c;">Hot</span> --}}

                                            <ul>
                                                <li style="color: #ff901c;font-weight:700;">
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
                                                href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order.">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch mb-3">
                                    <div class="box">
                                        <div class="box_top">
                                            <div class="price"><sup>$</sup>850/Mo</div>
                                            <p class="mb-0">Let us take over your account.</p>
                                        </div>
                                        <div class="inner">
                                            {{-- <span class="featured" style="background:#ff901c;">Hot</span> --}}

                                            <ul>
                                                <li style="color: #ff901c;font-weight:700;">
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
                                                href="https://api.whatsapp.com/send?phone=919988971816&text=Hello, I'd like to place an order.">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->

        @include('frontend._partials.faq')

        <!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->
@endsection
