<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['CRN'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","sports");
    
    // mysql search query
    $query = "SELECT `fullname`, `faculty` FROM `coupnist` WHERE `CRN` = $id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $fname = $row['fullname'];
        $lname = $row['faculty'];
        /*$age = $row['age'];*/
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $fname = "";
            $lname = "";
            /*$age = "";*/
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $fname = "";
    $lname = "";
    $age = "";
}


?>
