@extends('frontend.layouts.main')

@section('title', 'Index')

@section('main-section')

    <section class="product-section">
        <div class="container">
            <h2 class="section-title">Glamora SKIN</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Pari Skin | Glass Skin Dewy Moisturiser">
                        <h5>Pari Skin | Glass Skin Dewy Moisturiser</h5>
                        <p class="price">₹ 2,800</p>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200"
                            alt="Pari Skin | Glass Skin Milky Serum + Hyaluronic Acid &...">
                        <h5>Pari Skin | Glass Skin Milky Serum + Hyaluronic Acid &...</h5>
                        <p class="price">₹ 2,800</p>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200"
                            alt="Pari Skin | Glass Skin Toner - PHA / Pore Tightening...">
                        <h5>Pari Skin | Glass Skin Toner - PHA / Pore Tightening...</h5>
                        <p class="price">₹ 2,800</p>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Glass Skin Set - Full Collection">
                        <h5>Glass Skin Set - Full Collection</h5>
                        <p class="original-price">₹ 6,150</p>
                        <p class="price">₹ 2,050</p>
                        <span class="discount">SAVE 2,050</span>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Peptide Gloss Balm - Pink Honey">
                        <h5>Peptide Gloss Balm - Pink Honey (PRE-ORDER - Shippin...)</h5>
                        <p class="original-price">₹ 1,250</p>
                        <p class="price">₹ 1,000</p>
                        <span class="discount">SAVE 250</span>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Peptide Gloss Balm - Clear Care">
                        <h5>Peptide Gloss Balm - Clear Care (PRE-ORDER - Shippin...)</h5>
                        <p class="original-price">₹ 1,250</p>
                        <p class="price">₹ 1,000</p>
                        <span class="discount">SAVE 250</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
