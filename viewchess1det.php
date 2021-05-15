<?php
include"connection.php";
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `chess` WHERE CONCAT(`crn`,`playername`, `batch`,`faculty`,`position`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);


    
}
 else
  {
 $query = "SELECT * FROM chess";
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
  <title> CHESS PLAYERS</title>
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
  <a class="navbar-brand" href="#">chess</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Adminpanel.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tournament.php">Back</a>
      </li>
      
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="viewchess1det.php" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" playername="valueToSearch">
      <button playername="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
    </form>
  </div>
</nav>






<body>
<table class="table table-dark">
  
    <tr>
      
      
      <th>crn</th>
      <th >playername</th>
      <th>Faculty</th>
      <th>Batch</th>
      <th>Position</th>
  
      
      
      
    </tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <?php  

                    echo"
<tr>
<td>{$row["crn"]}</td>
<td>{$row["playername"]}</td>
<td>{$row["faculty"]}</td>
<td>{$row["batch"]}</td>
<td>{$row["position"]}</td>

<td><a href='deletechess.php?crn={$row["crn"]}' class='btn btn-danger'>Delete</a> </td>
<td><a href='addchesswinner.php?crn=$row[crn]&name=$row[playername]&fl=$row[faculty]&bt=$row[batch]&ps=$row[position]' class='btn btn-danger'>Make Winner</a> </td>
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
      $sql = "SELECT *FROM chess";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["crn"].'</td>  
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["position"].'</td> 
                          
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
if(isset($_POST["generate_pdf"]))  
{  
require('tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("CHESS PLAYERS LIST");  
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$obj_pdf->setHeaderFont(Array(PDF_FONT_playername_MAIN, '', PDF_FONT_SIZE_MAIN));  
$obj_pdf->setFooterFont(Array(PDF_FONT_playername_DATA, '', PDF_FONT_SIZE_DATA));  
$obj_pdf->SetDefaultMonospacedFont('helvetica');  
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->SetAutoPageBreak(TRUE, 10);  
$obj_pdf->SetFont('helvetica', '', 11);  
$obj_pdf->AddPage();  
$content = '';  
$content .= '  
<h4 align="center">CHESS PLAYERS</h4><br /> 
<table border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="5%">crn</th> 
<th width="15%">playername</th>  
<th width="15%">Faculty</th>
<th width="30%">Batch</th>  
<th width="15%">Position</th> 
</tr>  
';   
ob_end_clean();
$content .= fetch_data();
$content .= '</table>'; 
$obj_pdf->writeHTML($content); 
$obj_pdf->Output('file.pdf', 'I'); 

}  


 ?>



