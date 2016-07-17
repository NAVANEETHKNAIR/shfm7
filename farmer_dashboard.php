<!DOCTYPE html>
<html lang="en">

    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script src="f_clone_Notify.js" type="text/javascript"></script>
<link href="f_clone_Notify.css" rel="stylesheet" />
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

              <a href="farmer_dashboard.php" >
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


                <style>
#notification_count
{
padding: 0px 3px 3px 7px;
background: #cc0000;
color: #ffffff;
font-weight: bold;
margin-left: 77px;
border-radius: 9px;
-moz-border-radius: 9px;
-webkit-border-radius: 9px;
position: absolute;
margin-top: -4px;
font-size: 10px;
}
</style>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
 
function addmsg(type, msg){
 
$('#notification_count').html(msg);
 
}
 
function waitForMsg(){
 
$.ajax({
type: "GET",
url: "select.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg("new", data);
setTimeout(
waitForMsg,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg,
15000);
}
});
};
 
$(document).ready(function(){
 
waitForMsg();
 
});
 
</script>
<span id="notification_count"></span>
<a href="farm_notifications_data.php" id="notificationLink"> Device Notifications</a>
<div id="HTMLnoti" style="textalign:center"></div>
                <!--<li><a href="farm_notifications_data.php">Device Notifications</a></li>-->
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
                            <div class="dash" style="height:auto;">
<center>
<div class="farm_dashs">
<?php
  //include_once "farmer_dashboard.html" ;

  if($_COOKIE['mob']  && $_COOKIE['category']=="farmer")
    {}
  else
    {
      header("location:index.php");
    }
  $mob=$_COOKIE['mob'];
  //echo $mob; 
  if($mob){


  $con=mysql_connect("localhost","root","password");
    if(!$con)
    {
      echo "can't connect to the server";
      exit;
    }
    else
 echo'<h1>'.'<b>'."Latest News".'</b>'.'</h1>';
    { 
           mysql_select_db("SHFM",$con);
           
           //echo "hiiiii";
           
    
           //echo "hiiiii";
           $qry="SELECT * FROM news ";
           $results=mysql_query($qry);
           //echo $qry;

           while($row=mysql_fetch_array($results))
        {
          $topic=$row["topic"];
          //$desc=$row["description"];
          $st_date=$row["st_date"];
          mysql_query("DELETE FROM officer_notification WHERE st_date < date('Y-m-d') ");

          $st_date=date('d-m-Y', strtotime($st_date));
          $file=$row["file"];
          echo'<center>';
         
          echo'<div class=farm_top>';
          echo'<div class="farm_topic">'. "Topic " .'</div>';
          echo '<div class="farm_ans">'.$topic.'</div>';
          echo "<br>";
          
          echo '<div class="farm_date">'."Starting Date ".'</div>'.'<div class="farm_dans">'.$st_date.'</div>';
          echo "<br>";
          
           echo '<div class=farm_img>'."<img src='".$row['file']."' width='175%' height='175%' />".'</div>';
'</div>';
echo'</center>';
echo'<hr>';

          
        }
    }
  }
  else{
     echo '<script type="text/javascript">';
          echo 'window.alert("Time out please login...");';
          echo 'document.location.href="login.html"';
          echo '</script>';
  }
?>


 
</div>
</center>
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
                   
