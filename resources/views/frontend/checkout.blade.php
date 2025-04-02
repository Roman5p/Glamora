@extends('frontend.layouts.main')

@section('title', 'Index')

@section('main-section')

    <style>
        body {
            background-color: white;
        }

        .checkout-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .checkout-form {
            flex: 1;
            margin-right: 20px;
        }

        .order-summary {
            flex: 0 0 300px;
        }

        .payment-methods {
            margin-top: 20px;
        }
    </style>

    <div class="container mt-5 background-color: #ffffff;">
        <div class="checkout-container">
            <div class="checkout-form">
                <h4 class="mb-4 text-center text-primary">Checkout</h4>
                <p class="text-center text-muted">Please fill in the details below to complete your purchase.</p>
                <hr class="mb-4">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullName" placeholder="eg: Ram Bahadur">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="eg: john@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="eg: 9862200000">
                </div>
                <div class="mb-3">
                    <label for="orderNote" class="form-label">Order Note (any message for us)</label>
                    <textarea class="form-control" id="orderNote" rows="3"
                        placeholder="eg: I was searching for this product from so long."></textarea>
                </div>
                <div class="mb-3">
                    <h5>2. Delivery Address</h5>
                    <div class="mb-3">
                        <label for="cityDistrict" class="form-label">City / District <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cityDistrict"
                            placeholder="Kathmandu Inside Ring Road">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="address" placeholder="eg: kathmandu, tinkune">
                    </div>
                    <div class="mb-3">
                        <label for="landmark" class="form-label">Landmark</label>
                        <input type="text" class="form-control" id="landmark" placeholder="eg: madan bhandari park">
                    </div>
                </div>
                <div class="mb-3">
                    <h5>3. Payment Methods</h5>
                    <div class="payment-methods">
                        <h6 class="mb-3">Choose a Payment Method</h6>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm">
                                <input type="radio" id="qrPayment" name="paymentMethod" value="QR Payment" class="me-3">
                                <label for="qrPayment" class="d-flex align-items-center w-100">
                                    <img src="{{ asset('images/qr.png') }}" alt="QR Payment" class="me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                    <span>QR Payment</span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm">
                                <input type="radio" id="visaMastercard" name="paymentMethod" value="Visa/Mastercard" class="me-3">
                                <label for="visaMastercard" class="d-flex align-items-center w-100">
                                    <img src="{{ asset('images/Card.jpeg') }}" alt="Visa/Mastercard" class="me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                    <span>Visa/Mastercard</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-summary">
                <h5>Order Summary</h5>
                <div class="d-flex align-items-center mb-3">
                    <img src="https://via.placeholder.com/100" alt="Product Image" class="me-3">
                    <div>
                        <h6>Pale Brown Contact Lens</h6>
                        <p>Variant: 0.00</p>
                        <p class="text-danger">₹ 1,200 × 1</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-3">
                    <span>Sub-total</span>
                    <span>₹ 1,200</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Delivery Charge</span>
                    <span>₹ 100</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Total</span>
                    <span>₹ 1,300</span>
                </div>
                <div class="mb-3">
                    <label for="promoCode" class="form-label">Promo Code</label>
                    <input type="text" class="form-control" id="promoCode" placeholder="eg: FREE30">
                    <button class="btn btn-primary mt-2">APPLY</button>
                </div>
                <button class="btn btn-danger w-100">Place Order</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const applyButton = document.querySelector('button');
            applyButton.addEventListener('click', function() {
                const promoCode = document.getElementById('promoCode').value;
                if (promoCode === 'FREE30') {
                    alert('Promo code applied successfully!');
                } else {
                    alert('Invalid promo code.');
                }
            });
        });
    </script>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
