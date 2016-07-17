
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

              <a  href="personal_customer_data.php">
         <img src="images/back1.png" width="50" height="50" title="previous Page" >
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
  
//echo $id;
include_once "change_password_customer.html";
 if($_COOKIE['mob'])
  	{}
	else
  	{
  		header("location:index.php");
  	}

if(isset($_POST["act"])and($_POST["act"]=="register"))
{
	
		$mob=$_COOKIE['mob'];
		//echo $mob;
	try
	{
		$cur_pass=$_POST["current_password"];
		$new_pass=$_POST["new_password"];
		$re_pass=$_POST["re_password"];
		
		//echo $_COOKIE['mob'];
		if(!isset($cur_pass{3}) or trim($cur_pass) == " ")
		throw new Exception("Please Enter the Current Password");
		if(!isset($new_pass{3}) or trim($new_pass) == " ")
		throw new Exception("Please Enter the New Password");
		if(!isset($re_pass{5}) or trim($re_pass) == " ")
		throw new Exception("Please Re enter the Password");
		
		$con=mysql_connect("localhost","root","password");
		if(!$con)
		{
			echo "can't connect to the server";
			exit;
		}
		else
		{
			mysql_select_db("SHFM",$con);
			if($new_pass==$re_pass)
			{

				$qry="SELECT id,password,category FROM users WHERE  mob_no='".$mob."' limit 1" ; 
					$sql=mysql_query($qry);	

				  		while($row=mysql_fetch_array($sql))
				  		{
							$p=$row["password"];
							$id=$row["id"];
							$cat=$row["category"];
							//echo $cat;
								
							if($p==md5($cur_pass))
							{


								$qry="UPDATE users SET password='".md5($new_pass)."' WHERE id='".$id."'	";
					  			$s=mysql_query($qry);
								//if($s)
								if($s === TRUE)
								{		
										if($cat=="farmer")
										{
				 						  echo '<script type="text/javascript">';
				 					      echo 'window.alert("successfully updated.");';
									      echo 'document.location.href="personal_data.php"';
									      echo '</script>';
									    }
									    else if($cat=="officer")
									    {
									      echo '<script type="text/javascript">';
				 					      echo 'window.alert("successfully updated.");';
									      echo 'document.location.href="personal_officer_data.php"';
									      echo '</script>';	
									    }
									    else
									    {
									      echo '<script type="text/javascript">';
				 					      echo 'window.alert("successfully updated.");';
									      echo 'document.location.href="personal_customer_data.php"';
									      echo '</script>';
									    }

					
								}
								
							}


							else
							{
								echo '<script type="text/javascript">';
				 					      echo 'window.alert("Error: try again.");';
									      echo 'document.location.href="change_password_customer.php"';
									      echo '</script>';
								//echo" your current password is not correct";
							}
}
			}else
			{
			 echo '<script type="text/javascript">';
 					      echo 'window.alert("Error: password mismatch.");';
					      echo 'document.location.href="change_password_customer.php"';
					      echo '</script>';

			//echo "password mismatch";
			}
		}
	}
	
	catch(Exception $e)
	{
		echo $e->getmessage();
	}



}
?>
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
              
