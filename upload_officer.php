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
<br>
              <a  href="personal_officer_data.php">
         <img src="assets/img/back1.png" width="50" height="50" title="previous Page" >
         </a>
        
                <br></li>
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
<div class="photo">
<br><br><br><br>

<font color="yellow" size="3">
<form action="upload_officer.php" method="post" enctype="multipart/form-data">
    Select image to upload:
   

    <input type="file" name="photoToUpload" id="photoToUpload" accept="image/*" onchange="loadFile(event)">



              <p align="center">
            <img id="output" width="150" height="130" />
            <script>
            var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
          </script>
          </p> 
          <center>
    <input type="submit" value="Upload" name="submit">
    <input type = "hidden" name = "act" value = "register"> <br>
    </center>
</form>
</font>
</div>
<?php
//include_once "upload.html";
$mob=$_COOKIE['mob'];
if($_COOKIE['mob'])
  	{}
	else
  	{
  		header("location:index.php");
  	}
if(isset($_POST["act"])and($_POST["act"]=="register"))
{
	try
	{		
		$target_photo_dir = "photo/";		
		$target_photo_file = $target_photo_dir . basename($_FILES["photoToUpload"]["name"]);
		$temp_photo_name=$_FILES["photoToUpload"]["name"];
		$photouploadOk = 1;
		$photoFileType = pathinfo($target_photo_file,PATHINFO_EXTENSION);

		// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				$photo_check = getimagesize($_FILES["photoToUpload"]["tmp_name"]);

				
				if($photo_check !== false) 
				{
					//echo "File is an image - " . $photo_check["mime"] . ".";
					$photouploadOk= 1;
				} 
				else 
				{
					echo "File is not an image.<br>";
					$photouploadOk = 0;
				}

				// Check if file already exists
				
				if (file_exists($target_photo_file)) 
				{
					//echo "<br>Sorry, file already exists.<br>";
					//$photouploadOk = 0;
					$s="photo/";
                            		$d=$photoFileType;
					$y=mt_rand(99,9999);
                            		$z= $s.$y.'.'.$d;
                            		$target_photo_file=$z;

				}
				// Check file size
				
				//if ($_FILES["photoToUpload"]["size"] > 500000)
				//{
					//echo "Sorry, your file is too large.<br>";
				//	$photouploadOk = 0;
				//}
				// Allow certain file formats
				
				if($photoFileType != "jpg" && $photoFileType != "png" && $photoFileType != "jpeg"
				&& $photoFileType != "gif" ) 
				{
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
					$photouploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				
				if ($photouploadOk == 0) 
				{
					echo "Sorry, your photo was not uploaded."."<br>";
					// if everything is ok, try to upload file
				}
			   	else 
				{
					if (move_uploaded_file($_FILES["photoToUpload"]["tmp_name"], $target_photo_file)) 
					{
						//echo "The file ". basename( $_FILES["photoToUpload"]["name"]). " has been uploaded in folder.";
					} 
					else 
					{
						echo "Sorry, there was an error uploading your photo.";
					}
				}
				
			}
// DB connection...
				$x = mysql_connect("localhost","root","password");
				if(!$x)
				{
					echo"cannot connect to server";
					exit;
				}
				else
				{
						
					mysql_select_db("SHFM",$x);
					$qrys = "UPDATE users SET photo='".$target_photo_file."' WHERE mob_no='".$mob."'";

					$s=mysql_query($qrys) or die("error in $query_upload == ----> ".mysql_error());
					if($s)
					{
						echo '<script type="text/javascript">';
								echo 'window.alert("successfully uploaded your photo...");';
								echo 'document.location.href="personal_officer_data.php"';
								echo '</script>';

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