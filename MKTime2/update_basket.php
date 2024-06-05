<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: /MKTime2/signin.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'], $_POST['quantity'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    if ($quantity > 0) {
        $stmt = $conn->prepare("UPDATE shopping_cart SET quantity = ? WHERE user_id = ? AND product_id = ?");
        $stmt->bind_param('iii', $quantity, $user_id, $product_id);
        $stmt->execute();
        $stmt->close();
    }
}

header('Location: /MKTime2/basket.php');
exit;
?>
