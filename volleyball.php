<?php
include "connection.php";
error_reporting(0);
$_GET['crn'];
$_GET['name'];
 $_GET['fl']; 
 $_GET['bt'];
$_GET['un'];

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Team for volleyball</title>

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
    <form name="teamA" action="" method="GET">   
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Player Registration Form</h2>
                </div>
   
                    <div class="form-row">
                            <div class="name">Faculty</div>
                            <div class="value">
                                <div class="input-group">

                            
                                   <input type="text" class="input--style-5" name="faculty[]" value="<?php echo $_GET['fl'];?>" readonly required>
                                        
                                    

                                </div>
                            </div>
                        </div>
                        <br>
                    <div class="form-row">
                            <div class="name">Batch</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="number" class="input--style-5" name="batch[]" value="<?php echo $_GET['bt'];?>" readonly required>
                                
                                    
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                            <div class="name">Captain Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="text" class="input--style-5" name="captain[]" value="<?php echo $_GET['name'];?>" readonly required>
                                </div>
                            </div>
                        </div>
                    
                    <br>
            <div class="form-row">
                            <div class="name">Coach Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="text" class="input--style-5" name="coach[]" required>
                                </div>
                            </div>
                        </div>
                    
                    <br>

                     <div class="form-row">
                            <div class="name">Team Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="text" class="input--style-5" name="teamname[]" required>
                                </div>
                            </div>
                        </div>
            
<br>


            <?php 
                for ($i=0; $i <6; $i++) 
                { 
                   
             

             ?>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                          <div class="name">PlayerName <?php echo $i+1?></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            

                                           
                                    
                                     
<?php if ($i==0): ?>

   <input class="input--style-5" type="text" name="playername[]" value="<?php echo $_GET['name']; ?>" readonly required="">
                                            <label class="label--desc">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="crn[]" value="<?php echo $_GET['crn']; ?>" readonly required="">
                                            <label class="label--desc">crn</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


<?php else: ?>
   <input class="input--style-5" type="text" name="playername[]"  required="">
                                            <label class="label--desc">Name</label>
                                        </div>
                                    </div>


                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="crn[]"  required="">
                                            <label class="label--desc">CRN</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endif; ?>
                                     
                                   
          <?php 
          }

              ?>

 

                         <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">

                            
                                   <input type="text" class="input--style-5" name="username[]" value="<?php echo $_GET['un'];?>" readonly required>
                                        
                                    

                                </div>
                            </div>
                        </div>
                        <br>

<br>
            <div class="form-row">
                            <div class="name">Game</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="text" class="input--style-5" name="game[]" value="volleyball" readonly required>
                                </div>
                            </div>
                        </div>
                    
<br>
                    

                        <div>
                            <button name="submit" class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                        <br>
                        <div>
                            <a href="teamgame.php" class="btn btn--radius-2 btn--red" style="text-decoration:none;">Back</a>
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
include "connection.php";

if (isset($_GET['submit']))
{
$count=0;
$faculty=$_GET['faculty'];
$batch=$_GET['batch'];
$playername=$_GET['playername'];
$crn=$_GET['crn'];
$Captain=$_GET['captain'];
$Coach=$_GET['coach'];
$username=$_GET['username'];
$game=$_GET['game'];
$teamname=$_GET['teamname'];

$sql="SELECT crn,username FROM volleyball";
$res=mysqli_query($db,$sql);

while($row=mysqli_fetch_assoc($res))
    {
        if ($row['username']==$_GET['username'][0])
        {
            $count=$count+1;
        }
    }

if ($count==0)
{
for ($i=0; $i<6; $i++) 
{


$query="INSERT INTO volleyball(faculty,batch,playername,crn,captain,coach,username,game,teamname) VALUES ('".$_GET['faculty'][0]."','".$_GET['batch'][0]."','".$_GET['playername'][$i]."','".$_GET['crn'][$i]."','".$_GET['captain'][0]."','".$_GET['coach'][0]."','".$_GET['username'][0]."','".$_GET['game'][0]."','".$_GET['teamname'][0]."')";
mysqli_query($db,$query);
}
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
    alert("Already registered");
 </script>
 <?php 
 }
}
 ?>