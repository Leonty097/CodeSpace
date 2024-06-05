<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: /MKTime2/signin.php');
    exit;
}

$products = [
    1 => [
        'product_id' => 1,
        'product_name' => 'Skye time',
        'product_description' => 'Luxury Swiss watch - Skye time',
        'product_image' => 'skye_time.jpg',
        'product_price' => 999.0
    ],
    2 => [
        'product_id' => 2,
        'product_name' => 'Glencoe wrist',
        'product_description' => 'Luxury Swiss watch - Glencoe wrist',
        'product_image' => 'glencoe_wrist.jpg',
        'product_price' => 899.0
    ],
    3 => [
        'product_id' => 3,
        'product_name' => 'MK Ness',
        'product_description' => 'Luxury Swiss watch - MK Ness',
        'product_image' => 'mk_ness.jpg',
        'product_price' => 1299.0
    ],
    4 => [
        'product_id' => 4,
        'product_name' => 'Old Blair',
        'product_description' => 'Luxury Swiss watch - Old Blair',
        'product_image' => 'old_blair.jpg',
        'product_price' => 999.0
    ],
    5 => [
        'product_id' => 5,
        'product_name' => 'Wee Laggan',
        'product_description' => 'Luxury Swiss watch - Wee Laggan',
        'product_image' => 'wee_laggan.jpg',
        'product_price' => 899.0
    ]
];

// Check ifor product_id 
if (isset($_GET['product_id'])) {
    $product_id = (int) $_GET['product_id'];

    if (isset($products[$product_id])) {
        $user_id = $_SESSION['user_id'];
        $quantity = 1; 

        $stmt = $conn->prepare("INSERT INTO shopping_cart (user_id, product_id, quantity) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + 1");
        $stmt->bind_param('iii', $user_id, $product_id, $quantity);
        $stmt->execute();
        $stmt->close();

        header('Location: /MKTime2/basket.php');
        exit;
    } else {
        echo 'Product not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
