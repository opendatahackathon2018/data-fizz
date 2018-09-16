@extends('layouts.app')

@section('content')
    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <div class="shape shape-style-1 shape-primary alpha-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="card card-profile shadow mt--500">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="text-center order-lg-2">
                                @isset($dataBubble)
                                    {{--                                    @dd($dataBubble->type)--}}
                                    <h3>{{ $dataBubble->type->name }}</h3>
                                @endisset
                            </div>

                            @if(request()->user()->bubbles->count() === 0)
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="row row-grid">
                                            <div class="col-lg-4">
                                                <div class="card card-lift--hover shadow border-0">
                                                    <div class="card-body py-5">
                                                        <div
                                                                class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                                            <i class="ni ni-check-bold"></i>
                                                        </div>
                                                        <h6 class="text-primary text-uppercase">Natural Language
                                                            Processing</h6>
                                                        <p class="description mt-3">Argon is a great free UI package
                                                            based on Bootstrap
                                                            4
                                                            that includes the most important components and
                                                            features.</p>
                                                        <div>
                                                            <span class="badge badge-pill badge-primary">gensim</span>
                                                            <span class="badge badge-pill badge-primary">spacy</span>
                                                            <span class="badge badge-pill badge-primary">nltk</span>
                                                            <span
                                                                    class="badge badge-pill badge-primary">scikit learn</span>
                                                        </div>
                                                        <form action="{{ route('workspace.create') }}" method="post">
                                                            @csrf
                                                            <input type="text" hidden name="bubble_type"
                                                                   value="natural-language-processing">
                                                            <button class="btn btn-warning  mt-4">Create Bubble</button>
                                                        </form>
                                                        {{--<a href="#" class="btn btn-primary mt-4">Create Bubble</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card card-lift--hover shadow border-0">
                                                    <div class="card-body py-5">
                                                        <div
                                                                class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                                            <i class="ni ni-istanbul"></i>
                                                        </div>
                                                        <h6 class="text-success text-uppercase">Machine Learning</h6>
                                                        <p class="description mt-3">Argon is a great free UI package
                                                            based on Bootstrap
                                                            4
                                                            that includes the most important components and
                                                            features.</p>
                                                        <div>
                                                            <span class="badge badge-pill badge-success">Keras</span>
                                                            <span
                                                                    class="badge badge-pill badge-success">TensorFlow</span>
                                                            <span class="badge badge-pill badge-success">Theano</span>
                                                        </div>
                                                        <form action="{{ route('workspace.create') }}" method="post">
                                                            @csrf
                                                            <input type="text" hidden name="bubble_type"
                                                                   value="machine-learning">
                                                            <button class="btn btn-warning  mt-4">Create Bubble</button>
                                                        </form>
                                                        {{--<a href="#" class="btn btn-success mt-4">Create Bubble</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card card-lift--hover shadow border-0">
                                                    <div class="card-body py-5">
                                                        <div
                                                                class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                                            <i class="ni ni-planet"></i>
                                                        </div>
                                                        <h6 class="text-warning text-uppercase">Data Mining</h6>
                                                        <p class="description mt-3">Argon is a great free UI package
                                                            based on Bootstrap
                                                            4
                                                            that includes the most important components and
                                                            features.</p>
                                                        <div>
                                                            <span
                                                                    class="badge badge-pill badge-warning">marketing</span>
                                                            <span class="badge badge-pill badge-warning">product</span>
                                                            <span class="badge badge-pill badge-warning">launch</span>
                                                        </div>
                                                        <form action="{{ route('workspace.create') }}" method="post">
                                                            @csrf
                                                            <input type="text" hidden name="bubble_type"
                                                                   value="data-mining">
                                                            <button class="btn btn-warning  mt-4">Create Bubble</button>
                                                        </form>
                                                        {{--<a href="#" class="btn btn-warning mt-4">Create Bubble</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="text-center mt-5">
                            @isset($dataBubble)
                            <div class="container">
                                {{--containerTODO put buttons here--}}
                                <div class="row">
                                    <div class="col-6">
                                            <a href="{{ $dataBubble->nteract_url }}" target="_blank"
                                               style="height: 45px; width: 200px; padding-top: 15px"
                                               class="btn btn-sm btn-default float-right">nteract</a>
                                    </div>

                                    <div class="col-6">
                                            <a href="{{ $dataBubble->jupyter_url }}" target="_blank"
                                               style="height: 45px; width: 200px; padding-top: 15px"
                                               class="btn btn-sm btn-info mr-4">Jupyter</a>
                                    </div>
                                </div>

                            </div>
                            @endisset

                            {{--@isset($dataBubble)--}}
                            {{--<iframe src="{{ $dataBubble->jupyter_url }}" frameborder="0"></iframe>--}}
                            {{--@endisset--}}

                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <form method="post" action="{{ route('workspace.files') }}"
                                          enctype="multipart/form-data" id="">
                                        @csrf

                                        <label class="btn btn-outline-success" for="upload">

                                            <input hidden id="upload" type="file" class="form-control-file" name="workspace_file"/>
                                            Select Files
                                        </label>
                                        <br>
                                        {{--<button class="btn btn-clipboard">Upload File</button>--}}

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
