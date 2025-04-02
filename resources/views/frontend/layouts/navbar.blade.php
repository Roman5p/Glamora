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

    .marquee {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
        background-color: #ffb6c1;
        color: #070104;
        font-weight: bold;
        padding: 2px 0;
    }

    .marquee p {
        display: inline-block;
        animation: marquee 15s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>

<div class="marquee">
    <p>Welcome to Glamora! Discover the best in boutique fashion design wear, ornaments, and many more. Shop now and enjoy exclusive offers!</p>
</div>


<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Glamora</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-weight: bold;">
                        Products
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="{{ route('dress') }}">Dresses</a></li>
                        <li><a class="dropdown-item" href="{{ route('accessory') }}">Accessories</a></li>
                        <li><a class="dropdown-item" href="{{ route('handbag') }}">Handbags</a></li>
                        {{-- <li><a class="dropdown-item" href="{{ route('jewelry') }}">Jewelry</a></li>
                        <li><a class="dropdown-item" href="{{ route('shoes') }}">Shoes</a></li>
                        <li><a class="dropdown-item" href="{{ route('scarves') }}">Scarves</a></li>
                        <li><a class="dropdown-item" href="{{ route('hats') }}">Hats</a></li>
                        <li><a class="dropdown-item" href="{{ route('sunglasses') }}">Sunglasses</a></li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#reviews">
                        <i class="bi bi-star-fill me-1"></i> Reviews
                    </a>
                </li> --}}
                {{-- <li class="nav-item"><a class="nav-link" href="#delivery">Delivery</a></li> --}}
            </ul>
        </div>
        <div class="d-flex justify-content-end align-items-center "> <!-- Added me-3 for margin -->
            <ul class="navbar-nav"> <!-- Removed ms-auto for better alignment -->
                <li class="nav-item">
                    <a class="nav-link position-relative d-flex align-items-center mt-2" href="#cart"
                        style="color: white;">
                        <i class="bi bi-cart3 fs-5"></i> <!-- Changed icon to a cart and made it smaller -->
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                            <span class="visually-hidden">items in cart</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex align-items-center me-5">
        <!-- Login Button -->
        <button type="button" class="btn btn-outline-light me-2 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="bi bi-box-arrow-in-right me-1"></i>
        </button>
        <!-- Register Button -->
        <button type="button" class="btn btn-outline-light d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#registerModal">
            <i class="bi bi-person-plus me-1"></i>
        </button>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #ff69b4; color: white;">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn" style="background-color: #ff69b4; color: white; width: 100%; margin-top: 1rem;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #ff69b4; color: white;">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="registerName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="registerName" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="registerEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="registerConfirmPassword" placeholder="Confirm your password">
                        </div>
                        <button type="submit" class="btn" style="background-color: #ff69b4; color: white; width: 100%; margin-top: 1rem;">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</nav>
