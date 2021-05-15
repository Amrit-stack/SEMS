<?php
include "connection.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add summary</title>
</head>

<body>
<form method="POST" action="addsummary.php" value="POST">
<table width="1000" align="center" border="10" bgcolor="gray">
<tr align="center">
<td colspan="2"><h2> Add new summary</h2></td>
</tr>

<tr>
<td align="right"><b>Date</b></td>
<td><input type="Date" name="date" required /> </td>
</tr>

<tr>
<td align="right"><b> Notice title</b></td>
<td><input type="text" name="title" required /> </td>
</tr>
<br>

<tr>
<td><label for="description" align="right">Description</label></td> 
<td>
<textarea name="description" style="width: 500px; height: 300px;"required/></textarea>
</td>
</tr>

<td align="right">
<td><input type="submit" name="add_summary">
</td>
<td align="right">
<td><button type="reset" name="reset">Reset</button>
</td>
</tr>
<a href="adminviewsummary.php">Back</a>
</table>

</form>

</body>
</html>

<?php
if(isset($_POST['add_summary']))
{
	
$Date = $_POST['date'];
$Title = $_POST['title'];
$Description = $_POST['description'];

	
 $query ="INSERT INTO summary(date,title,description) values ('$Date','$Title','$Description')";
    $run_Book = mysqli_query($db,$query);
    echo "Summary added succesfully";
}

?>
