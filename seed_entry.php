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

              <a href="seeding1.php" >
                <br><img src='images/back1.png' height='50vh' title='previous page'/>
              </a>
              
            </li>
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
                            <div class="dash" style="height:65vh;">
                            	 
<?php
//include_once "seed_entry.html"; 

if($_COOKIE['mob'])
    {}
  else
    {
      header("location:index.php");
    }

    $con=mysql_connect("localhost","root","password");
    if(!$con)
    {
      echo "can't connect to the server";
      exit;
    }
    else
    {
           mysql_select_db("SHFM",$con);

    if(isset($_GET['id']))
    {
    $gid= $_GET['id'];
  
    setcookie("gid",$gid,time()+3600);
    $qrys1="SELECT * FROM package WHERE id='$gid'";
    $sqls1=mysql_query($qrys1); 
    while($row=mysql_fetch_array($sqls1))
    {
                      
      $vegimg=$row["p_image"];
      $sname=$row['p_name'];
      //$pid=$row["id"];
      echo'<center>';
      echo'<div class="seed_entry">';
      echo'<center>';
      echo "<img src=".$row['p_image'] ." alt='Sorry!! No image found!' width='200' height='200'/>";
      echo'<br>';
      echo '<b>'.$sname.'</b>';
      echo'</center>';
    }
  }?>
<center>
<form method="POST" action="#"> 
<input type="text" name="area" autocomplete="off" placeholder="area"required><br>
<input type="text" name="crops" autocomplete="off" placeholder="number of crops"required> <br>
<input type="text" name="date" autocomplete="off" id="datepicker" placeholder="Seeding Date" required> <br>
<input type="image" src="images/sub_f.png" title="click here to submit " width="50vw" height="50vh" alt="submit"/> <input type="hidden" name ="act" value="register">
  
  
  </center>
                                  
                                  
</form>
<?php
echo'</div>';
echo'</center>';
  //include_once "seed_entry.html";  
  if(isset($_POST["act"])and($_POST["act"]=="register"))
  {
    try
    {
            
               $area=$_POST["area"];
                     $no_of_crops=$_POST["crops"];
                     $seed_date=$_POST["date"];
                     $st_date=date('Y-m-d',strtotime($seed_date));
                    /* if(!isset($area{2}) or trim($area) == " ")
                     throw new Exception("Please Enter the Area");
                     if(!isset($sensor_no{2}) or trim($sensor_no) == " ")
                     throw new Exception("Please Enter the Sensor Number");*/
                $mob= $_COOKIE['mob'];
              if($mob)
              {
                $qry="SELECT * FROM users WHERE mob_no='$mob'";
                  $sql=mysql_query($qry); 
                  
                  while($row=mysql_fetch_array($sql))
                  {
                  $dev_no=$row['identification_no'];
                  $id=$row["id"];
                  $gid=$_COOKIE['gid'];
                  if($gid)
                  {
                    /*$qry1="SELECT * FROM package WHERE id='$gid'";
                       $sql1=mysql_query($qry1);  
                       while($row=mysql_fetch_array($sql1))
                      {
                      
                        $vegimg=$row["s_image"];echo $vegimg;
                        $vname=$row['s_name'];
                        $scategory=$row['category'];*/

                        $qry2="SELECT * FROM crop_items  WHERE uid='".$id."' and pid='".$gid."'";
                         $sql2=mysql_query($qry2);  
                         if(mysql_num_rows($sql2)>0)
                      { 
                           echo '<script type="text/javascript">';
                           echo 'window.alert(" you have already selected the item");';
                           echo 'document.location.href="seeding1.php"';
                           echo '</script>';
                      }
                       else
                       {
                        $qry2="SELECT * FROM device  WHERE uid='".$id."'";
                         $sql2=mysql_query($qry2);  
                         if(mysql_num_rows($sql2)>0)
                      { 

                               $qrys = "INSERT INTO crop_items(uid,pid,area,no_of_crops,seed_date)VALUES ('".$id."','".$gid."','".$area."','".$no_of_crops."','".$st_date."') ";   
                                $s=mysql_query($qrys); 
                                if($s){

                                  $qry2="SELECT * FROM crop_items  WHERE uid='".$id."' and pid='".$gid."'";
                               $sql2=mysql_query($qry2);
                               while($row=mysql_fetch_array($sql2))
                              {

                                $crop_id=$row['id'];

                                  $qrys="SELECT * FROM device  WHERE uid='".$id."' and crop_id='NULL'";
                               $sqls=mysql_query($qrys);

                              if(mysql_num_rows($sqls)>0)
                            { 
                               while($row=mysql_fetch_array($sqls))
                              {

                                $qryss = "UPDATE device SET crop_id='".$crop_id."' WHERE uid='".$id."'" ;
                                $s=mysql_query($qryss);

                              } 
                                

                              }
                              else
                              {
                                $qrys="SELECT * FROM device  WHERE uid='".$id."'";
                               $sqls=mysql_query($qrys);
                               
                               while($row1=mysql_fetch_array($sqls))
                              {
                                $sen_no=$row1['no_sensor_module'];

                                $qrys = "INSERT INTO device(uid,crop_id,dev_no,no_sensor_module)VALUES ('".$id."','".$crop_id."','".$dev_no."','".$sen_no."') ";  
                                      $s=mysql_query($qrys); 

                              }
                            }



                              }
                                  echo '<script type="text/javascript">';
                               echo 'window.alert("sucessfully inserted");';
                               //echo 'document.location.href="veg.php"';
                               echo '</script>';
                                  echo'<a href="seeding1.php">';
                                  echo"click here to add other item";
                                  echo'</a>'.'<br>';

                                  
                          
                                }
                              }
                              else
                              {

                                echo '<script type="text/javascript">';
                         echo 'window.alert(" Enter your sensor number");';
                         echo 'document.location.href="sensor_no.php"';
                         echo '</script>';
                              }
                           }
                          
                      // }
                     }
                      else
                    {
                        echo '<script type="text/javascript">';
                         echo 'window.alert(" select your choice again");';
                         echo 'document.location.href="seeding1.php"';
                         echo '</script>';
                      
                     }      
                        
                    }
              }
              else
              {
                header("location:login.php");
              } 
            } 
            catch(Exception $e)
              {
                echo $e->getmessage();
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
                   


