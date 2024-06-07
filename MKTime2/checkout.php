<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';

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
$total_amount = 0;
while ($row = $result->fetch_assoc()) {
    $basket[] = $row;
    $total_amount += $row['product_price'] * $row['quantity'];
}
$stmt->close();
?>

<div class="container">

    <h1 class="text-center mt-4">Checkout</h1>
    <?php if (empty($basket)): ?>
        <p class="text-center">Your basket is empty.</p>
    <?php else: ?>
        <div class="text-end mb-3">
            <h4>Total: £<?php echo number_format($total_amount, 2); ?></h4>
        </div>
        <div class="container" style="padding: 20px;">
        <form id="checkoutForm">
            <input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>">

            <div class="mb-3">
                <label for="cardNumber" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="card_number" required>
            </div>
            <div class="mb-3">
                <label for="nameOnCard" class="form-label">Name on Card</label>
                <input type="text" class="form-control" id="nameOnCard" name="name_on_card" required>
            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="expiryDate" name="expiry_date" placeholder="MM/YY" required>
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="password" class="form-control" id="cvv" name="cvv" required>
            </div>
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
        </div>
    <?php endif; ?>
</div>

<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Order Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Thank you for your purchase! Your order has been processed successfully.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script>
    document.getElementById('checkoutForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('/MKTime2/process_checkout.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(text => {
            if (text.trim() === 'success') {
                var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                confirmationModal.show();
            } else {
                alert(' a There was a problem processing your payment. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('b There was a problem processing your payment. Please try again.');
        });
    });
</script>
