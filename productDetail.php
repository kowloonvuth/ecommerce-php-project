<?php
session_start();
include '/xampp/htdocs/ecommerce-php/Database/conn.php';

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);

    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        // If no product is found with that ID
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}

include './includes/header.php';
include './includes/kick-off.php';
?>

<style>
    .mt-x {
        margin-top: 400px;
    }

    .small-img-group {
        display: flex;
        justify-content: space-between;
    }

    .small-img-col {
        flex-basis: 24%;
        cursor: pointer;
    }
</style>

<body>
    <div class="container mt-5 my-5 gaps-5">
        <div class="row mt-5">
            <!-- Product Images -->
            <!-- <div class="col-md-6 mb-4">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080" alt="Product" class="img-fluid rounded mb-3 product-image" id="mainImage">
            </div> -->
            <?php if ($product) { ?>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img src="assets/images/<?php echo $product['img']; ?>" class="img-fluid w-100 pb-1" id="mainImg">
                </div>

            <?php } ?>

            <!-- Product Details -->
            <div class="col-md-6 mx-5">
                <h2 class="mb-3"><?php echo htmlspecialchars($product['title']); ?></h2>
                <p class="text-muted mb-4">SKU: PROD-<?php echo str_pad($product['id'], 4, '0', STR_PAD_LEFT); ?></p>
                <div class="mb-3">
                    <span class="h4 me-2">$<?php echo number_format($product['price'], 2); ?></span>
                    <?php if ($product['rrp'] > $product['price']): ?>
                        <span class="text-muted"><s>$<?php echo number_format($product['rrp'], 2); ?></s></span>
                    <?php endif; ?>
                </div>
                <p class="mb-4"><?php echo htmlspecialchars($product['description']); ?></p>
                <form method="post" action="function/add-to-cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="title" value="<?php echo htmlspecialchars($product['title']); ?>">
                    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                    <input type="hidden" name="image" value="<?php echo $product['img']; ?>">
                    <input type="number" name="quantity" value="1" min="1" class="form-control mb-3" style="max-width: 80px;">
                    <button type="submit" class="btn btn-primary btn-lg mb-3 me-2">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <?php include './includes/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <script>
        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("small-img");

        for (let i = 0; i < 4; i++) {
            smallImg[i].onclick = function() {
                mainImg.src = smallImg[i].src;
            }
        }
    </script>
</body>