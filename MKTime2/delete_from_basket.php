<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';


if (!isset($_SESSION['user_id'])) {
    header('Location: /MKTime2/signin.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = (int)$_POST['product_id'];

    $stmt = $conn->prepare("DELETE FROM shopping_cart WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param('ii', $user_id, $product_id);
    $stmt->execute();
    $stmt->close();
}

header('Location: /MKTime2/basket.php');
exit;
?>
