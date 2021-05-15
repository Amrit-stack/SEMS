<!DOCTYPE html>
<html>
<head>
  <title>MY REGISTRATION</title>
</head>
<link rel="viewport" content="width-device-width, initial scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="studentpage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentpage.php">Back</a>
      </li>
      
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="singleregistration.php" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="valueToSearch">
      <button name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />

    </form>
  </div>
</nav>
<body>
<table class="table table-dark">
  
    <tr>
    
      <th>CRN</th>
      <th>playername</th>
      <th >faculty</th>
      <th>Batch</th>
       <th>Position</th>
      
    </tr>
  
 
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "sports");
// Check connection
if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *FROM tabletennissingle t INNER JOIN badmintonsingle b WHERE t.CRN=b.CRN;";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo"
<tr>
<td>{$row["CRN"]}</td>
<td>{$row["playername"]}</td>
<td>{$row["faculty"]}</td>
<td>{$row["batch"]}</td>
<td>{$row["position"]}</td>
<td><a href='deletecust.php?CRN={$row["CRN"]}' class='btn btn-danger'>Delete</a> </td>
</tr>
";


}
echo "</table>";
} 
else { 
  echo "0 results"; 
}
$conn->close();
?>

</table>

</body>
</html>


 
</table>

</body>
</html>

<?php 

?>







