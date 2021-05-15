<?php
$conn = mysqli_connect("localhost", "root", "", "sports");



 $query="UPDATE  couponist set status=''";
 
 $conn->query($query);/*$result = MYSQL_query($query, $conn);
  if(!$result)
  {
  die('Could not update data: ' . MySQL_error());
  }
  echo "Data successfully updated...";
  MySQL_close($conn);
 //$db->query($query);*/
 echo "<script>window.open('showreg.php?mes=INSERTED.','_self');</script>";

?>