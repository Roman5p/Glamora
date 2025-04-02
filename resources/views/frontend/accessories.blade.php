@extends('frontend.layouts.main')

@section('title', 'Index')

@section('main-section')

    <section class="product-section">
        <div class="container">
            <h2 class="section-title text-center my-4" style="font-size: 2rem; font-weight: bold; color: #333; text-transform: uppercase; letter-spacing: 2px;">
                Fashion Accessories
            </h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Stylish Sunglasses">
                        <h5>Stylish Sunglasses</h5>
                        <p class="original-price">₹ 2,000</p>
                        <p class="price">₹ 1,499</p>
                        <span class="discount">SAVE 501</span>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Elegant Watch">
                        <h5>Elegant Watch</h5>
                        <p class="original-price">₹ 5,000</p>
                        <p class="price">₹ 3,999</p>
                        <span class="discount">SAVE 1,001</span>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Leather Wallet">
                        <h5>Leather Wallet</h5>
                        <p class="original-price">₹ 1,200</p>
                        <p class="price">₹ 899</p>
                        <span class="discount">SAVE 301</span>
                    </div>
                </div>
                <!-- Product 4 -->
                <!-- Duplicate products removed -->
                <!-- Product 8 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Classic Hat">
                        <h5>Classic Hat</h5>
                        <p class="original-price">₹ 1,000</p>
                        <p class="price">₹ 799</p>
                        <span class="discount">SAVE 201</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Chic Handbag">
                        <h5>Chic Handbag</h5>
                        <p class="original-price">₹ 3,000</p>
                        <p class="price">₹ 2,499</p>
                        <span class="discount">SAVE 501</span>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Trendy Scarf">
                        <h5>Trendy Scarf</h5>
                        <p class="original-price">₹ 800</p>
                        <p class="price">₹ 599</p>
                        <span class="discount">SAVE 201</span>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Statement Necklace">
                        <h5>Statement Necklace</h5>
                        <p class="original-price">₹ 1,500</p>
                        <p class="price">₹ 1,199</p>
                        <span class="discount">SAVE 301</span>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/200x200" alt="Designer Belt">
                        <h5>Designer Belt</h5>
                        <p class="original-price">₹ 1,800</p>
                        <p class="price">₹ 1,399</p>
                        <span class="discount">SAVE 401</span>
                    </div>
                </div>
            </div>
    </section>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
