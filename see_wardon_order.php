<?php
session_start();


//include funtion.php file

require('function.php');
$con = con();


//here check, where "session with user_id" is set or not

if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
}
else
{

//if session is not set then control goes to homepage

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}

$userid = $_SESSION['user_id'];
		
			$sql = "SELECT * FROM `h_caretaker` WHERE user_id = '$id'";
      		$result = mysqli_query($con,$sql);
      		$row5 = $result->fetch_array();


      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = '$row5[2]'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();


      		
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = '$row5[2]'";
      		$result2 = mysqli_query($con,$sql2);



      		$sql3 = "SELECT * FROM `hostel_accom` WHERE hostel_name = '$row5[2]'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Calibri;
            }
            h3
            { font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 1px solid goldenrod;
                 border-radius: 15px;
            }
            h2 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 6px solid red;
                 border-radius: 30px;
            }

            h4 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 1px solid goldenrod;
                 border-radius: 20px;
            }
            p {

                
               
                color: #fff;
               
                padding: 10px 30px 0px 30px;
                margin-bottom: 1px;
                
                
            }
             
             .mySlides {display:none;}        
            
        </style>
	<title>Mnnit Hostel</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	
	<link href="./assets/css/font-awesome.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/index.css" rel="stylesheet">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script src="themes/1/js-image-slider.js" type="text/javascript"></script>

    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="./assets/js/jquery.min.js"></script>
	
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(background/20.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

	<div style="background-color:none;">
	<!-- Static navbar -->
	<br>
<nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;">
		 <div class="container" hight="100">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: grey;">
        <span class="icon-bar" style="background-color: red;"></span>
        <span class="icon-bar" style="background-color: red;"></span>
        <span class="icon-bar" style="background-color: red;"></span> 
      </button>









				<a class="navbar-brand" href="#"><?php echo "<img src='background/12.webp' alt='Smiley face' height='30' width='30'>";?></a>
			</div>
			
		 <div class="collapse navbar-collapse active" id="myNavbar">
			<ul class="nav navbar-nav" style="background-color: #e3f2fd;">
				  <li class="active"><a href="caretaker.php" >Home</a></li>
        <li class="active" data-toggle="modal" style="color:red" data-target="#add_blog_modal"><a href="careteker_room.php">Allot Room</a></li>
        <li class="active"><a href="see_complain_caretekar.php">See Complain</a></li>
        <li class="active"><a href="see_wardon_order.php">See wardon order & Add Hostel Committee members</a></li>
        <li class="active"><a href="search_update.php">Search student</a></li>

				
			</ul>

			<ul class="nav navbar-nav navbar-right " style="background-color: #e3f2fd;">
         <li class="active" style="background-color:inverse"><a href="#"><font size="2" color="red"><span class="" style="font-size:15px;"></span></font>Welcome <?php echo "$row5[3] $row5[4] $row5[5]";?></a></li>
     		 <li class="active" style="background-color:inverse"><a href="logout.php"><font size="2" color="red"><span class="glyphicon glyphicon-off" style="font-size:15px;"></span></font>Log Out</a></li>
     		 
   			 </ul>
			
		</div>
			</div>
	</nav>
  

	<br><br>

	<!-- End-->
	
	
               

                <div class="div2">
   
		<div class="container"  >
			<div class="col-sm-12" >
				<h2 style="opacity:0.9;"><marquee><label align="center" style="color:#FFFFFF;">HOSTEL LIFE IS A MOST REMEMBERAL EVEVENT OF YOUR LIFE</label></marquee></h2>
				<hr>
				

	

 				<div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.9; ">

           <div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36; ">
                <br>
                  <table>
                    <tr>
                      <th><div align="center"> Photo Gallery</div><div class="container-fluid" style="margin-top: 0px">
    
    
                <div id="sliderFrame"> 
                   <div id="slider" style="opacity: 1; border-radius: 10px;width:500px;">
    
                      <img src="background/741/01.jpg" alt="" />
                      <img src="background/741/02.jpg" alt="" />
                      <img src="background/741/03.jpg" alt="" />
                      <img src="background/741/04.jpg" alt="" />
                      <img src="background/741/05.jpg" alt="" />
                         </div>
                    <div id="htmlcaption" style="display: none;">
            
                    
                    
    </div>
      </div>
    </div></th>

                    <th><div align="center" width="600px"class="col-sm-12">
                      <br><br>Notice
                      
                      
                        <marquee direction="up" scrollamount="3">
                          <?php 
                         $con = con();
                        $sql="SELECT notice FROM `notice` WHERE for_who='Careteker'" ; 

                        $result = mysqli_query($con,$sql);
                          echo "<br><br><br><br><br><br><br><br><br>";
                         while($row3=$result->fetch_array())
                                echo "* $row3[0] <br><br>";
                          
                        ?>
                <marquee>
                      </div>
                  
                  </th></table><br><br>

               </div>
               <div>
               </div>
             </div>
       <br>

<hr>
    
      

      <h4 style="opacity: 1; border-radius: 10px;width:400px;" align="center"><label align="center" style="color:#D7DA0F"> Add Details of Committee members   :&nbsp;</label></h4>
            

        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">
                <div class="panel panel-info">
                 <div class="panel-heading">
                  <div class="panel-title">Fill details</div>
                     <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="appoint.php"></a></div>
                   </div>  
                   <div class="panel-body" >
                     <form style="background-image:url(back/10.jpg);" id="book" class="form-horizontal" role="form" action="add_committee_backend.php" method="post">



                   <div class="form-group">
                 <label for="first_name" class="col-md-3 control-label" style="color:black">Room Number*</label>
                  <div class="col-md-9">
                   <input type="text" class="form-control" name="room" placeholder="Room number" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                  </div>
                  </div>


                  <div class="form-group">
                 <label for="first_name" class="col-md-3 control-label" style="color:black">Registration Number</label>
                  <div class="col-md-9">
                   <input type="text" class="form-control" name="reg" placeholder="Registration number" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                  </div>
                  </div>

                  <div class="form-group">
                 <label for="first_name" class="col-md-3 control-label" style="color:black">First Name.*</label>
                  <div class="col-md-9">
                   <input type="text" class="form-control" name="first_name" placeholder="First Name." size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                  </div>
                  </div>


                  <div class="form-group">
                  <label for="middle_name" class="col-md-3 control-label" style="color:black">Middle Name.</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name." size="30" id="mna" onblur="mncheck();"><span id="mspn" style="color:red"></span>
                    </div>
                  </div>
                
                <div class="form-group">
                  <label for="middle_name" class="col-md-3 control-label" style="color:black">Last Name.</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" name="Last_name" placeholder="Last Name." size="30" id="mna" onblur="mncheck();"><span id="mspn" style="color:red"></span>
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="middle_name" class="col-md-3 control-label" style="color:black">Email.*</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" name="email" placeholder="Email." size="30" id="mna" onblur="mncheck();"><span id="mspn" style="color:red"></span>
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="middle_name" class="col-md-3 control-label" style="color:black">Mobile Number.*</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" name="mob" placeholder="Mobile Number." size="30" id="mna" onblur="mncheck();"><span id="mspn" style="color:red"></span>
                    </div>
                  </div>

                                   <div class="form-group">
                  <label for="middle_name" class="col-md-3 control-label" style="color:black">Designetion*</label>
                    <div class="col-md-9">
               <select  class="form-control" name="dis">
                    <option>Select Student designation</option>
                    <option>Mess meneger</option>
                    <option>Mess secretery</option>
                    <option>Mess reprasentative</option>

                    
                    </select>
             </div>
             <div>

                  
                  <br><br><br>

                  <input type="text" style="display:none;" value="2" name="check">
                  <!--Reset Button -->
                 <div class="form-group">
                                                            
                   <div class=" col-md-offset-4 col-md-2">
                     <input type="reset" id="btn-reset" class="btn btn-info"><i class="icon-hand-right" value="Reset" onclick="#"></i>
                   </div>
                   
            

                   
                    <!--Submit Button -->                                        
                   <div class="col-md-offset-2 col-md-2">
                     <input type="submit" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i>
                   </div>
                  </div>




                     </form>

                   </div>
                    </div>




 
                    </div> 
                   </div>


      <hr>

<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>


</body>
</html>