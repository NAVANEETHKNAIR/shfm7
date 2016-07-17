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
        <script>
function submitForm(){
 document.getElementById('frm').submit();
}

</script>

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
              <a href="view_cropdetails.php"><i class="fa fa-user"></i><br>View</a>
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
<div class="seedling_m">
<center>

<div class="seedling">
<form action="#" method="POST" id="frm">
<p> <b><center>CROP SEEDLING ENTRY</center></b></p>
  <br>
 


  <select name="category" id="category"  onchange="submitForm()";> <br/>
  
<option disabled selected value>-- Select Category  --</option>
<option value="vegetables">Vegetable</option><br/>
<option value="fruits">Fruits</option><br/>
</select></br></br>

 
<br><br>

</form>
</div>
</center>
<?php

//include_once "seeding1.html";
if($_COOKIE['mob'])
{}
else
{
  header("location:first.php");
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
      
    if (isset($_POST['category'])){       
       $category= $_POST['category']; 
                
          $qryss = "select * from users where mob_no='".$mob."'";
      $queryss=mysql_query($qryss);
      while ($row = mysql_fetch_array($queryss)) 
      {
        $id=$row['id'];
        $panchayath=$row['pamuco_name'];
        $qrys = "select * from users where pamuco_name='".$panchayath."' and category='officer' and status='1'";
        $querys=mysql_query($qrys);
        while ($row = mysql_fetch_array($querys)) 
        {
          $officer_uid=$row['id'];
          
        

    
    //$category=$_POST["category"];
    if($category=='vegetables')
    { 
      echo'<center>';
      echo "VEGETABLES";
      echo'</ center>'.'<br>';
      
        $qry = "select * from package where p_category='".$category."' and uid='".$officer_uid."'";
        $query=mysql_query($qry);
         $images = array();
        while ($row = mysql_fetch_assoc($query)) 
        {
          $images[]=$row;
        }
      }     
      
    else if($category=='fruits')  
    {
      echo'<center>';
      echo "FRUITS";
      echo'</ center>'.'<br>';
      $qry = "select * from package where p_category='".$category."' and uid='".$officer_uid."'";
      $query=mysql_query($qry);
       $images = array();
      while ($row = mysql_fetch_assoc($query)) 
      {
        $images[]=$row;
      } 
    }
    }
    
    }
        

      }
    echo'<div class="seedimg">';
    foreach ($images as $image)
    {
      $id=$image["id"];
      $name=$image["p_name"];
     echo'<a href="seed_entry.php?id='.$id.'">';
     echo "<img src=".$image['p_image'] ." title=".$name." alt='Sorry!! No image found!' width='200' height='200'>";
     echo'</a>';
    }
    echo'</div>';
  
  }
  
}
?>
</center>
</div>
                            
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
                   
