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
        
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:auto;">
<center>
 
            
 <div class="inside">          
                                 
<?php
if($_COOKIE['mob']  && $_COOKIE['category']=="officer")  
  	{}
	else
  	{
  		header("location:index.php");
  	}
$mob=$_COOKIE['mob'];
include_once"personal_officer_data.html";
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
				$dist=$row["district"];
        $p=$row["pamuco"];
				$pm=$row["pamuco_name"];
				$mob=$row["mob_no"];
				$photo=$row["photo"];
				//echo $pm;

				
			
				echo "<br>";
				 //echo "About Me.." ;
				echo "<br>";
        
        echo '<font color="green"  size="2vh">';
                               if($photo == NULL)
                               {
                                      //echo "hello";
                                   /*echo "<a  href=upload_officer.php?id=$id>Upload Photo ";
                                   echo "<br>";
                                   echo '<img class="img-circle" title="Upload photo" src="photo/index.jpeg">';
                                          echo "</img>";
                                          
											echo "<br>";
											echo "</a>";*/ 


                      echo '<img class="img-circle" src="photo/index.jpeg" width="230vh">';
                                          echo "</img>";
                                          echo '<div class="f_change">'."<a href=upload_officer.php?id=$id>Upload Photo ".'</div>';
                                   echo "<br>";
                      echo "<br>";
                      echo "</a>"; 
								}

								else
								{
									 echo '<div class="f_phdel">'."<a href=delete_officer_photo.php?id=$id><img src='images/del.png' height='27vh' title='remove photo'/>".'</a>'.'</div>';
                                   echo "<img  class='img-circle' src='".$row['photo']."'height='250vh' >";
                                          echo "</img>";

                                          echo '<div class="f_change">'."<a href=upload_officer.php?id=$id><img  src='images/camera.png' height='27vh' title='upload photo'/>".'Change photo'.'</div>';
                                   echo "<br>";

                    echo "<br>";
                      echo "</a>"; 



                                         
								/*	echo "<a href=upload_officer.php?id=$id>Change Photo ";
                                   echo "<br>";

                                   echo "<img  src='".$row['photo']."' class='img-circle' title='Change photo'>";
                                          echo "</img>";
                                          
										echo "<br>";
											echo "</a>"; */
								}
              echo '<div class="det">';   
        echo '</font>';
        echo '<div class="ll">';           
				echo "Name";  
				echo "<br>";echo "<br>";
				echo "Address" ;
				echo "<br>";echo "<br>";
				echo "District";echo "<br>";
				echo "<br>";
				echo $p;
				echo "<br>";
        echo "<br>";
        
				echo "MobileNumber";
				echo "<br>";
				
				echo "<br>";
				
				echo "<br>";
       
echo '</div>';

       echo '<div class="rr">'; 
        echo $name;
        echo "<br>";echo "<br>";
			echo $address;echo "<br>";echo "<br>";
         /* echo '&nbsp'; echo '&nbsp'; echo '&nbsp';  
          echo '&nbsp'; echo '&nbsp'; echo '&nbsp'; */  
          echo '<div class="editm">';
      echo "<a href=edit_officer_new.php?id=$id>";
       echo '<input type="image" src="images/edit3.png" title="Edit Address" alt="Edit" width="20" height=""15">';
      echo "</a>";
      echo '</div>';
      
			echo $dist ;echo "<br>";echo "<br>";
      /*echo '&nbsp'; echo '&nbsp'; echo '&nbsp';  
          echo '&nbsp'; echo '&nbsp'; echo '&nbsp';  */ 
           echo '<div class="editm">';
      echo "<a href=edit_officer_district.php?id=$id>";
      echo '<input type="image" src="images/edit3.png" title="Edit District"  alt="Edit" width="20" height=""15">'; 
      echo "</a>";
      echo '</div>';
      
      
      echo $pm ;echo "<br>";
      echo "<br>";
      
     /* echo '&nbsp'; echo '&nbsp'; echo '&nbsp';  
          echo '&nbsp'; echo '&nbsp'; echo '&nbsp'; */  
           echo '<div class="editm">';
      echo "<a href=edit_officer_panchayath.php?id=$id>";
      echo '<input type="image" src="images/edit3.png" title="Edit"  alt="Edit" width="20" height=""15">';
      echo "</a>";
      echo '</div>';
      
      
      
      echo $mob;
      echo '</div>';
      echo '</div>';
			}
		}

	}

	else
	{
		echo "sryyyy";
	}

	
	

?>
</div>
<div class="change"><br>

        <a href=officer_changepassword.php?id=$id>
        <input type="image" src="images/pas.png" alt="Change Password" title="Change Password" width="400" height="50">
        </a>
        </div>
</div>
</center></div>
<!--</div>-->

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
            <!-- Footer -->
     <?php include_once "footer.html";?>

    </body>

</html>