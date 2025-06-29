@extends('frontend.index')
@section('content')
     <!-- BredCrumb-Section -->
        <div class="bred_crumb">
            <div class="container">
                <!-- shape animation  -->
                <span class="banner_shape1"> <img src="{{asset('frontend/images/banner-shape1.png')}}" alt="image" > </span>
                <span class="banner_shape2"> <img src="{{asset('frontend/images/banner-shape2.png')}}" alt="image" > </span>
                <span class="banner_shape3"> <img src="{{asset('frontend/images/banner-shape3.png')}}" alt="image" > </span>

                <div class="bred_text">
                    <h1>About us</h1>
                    <ul>
                        <li><a href="index-3.html">Home</a></li>
                        <li><span>»</span></li>
                        <li><a href="about-2.html">About us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- App-Solution-Section-Start -->
        <section class="row_am app_solution_section">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- UI content -->
                        <div class="app_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <h2><span>About</span> life improvemente</h2>
                            </div>
                            <p data-aos="fade-up" data-aos-duration="1500">
                                life improvemente is your premier destination for online courses in photo editing, video editing, and digital marketing.
                                Our carefully curated curriculum and experienced instructors ensure that you receive top-notch training to excel in these dynamic fields.
                                Whether you're a budding photographer, aspiring filmmaker, or marketing enthusiast, our courses cater to all skill levels and provide practical, hands-on knowledge.
                                With our flexible learning options, you can study at your own pace from anywhere in the world, accessing high-quality instructional material and engaging with a supportive online community.
                            </p>
                            <p data-aos="fade-up" data-aos-duration="1500">
                                Invest in your future and unlock your creative and professional potential with life improvemente's comprehensive online courses.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app_images" data-aos="fade-in" data-aos-duration="1500">
                            <ul>
                                <li><img src="{{asset('frontend/images/abt_01.png')}}" alt=""></li>
                                <li><img src="{{asset('frontend/images/abt_02.png')}}" alt=""></li>
                                <li><img src="{{asset('frontend/images/abt_03.png')}}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- App-Solution-Section-end -->

        <section class="row_am about_app_section about_page_sectino">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- about images -->
                        <div class="abt_img" data-aos="fade-in" data-aos-duration="1500">
                            <img src="{{asset('frontend/images/about_main.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- about text -->
                        <div class="about_text">
                            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                <!-- h2 -->
                                <h2> <span>Our Mission</span> & Vision</h2>
                                <!-- p -->
                                <p>
                                    At life improvemente, our mission is to empower individuals with the knowledge and skills they need to succeed in the digital era. We are dedicated to providing high-quality online courses in photo editing, video editing, and digital marketing that are accessible, practical, and tailored to the needs of our learners. Our goal is to equip our students with the expertise and confidence to unleash their creative potential and achieve their professional aspirations.
                                </p>

                                <p>
                                    Our vision is to be a global leader in online education, revolutionizing the way people learn and acquire valuable skills. We envision a world where individuals can easily access high-quality educational resources from anywhere, at any time. Through our innovative and comprehensive courses, we aim to bridge the gap between traditional and digital learning, fostering a community of lifelong learners who are well-equipped to thrive in the ever-evolving digital landscape. Together, we envision a future where education is inclusive, empowering, and transformative.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- About-App-Section-end -->

        <!-- Query Section Start -->
        <section class="row_am query_section">
            <div class="query_inner" data-aos="fade-in" data-aos-duration="1500">
                <div class="container">
                    <!-- shape animation  -->
                    <span class="banner_shape1"> <img src="{{asset('frontend/images/banner-shape1.png')}}" alt="image" > </span>
                    <span class="banner_shape2"> <img src="{{asset('frontend/images/banner-shape2.png')}}" alt="image" > </span>
                    <span class="banner_shape3"> <img src="{{asset('frontend/images/banner-shape3.png')}}" alt="image" > </span>

                    <div class="section_title">
                        <h2>Have any query about ?</h2>
                        <p>We're here to help! Feel free to reach out to us with any questions or concerns you may have. Our dedicated <br> support team is ready to assist you in your learning journey.</p>
                    </div>
                    <a href="tel:919635500307" class="btn white_btn">CONTACT US NOW</a>
                </div>
            </div>
        </section>
@endsection