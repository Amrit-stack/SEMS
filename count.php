<?php
include"connection.php";
?>
<?php
$count="SELECT COUNT(*) as c FROM football where team='team C' or team='team A'";
$result=mysqli_query($db,$count);
if($result)
 {
    while($row=mysqli_fetch_assoc($result))
    	if ($row['c']<=2 ) 
        echo $row['c'];
    else
    	echo "team full";
}
 ?>
