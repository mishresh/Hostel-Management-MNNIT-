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



    
      $sql = "SELECT * FROM `h_caretaker` WHERE user_id = '$id'";
          $result = mysqli_query($con,$sql);
          $row5 = $result->fetch_array();

    
      $sql = "SELECT * FROM `complain1` WHERE stetus = 'Received'";
          $result = mysqli_query($con,$sql);
         
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
     
      
    


     
$dat = validate($_POST["re"]);
      $reg = validate($_POST["re1"]);
      $room = validate($_POST["re2"]);
      $r1='Resolved';
      




       $ins_qur = "UPDATE `complain1` SET stetus='$r1' WHERE date1='$dat'";

      $result1 = mysqli_query($con,$ins_qur);
         
}

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

      
        
        <li></li>
        
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
        <h2 style="opacity:0.9;"><marquee><label align="center" style="color:#FFFFFF;">Resolved Complain in Efficient Manner</label></marquee></h2>
        <hr>
        

      


      
        <div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.8; ">
       


                 <h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;width:300px;" align="">
              <label align="center" style="color:#000080"> 
                <b>Students Complain</b>         
                            
              </label>
        </h4>


        <?php
                        $a=0;
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";
                          echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Date</th><th>Registraion Number</th><th>Hostel</th><th>Room No.</th><th>Complain</th><th>Status</th><th>Update status</th></tr>";
       
                          while($row3=$result->fetch_array())
                           {
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='see_complain_caretekar.php' method='post'><td>$row3[0]</td><td>$row3[3]</td><td>$row3[2]</td><td>$row3[4]</td><td>$row3[5]</td><td>$row3[1]</td><td>
                            <div class='col-sm-12 controls'>
                <input type='text' value='$row3[0]' style='display:none' name='re'>
                 <input type='text' value='$row3[3]' style='display:none' name='re1'>
                  <input type='text' value='$row3[4]' style='display:none' name='re2'><input type='submit' id='btn-login' action='book.php' class='btn btn-success' value='Resolved'></a>
              </div></td></form></tr>";
                           }
                              
                       echo "</table>";

                      
                      ?>
<br>
         

<br><br>
        </div>




          <br><br>
          <hr>


    

                </div>
               


          <hr>

        </div>
      </div>
    </div>
  </div>
</div>





<footer class="container-fluid">
  <div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
    devloped By Choubeyji &copy; 2018
  </div>
</footer>


</body>
</html>