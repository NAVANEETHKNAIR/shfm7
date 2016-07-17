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
                            <div class="dash" style="height:auto;">
<?php

$mob=$_COOKIE['mob'];

if($_COOKIE['mob'])
    {}
  else
    {
      header("location:index.php");
    }
//echo $mob;
  if(isset($_COOKIE["mob"]))
  {
  $con=mysql_connect("localhost","root","password");
    if(!$con)
    {
      echo "can't connect to the server";
      exit;
    }
    else
    {
      mysql_select_db("SHFM",$con);

      $qry="SELECT * FROM users WHERE mob_no = '".$mob."' ";
      $sqll = mysql_query($qry);
      
      while($row=mysql_fetch_array($sqll))
      {
        
        
        $id = $row["id"];
        $name = $row["name"];
        $address=$row["address"];
        $mob=$row["mob_no"];
        $cat=$row["category"];
        $photo=$row["photo"];
          
         
        echo "<br>";
        echo'<center>';
        echo'<div class="farmer_p">';
                      if($photo == NULL)
                               {
                                    
                                   
                                   echo '<img class="circle" src="photo/index.jpeg" width="230vh">';
                                          echo "</img>";
                                          echo '<div class="f_change">'."<a href=upload.html?id=$id>Upload Photo ".'</div>';
                                   echo "<br>";
                      echo "<br>";
                      echo "</a>"; 
                }

                else
                {
                  
                                           
                                    echo '<div class="f_phdel">'."<a href=delete_photo.php?id=$id><img src='images/del.png' height='27vh' title='remove photo'/>".'</a>'.'</div>';
                                   echo "<img  class='circle' src='".$row['photo']."'height='250vh' >";
                                          echo "</img>";

                                          echo '<div class="f_change">'."<a href=upload.php?id=$id><img  src='images/camera.png' height='27vh' title='upload photo'/>".'upload photo'.'</div>';
                                   echo "<br>";

                    echo "<br>";
                      echo "</a>"; 
                }

            echo '<div class="f_main">';
        echo '<div class="f_name">'."Name  ".'</div>' .'<div class="f_nans">'.$name.'</div>';
        echo "<br>";
        echo '<div class="f_add">'."Address".'</div>'.'<div class="f_nadd">'.$address.'</div>'. '<div class="f_edit">'."<a href=edit_new.php?id=$id><img src='images/edit1.png' height='22vh' title='edit '/></a>".'</div>';
        echo "<br>";
        echo '<div class="f_mob">'."Mob no".'</div>'.'<div class="f_amob">'.$mob.'</div>';
        echo "<br>";
        echo'</div>';
        echo '<div class="f_pass">'."<a href=change_password.php?id=$id><img src='images/changepassword.png' height='39vh' width='36vw' title='change password '/>Change Password </a>".'</div>';
        echo "<br>";
        echo'</center>';
        
        echo'</div>';
      
      }
    }

  }
  else
  {
    echo '<script type="text/javascript">';
          echo 'window.alert("Time out please login...");';
          echo 'document.location.href="login.html"';
          echo '</script>';
    //header("location:index.php");
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
                   
