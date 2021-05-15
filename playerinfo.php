











<?php

include"connection.php";



?>





<!DOCTYPE html>


<html>
<head>
	<title>Show player info</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>

<div class="jumbotron" style="background : url('images/bl.jpg') no-repeat;background-size: cover;  height: 320px;   "></div>

<table class="table table-dark">
  
    <tr>
      
      <th >Playername</th>
      <th >CRN</th>
      <th >Faculty</th>
      <th >Types</th>
      <th >Games</th>
      <th >Delete</th>
      
    </tr>
  
  
  
  
  <?php  



$query="select * from playerdetails";

$result=$db->query($query);

if ($result->num_rows>0) {
 
	

	while($rows=$result->fetch_assoc()){
		
echo" 
<tr>

<td>{$rows["playername"]}</td>
<td>{$rows["CRN"]}</td>
<td>{$rows["Faculty"]}</td>
<td>{$rows["Types"]}</td>
<td>{$rows["Games"]}</td>
<td><a href='delete.php? id={$rows["CRN"]}' class='btn btn-danger'>Delete</a> </td>





</tr>
";



		



	}
	
}





  ?>
</table>










<script src="https://ajax.googleapisom/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>




</html>