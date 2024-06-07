<?php
include 'includes/header.php';
include 'db.php';

$selected_category = isset($_GET['category']) ? $_GET['category'] : 'All';

//  categories for the dropdown menu
$categories_sql = "SELECT * FROM categories";
$categories_result = $conn->query($categories_sql);
$categories = [];
while ($row = $categories_result->fetch_assoc()) {
    $categories[] = $row;
}

if ($selected_category == 'All') {
    $products_sql = "SELECT p.* FROM products p";
    $stmt = $conn->prepare($products_sql);
} else {
    $products_sql = "SELECT p.* FROM products p
                     JOIN product_categories pc ON p.product_id = pc.product_id
                     JOIN categories c ON pc.category_id = c.category_id
                     WHERE c.category_name = ?";
    $stmt = $conn->prepare($products_sql);
    $stmt->bind_param('s', $selected_category);
}
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}
$stmt->close();
$conn->close();
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <form method="GET" action="watches.php" class="d-flex justify-content-center mb-4">
                <select name="category" class="form-select w-25" onchange="this.form.submit()">
                    <option value="All" <?php if ($selected_category == 'All') echo 'selected'; ?>>All</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo htmlspecialchars($category['category_name']); ?>" <?php if ($selected_category == $category['category_name']) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($category['category_name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>
    </div>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-container">
                        <img src="/MKTime2/assets/<?php echo htmlspecialchars($product['product_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['product_name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($product['product_description']); ?></p>
                        <a href="products/<?php echo strtolower(str_replace(' ', '', $product['product_name'])); ?>.php" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
