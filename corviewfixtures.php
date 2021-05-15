<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
if(!isset($_SESSION['username']))
{
  header('location:coordinator_login.php');
   
}
?>

<?php
include"connection.php";

if ($_SESSION['username']=='football_coordinator'||$_SESSION['username']=='volleyball_coordinator'||$_SESSION['username']=='basketball_coordinator'||$_SESSION['username']=='kabbadi_coordinator'||$_SESSION['username']=='badminton_coordinator'||$_SESSION['username']=='tabletennis_coordinator'||$_SESSION['username']=='carrom_coordinator'||$_SESSION['username']=='dart_coordinator'||$_SESSION['username']=='highjump_coordinator'||$_SESSION['username']=='longjump_coordinator'||$_SESSION['username']=='marathon_coordinator'||$_SESSION['username']=='egame_coordinator'||$_SESSION['username']=='chess_coordinator'||$_SESSION['username']=='sbadminton_coordinator'||$_SESSION['username']=='stabletennis_coordinator'||$_SESSION['username']=='scarrom_coordinator'||$_SESSION['username']=='sackrace_coordinator') 
{
    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `fixture` WHERE CONCAT(`SN`,`fixture`,`venue`,`time`,`date`,`game`,`gamelevel`,`winnerteam`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
        
    }
     else 
       {
          $query = "SELECT  *FROM coordinator JOIN fixture WHERE coordinator.game=fixture.game and username='{$_SESSION['username']}'";
          $search_result = filterTable($query);
       }
  }


else
echo "No Data!";

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sports");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<?php
if(isset($_POST["generate_pdf"]))  
{  
require('tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("Fixtures");  
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE,PDF_HEADER_STRING); 
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN)); 
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 
$obj_pdf->SetDefaultMonospacedFont('helvetica');  
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->SetAutoPageBreak(TRUE,10);  
$obj_pdf->SetFont('helvetica', '', 12);  
$obj_pdf->AddPage();  


$content = '';  
$content .= '  
<h4 align="center">Fixtures</h4><br /> 
<table border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="5%">SN</th>  
<th width="5%">Game</th> 
<th width="15%">Fixture</th>   
<th width="5%">Venue</th>
<th width="5%">Time</th>
<th width="5%">Date</th>
<th width="10%">Gamelevel</th>
<th width="10%">Winnerteam</th>
<th width="10%">Cor_name</th>
<th width="10%">Cor_faculty</th>
<th width="10%">Cor_batch</th>
</tr>   
';   
ob_end_clean();
$content .= fetch_data();
$content .= '</table>'; 
$obj_pdf->writeHTML($content);
$obj_pdf->Output('file.pdf', 'I'); 

}  


 ?>




<!DOCTYPE html>
<html>
<head>
  <title>VIEW FIXTURES</title>
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
  <a class="navbar-brand" href="#">fixture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="myprofile.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myprofile.php">Back</a>
      </li>
      
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="corviewfixtures.php" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="valueToSearch">
      <button name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
      <div><a class="btn btn-success" href="addfixture.php">Add fixtures</a></div>

    </form>
  </div>
</nav>






<body>
<table class="table table-dark">
  
    <tr>
      
      <th>SN</th>
      <th>Fixture</th>
      <th>Venue</th>
      <th >Time</th>
      <th>Date</th>
      <th>Game</th>
      <th>Game Level</th>
      <th>Winnerteam</th>
      <th>Cor_name</th>
      <th>Cor_faculty</th>
      <th>Cor_batch</th>
      
    </tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <?php  

                    echo"
<tr>
<td>{$row["SN"]}</td>
<td>{$row["fixture"]}</td>
<td>{$row["venue"]}</td>
<td>{$row["time"]}</td>
<td>{$row["date"]}</td>
<td>{$row["game"]}</td>
<td>{$row["gamelevel"]}</td>
<td>{$row["winnerteam"]}</td>
<td>{$row["fullname"]}</td>
<td>{$row["faculty"]}</td>
<td>{$row["batch"]}</td>

<td><a href='corupdatefixture.php?SN=$row[SN]&fix=$row[fixture]&ven=$row[venue]&ti=$row[time]&dat=$row[date]&gam=$row[game]&gl=$row[gamelevel]&wt=$row[winnerteam]' class='btn btn-danger'>Update</a></td>
<td><a href='cordeletefixture.php? SN={$row["SN"]}' class='btn btn-danger'>Delete</a> </td>
</tr>
";
?>
</tr>

                <?php endwhile;?>
</table>

</body>
</html>
<?php 
function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $sql = "SELECT * FROM fixture JOIN coordinator where fixture.game=coordinator.game and username='{$_SESSION['username']}'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["SN"].'</td>  
                          <td>'.$row["game"].'</td>  
                          <td>'.$row["fixture"].'</td>  
                          <td>'.$row["venue"].'</td>
                          <td>'.$row["time"].'</td>
                          <td>'.$row["date"].'</td>
                          <td>'.$row["gamelevel"].'</td>
                          <td>'.$row["winnerteam"].'</td>
                          <td>'.$row["fullname"].'</td>
                          <td>'.$row["faculty"].'</td>
                          <td>'.$row["batch"].'</td>
                          

                          
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
?>
