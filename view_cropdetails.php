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
                            <div class="dash"  style="height: auto;">
<center>
<div class="view_seed_m">
<div class="view_seed">

<form action="#" method="POST" id="frm">
<p> <b><center> VIEW CROP SEEDING </center></b></p> 

  <select name="category" id="category"  onchange="submitForm()";> <br/><br/><br>
  
  
  
<option disabled selected value>-- Select Category  --</option>
<option value="all">All</option><br/>
<option value="vegetables">Vegetables</option><br/>
<option value="fruits">Fruits</option><br/>
</select></br></br>


<br><br>
  
</form> 
</div>
<?php

	//include_once "view_cropdetails.html";
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
		$mob=$_COOKIE['mob'];
	if(isset($_COOKIE['mob']))
	{	 	
		if (isset($_POST['category']))
		{       
       		 $category= $_POST['category'];

			 $qry = "select * from users where mob_no='".$mob."'";
		    $query=mysql_query($qry);
		    while ($row = mysql_fetch_assoc($query))
			 {
			 	$id1=$row["id"];
				$panchayath=$row["pamuco_name"];
				$qry1 = "select * from users where pamuco_name='".$panchayath."' and category='officer'";
				    $query1=mysql_query($qry1);
					while ($row2 = mysql_fetch_assoc($query1))
					{
						$id=$row2['id'];
			 	if($category=='vegetables')
					{	
						echo'<center>';
					echo "VEGETABLES";
					echo'</ center>'.'<br>'.'<hr>';
					
					$qry1 = "select * from package where uid='".$id."' and p_category='".$category."'";
				    $query1=mysql_query($qry1);
				 
					//while ($row = mysql_fetch_array($query1))
					// {
					
				
				   // $qry1 = "select * from crop_items where uid='".$id."' and category='".$category."'";
				   // $query1=mysql_query($qry1);
				 
					while ($row1 = mysql_fetch_array($query1))
					 {
						$pid=$row1["id"];
					  	
						$qry2 = "select * from crop_items where uid='".$id1."' and pid='".$pid."'";
				    $query2=mysql_query($qry2);
				 if(mysql_num_rows($query2)>0)
				 	{	
					while ($row = mysql_fetch_array($query2))
					 {
					 	//$dat=$row["willing_date"];
	echo'<div class="main_vimg">';
						 echo'<a href="?id='.$pid.'">';
					  	echo '<div class="s_vimg">'."<img src=".$row1['p_image'] ." alt='Sorry!! No image found!' width='100%' height='100%'/>".'</div>';
					  	echo'</a>';
					  	echo'<br>';
					  	echo '<div class="detail_vimg">';
					  	echo'<div class="detail_varea">'."Area".'</div>'.'<div class="detail_areaan">'.$row["area"].'</div>';
					  	echo '<div class="detail_vcrp">'."No of crops".'</div>'.'<div class="detail_crpan">'.$row["no_of_crops"].'</div>';
					  	echo '<div class="detail_vdate">'."Seedling date".'</div>'.'<div class="detail_vdatean">'.$row["seed_date"].'</div>';
					  	echo'<a href="edit_cropdetails1.php?id='.$pid.'">';
						echo'<div class="detail_edit">'."<img src='images/text-editing.png' height='39vh' width='42vw' title='edit'/>".'</div>';
						echo "&nbsp&nbsp&nbsp";
						echo "</a>";
						
				 		if($row["sell_qty"]=="0")
				 		{	
				 			
								echo'<a href="ready_to_sell.php?id='.$pid.'">';
								echo'<div class="detail_ready">'."Ready to Sell".'</div>';
								echo "&nbsp&nbsp&nbsp";

								echo'</a>';
						}			

						echo'<a href="delete_cropdetails.php?id='.$pid.'">';
						echo'<div class="detail_delete">'."<img src='images/icon_trash-it.png' height='39vh' width='42vw' title='delete'/>".'</div>';
						echo'</a>'.'<br>';
		echo'</div>';
						echo'<hr>';
					}
					//echo'</div>';
					}
				}
			}
				else if($category=='fruits')
				{
					echo'<center>';
			echo "FRUITS";
			echo'</ center>'.'<br>'.'<hr>';

				    $qry1 = "select * from package where uid='".$id."' and p_category='".$category."'";
				    $query1=mysql_query($qry1);
				 
					while ($row1 = mysql_fetch_array($query1))
					 {
						$pid=$row1["id"];
					  	
					  	
						$qry2 = "select * from crop_items where uid='".$id1."' and pid='".$pid."'";
				    $query2=mysql_query($qry2);
				 if(mysql_num_rows($query2)>0)
				 	{	
					while ($row = mysql_fetch_array($query2))
					 {
						 echo'<div class="main_vimg">';
						 echo'<a href="?id='.$pid.'">';
					  	echo '<div class="s_vimg">'."<img src=".$row1['p_image'] ." alt='Sorry!! No image found!' width='100%' height='100%'/>".'</div>';
					  	echo'</a>';
					  	echo'<br>';
					  	echo '<div class="detail_vimg">';
					  	echo'<div class="detail_varea">'."Area".'</div>'.'<div class="detail_areaan">'.$row["area"].'</div>';
					  	echo '<div class="detail_vcrp">'."No of crops".'</div>'.'<div class="detail_crpan">'.$row["no_of_crops"].'</div>';
					  	echo '<div class="detail_vdate">'."Seedling date".'</div>'.'<div class="detail_vdatean">'.$row["seed_date"].'</div>';
					  	echo'<a href="edit_cropdetails1.php?id='.$pid.'">';
						echo'<div class="detail_edit">'."<img src='images/text-editing.png' height='39vh' width='42vw' title='edit'/>".'</div>';
						echo "&nbsp&nbsp&nbsp";
						echo "</a>";
						
				 		if($row["sell_qty"]=="0")
				 		{	
				 			
								echo'<a href="ready_to_sell.php?id='.$pid.'">';
								echo'<div class="detail_ready">'."Ready to Sell".'</div>';
								echo "&nbsp&nbsp&nbsp";

								echo'</a>';
						}			

						echo'<a href="delete_cropdetails.php?id='.$pid.'">';
						echo'<div class="detail_delete">'."<img src='images/icon_trash-it.png' height='39vh' width='42vw' title='delete'/>".'</div>';
						echo'</a>'.'<br>';
						echo'</div>';
						echo'<hr>';
					}
				}
					 }
				}
				else
				{

					echo'<center>';
					echo "ALL";
					echo'</ center>'.'<br>'.'<hr>';
				    $qry1 = "select * from package where uid='".$id."' ";
				    $query1=mysql_query($qry1);
					while ($row1 = mysql_fetch_array($query1))
					 {
						$pid=$row1["id"];
					  	
					  	
						$qry2 = "select * from crop_items where uid='".$id1."' and pid='".$pid."'";
				    $query2=mysql_query($qry2);
				 
				 if(mysql_num_rows($query2)>0)
				 	{
					while ($row = mysql_fetch_array($query2))
					 {
						 echo'<div class="main_vimg">';
						 echo'<a href="?id='.$pid.'">';
					  	echo '<div class="s_vimg">'."<img src=".$row1['p_image'] ." alt='Sorry!! No image found!' width='100%' height='100%'/>".'</div>';
					  	echo'</a>';
					  	echo'<br>';
					  	echo '<div class="detail_vimg">';
					  	echo'<div class="detail_varea">'."Area".'</div>'.'<div class="detail_areaan">'.$row["area"].'</div>';
					  	echo '<div class="detail_vcrp">'."No of crops".'</div>'.'<div class="detail_crpan">'.$row["no_of_crops"].'</div>';
					  	echo '<div class="detail_vdate">'."Seedling date".'</div>'.'<div class="detail_vdatean">'.$row["seed_date"].'</div>';
					  	echo'<a href="edit_cropdetails1.php?id='.$pid.'">';
						echo'<div class="detail_edit">'."<img src='images/text-editing.png' height='39vh' width='42vw' title='edit'/>".'</div>';
						echo "&nbsp&nbsp&nbsp";
						echo "</a>";
						
				 		if($row["sell_qty"]=="0")
				 		{	
				 			
								echo'<a href="ready_to_sell.php?id='.$pid.'">';
								echo'<div class="detail_ready">'."Ready to Sell".'</div>';
								echo "&nbsp&nbsp&nbsp";

								echo'</a>';
						}			

						echo'<a href="delete_cropdetails.php?id='.$pid.'">';
						echo'<div class="detail_delete">'."<img src='images/icon_trash-it.png' height='39vh' width='42vw' title='delete'/>".'</div>';
						echo'</a>'.'<br>';
						echo'</div>';
						echo'<hr>';
					 }
					}
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
}
   
?>
</div>
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
                   



