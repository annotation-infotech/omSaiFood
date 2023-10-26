<?php
$uniqueProductNames = array(); // An array to store unique product names

foreach ($productprice as $product) {
    $productName = $product['ProductSize'] ;
    
    // Check if the product name is not in the list of unique names
    if (!in_array($productName, $uniqueProductNames)) {
        // Add the product name to the list of unique names
        $uniqueProductNames[] = $productName;
        
        // Output the dropdown menu item
        echo '<li><a class="dropdown-item" href="filter.php">' . $productName . '</a></li>';
    }
}
?>
