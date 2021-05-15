<?php
include "connection.php"; 
error_reporting(0);
$_GET['fl'];
$_GET['uname']; 
$_GET['bt'];
$_GET['name'];
$_GET['crn']; 
  
?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- readonly meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register  for dart</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <form name="A" action="" method="GET">   
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">dart  Registration Form</h2>
                </div>
                    <div class="form-row">
                            <div class="name">Faculty</div>
                            <div class="value">
                                <div class="input-group">
                                   <input type="text" class="input--style-5" name="faculty"value="<?php echo $_GET['fl'];?>"  readonly>
                                        

                                </div>
                            </div>
                        </div>
                        
                        <br>
                    <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="text" class="input--style-5" name="username" value="<?php echo $_GET['uname'];?>"  readonly>
                                        
                                    
                    </div>
                </div>
            </div>

                        <br>
            <div class="form-row">
                            <div class="name">Game</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="text" class="input--style-5" name="game" value="dart" readonly required>
                                </div>
                            </div>
                        </div>
                        <br>
                    <div class="form-row">
                            <div class="name">Batch</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="number" class="input--style-5" name="batch" value="<?php echo $_GET['bt'];?>"  readonly>
                                        
                                    
                    </div>
                </div>
            </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">PlayerName</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="playername"value="<?php echo $_GET['name'];?>"  readonly="">
                                            <label class="label--desc">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="crn" value="<?php echo $_GET['crn'];?>" readonly>
                                            <label class="label--desc">CRN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div>
                            <button name="submit" class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                       
                        <div>
                            <a href="single.php">Back</a>
                        </div>
                  
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</form>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<?php
if(isset($_GET['submit']))
{
    $GLOBALS=0;
    $faculty=$_GET['faculty'];
    $batch=$_GET['batch'];
    $playername=$_GET['playername'];
    $crn=$_GET['crn'];
    $username=$_GET['username'];
    $game=$_GET['game'];
    $sql="SELECT *FROM dart where crn='$crn'";
    $res=mysqli_query($db,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
        if ($row['crn']==$_GET['crn'])
         {
            $GLOBALS=$GLOBALS+1;
         }
    }
if($GLOBALS==0)
{    
    $insert_student=" INSERT INTO dart(faculty,batch,playername,crn,username,game)values('$faculty','$batch','$playername','$crn','$username','$game')";
     mysqli_query($db,$insert_student);
     ?>
     <script type="text/javascript">
        alert("Registration successful");
     </script>
     <?php 
     
}

else
{
    ?>
    <script type="text/javascript">
    alert("crn already exist");
 </script>
 <?php
 }
 } 
  ?>