<!DOCTYPE html>
<html>
<head>
	<title></title>

 <?php include 'link.php'; ?>
	<?php include 'CSS/style.php'; ?>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark nav_style p-3 w-100 h-100">
  <a class="navbar-brand" href="#" style="color: white">GOCORONA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: white">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid" style="color: white">About</a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="#Symtomsid" style="color: white">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#preventionid" style="color: white">Prevention</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index1.php" style="color: white">India Corona update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php" style="color: white">Contact</a>
      </li>   
    </ul>
  </div>  
</nav>
	

	   <div class="container-fluid  pt-5  " id="Contactid">
		<div class="section_headerss text-center mb-5 mt-4">
			<h1 style="color: red;font-weight: bold;
		     	font-size: 47px;">Contact us ASAP</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<form action="" method="post">
						<div class="form-group">
    <label >UserName</label>
    <input type="name" class="form-control" name="username" placeholder="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required="">
  </div>

  <div class="form-group">

  	 <label>Select Symptoms</label><br>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1" class="d">Cold</label>
  	</div>
  	
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2" class="d">Fever</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
  	</div>
  	
  </div>
  
  <div class="form-group">
    <label for="exampleForControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="text" id="exampleForControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
				</div>
				
			</div>
		</div>


</body>
</html>



<?php

$server ='localhost';
$user='root';
$password='';
$db='coronadb';

$con=mysqli_connect($server,$user,$password,$db);
 if(isset($_POST['submit'])){
 	
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$mobile=$_POST['mobile'];
 	$symp=$_POST['coronasym'];
 	$msg=$_POST['text'];

 	$chk=" ";

 	foreach ($symp as $chk) {
 		$chk .=$chk.",";
 	}

 	$insertquery="INSERT INTO coronacase(username,email,mobile,symp,message) VALUES ('$username','$email','$mobile','$chk','$msg')";

 	$query=mysqli_query($con, $insertquery);

 	if($query){
	?>
	<script>
		alert("insert successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert(" no insert successful");
	</script>
	<?php
}


 }

?>