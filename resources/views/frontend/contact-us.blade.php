@extends('frontend.master')
@section('content')
      <div class="bred_crumb">
            <div class="container">
                <!-- shape animation  -->
                <span class="banner_shape1"> <img src="{{asset('frontend/images/banner-shape1.png')}}" alt="image"> </span>
                <span class="banner_shape2"> <img src="{{asset('frontend/images/banner-shape2.png')}}" alt="image"> </span>
                <span class="banner_shape3"> <img src="{{asset('frontend/images/banner-shape3.png')}}" alt="image"> </span>

                <div class="bred_text">
                    <h1>Contact us</h1>
                    <p>If you have an query, please get in touch with us, we will revert back quickly.</p>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>»</span></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Contact Us Section Start -->
        <section class="contact_page_section">
            <div class="container">
                <div class="contact_inner">
                    <div class="contact_form">
                        <div class="section_title">
                            <h2>Leave a <span>message</span></h2>
                            <p>Fill up form below, our team will get back soon</p>
                        </div>
                        <form action="">

                            <div class="form-group">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Subject" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your message"></textarea>
                            </div>

                            <div class="form-group term_check">
                                <input type="checkbox" id="term">
                                <label for="term">I agree to receive emails, newsletters and promotional messages</label>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn puprple_btn">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                    <div class="contact_info">
                        <div class="icon"><img src="{{asset('frontend/images/contact_message_icon.png')}}" alt="image"></div>
                        <div class="section_title">
                            <h2>Have any <span>question?</span></h2>
                            <p>If you have any question about our product, service, payment or company, Visit our <a href="faq.html">FAQs page.</a></p>
                        </div>
                        <a href="faq.html" class="btn puprple_btn">Contact Us</a>
                        <ul class="contact_info_list">
                            <li>
                                <div class="img">
                                    <img src="{{asset('frontend/images/mail_icon.png')}}" alt="image">
                                </div>
                                <div class="text">
                                    <span>Email Us</span>
                                    <a href="mailto:futureplaning1998@gmail.com">demo@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="img">
                                    <img src="{{asset('frontend/images/call_icon.png')}}" alt="image">
                                </div>
                                <div class="text">
                                    <span>Call Us</span>
                                    <a href="tel:+88046456346">+880 7835453536</a>
                                </div>
                            </li>
                            <li>
                                <div class="img">
                                    <img src="{{asset('/frontend/images/location_icon.png')}}" alt="image">
                                </div>
                                <div class="text">
                                    <span>Visit Us</span>
                                    <p> Dhaka, 1200</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Section End -->


        <!-- Map Section Start -->
        <section class="row_am map_section">
            <div class="container">
                <div class="map_inner">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="500px;" id="gmap_canvas" src="https://maps.google.com/maps?q=Haldia, Haldia, purbomedinipur, 721604&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 100%;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Map Section End -->
@endsection