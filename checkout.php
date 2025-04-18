<?php
session_start();
include './includes/kick-off.php';
include './includes/header.php';

include '/xampp/htdocs/ecommerce-php/Database/conn.php';

$pdo = pdo_connect_mysql();
$stmt = $pdo->prepare("
    SELECT p.id, p.title, p.price, p.img, c.quantity
    FROM cart c
    JOIN products p ON c.product_id = p.id
    WHERE c.user_session_id = ?
");

$stmt->execute([session_id()]);
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = array_reduce($cart_items, function ($sum, $item) {
    return $sum + ($item['price'] * $item['quantity']);
}, 0);

?>

<style>
    .paypal {
        text-align: left;
        margin-top: 10px;
        padding-bottom: 40px;
    }

    .paypal button {
        display: inline-block;
        padding: 10px 20px 7px 20px;
        background-color: #FFC439;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        width: 215px;
    }

    .paypal button:hover {
        background-color: #f3bb37;
    }
</style>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div>

        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                </form>
            </div>

            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill"><?php echo count($cart_items); ?></span>
                </h4>
                <?php if (empty($cart_items)): ?>
                    <div class="alert alert-info">Your cart is empty</div>
                <?php else: ?>
                    <ul class="list-group mb-3">
                        <?php foreach ($cart_items as $item): ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div class="d-flex align-items-center">
                                    <img src="./assets/images/<?php echo htmlspecialchars($item['img']) ?>"
                                        width="50" height="50"
                                        class="img-thumbnail me-3"
                                        alt="<?php echo htmlspecialchars($item['title']) ?>">
                                    <h6><?php echo htmlspecialchars($item['title']) ?></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- decrease quantity button -->
                                    <form action="function/update_cart.php" method="post" class="me-2">
                                        <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                                        <input type="hidden" name="action" value="decrease">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary" <?php echo $item['quantity'] <= 1 ? 'disabled' : '' ?>>-</button>
                                    </form>
                                    <span class="mx-2"><?php echo $item['quantity'] ?></span>
                                    <!-- Increase quantity button -->
                                    <form action="function/update_cart.php" method="post" class="me-2">
                                        <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                                        <input type="hidden" name="action" value="increase">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">+</button>
                                    </form>
                                    <!-- Remove item button -->
                                    <form action="function/update_cart.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $item['id'] ?>">
                                        <input type="hidden" name="action" value="remove">
                                        <button type="submit" class="btn btn-sm btn-danger" title="Remove item">
                                            <iconify-icon icon="mdi:trash-can-outline"></iconify-icon>
                                        </button>
                                    </form>
                                </div>
                                <span class="mt-3">$<?php echo number_format($item['price'] * $item['quantity'], 2) ?></span>
                                <!-- <span class="text-muted">&dollar;<?php echo htmlspecialchars($item['product_price']); ?></span> -->
                            </li>
                        <?php endforeach; ?>
                        <div class="list-group-item d-flex justify-content-between">
                            Total: $<?= number_format($total, 2) ?>
                        </div>
                    </ul>
                <?php endif; ?>
                <!-- Paypal Button -->
                <div class="container">
                    <hr class="mb-4">
                    <h4 class="mb-3">Payment</h4>
                    <div id="paypal-button-container"></div>
                    <p id="result-message"></p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './includes/footer.php';
    ?>
    <script>
        // Function to send cart data to the server
        function saveCartToDatabase(product) {
            fetch('save_cart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(product),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Product added to cart:', data);
                })
                .catch(error => {
                    console.error('Error adding product to cart:', error);
                });
        }

        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function() {
                const product = JSON.parse(this.getAttribute('data-product'));
                saveCartToDatabase(product);
            });
        });

        //Handle cart update

        document.querySelectorAll('form').forEach(form => {
            // Skip forms that aren't cart update forms
            if (!form.querySelector('input[name="action"]')) return;

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Use the correct path to update_cart.php
                const actionUrl = 'function/update_cart.php';

                fetch(actionUrl, {
                        method: 'POST',
                        body: new FormData(form)
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Find the quantity span
                            const quantitySpan = form.parentElement.querySelector('.mx-2');
                            const action = form.querySelector('input[name="action"]').value;

                            if (action === 'increase') {
                                quantitySpan.textContent = parseInt(quantitySpan.textContent) + 1;
                            } else if (action === 'decrease') {
                                const newQty = parseInt(quantitySpan.textContent) - 1;
                                quantitySpan.textContent = Math.max(newQty, 1);
                                if (newQty <= 1) {
                                    form.querySelector('button').disabled = true;
                                }
                            } else if (action === 'remove') {
                                // Remove the entire list item
                                form.closest('li').remove();
                            }

                            // Reload the page to update totals and counters
                            window.location.reload();
                        } else {
                            alert('Error: ' + (data.error || 'Unknown error'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
            });
        });
    </script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AX6gSiAeBCBxHJNmvXhI8PzEGOSy4pq0YhsoHizZyJqZrWKWqn0P8fn4IODGoVSgucbUCRI25qQsVGVZ&buyer-country=US&currency=USD&components=buttons"
        data-sdk-integration-source="developer-studio"></script>

    <script>
        paypal.Buttons({
            style: {
                layout: 'vertical',
                color: 'gold',
                shape: 'rect',
                label: 'paypal'
            },
            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?= number_format($total, 2, '.', '') ?>' // Total cart amount
                        }
                    }]
                });
            },
            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show success message to the user
                    document.getElementById('result-message').innerText = 'Transaction completed by ' + details.payer.name.given_name;

                    // Optionally redirect or send transaction details to the server
                    // Example: location.href = 'payment-success.php?orderID=' + data.orderID;
                });
            },
            onError: function(err) {
                console.error('PayPal error:', err);
                document.getElementById('result-message').innerText = 'An error occurred during the transaction.';
            }
        }).render('#paypal-button-container');
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>