<!DOCTYPE html>
<html>
<head >
	<title>Corona updates</title>
	<meta charset="utf-8">
  
     <?php include 'link.php'; ?>
	<?php include 'CSS/style.php'; ?>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body onload="fetch()">
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
        <a class="nav-link " href="#Contactid" style="color: white">Contact</a>
      </li>   
    </ul>
  </div>  
</nav>
	


<div class="main_header">
	<div class="text-center">
		<h1 class="text-center mt-5 mb-5" style="font-weight: 900; font-size: 54px;"><span style="color: #D81B60;">Let's</span>&nbsp;<span style="color:#311B92;">Say </span><span style="color: purple"> Go</span> <span style="color: #01579B;;">To</span>&nbsp;<span style="color: green"> Cor<span class="goimg"><img src="image/2.png" height="100" width="100"></span>na Virus</span> </h1>
		
			
	</div>

	<!-- *********** Corona update *************** -->
	<section class="corona_update container-fluid">
		<div class="mb-3">
		     	<h3 class="text-uppercase text-center " style="color: red;font-weight: 999;
		     	font-size: 45px;">COVID-19  Live  Data Update</h3>
		</div>
        <div class="table-responsive">
        	<table class="table table-bordered table-striped text-center" id="tbval">
        		<tr>
        			<th>Country</th>
        			<th>TotalConfirmed</th>
        			<th>TotalRecovered</th>
        			<th>TotalDeaths</th>
        			<th>NewConfirmed</th>
        			<th>NewRecovered</th>
        			<th>NewDeaths</th>
        		</tr>
        	</table>
        	
        </div>
	</section>

	<!------- About Section------------>
	<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
		<div class="section_header text-center mb-5 mt-4">
			<h1 style="color: red;font-weight: bold;
		     	font-size: 47px;">About COVID-19</h1>
		</div>

		<div class="row pt-5">
			<div class="col-lg-5 col-md-6 col-12 ml-5 about_res ">
				<img src="image/4.jpg" class="img-fluid" >
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="d" style="color: #5e35b1; font-weight: bold; ">What is COVID-19(Corona Virus)</h2>
				<p style="color: grey;font-size: 23px">Coronaviruses are nonsegmented, enveloped viruses with single-stranded RNA (ssRNA) ranging between 26 to 32 kb in length. </p>
				<p style="color: grey;font-size: 23px">Coronaviruses are nonsegmented, enveloped viruses with single-stranded RNA (ssRNA) ranging between 26 to 32 kb in length. At this length, the coronavirus genome is the largest among RNA viruses. Electron microscopy (EM) of negative-stained SARS-CoV-2 particles </p>
			</div>
		</div>
	</div>

	<!------- Symptoms----------->
	<div class="container-fluid pt-5 pb-5 " id="Symtomsid">
		<div class="section_header text-center mb-5 mt-4">
			<h1 style="color: red;font-weight: bold;
		     	font-size: 47px;">COVID-19 symptoms</h1>
			
		</div>

	    <div class="container">
		    <div class="row">
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
				   <figure class="text-center">
				     <img src="image/5.png" class="img-fluid0" width="140" height="120">
				     <figcaption style="color: grey;font-size: 21px">Cough</figcaption>
				   </figure>
			    </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5" >
				   <figure class="text-center">
				     <img src="image/8.png" class="img-fluid0" width="90" height="120">
				     <figcaption style="color: grey;font-size: 21px">Runny nose</figcaption>
				   </figure>
			    </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
				   <figure class="text-center">
				     <img src="image/7.png" class="img-fluid0" width="120" height="120">
				     <figcaption style="color: grey;font-size: 21px">Fever</figcaption>
				   </figure>
			    </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
				   <figure class="text-center">
				     <img src="image/10.png" class="img-fluid0" width="120" height="120">
				     <figcaption style="color: grey; font-size: 21px">Cold</figcaption>
				   </figure>
			    </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
				   <figure class="text-center">
				     <img src="image/16.png" class="img-fluid0" width="120" height="120">
				     <figcaption style="color: grey; font-size: 21px">Tired</figcaption>
				   </figure>
			    </div>
			    <div class="col-lg-4 col-md-4 col-12 mt-5">
				   <figure class="text-center">
				     <img src="image/9.png" class="img-fluid0" width="204" height="120">
				     <figcaption style="color: grey; font-size: 21px">Breathing difficulty</figcaption>
				   </figure>
			    </div>
			</div>
		
	   </div>
	</div>
    

    <!---------6 step corona virus prevention----------->
    
    <div class="container-fluid sub_section pt-5 pb-5 " id="preventionid">
		<div class="section_header text-center mb-5 mt-4">
			<h1 style="color: red;font-weight: bold;
		     	font-size: 47px;">6 Step COVID-19 Prevention</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure >
				                 <img src="image/11.png" class="img-fluid" width="90" height="90">
				            </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p style="font-size: 20px;color: grey;">Wash your hand regularly for 20 second,with soap and water or alchol-based hand rub</p>
							
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure >
				                 <img src="image/12.png" class="img-fluid" width="90" height="90">
				            </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p style="font-size: 20px;color: grey;">Cover your mouth with a disposiable tissue or mask or fiexed ellbow when you cough and sneeze</p>
							
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure >
				                 <img src="image/13.jpg" class="img-fluid" width="90" height="90">
				            </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p style="font-size: 20px;color: grey;">Avoid clode contact(1 meter or 3 feet)with people who are unwell</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure >
				                 <img src="image/14.png" class="img-fluid" width="90" height="90">
				            </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p style="font-size: 20px;color: grey;">Stay home and self-isolate from other in the household if you feel unwell</p>
							
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure >
				                 <img src="image/15.png" class="img-fluid" width="90" height="90">
				            </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p style="font-size: 20px;color: grey;">Stay informed by working news & follow the recommended practices </p>
							
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure >
				                 <img src="image/9.png" class="img-fluid" width="90" height="90">
				            </figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p style="font-size: 20px;color: grey;">If you have fever,cough and difficulty in breathing seek medicare early</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

		 <!---------Contact us---->
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
    <label style="font-size: 20px;color: grey;">UserName</label>
    <input type="name" class="form-control" name="username" placeholder="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label style="font-size: 20px;color: grey;">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
  </div>

  <div class="form-group">
    <label style="font-size: 20px;color: grey;">Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required="">
  </div>

  <div class="form-group">

  	 <label style="font-size: 20px;color: grey;">Select Symptoms</label><br>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1" class="d" style="font-size: 20px;color: grey;">Cold</label>
  	</div>
  	
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2" class="d" style="font-size: 20px;color: grey;">Fever</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3" style="font-size: 20px;color: grey;">difficulty in breath</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4" style="font-size: 20px;color: grey;">Feeling weak</label>
  	</div>
  	
  </div>
  
  <div class="form-group">
    <label for="exampleForControlTextarea1" style="font-size: 20px;color: grey;">Example textarea</label>
    <textarea class="form-control" name="text" id="exampleForControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
				</div>
				
			</div>
		</div>

	
</div class="container scrolltop float-right pr-5">
     <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn" ></i>

     <script>
     	
     	mybutton = document.getElementById("myBtn");

     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function() {scrollFunction()};

     function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
      } else {
    mybutton.style.display = "none";
      }
     }

        // When the user clicks on the button, scroll to the top of the document
     function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

     </script>
<div>
	
</div>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
    	const options={
    		 bottom: '0px', // default: '32px'
  right: '32px', // default: '32px'
  left: 'unset', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  textColor:'white',
 buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: true, // default: true,
  label: '🌝', // default: ''
  autoMatchOsTheme: true // default: true
    	}

    	new Darkmode(options).showWidget();


    	const darkmode =  new Darkmode(options);
        darkmode.toggle();
        console.log(darkmode.isActivated()) // will return true
    </script>


<!--------------- footer -------------------

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>copyright by Mansi Priya</p>
	</div>
</footer>-->

<script>



function fetch(){
	$.get("https://api.covid19api.com/summary",

		function(data){
			//console.log(data['Countries'].length);
			var tbval=document.getElementById("tbval");

			for(var i=1; i<(data['Countries'].length); i++){
				var x=tbval.insertRow();
				x.insertCell(0);
				tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background='#7a4a91';
				tbval.rows[i].cells[0].style.color='#fff';

				x.insertCell(1);
				tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background='#4bb7d8';

                x.insertCell(2);
				tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background='#4bb7d8';

                x.insertCell(3);
				tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background='#f36e23';

                x.insertCell(4);
				tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background='#4bb7d8';

                x.insertCell(5);
				tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background='#9cc850';

                x.insertCell(6);
				tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background='#f36e23';

			}
		}

	);
}
</script>
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