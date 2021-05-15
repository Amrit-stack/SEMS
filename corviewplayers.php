<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
if(!isset($_SESSION['username']))
{
  header('location:coordinator_login.php');
   
}
?>

<?php 
function fetch_data()  
 {  
  if ($_SESSION['username']=='football_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN football where coordinator.game=football.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td>
                          <td>'.$row["teamname"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
    } 
      elseif ($_SESSION['username']=='volleyball_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN volleyball where coordinator.game=volleyball.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
   } 
      elseif ($_SESSION['username']=='basketball_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports"); 
      $valueToSearch = $_POST['valueToSearch']; 
      $sql = "SELECT * FROM coordinator JOIN basketball where coordinator.game=basketball.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='kabbadi_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN kabbadi where coordinator.game=kabbadi.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='badminton_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN badminton where coordinator.game=badminton.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='tabletennis_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN tabletennis where coordinator.game=tabletennis.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='carrom_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN carrom where coordinator.game=carrom.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='dart_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN dart where coordinator.game=dart.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'<
                          /td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='highjump_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN highjump where coordinator.game=highjump.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='longjump_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN volleyball where coordinator.game=longjump.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='marathon_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports"); 
      $valueToSearch = $_POST['valueToSearch']; 
      $sql = "SELECT * FROM coordinator JOIN marathon where coordinator.game=marathon.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='egame_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN egame where coordinator.game=egame.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      } 
      elseif ($_SESSION['username']=='chess_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN chess where coordinator.game=chess.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }
      elseif ($_SESSION['username']=='sbadminton_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports"); 
      $valueToSearch = $_POST['valueToSearch']; 
      $sql = "SELECT * FROM coordinator JOIN badmintonsingle where coordinator.game=badmintonsingle.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      }  
      elseif ($_SESSION['username']=='stabletennis_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports"); 
      $valueToSearch = $_POST['valueToSearch']; 
      $sql = "SELECT * FROM coordinator JOIN tabletennissingle where coordinator.game=tabletennissingle.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      } 
      elseif ($_SESSION['username']=='scarrom_coordinator') 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN carromsingle where coordinator.game=carromsingle.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      } 
      else 
  {
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "sports");  
      $valueToSearch = $_POST['valueToSearch'];
      $sql = "SELECT * FROM coordinator JOIN sackrace where coordinator.game=sackrace.game and teamname='$valueToSearch'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["fullname"].'</td>  
                          <td>'.$row["faculty"].'</td>  
                          <td>'.$row["batch"].'</td>  
                          <td>'.$row["CRN"].'</td>   
                          <td>'.$row["username"].'</td>
                          <td>'.$row["password"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["mobilenumber"].'</td>
                          <td>'.$row["game"].'</td> 
                          <td>'.$row["crn"].'</td> 
                          <td>'.$row["playername"].'</td> 
                          <td>'.$row["batch"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output; 
      } 
 }  
if(isset($_POST["generate_pdf"]))  
{  
require('tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("PLAYERS LIST");  
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
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
<h4 align="center">PLAYERS LIST</h4><br /> 
<table border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="10%">Fullname</th>  
<th width="5%">Faculty</th> 
<th width="5%">Batch</th>   
<th width="5%">CRN</th> 
<th width="10%">Username</th>
<th width="15%">Password</th>
<th width="10%">Email</th>
<th width="15%">Mobilenumber</th>
<th width="10%">game</th> 
<th width="5%">Player CRN</th> 
<th width="10%">Playername</th> 
<th width="5%">PLayer Batch</th>  
</tr>  
';   
ob_end_clean();
$content .= fetch_data();
$content .= '</table>'; 
$obj_pdf->writeHTML($content); 
$obj_pdf->Output('file.pdf', 'I'); 

}  


 ?>



<?php
if ($_SESSION['username']=='football_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `football` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN football where coordinator.game=football.game";
          $search_result = filterTable($query);
          

       }
     }

     elseif($_SESSION['username']=='volleyball_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `volleyball` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN volleyball where coordinator.game=volleyball.game";
          $search_result = filterTable($query);
          

       }
     }
     elseif($_SESSION['username']=='basketball_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `basketball` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN basketball where coordinator.game=basketball.game";
          $search_result = filterTable($query);
          

       }
     }
     elseif($_SESSION['username']=='kabbadi_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `kabbadi` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN kabbadi where coordinator.game=kabbadi.game";
          $search_result = filterTable($query);
          

       }
     }
     elseif($_SESSION['username']=='badminton_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `badminton` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN badminton where coordinator.game=badminton.game";
          $search_result = filterTable($query);
          

       }
     }
     elseif($_SESSION['username']=='tabletennis_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `tabletennis` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN tabletennis where coordinator.game=tabletennis.game";
          $search_result = filterTable($query);
          

       }
     }

     elseif($_SESSION['username']=='carrom_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `carrom` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN carrom where coordinator.game=carrom.game";
          $search_result = filterTable($query);
          

       }
     }
     elseif($_SESSION['username']=='dart_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `dart` WHERE CONCAT(`CRN`,`playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN dart where coordinator.game=dart.game";
          $search_result = filterTable($query);
          

       }
     }
     
     elseif($_SESSION['username']=='highjump_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `highjump` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN highjump where coordinator.game=highjump.game";
          $search_result = filterTable($query);
          

       }
     }

      elseif($_SESSION['username']=='longjump_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `longjump` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN longjump where coordinator.game=longjump.game";
          $search_result = filterTable($query);
          

       }
     }
      elseif($_SESSION['username']=='egame_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `egame` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN egame where coordinator.game=egame.game";
          $search_result = filterTable($query);
          

       }
     }
      elseif($_SESSION['username']=='chess_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `chess` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN chess where coordinator.game=chess.game";
          $search_result = filterTable($query);
          

       }
     }
      elseif($_SESSION['username']=='sackrace_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `sackrace` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN sackrace where coordinator.game=sackrace.game";
          $search_result = filterTable($query);
          

       }
     }
      elseif($_SESSION['username']=='sbadminton_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `badmintonsingle` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN badmintonsingle where coordinator.game=badmintonsingle.game";
          $search_result = filterTable($query);
          

       }
     }
      elseif($_SESSION['username']=='stabletennis_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `tabletennissingle` WHERE CONCAT(`crn``playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN tabletennissingle where coordinator.game=tabletennissingle.game";
          $search_result = filterTable($query);
          

       }
     }
      elseif($_SESSION['username']=='scarrom_coordinator') 
{
      if(isset($_POST['search']))
      {
          $valueToSearch = $_POST['valueToSearch'];
          // search in all table columns
          // using concat mysql function
          $query = "SELECT * FROM `carromsingle` WHERE CONCAT(`crn`,`playername`, `faculty`, `batch`,`captain`,`coach`,`username`,`coordinator_name`,`game`) LIKE '%".$valueToSearch."%'";
          $search_result = filterTable($query);
          
      }
       else
       {
          $query = "SELECT *FROM coordinator JOIN carromsingle where coordinator.game=carromsingle.game";
          $search_result = filterTable($query);
          

       }
     }
     else
      echo"Data not found!";

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
  <title>PLAYERS</title>
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
  <a class="navbar-brand" href="#">PLAYERS</a>
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
    <form class="form-inline my-2 my-lg-0" action="corviewplayers.php" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="valueToSearch">
      <button name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
      
      
    </form>
  </div>
</nav>






<body>
<table class="table table-dark">
  
    <tr>
      
      
      <th>Coordinator name</th>
      <th>Faculty</th>
      <th>Batch</th>
      <th>CRN</th>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th>Mobilenumber</th>
      <th>game</th>
      <th>Teamname</th>
      <th>Player CRN</th>
      <th>Playername</th>
      <th>PlayerBatch</th>
      
      
      
    </tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <?php  

                    echo"
<tr>
<td>{$row["fullname"]}</td>
<td>{$row["faculty"]}</td>
<td>{$row["batch"]}</td>
<td>{$row["CRN"]}</td>
<td>{$row["username"]}</td>
<td>{$row["password"]}</td>
<td>{$row["email"]}</td>
<td>{$row["mobilenumber"]}</td>
<td>{$row["game"]}</td>
<td>{$row["teamname"]}</td>
<td>{$row["crn"]}</td>
<td>{$row["playername"]}</td>
<td>{$row["batch"]}</td>
<td><a href='delete.php? crn={$row["crn"]}' class='btn btn-danger'>Delete</a> </td>

<td><a href='makewinner.php?crn=$row[crn]&name=$row[playername]&fl=$row[faculty]&bt=$row[batch]&game=$row[game]' class='btn btn-danger'>Make Winner</a> </td>
</tr>
";
?>
</tr>

                <?php endwhile;?>
</table>

</body>
</html>










