<!DOCTYPE html>
<html>
<head>
  <title>Summary</title>
</head>
<link rel="viewport" content="width-device-width, initial scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>

  <a href="studentpage.php" class="btn btn-danger">Back</a>
</body>
</html>

<?php
include('data_connection.php');
 $query ="SELECT * FROM summary";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   ?>

    <div class=" col-sm-2 col-lg-2 col-md-2"><br>
    <form method="post" action="viewsummary.php"> 
        <div style="border:1px solid black;  border-radius:5px; padding:10px;" align="center">
         
                                <h4 class="text-danger"><?php echo $row["id"]; ?></h4>  
                                <h4 class="text-danger"><?php echo $row["date"]; ?></h4>  
                                <h4 class="text-danger"><?php echo $row["title"]; ?></h4>
                                <h3 class="text-danger"><?php echo $row["description"]; ?></h3>

         </div>
     </form>
     </div>

                         ;
                         <?php
  }
 }
?>

<style type="text/css">
 form{
  width:1000px;
 }



</style>