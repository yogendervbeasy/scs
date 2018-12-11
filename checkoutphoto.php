<?php
require_once 'php/session.php';
require 'php/connection.php'; 
$data=mysqli_query($conn,"select * from `clientcheckoutlog` where checkoutId = '".$_GET['checkoutId']."' LIMIT 1");
while($row=mysqli_fetch_array($data)){
?>
<html>
    <body>
        <div style="text-align:center;">
            <?php echo '<img src="../../customervisit_data/CheckoutPhotos/'.$row[2].'" alt="Image Not Found" width="900px"/>'; ?>
        </div>
    </body>
</html>
<?php 
}
?>