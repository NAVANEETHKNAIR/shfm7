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
         <!--<link rel="stylesheet" href="css/style.css">-->


        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/slider.css">
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

              <a href="officer_dashboard.php" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>

            
            <li class="dropdown ">
              <a href="officer_dashboard.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_officer_data.php">Personal Data</a></li>
                <li><a href="create_events.php">Create Events</a></li>
                <li><a href="create_package.php">Create Package</a></li>
                <li><a href="create_news.php">Create News</a></li>
              </ul>
            </li>
              
          
            <li>
              <a href="farmer_notifications.php"><i class="fa fa-tasks"></i><br>Notifications</a>
            </li>
             
             <li>
              <a href="exit.php"><i class="fa fa-tasks"></i><br>Exit</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-user"></i><br>logout</a>
            </li>
 <li><a href="search.php"><img src="images/search.png" title="search" width="40" height="40">
    </a>
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
        <div class="back">
        <a  href="officer_dashboard.php">
         <img src="assets/img/back1.png" width="80" height="50" title="previous Page" >
         </a>
         </div>
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:65vh;">
                            


<?php
$mob=$_COOKIE['mob'];

if($_COOKIE['mob']&& $_COOKIE['category']=="officer")
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
        $idd=$row["id"];
        $pmc_name=$row["pamuco_name"];
        $qr="SELECT * FROM users WHERE pamuco_name = '".$pmc_name."'  and status='1'";
        $sql = mysql_query($qr);
      
        while($row1=mysql_fetch_array($sql))
        {
          $fid=$row1["id"];
          $name=$row1["name"];
          $did=$row1["identification_no"];
          $qrr="SELECT * FROM crop_items WHERE uid = '".$fid."'";
          $sqql = mysql_query($qrr);
          while($row4=mysql_fetch_array($sqql))
          {
            $crop_id=$row4["pid"];
            $qsr="SELECT * FROM package WHERE id = '".$crop_id."'";
            $sqa = mysql_query($qsr);
            while($row5=mysql_fetch_array($sqa))
            {
              $pname=$row5["p_name"];
              $sq="SELECT * FROM sensor_data WHERE dev_id = '$did'";
              $ss=mysql_query($sq);
             //echo $sq;
              while($row2=mysql_fetch_array($ss))
              {
                $dd=$row2["sense_date"];
                //$ip = "123.456.789.000"; // some IP address
                $s_date = split ("\ ", $dd); 
                $d=$s_date[0];
                echo $d;
              }
                $a=date('Y-m-d');
                //echo $a;

                $qrq="SELECT * FROM sensor_data WHERE dev_id = '$did' and $d = $a ";
                $sqs = mysql_query($qrq);
                //echo $qrq;
                if(mysql_num_rows($sqs)>0)
                {
                  while($row7=mysql_fetch_array($sqs))
                  {
                     $temp=$row7["temperature"];
                    $moi=$row7["moisture"];
                    $ph=$row7["pH"];
                    //echo "<br>";
                    echo "Name".$name;
                    echo "<br>";
                     echo "Item Name".$pname;
                     echo "<br>";
                    echo "Temperature" .$temp;
                    echo "<br>";
                    //echo "<br>";
                    echo "Moisture"  .$moi;
                    echo "<br>";
                    
                    echo "pH " .$ph;
                    echo "<br>";
                  }
                }
                else
                {
                  echo "Sorry ";
                }
             // }
            }
          }
        }
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
                   



