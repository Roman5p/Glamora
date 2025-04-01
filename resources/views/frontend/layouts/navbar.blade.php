<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fff0f5;
    }

    .navbar {
        background-color: #ff69b4;
    }

    .navbar-brand,
    .nav-link {
        color: white !important;
        font-weight: bold;
    }

    .hero {
        background: url('hero-bg.jpg') no-repeat center center/cover;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #d81b60;
        text-align: center;
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .section {
        padding: 60px 0;
        text-align: center;
    }

    .about img {
        max-width: 100%;
        border-radius: 10px;
    }

    .reviews {
        background-color: #ffb6c1;
    }

    .testimonial {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .testimonial p {
        font-style: italic;
    }

    .footer {
        background-color: #ff69b4;
        color: white;
        padding: 20px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .navbar-nav {
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin-bottom: 10px;
        }

        .hero h1 {
            font-size: 2rem;
        }
    }
</style>

<nav class="navbar navbar-expand-lg mt-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Glamora</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="{{ route('cosmetic') }}">Cosmetic</a></li>
                        <li><a class="dropdown-item" href="{{ route('lens') }}">Lens</a></li>
                        <li><a class="dropdown-item" href="{{ route('skin') }}">Skin</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#delivery">Delivery</a></li> --}}
            </ul>
        </div>
        <ul class="navbar-nav ms-auto"> <!-- ms-auto for right alignment -->
            <li class="nav-item">
                <a class="nav-link position-relative d-flex align-items-center mt-2" href="#cart"
                    style="color: white;">
                    <i class="bi bi-cart-fill fs-4"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                        <span class="visually-hidden">items in cart</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>
