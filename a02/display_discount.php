<?php
    // get the data from the form
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    
    // calculate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    
    // apply currency formatting to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);            
    
    // escape the unformatted input
    $product_description_escaped = htmlspecialchars($product_description);
    
    //calculate tax with 8% tax rate, save tax into one variable and total
    //with formatting into a second variable for displaying
    $tax = $discount_price * .08;
    $tax_formatted = "$".number_format($tax, 2);
    $total = $discount_price + $tax;
    $total_formatted = "$".number_format($total, 2);
    


?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
        
        <!--added display for the tax rate, amount of tax, and the item total when tax applied-->
        
        <label>Sales Tax Rate:</label>
        <span><?php echo "8%" ?></span><br>
        
        <label>Sales Tax Amount:</label>
        <span><?php echo $tax_formatted; ?></span><br>
        
        <label>Grand Total:</label>
        <span><?php echo $total_formatted; ?></span><br>
    </main>
</body>
</html>