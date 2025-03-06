<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your Cart</span>
                    <span class="badge bg-primary rounded-circle pt-2">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Grey Hoodie</h6>
                            <small class="text-body-secondary">Breif description</small>
                        </div>
                        <span class="text-body-secondary">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Dog Food</h6>
                            <small class="text-body-second">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Soft Toy</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="fw-bold">Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </div>
        </div>
    </div>

    <div class="offcanvas  offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvaas-body">
            <div class="order-md-last">
                <h4 class="text-primary text-uppercase mb-3">
                    Search
                </h4>
                <div class="search-bar border rounded-2 border-dark-subtle">
                    <form action="" method="" id="search-form" class="text-center d-flex align-items-center">
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here">
                        <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo  -->
    <header>
        <div class="container py-2">
            <div class="row py-1 pb-0 pb-sm-4 align-items-center">
                <div class="col-sm-4 col-lg-1 text-center text-sm-start">
                    <div class="main-logo">
                        <a href="./index.php">
                            <img src="#" alt="logo" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-6 d-none d-lg-block">
                    <div class="search-bar border rounded-2 px-3 border-dark-subtle">
                        <form action="" method="" id="search-form" class="text-center d-flex align-items-center">
                            <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 10,000 products">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"></path>
                            </svg>
                        </form>
                    </div>
                </div>

                <div class="col-sm-8 col-lg-5 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
                    <div class="support-box text-end d-none d-xl-block">
                        <span class="fs-6 secondary-font text-muted">Phone</span>
                        <h5 class="mb-0">+123-45678900</h5>
                    </div>
                    <div class="support-box text-end d-none d-xl-block">
                        <span class="fs-6 secondary-font text-muted">Email</span>
                        <h5 class="mb-0">your@gmail.com</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <hr class="m-0">
        </div>

        <div class="container">
            <nav class="main-menu d-flex navbar navbar-expand-lg">
                <div class="d-flex d-lg-none align-items-end mt-3">
                    <ul class="d-flex justify-content-end list-unstyled m-0">
                        <li>
                            <a href="javascript:void(0)" class="mx-3">
                                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="mx-3">
                                <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                    03
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                                <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                            </a>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarlabel">
                    <div class="offcanvas-header justify-content-center">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body justify-content-between">
                        <select class="filter-categories border-0 mb-0 me-5">
                            <option>Shop by Items</option>
                            <option>Clothes</option>
                            <option>Food</option>
                            <option>Toy</option>
                        </select>

                        <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                            <li class="nav-item">
                                <a href="" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                                <ul class="dropdown-menu" aria-labelledby="pages">
                                    <li><a href="javascript:void(0)" class="dropdown-item">Electronics</a></li>
                                    <li><a href="javascript:void(0)" class="dropwdown-item">PC</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item">Mobile</a></li>
                                    <li><a href="javacript:void(0)" class="dropdown-item">Food</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item">VIP<span class="badge bg-primary ms-2"></span></a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link active">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Others</a>
                            </li>
                        </ul>
                        <div class="d-none d-lg-flex align-items-end">
                            <ul class="d-flex justify-content-end list-unstyled m-0">
                                <li>
                                    <a href="javascript:void(0)" class="mx-3">
                                        <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mx-3">
                                        <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                        <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                        <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                            03
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </header>

    <div class="hero-section" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
        <div class="container col-xl px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <h2 class="mx-auto" style="width: 350px;">Seasonal Sale</h2>
                    <h1 class="display-5 fw-bold lh-1 mb-3">Responsive Lef-alinged</h1>
                    <p class="lead">
                        Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mx-auto" style="width: 350px;">
                        <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Sign Up</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row text-center">
            <!-- Free Shipping -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="p-4 border rounded bg-light">
                    <i class="fa-solid fa-truck"></i>
                    <h5 class="mt-3">Free Shipping</h5>
                    <p class="text-muted">Enjoy free shipping on all orders over $50.</p>
                </div>
            </div>

            <!-- Secure Payment -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="p-4 border rounded bg-light">
                    <i class="fa-solid fa-handshake"></i>
                    <h5 class="mt-3">Secure Payment</h5>
                    <p class="text-muted">Your payment information is always secure.</p>
                </div>
            </div>

            <!-- 100% Money Back -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="p-4 border rounded bg-light">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <h5 class="mt-3">100% Money Back</h5>
                    <p class="text-muted">Not satisfied? Get a full refund within 30 days.</p>
                </div>
            </div>

            <!-- Online Support -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="p-4 border rounded bg-light">
                    <i class="fa-solid fa-comments"></i>
                    <h5 class="mt-3">Online Support</h5>
                    <p class="text-muted">We're here to help 24/7 with any questions.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row g-4" style="height: 60vh;">
            <!-- Left Column (2/5 width) -->
            <div class="col-md-7">
                <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg'); background-size: cover; background-position: center;">
                    <h3>Left Section</h3>
                    <p>This is the left section with a background image, text, and a button.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>

            <!-- Right Column (3/5 width) -->
            <div class="col-md-5">
                <!-- First Row (Two Columns) -->
                <div class="row g-4 h-50">
                    <div class="col-md-6">
                        <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg'); background-size: cover; background-position: center;">
                            <h3>Right Top Left</h3>
                            <p>This is the top left box in the right section.</p>
                            <button class="btn btn-primary">Learn More</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg'); background-size: cover; background-position: center;">
                            <h3>Right Top Right</h3>
                            <p>This is the top right box in the right section.</p>
                            <button class="btn btn-primary">Learn More</button>
                        </div>
                    </div>
                </div>

                <!-- Second Row (One Column) -->
                <div class="row g-4 h-75" id="second-column">
                    <div class="col-12">
                        <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg'); background-size: cover; background-position: center;">
                            <h3>Right Bottom</h3>
                            <p>This is the bottom box in the right section.</p>
                            <button class="btn btn-primary">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 100px;">
        <!-- Section Title -->
        <div class="text-center mb-4">
            <h2>Featured Products</h2>
            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="#" class="text-decoration-none">New Arrival</a>
                <a href="#" class="text-decoration-none">Best Selling</a>
                <a href="#" class="text-decoration-none">Top Rated</a>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 1</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 2</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 3</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 4</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 5</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>


            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-6">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('./assets/imgs/benaja-germann-s31jlbIcp7E-unsplash.jpg');">
                        <span class="discount-tag">20% OFF</span>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                    <div class="product-details mt-3">
                        <h5 class="product-name">Product Name 6</h5>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="product-price">$50.00</p>
                    </div>
                </div>
            </div>

            <!-- Repeat for Products 7 to 10 -->
        </div>
    </div>

    <div class="container mt-5 mb-5 p-0"> <!-- Added p-0 to remove default padding -->
        <div class="row g-0 align-items-center" style="background: linear-gradient(90deg, #ff7e5f, #feb47b); border-radius: 10px;"> <!-- Added gradient and g-0 to remove gutters -->
            <!-- Left Column (Background Image with Text) -->
            <div class="col-md-6">
                <div class="newsletter-left p-5 text-white text-center" style="background-image: url('https://via.placeholder.com/600x400'); background-size: cover; background-position: center; border-radius: 10px 0 0 10px;">
                    <h2>Don't Miss Out!</h2>
                    <p class="lead">Subscribe to our newsletter and stay updated with the latest news, offers, and exclusive deals.</p>
                    <button class="btn btn-light btn-lg">Learn More</button>
                </div>
            </div>

            <!-- Right Column (Subscription Form) -->
            <div class="col-md-6">
                <div class="newsletter-right p-5">
                    <h2 class="mb-4">Subscribe to Our Newsletter</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white mt-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Column 1: Quick Links -->
                <div class="col-md-3 col-sm-6">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Contact Info -->
                <div class="col-md-3 col-sm-6">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone"></i> +123 456 7890</li>
                        <li><i class="bi bi-envelope"></i> info@example.com</li>
                        <li><i class="bi bi-geo-alt"></i> 123 Main St, City, Country</li>
                    </ul>
                </div>

                <!-- Column 4: Social Media -->
                <div class="col-md-3 col-sm-6">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-facebook"></i> Facebook</a></li>
                        <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram"></i> Instagram</a></li>
                        <li><a href="#" class="text-white text-decoration-none"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>

                <!-- Column 5: Map -->
                <div class="col-md-12 col-lg-3">
                    <h5>Our Location</h5>
                    <div class="map-container" style="height: 200px; border-radius: 10px; overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093747!2d144.95373531531664!3d-37.816279742021665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d2fed4f5b6e1!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1633031100000!5m2!1sen!2sus"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; 2025 Your Company Name. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>