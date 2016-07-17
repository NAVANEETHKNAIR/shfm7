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
  		header("location:first.php");
  	}
	
		$mob=$_COOKIE['mob'];
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
					//echo $id.$mob;
					if(isset($_POST["act"])and($_POST["act"]=="register"))
					{
						try
						{
								$quantity=$_POST["quant"];
								$number=$_POST["name"];
						        //$no_of_crops=$_POST["no_of_crops"];
						        $need_date=$_POST["date"];
						                 $st_date=date('Y-m-d',strtotime($need_date));
						                 //setcookie("mob",$mob,time()+3600);
						                 //echo $_COOKIE['mob'];
						        /* if(!isset($area{2}) or trim($area) == " ")
						         throw new Exception("Please Enter the Area");
						         if(!isset($sensor_no{2}) or trim($sensor_no) == " ")
						         throw new Exception("Please Enter the Sensor Number");*/
										
									if($_COOKIE['vid'])
									{
									$id=$_COOKIE['vid'];
									}
									if($mob)
									{
												$qry="SELECT * FROM users WHERE mob_no='$mob'";
											    $sql=mysql_query($qry);	
											    
										  		while($row=mysql_fetch_array($sql))
										  		{
													
													$id1=$row["id"];
												/*	$qry1="SELECT * FROM crop_items WHERE id='$id'";
												    $sql1=mysql_query($qry1);	
												    
											  		while($row=mysql_fetch_array($sql1))
											  		{
											  			$vimg=$row['crop_name'];*/
														$qrys = "UPDATE cust_request SET quantity='".$quantity.'.'.$number."',need_date='".$st_date."' WHERE id='".$id."' and uid='".$id1."'" ;
																$s=mysql_query($qrys);//echo $qrys;
																//echo $qrys;
																//echo $id;
																if($s)
																{
																	echo '<script type="text/javascript">';
																	echo 'window.alert(" Succesfully updated...");';
																	echo 'document.location.href="view_customerdetails.php"';
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
					if($_GET['id'])
  	{
      $id=$_GET['id'];

	  setcookie("vid",$id,time()+3600);

				$query1="select * from cust_request where id='$id'";
								$sql1=mysql_query($query1);
								//$query2=mysql_fetch_array($query1);
								while($row=mysql_fetch_array($sql1))
								{
								
									$quantity1=$row['quantity'];

									

									list($quant, $measure)=explode(".", $quantity1);
									
									
									$st_date=$row["need_date"];
									//echo $area

									echo '<div class="complt">';
									echo'<form action="edit_customerdetails1.php" method="POST">';
									echo '<center>';
									
									echo '<div class="complt_name">';		
									echo'<input type="text" name="quant" value="'.$quant.'" autocomplete="off" placeholder="quantity"required>';
									echo '</div>';
									
								//echo'<input name="signi" type="radio" value="kg" echo ($measure== "kg") ?  "checked" : "" ;  /> kg';
									//echo'<input name="signi" type="radio"  value="number" echo ($measure== "number") ?  "checked" : "" ;  /> number';
?>
		<div class="complt_radio">							
	    <input type="radio" name="name" value="kg" <?php if($measure=="kg"){ echo "checked";}?>/>kg
	   <input type="radio" name="name" value="number" <?php if($measure=="number"){ echo "checked";}?>/> number
 		</div>
<?php
								



									echo"<br>";
									echo '<div class="complt_date">';	
									echo'<input type="text" name="date" value="'.$st_date.'" autocomplete="off" id="datepicker" placeholder="Seeding Date" required>';
									echo '</div>';
									echo" <br>";
									echo '<div class="complt_submit">';	
									echo'<input type="image" src="images/submit_button.png" alt="submit" width="130" height="70">';
									 echo'<input type="hidden" name ="act" value="register">';
									 echo '</div>';
									 echo '</center>';
									  
									echo"</form>";
									echo '</div>';
								
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
                   
