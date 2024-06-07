<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';
//check user connection
if (!isset($_SESSION['user_id'])) {
    header('Location: /MKTime2/signin.php');
    exit;
}

include 'includes/header.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT p.product_name, p.product_description, p.product_image, p.product_price, b.quantity, b.product_id
        FROM shopping_cart b
        JOIN products p ON b.product_id = p.product_id
        WHERE b.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

$basket = [];
$total = 0;
while ($row = $result->fetch_assoc()) {
    $basket[] = $row;
    $total += $row['product_price'] * $row['quantity'];
}
$stmt->close();
?>
<div class="flex-wrapper">
<div class="container p-5">
    <h1 class="text-center mt-3 mb-3">Your Basket</h1>
    <?php if (empty($basket)): ?>
        <p class="text-center">Your basket is empty.</p>
    <?php else: ?>
        <div class="text-end mb-5" data-cy="total-amount">
            <h4>Total: £<?php echo number_format($total, 2); ?></h4>
        </div>
        <div class="row">
            <?php foreach ($basket as $item): ?>
                <div class="col-md-4" data-cy="cart-item">
                    <div class="card mb-4">
                        <div class="card-img-container">
                            <img src="/MKTime2/assets/<?php echo htmlspecialchars($item['product_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['product_name']); ?>">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($item['product_name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($item['product_description']); ?></p>
                        <p class="card-text">Price: £<?php echo htmlspecialchars($item['product_price']); ?></p>
                        <form action="/MKTime2/update_basket.php" method="post" class="d-inline" data-cy="update-form">
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($item['product_id']); ?>">
                            <div class="input-group mb-3">
                                <button class="btn btn-primary" type="submit" style="height: 48px;" data-cy="quantity-input">Update quantity</button>
                                <input type="number" name="quantity" class="form-control" value="<?php echo htmlspecialchars($item['quantity']); ?>" min="1" style="width: 25px; height: 48px; padding: 10px; margin-top:10px; border: 1px solid black;">
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <form action="/MKTime2/delete_from_basket.php" method="post" class="d-inline" data-cy="delete-form">
                                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($item['product_id']); ?>">
                                <button class="btn btn-danger" type="submit" style="height: 48px;" data-cy="delete-button">Delete</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5">
            <a href="/MKTime2/checkout.php" class="btn btn-success" data-cy="checkout-button">Checkout</a>
        </div>
    <?php endif; ?>
</div>
</div>

<?php include 'includes/footer.php'; ?>
