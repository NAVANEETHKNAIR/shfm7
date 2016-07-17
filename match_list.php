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

              <a href="customer_dashboard.php" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>
            
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_customer_data.php">personal Data</a></li>
                <!--<li><a href="farm_data.php">farm data</a></li>
                <li><a href="seeding1.php">Crop Seedling Entry</a></li>-->
                
              </ul>
            </li>
              
          
            
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Requirements Entry<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="customer_request.php">Crop seeding Entry</a></li>
                <!--<li><a href="farm_data.php">Device Notifications</a></li>
                <li><a href="req_notifications.php">Request Notifications</a></li>-->
                
              </ul>
           
            </li>
            <li>
              <a href="view_customerdetails.php"><i class="fa fa-tasks"></i><br>View</a>
            </li>
             <!--<li>
              <a href="enquiry.php"><i class="fa fa-tasks"></i><br>Enquiry</a>
            </li>-->
            <li>
              <a href="logout.php"><i class="fa fa-user"></i><br>Logout</a>
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
							//echo $gid;
		$qrys1="SELECT * FROM cust_request WHERE id='$gid'";
		$sqls1=mysql_query($qrys1);	
		while($row=mysql_fetch_array($sqls1))
		{
											
			$uid=$row["uid"];
			$iname=$row['item_name'];
			$idate=$row["need_date"];

			     $qrys2="SELECT * FROM package WHERE p_name='$iname'";
				$sqls2=mysql_query($qrys2);	
				//echo $qrys2; 
				while($row1=mysql_fetch_array($sqls2))
		{
			$id=$row1["id"];
			//echo $id;
                       $qrys3="SELECT * FROM crop_items WHERE pid='$id' AND willing_date <= '$idate'";
				     $sqls3=mysql_query($qrys3);
				     //echo $qrys3;

				     while($row2=mysql_fetch_array($sqls3))
		{
			$ida=$row2["uid"];
			//echo $id;
                       $qrys4="SELECT * FROM users WHERE id='$ida' ";
				     $sqls4=mysql_query($qrys4);
				    // echo $qrys4;

				     while($row3=mysql_fetch_array($sqls4))
		{
			$uname=$row3["user_name"];
			$pname=$row3["pamuco_name"];
			$photo=$row3["photo"];
									echo '<center>';
									echo '<div class="match_item">';
									echo '<div class="match_name">';
                                    echo $iname;
										echo "<br>";
									echo '</div>';
if($photo == NULL)
                               {
                                    
                                  echo '<div class="match_photo">';
                                   echo '<img src="photo/index.jpeg" class="img_circle">';
                                          echo "</img>";
											echo "<br>";
											 
											echo '</div>';
								}

								else
								{
									
                                           
									
									echo '<div class="match_photo">';
                                   echo "<img src='".$row3['photo']."' class='img_circle'>";
                                          echo "</img>";
										echo "<br>";
											
											echo '</div>';
								}
                                        echo '<div class="match_uname">';
										echo $uname;
										echo '</div>';
										echo '<div class="match_pname">';
										echo $pname;
										echo '</div>';

										echo "<br>";
										
                                   
                                   		echo '<div class="match_link">';
										echo'<a href="match_more.php?id='.$gid.'">';
						echo "See Details";
						echo '</div>';
						echo '</div>';
						echo '</center>';
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

        <!-- Presentation -->
        <div class="presentation-container">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 wow fadeInLeftBig">
                  <h1>We are <span class="violet">Andia</span>, a super cool design agency.</h1>
                  <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
                </div>
              </div>
          </div>
        </div>

            <!-- Footer -->
     <?php include_once "footer.html";?>
    </body>

</html>
                   