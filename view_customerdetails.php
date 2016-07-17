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

	include_once "view_customerdetails.html";
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
						echo '<div class="cat_name">';
					echo "VEGETABLES";
					echo '</div>';
					echo'</ center>'.'<br>';
					
					$qry1 = "select * from package where uid='".$id."' and p_category='".$category."' ";
				    $query1=mysql_query($qry1);
				    //echo $qry1;
				    	 echo '<div class="comp">';
						while ($row1 = mysql_fetch_array($query1))
						 {
							$p_name=$row1["p_name"];
							$pid=$row1['id'];
						  	
							$qry2 = "select * from cust_request where uid='".$id1."' and item_name='".$p_name."'";
					    $query2=mysql_query($qry2);
					    //echo $qry2;
					
					 if(mysql_num_rows($query2)>0)
					 	{
				 		
						while ($row = mysql_fetch_array($query2))
						 {
						 	echo '<div class="display_item">';
						 	$cut_id=$row['id'];
						 	$need_date=$row['need_date'];
						 	$st_date=date('d-m-Y', strtotime($need_date));
						 	mysql_query("DELETE FROM cust_request WHERE need_date < date('Y-m-d')");
						 	
							echo'<a href="?id='.$pid.'">';
						  	echo "<img src=".$row1['p_image'] ." alt='Sorry!! No image found!' width='150' height='150'/>";
						  	echo'</a>';
							echo'<br>';
						  	echo $row["quantity"];echo'<br>';
						  	
						  	echo $st_date;echo'<br>';
						  	echo'<a href="edit_customerdetails1.php?id='.$cut_id.'">';
							//echo"edit";
							echo "<input type='image' src='images/edit.png' alt='Edit' width='35' height='35'>";
							echo'</a>';
							echo'<br>';
							echo'<a href="delete_customerdetails.php?id='.$cut_id.'">';
							echo"delete";
							echo'</a>';
							echo'<br>';
							echo'<a href="match_list.php?id='.$cut_id.'">';
							echo"Requrements matches list";
							
							echo'</a>'.'<br>';
							echo'<br>';
							echo '</div>';
						}
					
						}
						else if(@mysql_num_rows($query2)==0){
							echo '<div class="fnd">';
							echo '<center>';
							echo "No image found";
							echo '</center>';
							echo '</div>';
						}
						
					}
				echo '</div>';
			}
				else if($category=='fruits')
				{
					echo'<center>';
					echo '<div class="cat_name">';
			echo "FRUITS";
			echo '</div>';
			echo'</ center>'.'<br>';

				    $qry1 = "select * from package where uid='".$id."' and p_category='".$category."' ";
				    $query1=mysql_query($qry1);
				    
				  //echo $qry1;
				   echo '<div class="comp">';
						while ($row1 = mysql_fetch_array($query1))
						 {
							$p_name=$row1["p_name"];
							$pid=$row1['id'];
							$pcategory=$row1['p_category'];
						  	
							$qry2 = "select * from cust_request where uid='".$id1."' and item_name='".$p_name."'";
					    $query2=mysql_query($qry2);
					    //echo $qry2;

					 
					 if(mysql_num_rows($query2)>0)
					 	{
						while ($row = mysql_fetch_array($query2))
						 {
						 	echo '<div class="display_item">';
						 	$cut_id=$row['id'];
							 echo'<a href="?id='.$pid.'">';
						  	echo "<img src=".$row1['p_image'] ." alt='Sorry!! No image found!' width='150' height='150'/>";
						  	echo'</a>';
							echo'<br>';
						  	echo $row["quantity"];echo'<br>';
						  	
						  	echo $row["need_date"];echo'<br>';
						  	echo'<a href="edit_customerdetails1.php?id='.$cut_id.'">';
							//echo"edit";
							echo "<input type='image' src='images/edit.png' alt='Edit' width='35' height='35'>";
							echo'</a>';
							echo'<br>';
							echo'<a href="delete_customerdetails.php?id='.$cut_id.'">';
							echo"delete";
							echo'</a>';
							echo'<br>';
							echo'<a href="match_list.php?id='.$cut_id.'">';
							echo"Requrements matches list";
							
							echo'</a>'.'<br>';
							echo'<br>';
							echo '</div>';
						}
						}
						else if(@mysql_num_rows($query2)==0)
						{
							
							echo '<div class="fnd">';
							echo '<center>';
							echo "No image found";
							echo '</center>';
							echo '</div>';
						}
						
					 }
					 echo '</div>';
					
				}
				else
				{

					echo'<center>';
					echo '<div class="cat_name">';
					echo "ALL";
					echo '</div>';
					echo'</ center>'.'<br>';
				    $qry1 = "select * from package where uid='".$id."' ";
				    $query1=mysql_query($qry1);
				    

				    
						while ($row1 = mysql_fetch_array($query1))
						 {
							$p_name=$row1["p_name"];
							$pid=$row1['id'];
						  	
							$qry2 = "select * from cust_request where uid='".$id1."' and item_name='".$p_name."'";
					    $query2=mysql_query($qry2);
					 echo '<div class="comp">';
					 if(mysql_num_rows($query2)>0)
					 	{
						while ($row = mysql_fetch_array($query2))
						 {
						 	echo '<div class="display_item">';
						 	$cut_id=$row['id'];
							 echo'<a href="?id='.$pid.'">';
						  	echo "<img src=".$row1['p_image'] ." alt='Sorry!! No image found!' width='150' height='150'/>";
						  	echo'</a>';
							echo'<br>';
						  	echo $row["quantity"];echo'<br>';
						  	echo $row["need_date"];echo'<br>';
						  	echo'<a href="edit_customerdetails1.php?id='.$cut_id.'">';
							//echo"edit";
							echo "<input type='image' src='images/edit.png' alt='Edit' width='30' height='30' title='Edit'>";
							echo'</a>';
							echo '<br>';
							echo'<a href="delete_customerdetails.php?id='.$cut_id.'">';
							//echo"delete";
							echo "<input type='image' src='images/Delete2.png' alt='Delete' width='30' height='30' title='Delete'>";
							echo'</a>';
							echo '<br>';
							echo'<a href="match_list.php?id='.$cut_id.'">';
							//echo"Requrements matches list";
							echo "<input type='image' src='images/list1.png' alt='Requirement Match List' width='30' height='30' title='Requirement Match List'>";
							echo'</a>'.'<br>';
							echo '<br>';
							echo '</div>';
						 }
						}
						
						echo '</div>';
					 }
					
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
                   