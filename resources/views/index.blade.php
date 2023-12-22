@extends ('_layouts.app')
@section ('content')
    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                GRAB YOUR TICKET
                            </p>
                            <h1 class="header">
                                Buy Your <span class="text-purple">Dream Event <br> Tickets</span> Now!
                            </h1>
                            <p class="support">
                                Our Website is helping you to <br> secure your tickets to the event of your dreams
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Get Started
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        OUR LAST EVENT
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Alpus Cup
                        </h3>
                        <p class="support">
                            A student sports competition for a day of spirited athleticism
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-1.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Pancawarna
                        </h3>
                        <p class="support">
                            A musical drama celebrating Indonesia's rich cultural heritage
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-2.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Arcelest
                        </h3>
                        <p class="support">
                            An immersive tech showcase blending creativity and innovation
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-3.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Smartcup
                        </h3>
                        <p class="support">
                            A cutting-edge tech event exploring the future of innovation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        ONGOING EVENT
                    </p>
                    <h2 class="primary-header text-white">
                        Pancawarna : <br> Jeumpa Peunawa Hate
                    </h2>
                    <p class="support">
                        Pancawarna (Nusantara Horizon Stage) is a <b>musical drama</b> presented by students from SMA Negeri 81 Jakarta.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            Get Ticket
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    MELODY PACKAGE
                                </p>
                                <h1 class="price text-center">
                                    IDR 350K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}')}}" alt="">
                                    <p>
                                        One VIP Ticket
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Wristband
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Backstage Access
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Totebag
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Tumbler
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        T-Shirt
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Keychain
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <p>
                                    <a href="{{url('checkout/melody-package')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Package
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    HARMONY PACKAGE
                                </p>
                                <h1 class="price text-center">
                                    IDR 250K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        One VIP Ticket
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Wristband
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Totebag
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Keychain
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-secondary w-100 mt-3">
                                        Take This Package
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcomings">
        <div class="container">
            <p class="story">
                UPCOMING EVENT
            </p>
            <h2 class="primary-header">
                Mark Your Calendar
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images/upcoming-1.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/upcoming-2.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/upcoming-3.png')}}" alt="">.
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        WHAT THEY SAY
                    </p>
                    <h2 class="primary-header">
                        People I've Helped <br> To Buy Their Dream Event
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Revolutionized ticketing! This app streamlines sales, letting us focus on event planning while automation handles the rest.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/user_photo.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Karina
                                        </h4>
                                        <p class="role">
                                            Student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Impressed by the app's stellar performance in ticket management. From setup to real-time tracking, it ensured seamless event success.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/ningning.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Ning Ning
                                        </h4>
                                        <p class="role">
                                            Student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Efficient sales, enhanced user experience. Easy seat selection, event maps, and instant confirmations, a perfect event solution.
                                <div class="user">
                                    <img src="{{asset('images/giselle.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Giselle
                                        </h4>
                                        <p class="role">
                                            Teacher
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright ABC Ticketing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection