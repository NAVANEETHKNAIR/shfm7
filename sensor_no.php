<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SHFM</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="assets/css/style1.css">
         <link rel="stylesheet" href="assets/css/slider.css">


        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        
        <!-- Top menu -->
    <nav class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="top-navbar-1">
          <ul class="nav navbar-nav navbar-right">
            <li>

              <a href="index.html" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>
            
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_data.php">personal Data</a></li>
                <li><a href="farm_data.php">farm data</a></li>
                <li><a href="seeding1.php">Crop Seedling Entry</a></li>
                
              </ul>
            </li>
              
          
            <li>
              <a href="sensor_no.php"><i class="fa fa-tasks"></i><br>Sensor Module</a>
            </li>
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Notifications<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="event_notifications.php">Events Notifications</a></li>
                <li><a href="farm_data.php">Device Notifications</a></li>
                <li><a href="req_notifications.php">Request Notifications</a></li>
                
              </ul>
           
            </li>
             <li>
              <a href="enquiry.php"><i class="fa fa-tasks"></i><br>Enquiry</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-user"></i><br>logout</a>
            </li>
            
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pricing-tables.html">Pricing tables</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>

        <!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:65vh;">
                              <?php

//include_once "sensor_no.html";
if($_COOKIE['mob'])
{}
else
{
  header("location:index.php");
}
// Create connection
$con = mysql_connect("localhost","root","password");

// Check connection
if (!$con) 
{
  echo"cannot connect to the server";
  exit;
}
else
{
  mysql_select_db("SHFM",$con);
  if(isset($_COOKIE['mob']))
  {     
    $mob=$_COOKIE['mob'];
    if(isset($_POST["act"])and($_POST["act"]=="register"))
    {
      try
      {
        $sensor_module=$_POST["sensor_module"];
        if(trim($sensor_module) == "")
            throw new Exception("Please Enter the number of sensor module");
          $q = "SELECT * FROM users WHERE mob_no = '".$mob."'";
        $results = mysql_query($q);
        while($row=mysql_fetch_array($results))
        {
          $farmer_id=$row['id'];
          $dev_no=$row['identification_no'];
        }
        //$qr = "SELECT * FROM users WHERE id = '".$farmer_id."'";
        //$results = mysql_query($qr);
        $qrs = "SELECT * FROM device WHERE uid = '".$farmer_id."'";
        $result = mysql_query($qrs);

        if(mysql_num_rows($result)>0)
          { 
        while($row=mysql_fetch_array($result))
        {
          
          //$sen_no=$row["no_sensor_module"];echo "haiiiiiiiiiiii".$sen_no;
          if($sensor_module!='0')
          {
          $qryss = "UPDATE device SET no_sensor_module='".$sensor_module."' WHERE uid='".$farmer_id."' " ;
                                $s=mysql_query($qryss);
          if($qryss)
          {
            echo '<script type="text/javascript">';
          echo 'window.alert("You are Successfully updated...");';
          //echo 'document.location.href="farmer_dashboard.php"';
          echo '</script>';
          }
        }
        else{
          echo '<script type="text/javascript">';
          echo 'window.alert("You should have altlest 1 sensor module...");';
          //echo 'document.location.href="farmer_dashboard.php"';
          echo '</script>';
        }
        }



      }
      else{
        
          $qrys = "INSERT INTO device (uid,dev_no,no_sensor_module)VALUES ('".$farmer_id."','".$dev_no."','".$sensor_module."')";
        
        $s=mysql_query($qrys);
        if($s)
        {
          echo '<script type="text/javascript">';
          echo 'window.alert("You are Successfully updated...");';
          //echo 'document.location.href="farmer_dashboard.php"';
          echo '</script>';
        }          


      }

        
      }
      catch(Exception $e)
      {
        echo $e->getmessage();
      }
    }
    
    $q = "SELECT * FROM users WHERE mob_no = '".$mob."'";
        $results = mysql_query($q);
        while($row=mysql_fetch_array($results))
        {
          $farmer_id=$row['id'];
          $dev_no=$row['identification_no'];
        }
        $qr = "SELECT * FROM device WHERE uid = '".$farmer_id."' limit 1";
        $resultf = mysql_query($qr);
        if(mysql_num_rows($resultf)>0)
        {
        while($row=mysql_fetch_array($resultf))
        {
          
          $sen_no=$row['no_sensor_module'];
          echo'<center>';
          echo'<div class="sensor">';
          echo"<h1>"."<b>"."Sensor Module Number"."</b>"."</h1>"."<br>";
          echo'<form method="POST" action="sensor_no.php">';
         
    
          echo'<input type="text" name="sensor_module" value="'.$sen_no.'"placeholder="no of sensor module" required><br><br>';

           //echo'<input name="ok" value="ok" type="submit"><br>';
           echo'<input type="image" src="images/hnd.png" title="click here " width="50vw" height="50vh" alt="submit"/> <br>';
          echo'<input name="act" value="register" type="hidden">';
          echo'</div>';
        //echo'<a href="edit_sensor_module.php">Edit</a>';
          echo'</center>';
      }
    }
    else
    {

      //header("location:sensor_no.html");
       echo'<center>';
          echo'<div class="sensor">';
          echo"<h1>"."<b>"."Sensor Module Number"."</b>"."</h1>"."<br>";
      echo'<form method="POST" action="sensor_no.php">';
         
    
          echo'<div class="sen_n">'.'<input type="text" name="sensor_module" placeholder="no of sensor module" required>'.'</div>';

           echo'<div class="sen_na">'.'<input type="image" src="images/hnd.png" title="click here " width="70vw" height="70vh" alt="submit"/> </div><br>';

          echo'<input name="act" value="register" type="hidden">';
          echo'</div>';
          echo'</form>';
        echo'</center>';
    }
  }
  
}
?>


                            </div>

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>

     
   
        <!-- Footer -->
         <?php include_once "footer.html";?>
       

    </body>

</html>
                   
