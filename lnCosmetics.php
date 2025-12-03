<?php
    // LN Cosmetics, a php text based store.
    // Created by Tumang, Leewel Nash N. from WD202

    include_once "includes/header.php";

    // basic detail
    $storeName = "LN Cosmetics";

    // product variables
    $products = [
        "LN Nude Lipstick" => 249,
        "LN Blush" => 199,
        "LN Full coverage concealer" => 299,
        "LN Full volume mascara" => 215,
        "LN Foundation" => 599,
        "LN Eyeliner" => 99,
        "LN Eyebrow Pencil" => 179,
        "LN Lip Gloss" => 159,
        "LN Setting Spray" => 329,
        "LN Highlighter" => 249
    ];

    // for discount 
    $discountRate = 0.10;
    $selectedProduct = "LN Foundation";
    $originalPrice = $products[$selectedProduct];
    $finalPrice = $originalPrice - ($originalPrice * $discountRate);

    // Get page
    $page = $_GET['page'] ?? "home";

    // CONDITIONAL CONTENT
    if ($page === "home") {
        echo "<div class='page-container'>";
        echo "<h2 class='page-title'>Welcome to LN Cosmetics</h2>";
        echo "<p class='page-text'>Our store offers you a wide range of hot and must-have beauty products that will keep you glowing, fresh, and super confident every day. Feel free to explore our best-selling items below!</p>";
        echo "<p class='page-text'>From long-lasting foundations to vibrant lipsticks, our products are crafted to enhance your natural beauty and suit every occasion. Whether you're preparing for a busy day, a special night out, or just want to treat yourself, we've got you covered. Discover beauty that’s affordable, high-quality, and made to make you feel unstoppable!</p>";
        echo "</div>";
    }

    elseif ($page === "about") {
        echo "<div class='page-container'>";
        echo "<h2 class='page-title'>About LN Cosmetics</h2>";
        echo "<p class='page-text'>We provide affordable, long-lasting, and everyday-ready makeup products. Our collection is designed to empower you to feel confident and radiant every day, whether you’re heading to work, school, or a night out. Made with high-quality ingredients, our products are gentle on your skin and suitable for all skin types. From vibrant lip colors to flawless foundations, we have everything you need to create your signature look effortlessly. Experience beauty that’s accessible, reliable, and made just for you.</p>";
        echo "</div>";
    }

    elseif ($page === "products") {
        echo "<div class='page-container'>";
        echo "<h2 class='page-title'>Our Best-Selling Products</h2>";
        echo "<table class='products-table'>";
        echo "<tr><th>Product</th><th>Price</th></tr>";

        foreach ($products as $name => $price) {
            echo "<tr><td>$name</td><td>₱$price</td></tr>";
        }

        echo "</table>";
        echo "</div>";
    }

    elseif ($page === "discount") {
        echo "<div class='page-container'>";
        echo "<h2 class='page-title'>Today’s Discount</h2>";
        echo "<p class='page-text'><strong>Discounted item:</strong> $selectedProduct</p>";
        echo "<p class='page-text'><strong>Original Price:</strong> ₱$originalPrice</p>";
        echo "<p class='page-text'><strong>Discount Rate:</strong> " . ($discountRate * 100) . "%</p>";
        echo "<p class='page-text'><strong>Final Price: ₱" . number_format($finalPrice, 2) . "</strong></p>";
        echo "</div>";
    }

    else {
        echo "<div class='page-container'>";
        echo "<h2 class='page-title'>404 - Page not found</h2>";
        echo "</div>";
    }

    include "includes/footer.php";

?> 
  
                


