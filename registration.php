<?php
include "connection.php"; 
include "navbar.php";
?>

<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device width,initial width,initial scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<style type="text/css">
	section
	{
		margin: -20px;
		height: 600px;
	}
</style>

</head>

<body>
	
<section>
	<div class="reg_image">
		<br> 
		<div class="box2">
			<h1 style="text-align: center;font-size: 35px;font-family: Lucida Console">Sport event management system</h1>
			<h1 style="text-align: center;font-size: 25px;font-family: Lucida Console">Student Registration Form</h1><br>
			<div id="error">
			<form name="form" action="" method="POST" id="form" enctype="multipart/form-data">
				<br><br>
				<div class="login">
					<input class="form-control" type="text" name="fullname" placeholder="Full name" id="fullname"><br>

					<select class="form-control" type="text" name="faculty" placeholder="Faculty"  id="faculty">
						<option value="" disabled selected>Faculty</option>

                                         <option value="civil" name="civil">Civil</option>
                                          <option value="computer" value="computer">Computer</option>
                                             <option value="electronics"  name="electronics">Electronics</option>
                                                 <option value="electrical"  name="electrical">Electrical</option>
                                                     <option value="civil and rural"  name="civil and rural">Civil and rural</option>
                                                          <option value="architecture"  name="architecure" value="architecture">Architecture</option>
    
					</select>


						<br>

					<select class="form-control" type="number" name="batch" placeholder="Batch"  id="batch">
						<option disabled selected="" >Choose batch</option>
						<option value="016">016</option>
						<option value="017">017</option>
						<option value="018">018</option>
						<option value="019">019</option>

					</select>

					<br>

					<input class="form-control" type="text" name="crn" placeholder="crn"  id="crn"><br>

				<input class="form-control" type="text" name="username" placeholder="username"  id="username"><br>

				<input class="form-control" type="password" name="password" placeholder="password"  id="password" >

				<i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i>

			<script type="text/javascript">
				  function viewPassword() {
				  var x = document.getElementById("password");
				  if (x.type === "password") {
				    x.type = "text";
				  } else {
				    x.type = "password";
				  }
				}
			</script>

				

				<input class="form-control" type="text" name="email" placeholder="E-mail"  id="email"><br>

				<input class="form-control" type="number" name="mobilenumber" placeholder="Mobilenumber"  id="mobilenumber" minlength="10" maxlength="10"><br>

				<input class="form-control" type="file" name="id_image" Fid="img_div" placeholder="please upload id card" required />

				<input class="btn btn-primary" type="submit" name="submit" value="Create Account" style="height: 40px;" width="20px;"></div>
				<p style="color: white; padding-left: 20px; height: 10px;">
				<a style="color:white" style="line-height: 20px" href=""></a>
				Already a member? 
				<a style="color: white" href="student_login.php">Login</a>
			</p>

				
			</form>
			
		</div>
		</div>

	</div>
	
		
	

</section>


<script type="text/javascript">
	$(document).ready(function(){
		$("#form").validate({
			rules:{
				fullname:{
					required:true
				},
				faculty:{
					required:true
				},
				batch:{
					required:true,
					number:true
				},
				crn:{
					required:true,
					number:true
				},
				username:{
					required:true
				},
				password:{
					required:true
				},
				email:{
					required:true,
					email:true
				},
				mobilenumber:{
					required:true,
					number:true,
					minlength:10
				}

			}
		});

	});
</script>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$count=0;
	$sql="SELECT crn,username FROM student";
	$res=mysqli_query($db,$sql);
	while($row=mysqli_fetch_assoc($res))
	{
		if ($row['crn']==$_POST['crn'])
		{
			$count=$count+1;
		}
		if($row['username']==$_POST['username'])
		{
			$count=$count+2;
		}
	}

if($count==0)
{
$fullname=$_POST['fullname'];
$faculty=$_POST['faculty'];
$batch=$_POST['batch'];
$s_crn=$_POST['crn'];
$s_username=$_POST['username'];
$s_password=$_POST['password'];
$s_email=$_POST['email'];
$s_mobilenumber=$_POST['mobilenumber'];
$tm=md5(time());
	$id_image=$_FILES['id_image']['name'];
	$dst='./idcard/'.$tm.$id_image;
	$dst1='idcard/'.$tm.$id_image;
	move_uploaded_file($_FILES['id_image']['tmp_name'], $dst);

$insert_student="INSERT INTO student(fullname,faculty,batch,crn,username,password,email,mobilenumber,id_image) values('$fullname','$faculty','$batch','$s_crn','$s_username','$s_password','$s_email','$s_mobilenumber','$dst1')";
 
 $run_student = mysqli_query($db,$insert_student);
 ?>
 <script type="text/javascript">
 	alert("Registration succesful");
 	window.location="student_login.php";
 </script>
 <?php 

}
elseif ($count==2) 
{
	?>
	<script type="text/javascript">
 	alert("Username already exists");
 </script>
 <?php 
}

else{
	?>
	<script type="text/javascript">
 	alert("crn already exist");
 </script>
 <?php 
}
}
  ?>