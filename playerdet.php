<!DOCTYPE html>
<html>
<head>
	<title>player information</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
<div class="jumbotron" style="background : url('images/bl.jpg') no-repeat;background-size: cover;  height: 320px;   "></div>

<form class="text-center border border-light p-5" action="func.php" method="post">

    <p class="h4 mb-4">ADD INFORMATON</p>

    <!-- Name -->
    <input type="text" name="playername" class="form-control mb-4" placeholder="player Name">
<!--CRN-->
<input type="text" name="CRN" class="form-control mb-4" placeholder="CRN">
     <!--FAculty-->

 <label>Faculty</label>
    <select type="text" class="browser-default custom-select mb-4" name="Faculty">
        <option value="" disabled>Choose option</option>
        <option value="Civil" selected>Civil</option>
        <option value="Computer">Computer</option>
        <option value="Electronics">Electronics</option>
        <option value="Electrical">Electrical</option>
    </select>

    <!--type-->
<label>Types</label>
    <select type="text" class="browser-default custom-select mb-4" name="Types">
        <option value="" disabled>Choose option</option>
        <option value="single" selected>single</option>
        <option value="doubled">doubled</option>
</select>

<!--Games-->
<label>Games</label>
    <select type="text" class="browser-default custom-select mb-4" name="Games">
        <option value="" disabled>Choose option</option>
        <option value="football" selected>fotball</option>
         <option value="Computer">BAsketball</option>
        <option value="volleyball">volleyball</option>
        <option value="chess">chess</option>
        <option value="Badminton" selected>Badminton</option>
        <option value="tabletennis">tabletennis</option>
        <option value="athletics">athletics</option>
        <option value="sackrace">sackrace</option>
        <option value="Carrom" selected>Carrom</option>
        <option value="Egaming">Egaming</option>
        <option value="longjump">longjump</option>
        <option value="highjump">highjump</option>
        <option value="Marathon" selected>marathon</option>
        <option value="Dart">Dart</option>
        <option value="javelling throw,shortput">javelling throw</option>
        <option value="chess">chess</option>
        
        

    </select> 
     <button class="btn btn-info btn-block" type="submit" name="pat_submit" value="ADD">ADD</button>
 </form>


<script src="https://ajax.googleapisom/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>