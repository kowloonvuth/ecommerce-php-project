<?php
session_start();

include './includes/kick-off.php';
include './Database/conn.php';
$pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 6');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <!-- Hidden sidebar menu -->
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
    <!-- Top Navigation Bar  -->

    <?php
    include './includes/header.php';
    ?>

    <!-- Hero Section -->

    <div class="hero-section" style="background-image: url('./assets/images/banner-1.jpg');">
        <div class="container col-xl px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <h2 class="mx-auto text-center" style="width: 350px;">NEW COLLECTION</h2>
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center">CLASSIC WATCH</h1>
                    <p class="lead">
                        Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mx-auto" style="width: 350px;">
                        <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Buy Now</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Browse</button>
                    </div>
                </div>
            </div>
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

    <!-- Image Banner -->

    <div class="container mt-5 mb-5">
        <div class="row g-4" style="height: 60vh;">
            <!-- Left Column (2/5 width) -->
            <div class="col-md-7">
                <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/images/apple-serie-7.jpg'); background-size: cover; background-position: center;">
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
                        <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/images/apple-serie-10.jpg'); background-size: cover; background-position: center;">
                            <h3>Right Top Lefthhsa</h3>

                            <button class="btn btn-primary mt-5">Learn More</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/images/blog-3.jpg'); background-size: cover; background-position: center;">
                            <h3>Right Top Right</h3>
                            
                            <button class="btn btn-primary mt-5">Learn More</button>
                        </div>
                    </div>
                </div>

                <!-- Second Row (One Column) -->
                <div class="row g-4 h-75" id="second-column">
                    <div class="col-12">
                        <div class="h-100 p-4 text-white rounded" style="background-image: url('./assets/images/blog-10.jpg'); background-size: cover; background-position: center;">
                            <h3>Right Bottom</h3>
                            <p>This is the bottom box in the right section.</p>
                            <button class="btn btn-primary">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Products -->

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
                    <img src="assets/images/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['title'] ?>">
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
                <a href="#" class="text-decoration-none">Top Rated</a>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row row-cols-5 g-4">
            <?php foreach ($recently_added_products as $product): ?>
                <div class="col">
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('./assets/images/<?php echo $product['img'] ?>');">
                            <span class="discount-tag">20% OFF</span>
                            <button class="add-to-cart-btn">Add to Cart</button>
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
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



        <!-- Product 2 -->
        <!-- <div class="col-md-2 col-sm-4 col-6">
            <div class="product-card">
                <div class="product-image" style="background-image: url('./assets/images/apple-serie-10.jpg');">
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
        </div> -->

    </div>

    <!-- Newletter Form -->

    <div class="container mt-5 mb-5 p-0">
        <div class="row g-0 align-items-center" style="background: linear-gradient(90deg, #ff7e5f, #feb47b); border-radius: 10px;">
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

    <?php
    include './includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>