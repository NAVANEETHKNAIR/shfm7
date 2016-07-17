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
                                
                                <center>
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
    {
           mysql_select_db("SHFM",$con);



        $qry="SELECT * FROM users WHERE mob_no='$mob' ";
           $results=mysql_query($qry);
           //echo $qry;
           while($row=mysql_fetch_array($results))
        {
          $pan=$row["pamuco_name"];
          $gid=$row["id"];
          
          $qr="SELECT * FROM crop_items WHERE uid='$gid' ";
              $result=mysql_query($qr);
              //echo $qr;
              while($row1=mysql_fetch_array($result))
          {
            $p=$row1["pid"];
            $wdate=$row1["willing_date"];
            //echo $p;
        

            $q="SELECT * FROM package WHERE id='$p' ";
                $result1=mysql_query($q);
                //echo $q;
                while($row2=mysql_fetch_array($result1))
            {
              $name=$row2["p_name"];
              $img=$row2["p_image"];

               /* $q2="SELECT * FROM cust_request WHERE item_name='$name' ";
                    $result3=mysql_query($q2);
                    while($row3=mysql_fetch_array($result3))
                {
                  
                  $date=$row3["need_date"];*/
                  $cur_dt=date('Y-m-d');
                  


                  $q5="SELECT * FROM cust_request WHERE item_name='$name' AND need_date > '$wdate'and need_date >= '$cur_dt'  ";
                  $result5=mysql_query($q5);
                  while($row9=mysql_fetch_array($result5))
                          {

                          
                              $idd=$row9["uid"];
                                          $qnty=$row9["quantity"];
                                          $date=$row9["need_date"];

                    $q31="SELECT * FROM users WHERE id='$idd' ";
                      $result41=mysql_query($q31);
          
                      while($row41=mysql_fetch_array($result41))      
                          
                  {


                    $nme=$row41["user_name"];
                    $mob=$row41["mob_no"];
                    $adrs=$row41["address"];
                    $c_img=$row41["photo"];
                    echo '<div class="f_req">';
                    echo '<div class="f_req_img" >'."<img class='cir' src='".$c_img."' height=50% width=30%  >";
                                          echo "</img>".'</div>';
                    echo'<div class="main_f_req">';
                    echo "<h1>";
                    echo  '<div class="f_req_n">'.$nme.'</div>';
                    echo "</h1>";
                    
                    echo '<div class="f_req_add">'." Address".'</div>'.'<div class="f_req_adda">'.$adrs.'</div>';
                    echo "<br>";
                    echo  '<div class="f_req_mob">'." Mob number".'</div>'.'<div class="f_req_moba">'.$mob.'</div>';
                    echo "<br>";
                    echo  '<div class="f_req_nam">'." Item".'</div>'.'<div class="f_req_nama">'.$name.'</div>'.'<br>';
                    echo'<div class="f_req_qimg">'."<img src='".$img."' height=50vh width=60vw>";
                    echo "</img>".'</div>';
                    echo "<br>";
                    echo  '<div class="f_req_q">'." Quantity".'</div>'.'<div class="f_req_qa">'.$qnty.'</div>';
                    echo "<br>";
                    echo  '<div class="f_req_nd">'." Need Date".'</div>'.'<div class="f_req_nda">'.$date.'</div>';
                    echo "<br>";
                    echo'</div>';
                    echo'</div>';   

                 }

               // }

              }
           }
          }
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
                   


