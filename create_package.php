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
         
<form method="POST" action="create_package.php" enctype="multipart/form-data">

<marquee><font  color="green"><b> <blink>Package Creation...Package Creation...Package Creation...Package Creation...</blink></b></font></marquee>     
<p><br>


<select name="category" id="category"  required> <br/><br/><br>
<option disabled selected value>-- Select Category  --</option>
<option value="vegetables">Vegetable</option><br/><br>
<option value="fruits">Fruits</option><br/><br>
</select></br></br>
Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"  autocomplete="off" required>

<br><br>


Temperature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="temperature" autocomplete="off" required><br><br>
pH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pH" autocomplete="off" required><br><br>
Fertilizer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fertilizer" autocomplete="off" required><br><br>Moisture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="moisture" autocomplete="off" required><br><br>
<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)">

					<p align="center">
					<img id="output" width="150" height="90"/>
					<script>
  					var loadFile = function(event) {
    				var output = document.getElementById('output');
    				output.src = URL.createObjectURL(event.target.files[0]);
  					};
					</script>
					</p><br>
	<input type="image" src="images/submit.png" alt="Submit" title="Submit" width="200" height="30"></br>
    <input type = "hidden" name = "act" value = "register"> <br>
    
				<br>
    </form>


   


<?php
//include_once "create_package.html";
if($_COOKIE['mob']  && $_COOKIE['category']=="officer")
{}
else
{
  	header("location:index.php");
}	
		        
if(isset($_POST["act"])and($_POST["act"]=="register"))
{
	try
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
			if(isset($_COOKIE['mob']))
			{	
			   	//echo "haiiiii im shafna";
			    $mob=$_COOKIE['mob'];
				//echo $mob;
						
				$category=$_POST["category"];
				$name=$_POST["name"];
				$temperature=$_POST["temperature"];
				$pH=$_POST["pH"];
				$fertilizer=$_POST["fertilizer"];
				$moisture=$_POST["moisture"];  
				if(!isset($name{3}) or trim($name) == " ")
				throw new Exception("Please Enter the Name");
				if(!isset($temperature{2}) or trim($temperature) == " ")
				throw new Exception("Please Enter the Temperature");
				if(!isset($pH{1}) or trim($pH) == " ")
				throw new Exception("Please Enter the pH");
				if(!isset($fertilizer{2}) or trim($fertilizer) == " ")
				throw new Exception("Please Enter the Fertilizer");
				if(!isset($moisture{1}) or trim($moisture) == " ")
				throw new Exception("Please Enter the Moisture");

				if(isset($_POST["submit"])) 
				{	    
					if($category=='vegetables')
					{	
						echo $category;
							
			    		$target_article_dir = "vegetables/";
			    	
						$target_article_file = $target_article_dir . basename($_FILES["fileToUpload"]["name"]);
						$temp_article_name=$_FILES["fileToUpload"]["name"];
						$articleuploadOk = 1;
						$articleFileType = pathinfo($target_article_file,PATHINFO_EXTENSION);
						$article_check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($article_check !== false) 
						{
							echo "File is an image - " . $article_check["mime"] . ".";
							$articleuploadOk = 1;
						} 
						else 
						{
							echo "File is not an image.";
							$articleuploadOk = 0;
						}
						// Check if file already exists
						if (file_exists($target_article_file)) 
						{
							$s="vegetables/";
				            $d=$articleFileType;
							$y=mt_rand(99,9999);
				            $z= $s.$y.'.'.$d;
				            $target_article_file=$z;
									
						}
						if ($_FILES["fileToUpload"]["size"] > 500000)
						{
							echo "Sorry, your file is too large.<br>";
							$articleuploadOk = 0;
						}
								
						// Allow certain file formats
						if($articleFileType != "jpg" && $articleFileType != "png" && $articleFileType != "jpeg"
											&& $articleFileType != "gif" ) 
						{
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
							$articleuploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($articleuploadOk == 0) 
						{
							echo "Sorry, your file was not uploaded."."<br>";
							// if everything is ok, try to upload file
						} 
						else 
						{
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_article_file)) 
							{
								echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded in folder.";
							} 
							else 
							{
								echo "Sorry, there was an error uploading your file.";
							}
						}
						if($category=='vegetables')
						{
							$q="SELECT * FROM users WHERE mob_no='$mob' AND category='officer' ";
							$r=mysql_query($q);
							echo $q;
							while($row=mysql_fetch_array($r))
							{
								$idd=$row["id"];
								echo $idd;
							
							$qrys = "INSERT INTO package(uid,p_name,p_image,p_category,temperature,pH,fertilizer,moisture)VALUES ('".$idd."','".$name."','".$target_article_file."','".$category."','".$temperature."','".$pH."','".$fertilizer."','".$moisture."')  ";
							//echo $qrys;
							}
								    
							$s=mysql_query($qrys);
							if($s)
							{
								//echo "i'm thereeeeee";
								echo '<script type="text/javascript">';
								echo 'window.alert("You are Successfully Updated...");';
								echo 'document.location.href="officer_dashboard.php"';
								echo '</script>';
				
							}
							else
							{	
								echo '<script type="text/javascript">';
								echo 'window.alert("Try again...");';
								echo 'document.location.href="create_package.php"';
								echo '</script>';


							}
						}
						else
						{
							exit();
						}
					}
					else if($category=='fruits')
					{
						echo $category;
						$target_article_dir = "fruits/";
			    	
						$target_article_file = $target_article_dir . basename($_FILES["fileToUpload"]["name"]);
						$temp_article_name=$_FILES["fileToUpload"]["name"];
						$articleuploadOk = 1;
						$articleFileType = pathinfo($target_article_file,PATHINFO_EXTENSION);
						$article_check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($article_check !== false) 
						{
							echo "File is an image - " . $article_check["mime"] . ".";
							$articleuploadOk = 1;
						} 
						else 
						{
							echo "File is not an image.";
							$articleuploadOk = 0;
						}
						// Check if file already exists
						if (file_exists($target_article_file)) 
						{
							$s="fruits/";
				            $d=$articleFileType;
							$y=mt_rand(99,9999);
				            $z= $s.$y.'.'.$d;
				            $target_article_file=$z;
									
						}
						if ($_FILES["fileToUpload"]["size"] > 500000)
						{
							echo "Sorry, your file is too large.<br>";
							$articleuploadOk = 0;
						}
								
						// Allow certain file formats
						if($articleFileType != "jpg" && $articleFileType != "png" && $articleFileType != "jpeg"
											&& $articleFileType != "gif" ) 
						{
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
							$articleuploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($articleuploadOk == 0) 
						{
							echo "Sorry, your file was not uploaded."."<br>";
							// if everything is ok, try to upload file
						} 
						else 
						{
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_article_file)) 
							{
								echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded in folder.";
							} 
							else 
							{
								echo "Sorry, there was an error uploading your file.";
							}
						}
					}
					
					
					if($category=='fruits')	
					{		
						$q="SELECT * FROM users WHERE mob_no='$mob' AND category='officer' ";
							$r=mysql_query($q);
							while($row=mysql_fetch_array($r))
							{
								$idd=$row["id"];
								//echo $idd;
							
							$qrys = "INSERT INTO package(uid,p_name,p_image,p_category,temperature,pH,fertilizer,moisture)VALUES ('".$idd."','".$name."','".$target_article_file."','".$category."','".$temperature."','".$pH."','".$fertilizer."','".$moisture."')  ";
							}
							//echo $qrys;
						//echo $qrys;
								    
						$s=mysql_query($qrys);
						if($s)
						{
							//echo "i'm thereeeeee";
							echo '<script type="text/javascript">';
							echo 'window.alert("You are Successfully Updated...");';
							echo 'document.location.href="officer_dashboard.php"';
							echo '</script>';
				
						}
						else
						{	
							echo '<script type="text/javascript">';
							echo 'window.alert("Try again...");';
							echo 'document.location.href="create_package.php"';
							echo '</script>';


						}
					}
					else
					{
						exit();
					}
				}
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