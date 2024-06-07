<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';

if (!isset($_SESSION['user_id'])) {
    echo 'error';
    exit;
}

$response = 'error';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $total_amount = $_POST['total_amount'];
    $order_date = date('Y-m-d H:i:s');
    $payment_method = "Credit Card";

    $conn->begin_transaction();

    try {
        $stmt = $conn->prepare("INSERT INTO orders (user_id, total_amount, order_date) VALUES (?, ?, ?)");
        $stmt->bind_param('ids', $user_id, $total_amount, $order_date);
        $stmt->execute();
        $order_id = $stmt->insert_id;
        $stmt->close();

        $sql = "SELECT b.product_id, b.quantity, p.product_price 
                FROM shopping_cart b 
                JOIN products p ON b.product_id = p.product_id 
                WHERE b.user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];
            $price = $row['product_price'];

            $stmt2 = $conn->prepare("INSERT INTO order_contents (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
            $stmt2->bind_param('iiid', $order_id, $product_id, $quantity, $price);
            $stmt2->execute();
            $stmt2->close();
        }
        $stmt->close();
    
        $stmt = $conn->prepare("INSERT INTO payments (order_id, payment_date, payment_amount, payment_method) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('isds', $order_id, $order_date, $total_amount, $payment_method);
        $stmt->execute();
        $stmt->close();

        $stmt = $conn->prepare("DELETE FROM shopping_cart WHERE user_id = ?");
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->close();

        $conn->commit();
        $response = 'success';
    } catch (Exception $e) {
        $conn->rollback();
        $response = 'error';
    }
}

echo $response;
exit;
