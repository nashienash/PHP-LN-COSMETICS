<?php
declare(strict_types = 1);

include_once "includes/header.php";

// variables for products using multidimensional array, with price and stock 
$products = [
    "LN Nude Lipstick" => ['price' => 249, 'stock' => 102],
    "LN Blush" => ['price' => 199, 'stock' => 78],
    "LN Full Coverage Concealer" => ['price' => 299, 'stock' => 35],
    "LN Full Volume Mascara" => ['price' => 215, 'stock' => 9], 
    "LN Foundation" => ['price' => 599, 'stock' => 308],
    "LN Eyeliner" => ['price' => 99, 'stock' => 58],
    "LN Eyebrow Pencil" => ['price' => 179, 'stock' => 49],
    "LN Lip Gloss" => ['price' => 159, 'stock' => 5],
    "LN Setting Spray" => ['price' => 329, 'stock' => 19],
    "LN Highlighter" => ['price' => 249, 'stock' => 7] 
];

// tax rate
$tax = 25;

// functions 
function get_reorder_message(int $stock): string 
{
    return ($stock < 10) ? 'Yes' : 'No';
}
// total value calculation
function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

// calculation of tax
function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LN Cosmetics - Stock Control</title>
</head>

<body>

<div class="page-container">
    <h2 class="page-title">Stock Control</h2> 
    <table>
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Re-order</th>
            <th>Total Value (₱)</th>
            <th>Tax Due (₱)</th>
        </tr>

        <?php foreach ($products as $product_name => $data): ?>
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax), 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
    <?php     include "includes/footer.php"; ?>
</body>
</html>
