@extends('layout')
@section('content')

    <div class="section">

        <!----------- HOME ----------->

            <section class="top-nav">
                <div>
                    <img width="50px" height="30px" src="{{ asset('assets/images/Layer 1-1.svg') }}" alt="logo">
                </div>
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
                <ul class="menu">
                <li><a href="#about-us" class="underline-link active text-reset text-decoration-none mr-20">About Us</a</li>
                <li><a href="#services" class="underline-link text-reset text-decoration-none mr-20">Our Services</a></li>
                <li><a href="#association" class="underline-link text-reset text-decoration-none mr-20">Our Association</a></li>
                <li><a href="#crew" class="underline-link text-reset text-decoration-none mr-20">Our Crew</a></li>
                <li><a href="#footer" class="underline-link text-reset text-decoration-none mr-20">Contact Us</a></li>
                </ul>
            </section>

            <button class="btn btn-sm btn-primary rounded-circle position-fixed bottom-0 end-0 translate-middle d-none" onclick="scrollToTop()" id="back-to-up"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

            <section id="home">
                <div class="outter hero-video">
                    <div class="video-container">
                      <video src="{{ asset('assets/video/6073573-hd_1920_1080_25fps.mp4') }}" autoplay loop playsinline muted></video>
                        <div class="callout">
                            <div class="header-logo-main">
                                <img width="100%" height="100%" src="{{ asset('assets/images/Layer 1.svg') }}" alt="logo">
                            </div>
                            <div class="content-container">
                                <h1 class="green-color text-right">REDEFINING <br>LUXURY  <br>EXPERIENCES</h1>
                                <div class="right-text">
                                    <p class="small-font">Strategic Support for Unmatched Experiences. Empowering Growth by Navigating Challenges.</p>
                                </div>
                            </div>
                            <p class="green-color small-font pabsol">
                                <a href="#about-us" class="underline-link active text-reset text-decoration-none mr-20">About Us</a>&nbsp;&nbsp;
                                <a href="#services" class="underline-link text-reset text-decoration-none mr-20">Our Services</a>&nbsp;&nbsp;
                                <a href="#association" class="underline-link text-reset text-decoration-none mr-20">Our Association</a>&nbsp;&nbsp;
                                <a href="#crew" class="underline-link text-reset text-decoration-none mr-20">Our Crew</a>&nbsp;&nbsp;
                                <a href="#footer" class="underline-link text-reset text-decoration-none mr-20">Contact Us</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        <!----------- HOME ----------->

        <!----------- ABOUT US ----------->

            <section id="about-us">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5 position-relative">
                        <div class="ml-8 mt-10">
                            <h1 class="fw-bold ls-4">ABOUT US</h1>
                            <span class="color-gray small-font"><strong>Your Partner in Perfecting Hospitality</strong></span><br><br>
                            <span class="color-gray small-font">
                                Zephir Hospitality is your comprehensive solution for all hospitality needs, offering strategic and operational support to hotels, resorts, and related facilities. In a constantly evolving industry, we empower our partners to overcome challenges and deliver exceptional guest experiences. Our expertise spans across operations, sales, marketing, revenue management, and reservations, ensuring that each establishment we work with excels in every aspect.
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-7 position-relative">
                        <img width="100%" height="100%" class="bg-image text-right shadow-1-strong  mb-5 text-white" src="{{ asset('assets/images/Mask Group 3.png') }}" alt="logo">
                        <div class="position-absolute text-white text-right small-font pstr-align">
                            <h5 class="mb-0">ANANTA</h5>
                            <p class="mb-0 small-font">Spa and Resort Jaipur</p>
                        </div>
                    </div>
                </div>
            </section>

        <!----------- ABOUT US ----------->

        <!----------- SERVICES ----------->

            <section id="services">
                <h1 class="fw-bold text-center ls-4">OUR SERVICES</h1>
                <p class="text-center color-gray small-font">
                    At Zephir Hospitality, we tailor our services to meet the unique needs of our partners, ensuring the precise achievement of their goals. When <br>enhancing operational efficiency, we focus on elevating guest satisfaction by refining every detail of the service experience. For partners seeking <br>to enter new markets or drive significant revenue growth, our strategic planning and execution capabilities pave the way for sustainable success. <br>Collaborate with us to take the next leap in the hospitality industry and turn your vision into reality.
                </p>
                <div class="container">
                    <ul class="tabs">
                        <li class="tab current small-font" data-tab="tab-1">Operations Management</li>
                        <li class="tab small-font" data-tab="tab-2">Sales and Marketing</li>
                        <li class="tab small-font" data-tab="tab-3">Revenue Management</li>
                    </ul>
                    <div id="tab-1" class="tab-content current">
                        <p class="text-center color-gray small-font">
                            We specialize in streamlining hotel and resort operations to ensure <br>exceptional guest experiences. Our services include:
                        </p>
                    </div>
                    <div id="tab-2" class="tab-content">
                        <p class="text-center color-gray small-font">
                            2) We specialize in streamlining hotel and resort operations to ensure <br>exceptional guest experiences. Our services include:
                        </p>
                    </div>
                    <div id="tab-3" class="tab-content">
                        <p class="text-center color-gray small-font">
                            3) We specialize in streamlining hotel and resort operations to ensure <br>exceptional guest experiences. Our services include:
                        </p>
                    </div>
                </div>

                <div class="img-container-grid">
                    <div class="smallsquare">
                        <img src="{{ asset('assets/images/pexels-ben-mack-5326893.png') }}"  class="img-grid-c">
                    </div>
                    <div class="h_rectangle">
                        <img src="{{ asset('assets/images/589169389.png') }}" class="img-grid-c">
                        <div class="card-img-overlay text-white d-flex flex-column justify-content-center text-center small-font">
                            <div class="blog-content text-center text-white">
                                <h4 class="card-title f1-3">Guest Experience Enhancement</h4>
                                <p class="card-text color-gray-light small-font lh1-2">Crafting memorable guest experiences through <br>personalized services and attention to detail.</p>
                            </div>
                        </div>
                    </div>
                    <div class="smallsquare">
                        <img src="{{ asset('assets/images/589011985.png') }}" class="img-grid-c">
                    </div>
                </div>
            </section>

        <!----------- SERVICES ----------->

        <!----------- ASSOCIATION  ----------->

            <section id="association" class="ptb-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
                        <div class="ml-8 mt-5">
                            <h1 class="fw-bold">OUR <div class="mt--15">ASSOCIATIONS</div></h1>
                            <span class="color-gray small-font">
                                Zephir Hospitality proudly handles the pre-opening of Sealore, a luxury boutique beach resort in Kannur, Malabar, located in the serene northern region of Kerala. This exclusive property, with 20 elegantly appointed rooms, is set to welcome guests in October 2024. Our team oversees both its management and marketing, ensuring it reflects the pinnacle of luxury and sophistication. <br><br>
                                Zephir Hospitality oversees South India sales for the iconic Hard Rock Hotel in North Goa, the charming Whispering Palms in North Goa, the opulent Ananta Resort and Spa in Jaipur, the regal Indana Palace Jodhpur, and the stunning Kandima Maldives.<br><br>
                                We also manage sales for the exquisite Zuri Kumarakom Resort and Spa in Karnataka. Our collaborations are rooted in a shared commitment to excellence, driving unparalleled success across these esteemed properties.
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
                        <div class="d-flex  align-items-center ptb-2">
                            <div class="ass-logo">
                                <img src="{{ asset('assets/images/HardRockHotelLogo-White3x@2x.png') }}" alt="Logo" class="img-fluid">
                            </div>

                            <div class="d-flex flex-column justify-content-center ml-40">
                                <div class="text-top">
                                    <div class="ass-title">HARD ROCK</div>
                                </div>
                                <div class="text-bottom">
                                    <div class="color-gray small-font">Hotel, Goa</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex  align-items-center ptb-2">
                            <div class="ass-logo">
                                <img src="{{ asset('assets/images/zuri_logo.png') }}" alt="Logo" class="img-fluid">
                            </div>

                            <div class="d-flex flex-column justify-content-center ml-40">
                                <div class="text-top">
                                    <div class="ass-title">THE ZURI</div>
                                </div>
                                <div class="text-bottom">
                                    <div class="color-gray small-font">Hotels & Resorts Kumarakom, Kerala</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex  align-items-center ptb-2">
                            <div class="ass-logo">
                                <img src="{{ asset('assets/images/WhatsApp Image 2024-09-25 at 5.43.21 PM.png') }}" alt="Logo" class="img-fluid">
                            </div>

                            <div class="d-flex flex-column justify-content-center ml-40">
                                <div class="text-top">
                                    <div class="ass-title">INDIANA PALACE</div>
                                </div>
                                <div class="text-bottom">
                                    <div class="color-gray small-font">Jaipur</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex  align-items-center ptb-2">
                            <div class="ass-logo">
                                <img src="{{ asset('assets/images/Anantha logo.png') }}" alt="Logo" class="img-fluid">
                            </div>

                            <div class="d-flex flex-column justify-content-center ml-40">
                                <div class="text-top">
                                    <div class="ass-title">ANANTA</div>
                                </div>
                                <div class="text-bottom">
                                    <div class="color-gray small-font">Spa and Resort Jaipur</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex  align-items-center ptb-2">
                            <div class="ass-logo">
                                <img src="{{ asset('assets/images/f2c5e98b-0cfc-4da7-8e7f-b8da1faf1a7d.png') }}" alt="Logo" class="img-fluid">
                            </div>

                            <div class="d-flex flex-column justify-content-center ml-40">
                                <div class="text-top">
                                    <div class="ass-title">KANDIMA</div>
                                </div>
                                <div class="text-bottom">
                                    <div class="color-gray small-font">Maldives</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex  align-items-center ptb-2">
                            <div class="ass-logo">
                                <img src="{{ asset('assets/images/Group 901.svg') }}" alt="Logo" class="img-fluid">
                            </div>

                            <div class="d-flex flex-column justify-content-center ml-40">
                                <div class="text-top">
                                    <div class="ass-title">SEALORE</div>
                                </div>
                                <div class="text-bottom">
                                    <div class="color-gray small-font">Beach Resort & Spa Kannur, Kerala</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!----------- ASSOCIATION ----------->

        <!----------- CREW ----------->

            <section id="crew" class="bg-color-green text-center crew-padding">

                <h1 class="fw-bold font-big">THE <div class="mt--20">ZEPHIR CREW</div></h1>
                <span class="color-gray small-font">
                    The Zephir Crew is a dynamic mix of youthful energy and seasoned expertise. Led by industry <br> veterans with decades of experience, our talented team of young professionals is dedicated to <br> delivering bespoke solutions for hospitality brands seeking specialized support and guidance.
                </span>

            </section>

        <!----------- CREW ----------->

        <!----------- FOOTER ----------->

            <section id="footer" class="text-center">

                <div class="footer-main">
                    <h1 class="footer-title">STAY IN TOUCH</h1>
                    <span class="color-gray small-font-1x">
                        Ready to elevate your hospitality venture? <div class="mt--3">Discover how Zephir can transform your business with our expert solutions</div>
                    </span>
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control fcremove" placeholder="Fill in your email address" aria-label="Fill in your email address" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">SUBSCRIBE</button>
                    </div>
                    <span class="color-gray small-font">Contact us at <b class="color-black">rohith@zephirhospitality.com</b> &nbsp;&nbsp;&nbsp;&nbsp;or call <b class="color-black">+91 99005 62425</b> . Let’s create something extraordinary together.</span>
                    <div class="footer-logo-main">
                        <img width="100%" height="100%" src="{{ asset('assets/images/Layer 1.svg') }}" alt="logo">
                    </div>
                    <p class="color-black small-font">
                        <strong>Reach Out and Start Your Journey with <br> Zephir - We're Here to Help.</strong>
                    </p><br>

                    <p class="color-black small-font">
                        <strong>
                            <a href="#" class="text-reset text-decoration-none mr-20">About Us</a>&nbsp;&nbsp;
                            <a href="#" class="text-reset text-decoration-none mr-20">Our Services</a>&nbsp;&nbsp;
                            <a href="#" class="text-reset text-decoration-none mr-20">Our Property</a>&nbsp;&nbsp;
                            <a href="#" class="text-reset text-decoration-none mr-20">Our Team</a>&nbsp;&nbsp;
                            <a href="#" class="text-reset text-decoration-none mr-20">Guest Experiences</a>&nbsp;&nbsp;
                            <a href="#" class="text-reset text-decoration-none mr-20">Contact Us</a>
                        </strong>
                    </p>

                    <div class="social-icon-main">
                        <img class="social-icon" src="{{ asset('assets/images/linkedin-logo (1).svg') }}" alt="logo">
                        <img class="social-icon ml-20" src="{{ asset('assets/images/facebook-app-symbol.svg') }}" alt="logo">
                        <img class="social-icon ml-20" src="{{ asset('assets/images/instagram (8).svg') }}" alt="logo">
                    </div>

                    <span class="color-gray small-font">
                        <a href="#" class="text-reset text-decoration-none cursor-pointer">Privacy Policy</a>&nbsp;&nbsp; | &nbsp;&nbsp;
                        <a href="#" class="text-reset text-decoration-none cursor-pointer">General Terms and Conditions</a>&nbsp;&nbsp; | &nbsp;&nbsp;
                        <a href="{{ route('blog') }}" class="text-reset text-decoration-none cursor-pointer">Blog</a>&nbsp;&nbsp; | &nbsp;&nbsp;
                        <a href="#" class="text-reset text-decoration-none cursor-pointer">Contact Us</a>
                    </span>
                                    </div>
            </section>

        <!----------- FOOTER ----------->

    </div>


@endsection
