<?php
/**
 * Created by IntelliJ IDEA.
 * User: Josh
 * Date: 1/1/14
 * Time: 4:53 PM
 * To change this template use File | Settings | File Templates.
 */
 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head><title>Bob's Auto Parts = Customer Orders</title></head>

<body>
<h1>Bob's Auto Parts</h1>

<h2>Customer Orders</h2>
<?php
    @$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'rb');

    if(!$fp) {
        echo "<p><strong>No orders pending. Please try again later.</strong></p>";
        exit;
    }

    while(!feof($fp)) {
        $order = fgets($fp, 999);
        echo $order."<br />";
    }
?>

</body>
</html>