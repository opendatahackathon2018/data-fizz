@extends('layouts.app')

@section('content')

    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="shape shape-style-1 shape-default">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="display-3  text-white"><i class="fa fa-flask"></i>&nbsp;Data Fizz
                                    <span>One Click Data Science</span>
                                </h1>
                                <p class="lead  text-white">Remove the pain from data science Environment Setup.
                                    Batteries Included</p>
                                <div class="btn-wrapper">
                                    <a href="{{ route('login') }}"
                                       class="btn btn-info btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                                        <span class="btn-inner--text">Get Started </span>
                                    </a>
                                    <a href="https://www.creative-tim.com/product/argon-design-system"
                                       class="btn btn-white btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-atom"></i></span>
                                        <span class="btn-inner--text">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                         xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section section-lg pt-lg-0 mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                        <h6 class="text-primary text-uppercase">Natural Language Processing</h6>
                                        <p class="description mt-3">Argon is a great free UI package based on Bootstrap
                                            4
                                            that includes the most important components and features.</p>
                                        <div>
                                            <span class="badge badge-pill badge-primary">gensim</span>
                                            <span class="badge badge-pill badge-primary">spacy</span>
                                            <span class="badge badge-pill badge-primary">nltk</span>
                                            <span class="badge badge-pill badge-primary">scikit learn</span>
                                        </div>


                                        <a href="{{route('home')}}" class="btn btn-primary mt-4">Data Bubble</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                            <i class="ni ni-istanbul"></i>
                                        </div>
                                        <h6 class="text-success text-uppercase">Machine Learning</h6>
                                        <p class="description mt-3">Start building and training your models </p>
                                        <div>
                                            <span class="badge badge-pill badge-success">Keras</span>
                                            <span class="badge badge-pill badge-success">TensorFlow</span>
                                            <span class="badge badge-pill badge-success">Theano</span>
                                        </div>

                                        <a href="{{route('home')}}" class="btn btn-primary mt-4">Data Bubble</a>
                                        {{--<a href="#" class="btn btn-success mt-4">Create Bubble</a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                            <i class="ni ni-planet"></i>
                                        </div>
                                        <h6 class="text-warning text-uppercase">Data Mining</h6>
                                        <p class="description mt-3">Create a Data Mining Bubble to start mining data
                                            from the web immediately!</p>
                                        <div>
                                            <span class="badge badge-pill badge-warning">Scrapy</span>
                                            <span class="badge badge-pill badge-warning">Statsmodels</span>
                                            <span class="badge badge-pill badge-warning">BeautifulSoup</span>
                                        </div>

                                        <a href="{{route('home')}}" class="btn btn-primary mt-4">Data Bubble</a>
                                        {{--<a href="#" class="btn btn-warning mt-4">Create Bubble</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="{{ asset('img/theme/promo-1.png')}}" class="img-fluid floating">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="pr-md-5">
                            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                                <i class="ni ni-settings-gear-65"></i>
                            </div>
                            <h3>Awesome features</h3>
                            <p>The kit comes with four pre-built pages to help you get started faster.</p>
                            <ul class="list-unstyled mt-5">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-settings-gear-65"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Seamless access to Open Data through our Python
                                                library</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-html5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Create a cloud environment containing all the packages you
                                                need in a click</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Run your heavy computations in our cloud!</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Seamlessly synchronise your local environment with your
                                                Data Bubble</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<section class="section bg-secondary">--}}
        {{--<div class="container">--}}
        {{--<div class="row row-grid align-items-center">--}}
        {{--<div class="col-md-6">--}}
        {{--<div class="card bg-default shadow border-0">--}}
        {{--<img src="{{ asset('img/theme/img-1-1200x1000.jpg')}}" class="card-img-top">--}}
        {{--<blockquote class="card-blockquote">--}}
        {{--<svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"--}}
        {{--class="svg-bg">--}}
        {{--<polygon points="0,52 583,95 0,95" class="fill-default"/>--}}
        {{--<polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"/>--}}
        {{--</svg>--}}
        {{--<h4 class="display-3 font-weight-bold text-white">Artificial Intelligence</h4>--}}
        {{--<p class="lead text-italic text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet hic quae quos sit vitae voluptatem voluptatibus. At, laboriosam, repellat! Aliquam et iusto libero nulla. Cumque cupiditate quis quos tenetur voluptate?</p>--}}
        {{--</blockquote>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-6">--}}
        {{--<div class="pl-md-5">--}}
        {{--<div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">--}}
        {{--<i class="ni ni-settings"></i>--}}
        {{--</div>--}}
        {{--<h3>Our customers</h3>--}}
        {{--<p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element.--}}
        {{--Just--}}
        {{--make sure you enable them first via JavaScript.</p>--}}
        {{--<p>The kit comes with three pre-built pages to help you get started faster. You can change--}}
        {{--the--}}
        {{--text and images and you're good to go.</p>--}}
        {{--<p>The kit comes with three pre-built pages to help you get started faster. You can change--}}
        {{--the--}}
        {{--text and images and you're good to go.</p>--}}
        {{--<a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful--}}
        {{--websites</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</section>--}}
        <section class="section pb-0 bg-gradient-warning">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-lg-2 ml-lg-auto">
                        <div class="position-relative pl-md-5">
                            <img src="{{ asset('img/ill/ill-2.svg')}}" class="img-center img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="d-flex px-3">
                            <div>
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                                    <i class="ni ni-building text-primary"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="display-3 text-white">Plans</h4>
                                <p class="text-white">Choose the plan that suits your needs.</p>
                            </div>
                        </div>
                        <div class="card shadow shadow-lg--hover mt-5">
                            <div class="card-body">
                                <div class="d-flex px-3">
                                    <div>
                                        <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                            <i class="ni ni-satisfied"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5 class="title text-success">Free Bubble</h5>
                                        <p>A single cloud environment suitable students and tinkerers that are getting
                                            started.</p>
                                        <ul class="list-unstyled mt-5">
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-success mr-3">
                                                            <i class="ni ni-settings-gear-65"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">DataFizz Library to easily Access Government
                                                            and other Open Data</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-success mr-3">
                                                            <i class="ni ni-html5"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Prebuild Datascience Enviroment spin up one in
                                                            a single click
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-success mr-3">
                                                            <i class="ni ni-satisfied"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Github access to enable you to clone or publish
                                                            your work
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="text-success">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow shadow-lg--hover mt-5">
                            <div class="card-body">
                                <div class="d-flex px-3">
                                    <div>
                                        <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                            <i class="ni ni-active-40"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <h5 class="title text-warning">Premium Bubble</h5>
                                        <p>For the professionals with needs more than usual.</p>
                                        <ul class="list-unstyled mt-5">
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-success mr-3">
                                                            <i class="ni ni-settings-gear-65"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Create multiple Data Bubbles to handle the
                                                            heavy payloads</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-success mr-3">
                                                            <i class="ni ni-html5"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Tensor Flow Model Server</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="badge badge-circle badge-success mr-3">
                                                            <i class="ni ni-satisfied"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Spark Cluster to handle Streaming Data</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="text-warning">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center text-center mb-lg">
                    <div class="col-lg-8">
                        <h2 class="display-3">The amazing Team</h2>
                        <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration,
                            Ted,
                            Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
                    </div>
                </div>
                <div class="row ">
                    {{--<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">--}}
                    {{--<div class="px-4">--}}
                    {{--<img src="{{ asset('img/theme/team-1-800x800.jpg')}}"--}}
                    {{--class="rounded-circle img-center img-fluid shadow shadow-lg--hover"--}}
                    {{--style="width: 200px;">--}}
                    {{--<div class="pt-4 text-center">--}}
                    {{--<h5 class="title">--}}
                    {{--<span class="d-block mb-1">Ryan Tompson</span>--}}
                    {{--<small class="h6 text-muted">Web Developer</small>--}}
                    {{--</h5>--}}
                    {{--<div class="mt-3">--}}
                    {{--<a href="#" class="btn btn-warning btn-icon-only rounded-circle">--}}
                    {{--<i class="fa fa-twitter"></i>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="btn btn-warning btn-icon-only rounded-circle">--}}
                    {{--<i class="fa fa-facebook"></i>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="btn btn-warning btn-icon-only rounded-circle">--}}
                    {{--<i class="fa fa-dribbble"></i>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="{{ asset('img/15676231_1342806595763670_1842416526689187293_o.jpg')}}"
                                 class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                                 style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Nikolas Pafitis</span>
                                    <small class="h6 text-muted">Frontend Developer, UI/UX</small>
                                </h5>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-icon-only rounded-circle">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="{{ asset('img/28070810_10204473573316443_6276484572252043628_o.jpg')}}"
                                 class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                                 style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Lefteris Kameris</span>
                                    <small class="h6 text-muted">CTO</small>
                                </h5>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="{{ asset('img/28070810_10204473573316443_6276484572252043628_o.jpg')}}"
                                 class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
                                 style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Aggelos Prastitis</span>
                                    <small class="h6 text-muted">Data Scientist and Engineer</small>
                                </h5>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-success btn-icon-only rounded-circle">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg pt-0">
            <div class="container">
                <div class="card bg-gradient-warning shadow-lg border-0">
                    <div class="p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h3 class="text-white">We made Data Science easier for you.</h3>
                                <p class="lead text-white mt-3">Have an easier time working by being offered
                                    instantaneous development through our cloud environments and seamless access to Open
                                    Data.</p>
                            </div>
                            <div class="col-lg-3 ml-lg-auto">
                                <a href="https://www.creative-tim.com/product/argon-design-system"
                                   class="btn btn-lg btn-block btn-white">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
