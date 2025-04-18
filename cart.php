<?php
session_start();
include './includes/header.php';
include './includes/kick-off.php';
?>

<style>
    /* Main Cart Container */
    .cart-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    /* Cart Header */
    .cart-header {
        border-bottom: 2px solid #fb774b;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }

    .cart-header h2 {
        font-weight: 700;
        color: #333;
        font-size: 2rem;
    }

    /* Cart Table */
    .cart-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-bottom: 2rem;
    }

    .cart-table thead th {
        background-color: #fb774b;
        color: white;
        padding: 1rem;
        text-align: left;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .cart-table tbody td {
        padding: 1.5rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #eee;
    }

    /* Product Info */
    .product-info {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .product-info img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .product-details p {
        margin: 0;
        font-weight: 600;
        color: #333;
        font-size: 1.1rem;
    }

    .product-details small {
        color: #666;
        font-size: 0.9rem;
    }

    .remove-btn {
        color: #fb774b;
        text-decoration: none;
        font-size: 0.85rem;
        transition: all 0.2s;
    }

    .remove-btn:hover {
        color: #e04b1a;
        text-decoration: underline;
    }

    /* Quantity Input */
    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .quantity-control input {
        width: 60px;
        padding: 0.5rem;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .edit-btn {
        color: #666;
        font-size: 0.85rem;
        cursor: pointer;
        transition: color 0.2s;
    }

    .edit-btn:hover {
        color: #fb774b;
    }

    /* Price */
    .product-price {
        font-weight: 600;
        color: #333;
    }

    /* Cart Total */
    .cart-total {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 1.5rem;
        margin-top: 2rem;
        max-width: 400px;
        margin-left: auto;
    }

    .cart-total table {
        width: 100%;
    }

    .cart-total tr:first-child td {
        padding-bottom: 0.5rem;
    }

    .cart-total tr:last-child td {
        padding-top: 0.5rem;
        font-weight: 700;
        font-size: 1.1rem;
    }

    .cart-total td:last-child {
        text-align: right;
    }

    /* Checkout Button */
    .checkout-btn {
        display: block;
        width: 100%;
        max-width: 400px;
        margin: 2rem auto 0;
        padding: 1rem;
        background-color: #fb774b;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s;
    }

    .checkout-btn:hover {
        background-color: #e04b1a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(251, 119, 75, 0.3);
    }

    .quantity-control button {
        padding: 0.3rem 0.7rem;
        background-color: #fb774b;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .quantity-control button:hover {
        background-color: #e04b1a;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .product-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .product-info img {
            width: 80px;
            height: 80px;
        }

        .cart-table thead {
            display: none;
        }

        .cart-table tr {
            display: block;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #eee;
        }

        .cart-table td {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            padding: 0.5rem 0;
        }

        .cart-table td::before {
            content: attr(data-label);
            font-weight: 600;
            color: #666;
            margin-right: 1rem;
        }

        .cart-total {
            max-width: 100%;
        }
    }
</style>

<body>
    <!-- Cart Section -->
    <section class="cart-container">
        <div class="cart-header">
            <h2>Your Shopping Cart</h2>
        </div>

        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;

                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                ?>
                        <tr>
                            <td data-label="Product">
                                <div class="product-info">
                                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                                    <div class="product-details">
                                        <p><?php echo htmlspecialchars($item['title']); ?></p>
                                        <small>$<?php echo number_format($item['price'], 2); ?></small><br>
                                        <a class="remove-btn" href="remove_from_cart.php?id=<?php echo $item['id']; ?>">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Quantity">
                                <div class="quantity-control">
                                    <form action="function/updated_cart.php" method="POST" style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                                        <button type="submit" name="action" value="decrease">-</button>
                                        <input type="text" name="quantity" value="<?php echo $item['quantity']; ?>" readonly>
                                        <button type="submit" name="action" value="increase">+</button>
                                    </form>
                                </div>
                            </td>
                            <td data-label="Subtotal">
                                <span class="product-price">$<?php echo number_format($subtotal, 2); ?></span>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="3"><p>Your cart is empty.</p></td></tr>';
                }
                ?>
            </tbody>
        </table>

        <div class="cart-total">
            <table>
                <tr>
                    <td>Total</td>
                    <td>$<?php echo number_format($total, 2); ?></td>
                </tr>
            </table>
        </div>

        <?php if (!empty($_SESSION['cart'])): ?>
            <form action="function/save_to_cart.php" method="POST">
                <button type="submit" class="btn checkout-btn">Proceed to Checkout</button>
            </form>
        <?php endif; ?>
    </section>

    <?php include './includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>