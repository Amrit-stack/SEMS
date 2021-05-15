<a href="studentpage.php">Back</a>
<?php
include('data_connection.php');
 $query ="SELECT * FROM notices";
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
      <form method="post" action="shownotices.php"> 
    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
     
                              <img src="<?php echo $row["notice_image"]; ?>" class="img-responsive" /><br /> 
                                
                            <h4 class="text-danger"><?php echo $row["notice_title"]; ?></h4>
                              

                               </div>
                             </form>
                               </div>

                         ;
                         <?php
  }
 }
?>
<style type="">
  img
  {
    height: 500px;
    width: 1000px;
  }
</style>
