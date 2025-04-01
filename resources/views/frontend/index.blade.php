@extends('frontend.layouts.main')

@section('title', 'Index')

@section('main-section')

    <section class="hero">
        <div class="container">
            <h1>Welcome to Glamora Cosmetics</h1>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Founded by Poonam Thapa, Glamora Cosmetics was born out of a vision to inspire confidence and celebrate
                individuality. Discover our story and join us on this beautiful journey.</p>
            {{-- <img src="founder.jpg" alt="Founder"> --}}
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="section reviews" id="reviews">
        <div class="container">
            <h2>Customer Reviews</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial">
                        <h5>Bishakha Rupakheti</h5>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>"Oh my gwad, these lenses are so comfortable!"</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial">
                        <h5>Kritisha Shrestha</h5>
                        <p>⭐⭐⭐⭐</p>
                        <p>"The lenses are really comfortable and I love how it enhances my eyes. The only issue I had was
                            with the delivery."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery Section -->
    <section class="section" id="delivery">
        <div class="container">
            <h2>Delivery Information</h2>
            <div class="accordion" id="deliveryAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
                            How long does delivery take?
                        </button>
                    </h2>
                    <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#deliveryAccordion">
                        <div class="accordion-body">Standard delivery takes 3-5 business days.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">
                            Can I get same-day delivery?
                        </button>
                    </h2>
                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#deliveryAccordion">
                        <div class="accordion-body">Same-day delivery is available in select areas.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
