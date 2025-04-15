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


    <!-- Banner Section -->

    <section class="py-3" style="background-image: url('#'); background-repeat: no-repeat; background-size: cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-blocks">
                        <div class="banner-ad large bg-info block-1">
                            <div class="swiper main-swiper">

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

                                <div class="swiper-pagination"></div>

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

    <?php
    include './includes/footer.php';
    ?>

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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>