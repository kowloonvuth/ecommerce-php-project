<?php
session_start();

include './includes/kick-off.php';
include './Database/conn.php';
$pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 6');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_SESSION['newsletter_success'])) {
    $success = $_SESSION['newsletter_success'];
    unset($_SESSION['newsletter_success']);
}

$stmt = $pdo->prepare('SELECT * FROM products WHERE best_seller = 1');
$stmt->execute();
$best_selling_products = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
                <path fill="currentColor" d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
                <path fill="currentColor" d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
                <path fill="currentColor" d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
                <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
                <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
                <path fill="currentColor" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
                <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>
        </defs>
    </svg>
    <!-- Hidden sidebar menu -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your Cart</span>
                    <span id="cart-sidebar-count" class="badge bg-primary rounded-circle pt-2">0</span>
                </h4>
                <ul id="cart-items" class="list-group mb-3">

                </ul>
                <button class="w-100 btn btn-priamry btn-lg bg-danger" type="submit">
                    <a href="checkout.php" style="text-decoration: none;">Continue To Checkout</a>
                </button>
            </div>
        </div>
    </div>
    <!-- Top Navigation Bar  -->

    <?php
    include './includes/header.php';
    ?>

    <!-- Hero Section -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <!-- first -->
            <div class="swiper-slide col-lg-6">
                <div class="hero-section" style="background-image: url('./assets/images/kny-3_orig.jpg');">
                    <div class="container col-xl px-5 mb-5">
                        <div class="row flex-lg-column align-items-center g-5 py-5 mb-5">
                            <h1 class="mx-auto text-center text-white" style="font-size: 38px; margin-bottom: 95px;">Let's Celebrate Khmer New Year With ZINVO family</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second -->
            <div class="swiper-slide col-lg-6">
                <div class="hero-section" style="background-image: url('./assets/images/BLADE_DRAGON_1800x.webp');">
                    <div class="container col-xl" style="padding-top: 295px;">
                        <h2 class="mx-auto text-center text-light" style="width: 350px;">ZINVO BLADE DRAGON</h2>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mx-auto" style="width: 350px;">
                            <button type="button" class="btn btn-light btn-lg px-4 me-md-2">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third -->
            <div class="swiper-slide col-lg-6">
                <div class="hero-section" style="background-image: url('./assets/images/Web_1800-878_1800x.webp');">
                    <div class="container col-xl">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mx-auto" style="width: 350px;">
                            <button type="button" class="btn btn-light btn-lg px-4 me-md-2" style="margin-top: 360px;">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>


    <!-- Promotional Banner -->

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



    <!-- Feature Products -->

    <!-- New Feature Products -->
    <!-- Banner Section -->

    <section class="py-3" style="background-image: url('#'); background-repeat: no-repeat; background-size: cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-blocks">
                        <div class="banner-ad large bg-info block-1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories">100% natural</div>
                                                <h3 class="display-4">Fresh Smoothies & Summer Juice</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
                                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop Now</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="assets/images/lines-from-leaves.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories">100% natural</div>
                                                <h3 class="display-4">Fresh Vegetables</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
                                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop Now</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="assets/images/lines-from-leaves.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories">100% natural</div>
                                                <h3 class="display-4">Fresh Tomato</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
                                                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop Now</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="assets/images/lines-from-leaves.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>

                        <div class="banner-ad bg-success-subtle block-2" style="background: url('#') no-repeat;background-position: right bottom">
                            <div class="row banner-content p-5">

                                <div class="content-wrapper col-md-7">
                                    <div class="categories sale mb-3 pb-3">20% off</div>
                                    <h3 class="banner-title">Fruits & Vegetables</h3>
                                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg></a>
                                </div>

                            </div>
                        </div>

                        <div class="banner-ad bg-danger block-3" style="background: url('#') no-repeat; background-position: right bottom">
                            <div class="row banner-content p-5">
                                <div class="content-wrapper col-md-7">
                                    <div class="categories sale mb-3 pb-3">15% off</div>
                                    <h3 class="item-title">Baned Products</h3>
                                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End New Feature Products -->

    <!-- Demo Database -->

    <!-- <div class="featured">
        <h2>Gadgets</h2>
        <p>Essential gadgets for everyday use</p>
    </div>
    <div class="listed-product">
        <h2>Recently Added Products</h2>
        <div class="products">
            <?php foreach ($recently_added_products as $product): ?>
                <a href="#">
                    <img src="assets/images/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['title'] ?>" >
                    <span class="name" style="color: blue;"><?php echo $product['title'] ?></span>
                    <span class="price">
                        &dollar;<?php echo $product['price'] ?>
                        <?php if ($product['rrp'] > 0): ?>
                            <span class="rrp">&dollar;<?php echo $product['rrp'] ?></span>
                        <?php endif; ?>
                    </span>
                    <span class="desc"><?php echo $product['description'] ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div> -->

    <!-- End Demo Database -->

    <div class="container" style="margin-top: 100px;">
        <!-- Section Title -->
        <div class="text-center mb-4">
            <h2>Featured Products</h2>
            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="#" class="text-decoration-none">New Arrival</a>
                <a href="#" class="text-decoration-none">Best Selling</a>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row row-cols-5 g-4">
            <?php foreach ($recently_added_products as $product): ?>
                <div class="col">
                    <div class="product-card">
                        <a href="./productDetail.php?product_id=<?php echo $product['id']; ?>" style="text-decoration: none;">
                            <div class="product-image" style="background-image: url('./assets/images/<?php echo $product['img'] ?>');">
                                <span class="discount-tag">20% OFF</span>
                                <button class="btn btn-primary add-to-cart-btn" data-product='<?php echo json_encode($product); ?>'>Add to Cart</button>
                            </div>
                            <div class="product-details mt-3">
                                <h5 class="product-name"><?php echo $product['title'] ?></h5>
                                <div class="product-rating">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-half text-warning"></i>
                                </div>
                                <span class="product-price">
                                    &dollar;<?php echo $product['price'] ?>
                                    <?php if ($product['rrp'] > 0): ?>
                                        <span>&dollar;<?php echo $product['rrp'] ?></span>
                                    <?php endif; ?>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Newletter Form 1 -->

    <!-- <div class="container mt-5 mb-5 p-0">
        <div class="row g-0 align-items-center" style="background: linear-gradient(90deg, #ff7e5f, #feb47b); border-radius: 10px;">
            
            <div class="col-md-6">
                <div class="newsletter-left p-5 text-white text-center" style="background-image: url('https://via.placeholder.com/600x400'); background-size: cover; background-position: center; border-radius: 10px 0 0 10px;">
                    <h2>Don't Miss Out!</h2>
                    <img src="./assets/svg/newsletter.png" width="200px" height="200px" />
                </div>
            </div>

           
            <div class="col-md-6">
                <div class="newsletter-right p-5">
                    <h2 class="mb-4">Subscribe to Our Newsletter</h2>
                    <?php if (isset($success)): ?>
                        <div role="alert">
                            <?php echo "<script>alert('$success')</script>" ?>
                        </div>
                    <?php endif; ?>
                    <form class="form-inline" action="http://localhost:8012/ecommerce-php/Database/newsletter_db.php" method="post">
                        <label for="inlineFormInputName2" class="sr-only">Name</label>
                        <input type="text" name="name" class="form-control mb-mr-2" id="inlineFormInputName2" placeholder="Your name..." required>

                        <label for="inlineFormInputName2" class="sr-only">Email</label>
                        <input type="email" name="email" class="form-control mb-3 mr-sm-2" id="inlineFormInputName2" placeholder="example@mail.com" required>

                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Second Newsletter form -->

    <section class="py-5">
        <div class="container-fluid">
            <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('assets/images/tp189-hein-11-l-job137.jpg') no-repeat;">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-6 p-5 text-center newsletter-title">
                            <h2 class="section-title display-4">Get <span class="text-warning">25% Discount</span> on your first purchase</h2>
                            <p>Join our email list so you're always first to know about new items, Walmart exclusives, & everyday low prices—plus get inspiration & tips for every season, top trends, & more.</p>
                        </div>
                        <div class="col-md-6 p-5">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="firstlastname@mail.com">
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <label class="form-check-label" for="subscribe">
                                        <input type="checkbox" class="form-check-input" id="subscribe" value="subscribe">
                                        Subscribe to the newsletter
                                    </label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--  Best selling section -->

    <section class="py-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header d-flex flex-wrap justify-content-between my-5">

                        <h2 class="section-title">Best selling products</h2>

                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                            <div class="swiper-buttons">
                                <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                                <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="products-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($best_selling_products as $product): ?>
                                <div class="product-item" id="product-showing">
                                    <span class="badge bg-success position-absolute m-3">-15%</span>
                                    <a href="#" class="btn-wishlist">
                                        <svg width="24" height="24">
                                            <use xlink:href="#heart"></use>
                                        </svg>
                                    </a>
                                    <figure>
                                        <a href="productDetail.php?product_id=<?php echo $product['id']; ?>" title="<?php echo htmlspecialchars($product['title']); ?>">
                                            <img src="assets/images/<?php echo $product['img']; ?>" class="tab-image" width="150px" height="auto">
                                        </a>
                                    </figure>
                                    <h3><?php echo htmlspecialchars($product['title']); ?></h3>
                                    <span class="qty">1 Unit</span>
                                    <span class="price">$<?php echo $product['price']; ?></span>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></iconify-icon></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <!-- / products-carousel -->

                </div>
            </div>
        </div>
    </section>

    <?php
    include './includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        // active underline

        document.addEventListener('DOMContentLoaded', function() {
            // Set active link based on current page
            const currentPage = window.location.pathname.split('/').pop() || 'index.php';
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                const linkPage = link.getAttribute('href').split('/').pop();
                if (linkPage === currentPage) {
                    link.classList.add('text-decoration-underline', 'active');
                } else {
                    link.classList.remove('text-decoration-underline', 'active');
                }
            });
        });

        // add to cart function

        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', async function() {
                const productData = JSON.parse(this.getAttribute('data-product'));
                try {
                    const response = await fetch('function/save_cart.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            product_id: productData.id
                        })
                    });

                    const result = await response.json();
                    console.log("Add to cart result:", result);

                    if (result.success) {
                        await updateCartSidebar();
                        await updateAllCartCount();
                    } else {
                        console.log('Error:', result.message);
                    }
                } catch (error) {
                    console.log('Error:', error);
                }
            });

            // function to update cart sidebar

            async function updateCartSidebar() {
                try {
                    const response = await fetch('function/get_cart.php');

                    if (!response.ok) {
                        throw new Error('Failed to fetch cart');
                    }

                    const data = await response.json();

                    console.log("Cart response:", data);
                    document.getElementById('cart-sidebar-count').textContent = data.count;
                    document.getElementById('cart-items').innerHTML = data.html;
                } catch (error) {
                    //console.error('Error updating cart:', error);
                    console.error('Error updating cart:', error);
                }
            }

            async function updateAllCartCount() {
                try {
                    const response = await fetch('function/get_cart.php');
                    if (!response.ok) return;

                    const data = await response.json();

                    const count = data.count;

                    document.getElementById('cart-sidebar-count').textContent = count;

                    const mobileCartBadge = document.querySelector('.d-flex.d-lg-none .badge');
                    if (mobileCartBadge) mobileCartBadge.textContent = count;
                    const desktopCartBadge = document.querySelector('.d-none.d-lg-flex .badge');
                    if (desktopCartBadge) desktopCartBadge.textContent = count;
                } catch (error) {
                    console.log('Error updating header count:', error);
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                updateCartSidebar();
                updateAllCartCount();
            });
        });

        // swiper

        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })

        // products sum and minus order

        function initProductQty() {
            document.querySelectorAll('.product-qty').forEach(function(container) {
                const plusBtn = container.querySelector('.quantity-right-plus');
                const minusBtn = container.querySelector('.quantity-left-minus');
                const input = container.querySelector('.input-number');

                plusBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    input.value = parseInt(input.value) + 1;
                });

                minusBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                    }
                });
            });
        }

        document.addEventListener('DOMContentLoaded', initProductQty);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>