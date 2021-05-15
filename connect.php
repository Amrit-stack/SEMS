
<?php
session_start();
$db=mysqli_connect('localhost','root','','sports');

if (isset($_GET['submit']))
 {
$crn=$_GET["crn"];
$fullname=$_GET['fullname'];
$faculty=$_GET['faculty'];
$dor=$_GET['DOR'];
$user_check_query="SELECT *FROM couponist where crn='$crn'";
$results=mysqli_query($db, $user_check_query);
$user = mysqli_num_rows($results);
//form validation
if ($user==1)
	echo "Already registered";
elseif (empty($crn))
	echo"crn is required";
elseif (empty($fullname))
	echo"Fullname is required";
elseif (empty($faculty))
	echo"faculty is required";
else{
	$query="INSERT INTO couponist (crn,fullname,faculty,DOR) values ('$crn','$fullname','$faculty','$dor')";
mysqli_query($db,$query);
?>
<script type="text/javascript">
	alert("Registration successful");   
</script>

<?php
}
}
?>
