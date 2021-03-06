@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="remodal-bg">

        <div class="content_contain">
            <div class="page_contain">
                <section class="partners_hero inner">
                    <div class="contain">
                        <h6>Laravel Partner</h6>
                        <div class="hero_heading">
                            <img src="/img/partners/aboutyou.svg" alt="About You">
                            <div class="actions">
                                <a href="https://corporate.aboutyou.de/de/jobs/backend-php-developer?utm_source=laravelpartners&utm_medium=socialgroups&utm_campaign=tech&utm_content=backend-php-developer&trid=0f3372fc-9ea7-4efc-bdcd-7b6bbaec857d" class="btn"><span>Get Hired</span></a>
                                <a href="https://corporate.aboutyou.de/en/departments/tech?utm_source=laravelpartnersgethired&utm_medium=socialgroups&utm_campaign=tech" class="btn secondary"><span>Find Out More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="contain">
                            <h3>ABOUT YOU is one of the fastest-growing e-commerce startups in Europe located in the city center of Hamburg. </h3>
                            <div class="hero_img"><img src="/img/partners/img_aboutyou_detail.png" alt="about you">
                            </div>
                        </div>
                    </div>
                </section>

                <div class="contain">
                    <div class="partners_detail_main">
                        <div class="bg">
                            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="content" style="padding-top:40px">
                            <p>ABOUT YOU is a fashion- and tech company operating a fashion online shop with more than ⅓ of our employees being developers.</p>

                            <div class="list_block">
                                <h3>Proficiencies</h3>
                                <ul>
                                    <li>State-of-the-art technology</li>
                                    <li>Help in the relocation process</li>
                                    <li>Flexible working hours</li>
                                    <li>Free access to the code.talks conference</li>
                                    <li>Flexible organizational model</li>
                                    <li>Language courses</li>
                                    <li>Laracast account for free</li>
                                    <li>Central city center location</li>
                                    <li>Exclusive employee discounts</li>
                                    <li>Weekly internal Tech Talks & quarterly Hackathons</li>
                                </ul>
                            </div>

                            <p>The company was founded in 2014 and has evolved into the second largest fashion e-commerce retailer in Europe operating in 8 countries with a company valuation of more than 1 billion USD  in 2018, we became Hamburg’s first so-called “unicorn”. </p>

                            <p>Recognizing the advantages of our custom-built shop system, which is mostly based on Laravel, we took the next step by offering our infrastructure as a service to other companies. This SAAS, the ABOUT YOU CLOUD, allows other eCommerce players to take advantage of our e-commerce backend system and build their business on it.</p>

                            <p>Our aim is to achieve the best online shopping experience for our customers while being fast in our product development. To ensure that developers have a satisfactory working-environment and stay fast at the same time, we developed our own organization model called MOVE. It will support you to grow and learn new things. Find out more about MOVE in this 2 minute video.</p>

                            <p>Sounds good? <a href="https://corporate.aboutyou.de/en/departments/tech?utm_source=laravelpartnersgethired&utm_medium=socialgroups&utm_campaign=tech">Click here</a> and join us! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
