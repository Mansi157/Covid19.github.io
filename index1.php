<!DOCTYPE html>
<html>
<head>
	<title>India corona virus update</title>
	<style>
		.t{
			background-color: #f36e23;
		}
		.t2{
			background-color: #9cc850;
		}
		.t3{
             background-color:  #4bb7d8;
		}
		.t4{
              background-color: #4bb7d8;
		}
		.t5{
             background-color: #9cc850;
		}
		.t6{
               background-color: #f36e23;
		}
	</style>
	<?php include 'link.php'; ?>
	
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
        <a class="nav-link" href="index.php" style="color: white">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid" style="color: white">About</a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="index.php#Symtomsid" style="color: white">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php#preventionid" style="color: white">Prevention</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index1.php" style="color: white">India Corona update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php#Contactid" style="color: white">Contact</a>
      </li>   
    </ul>
  </div>  
</nav><br><br>


<!------------ India Corona Update---------->

<section class="corona_update container-fluid">
		<div class="mb-5">
		     	<h3 class="text-uppercase text-center " style="color: red;font-weight: bold;
		     	font-size: 54px;">COVID-19  Live Update of INDIA</h3>
		</div>
        <div class="table-responsive">
        	<table class="table table-bordered table-striped text-center" >
        		<tr>
        			<th class="text-capitalize">date/time</th>
        			<th class="text-capitalize">state</th>
        			<th class="text-capitalize">confirmed</th>
        			<th class="text-capitalize">active</th>
        			<th class="text-capitalize">recovered</th>
        			<th class="text-capitalize">deaths</th>
        			
        		</tr>
                <?php
                  $data=file_get_contents('https://api.covid19india.org/data.json');
                  $coronalive=json_decode($data,true);

                  $statescount =count($coronalive['statewise']);

                  $i=1;
                  while($i< $statescount){
                       

                       ?>
                       <tr>
                            
                            <td class="t"><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
                            <td class="t2"><?php echo $coronalive['statewise'][$i]['state'] ?> </td>
                            <td class="t3"><?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
                            <td class="t4"><?php echo $coronalive['statewise'][$i]['active'] ?> </td>
                            <td class="t5"><?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
                            <td class="t6"><?php echo $coronalive['statewise'][$i]['deaths']  ?> </td>
                       </tr>
                 
                      
                      <?php 
                  	$i++;
                  }

                ?>



        	</table>

          <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
             <div class="section_header text-center mb-5 mt-4">
                <h1 style="color: red;font-weight: bold;font-size: 47px;"><a href="M.html">Click here </a><span>To check the other Requirement</span></h1>
              </div>
            </div>
          </div>


        	
        </div>
	</section>

  
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
      const options={
         bottom: '20px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: true, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
      }

      new Darkmode(options).showWidget();
    </script>

</body>
</html>




