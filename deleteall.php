<?php
$conn = mysqli_connect("localhost", "root", "", "sports");
session_start();
if(!isset($_SESSION['username']))
{
    header('location:receptionist.php');
   

}
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `couponist` WHERE CONCAT(`CRN`, `fullname`, `faculty`, `status`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM couponist";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sports");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Registered for coupon</title>
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
      <nav class="navbar navbar-expand-sm bg-dark">
    <div class="container">

        <a href="" class="navbar-brand text-warning font-weight-bold">view details</a>  
  
<div class="srch">
        <form action="deleteall.php" class="navbar-toggler-left" method="POST">
            <input class="form-control" type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
  </form>
  <a href="logout3.php" class="navbar-brand text-warning font-weight-bold">LOGOUT</a>
</nav>
</div>
</div>
            
            <table class='table table-dark'>
                <tr>
                    <th>CRN</th>
                    <th>fullname</th>
                    <th>faculty</th>
                    <th>status</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <?php  

                    echo"
<tr>
<td>{$row["CRN"]}</td>

<td>{$row["fullname"]}</td>
<td>{$row["faculty"]}</td>
<td>{$row["status"]}</td>
<td><a href='update.php?crn=$row[CRN]&name=$row[fullname]&fl=$row[faculty]&st=$row[status]' class='btn btn-danger'>Update</a></td>
<td><a href='deleterecep.php? CRN={$row["CRN"]}' class='btn btn-danger'>Delete</a> </td>
</tr>
";
?>
                </tr>

                <?php endwhile;?>
            </table>
    </body>
</html>
