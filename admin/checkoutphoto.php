<?php
require_once '../php/admin_session.php';
require '../php/connection.php';
$data=mysqli_query($conn,"select * from `clientcheckoutlog` where checkoutId = '".$_GET['checkoutId']."' LIMIT 1");
while($row=mysqli_fetch_array($data)){
?>
<html>
    <body>
        <div style="text-align:center;">
            <a href='../../customervisit_data/CheckoutPhotos/<?php echo $row[2] ?>'  style='color:#4680ff;' download>
                <?php echo '<img src="../../customervisit_data/CheckoutPhotos/'.$row[2].'" alt="Image Not Found" width="500px"/>'; ?>
            </a>
        </div>
    </body>
</html>
<?php 
}
?>