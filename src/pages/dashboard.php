<?php
// dashboard.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Redirect if not logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: src/pages/login.php?message=" . urlencode("Please log in to access the dashboard."));
    exit();
}

$base_url = '../..'; 
$page_title = "My Dashboard - ConnectMarket";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($base_url); ?>/src/styles/style.css">
    <link rel="shortcut icon" href="<?php echo htmlspecialchars($base_url); ?>/src/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Add dashboard specific styles here or in style.css */
        .dashboard-container { padding: 2rem; }
        .dashboard-nav ul { list-style: none; padding: 0; }
        .dashboard-nav li a { display: block; padding: 0.5rem 0; color: var(--dm-brand-primary, #4F46E5); text-decoration: none; }
        .dashboard-nav li a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <?php include '../components/header/_header.php'; // Adjust path if needed ?>

    <main class="site-main">
        <section class="dashboard-container container">
            <h1 class="section-title4">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>This is your dashboard. From here you can manage your products, view your orders, and update your profile.</p>

            <nav class="dashboard-nav">
                <ul>
                    <li><a href="<?php echo htmlspecialchars($base_url); ?>/src/pages/upload_product.php">Upload New Product</a></li>
                    <li><a href="<?php echo htmlspecialchars($base_url); ?>/src/pages/my_products.php">View My Products</a></li>
                    <li><a href="#">My Orders (Placeholder)</a></li>
                    <li><a href="#">Edit Profile (Placeholder)</a></li>
                </ul>
            </nav>
        </section>
    </main>

    <?php include '../components/footer/_footer.php'; // Adjust path if needed ?>
    <script src="<?php echo htmlspecialchars($base_url); ?>/src/scripts/script.js" defer></script>

</body>
</html>