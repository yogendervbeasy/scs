<?php

require_once '../php/admin_session.php';
require '../php/connection.php';
$data=mysqli_query($conn,"select * from `clientcleaninglog` where cleaning_logId = '".$_GET['cleaning_logId']."' LIMIT 1");
while($row=mysqli_fetch_array($data)){
?>
<html>
    <body>
        <div style="text-align:center;">
            <a href='../../customervisit_data/CheckinPhotos/<?php echo $row[3] ?>'  style='color:#4680ff;' download>
                <?php echo '<img src="../../customervisit_data/CheckinPhotos/'.$row[3].'" alt="Image Not Found" width="500px" download/>'; ?>
            </a>
        </div>
    </body>
</html>
<?php 
}
?>