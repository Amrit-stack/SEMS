<?php
include "connection.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Add notice</title>
</head>
<style type="text/css">
	.container
	{
		height:500px;
		width: 200px;
	}

</style>
<body>
	<div class="container">
	
<form method="POST" action="addnotices.php" enctype="multipart/form-data">
<table width="1000" align="center" border="10" bgcolor="gray">
<tr align="center">
<td colspan="2"><h2> Add new notices</h2></td>
</tr>
<tr>
<td align="right"><b> Notice title</b></td>
<td><input type="text" name="notice_title" required /> </td>
</tr>
<tr>
</tr>
<tr>
<td align="right"><b>Notice image

</b></td>
<td><input type="file" name="notice_image" Fid="img_div" required/> </td>
</tr>

<td align="right">
<td><input type="Submit" name="add_notice">
</td>
<td align="right">
<td><button type="reset" name="reset">Reset</button>
</td>

</tr>
</table>
<a href="adminviewnotices.php">Back</a>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['add_notice']))
{
	
$notice_title = $_POST['notice_title'];
$tm=md5(time());
	$notice_image=$_FILES['notice_image']['name'];
	$dst='./notices/'.$tm.$notice_image;
	$dst1='notices/'.$tm.$notice_image;
	move_uploaded_file($_FILES['notice_image']['tmp_name'], $dst);

	
 $query ="INSERT INTO notices(notice_title,notice_image) values ('$notice_title','$dst1')";
    $run_Book = mysqli_query($db,$query);
    echo "Notice added succesfully";
}

?>
