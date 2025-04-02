@extends('frontend.layouts.main')

@section('title', 'Index')

@section('main-section')
    <!-- Hero Section -->
    {{-- <section class="hero-section">
        <div class="container">
            <h1>GLAMORA</h1>
        </div>
    </section> --}}

    <!-- About Section -->
    <section class="about-section mt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center">
                    <img src="{{asset('images/poo.jpg')}}" alt="Poonam Thapa" class="img-fluid rounded shadow" style="width: 50%; height: auto;">
                </div>
                <div class="col-lg-8">
                    <h2>About Poonam Thapa</h2>
                    <p>Well-known as Poo, a trailblazing Nepali fashion designer who has gained popularity through her
                        innovative designs and creative approach to fashion. Poo has won the hearts of many through her
                        unique collections showcased on social media platforms such as Instagram, YouTube, and TikTok. She
                        has a massive following and has become a source of inspiration for aspiring designers worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section 1 -->
    <section class="mission-section mt-5">
        <div class="container">
            <h2 class="text-center mb-4">From Nepal to India, Redefining Fashion Globally.</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p>Born in Nepal, raised in India, Poonam Thapa is a passionate fashion designer and entrepreneur
                        who founded Glamora Designs in the Nepal. Determined to bridge the gap in the fashion industry, she
                        started creating unique designs, teaching fashion workshops, and inspiring individuals to embrace
                        their own style.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{asset('images/dress.png')}}" alt="Mission Image 1" class="img-fluid rounded shadow" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="{{asset('images/dress1.png')}}" alt="Mission Image 2" class="img-fluid rounded shadow" style="max-width: 100%; height: auto;">
                </div>
                <div class="col-lg-6">
                    <h2>Raising Fashion Standards Worldwide and Locally.</h2>
                    <p>Glamora Designs is the first-ever fashion brand by a Nepali sourcing materials and creating
                        collections in Nepal. We are committed to raising fashion standards by providing high-quality
                        designs that are accessible to everyone, from Nepal to the global market.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Vision: Quality Fashion for Nepal's Style Enthusiasts.</h2>
                    <p>Poonam's vision was not only to create designs for her fashion workshops but also to establish a
                        brand that Nepali individuals could trust. Recognizing the lack of quality fashion options in Nepal,
                        she founded Glamora Designs to offer high-quality, affordable clothing. Inspired by her loyal
                        followers, Poonam's dream is to make Glamora a household name in Nepal and beyond, offering designs
                        that are made with love and care.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/dress3.jpg') }}" alt="Mission Image 3" class="img-fluid rounded shadow" style="width: 70%; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section mt-5">
        <div class="container">
            <h2 class="text-center mb-4">Sustainable Fashion for a Better Tomorrow in Nepal.</h2>
            <p class="text-center">Poonam's commitment to sustainability is at the heart of Glamora Designs. We are
                dedicated to creating collections that not only enhance style but also contribute towards a better future by
                using sustainable materials and practices. We aim to create high-quality designs that resonate with the
                values of the Nepali market.</p>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
