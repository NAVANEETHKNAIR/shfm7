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
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->

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
<center><div class="inside">
<form method="POST" action="create_events.php" enctype="multipart/form-data">

<marquee><font  color="green"><b> <blink>New Event Creation... New Event Creation... New Event Creation... New Event Creation...            New Event Creation... </blink></b></font></marquee>     
<p><br>
 <input type="text" name="topic" placeholder="Topic" autocomplete="off" required><br><br>
&nbsp;&nbsp;&nbsp;<textarea name="description" placeholder="Description"required>
</textarea><br><br>
<input type="text" name= "date"id="datepicker" placeholder="Starting Date" autocomplete="off"><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)">

<p align="center">

 <img id="output" width="150" height="90"/>
					<script>
  					var loadFile = function(event) {
    				var output = document.getElementById('output');
    				output.src = URL.createObjectURL(event.target.files[0]);
  					};
					</script>
					</p> 
<br>
  <input type="image" src="images/submit.png" alt="Submit" title="Submit" width="200" height="30"><br>
<input type="hidden" name="act" value="register"><br>

				<br>
</p>


<?php
	//include_once "create_events.html";
	if($_COOKIE['mob']  && $_COOKIE['category']=="officer")
  	{}
	else
  	{
  		header("location:index.php");
  	}	
		        //echo "$mob";
	if(isset($_POST["act"])and($_POST["act"]=="register"))
	{
		try
		{
		    $target_article_dir = "article/";
			$target_article_file = $target_article_dir . basename($_FILES["fileToUpload"]["name"]);
			$temp_article_name=$_FILES["fileToUpload"]["name"];
			$articleuploadOk = 1;
			$articleFileType = pathinfo($target_article_file,PATHINFO_EXTENSION);

			
			if(isset($_POST["submit"])) 
			{
				$article_check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($article_check !== false) 
				{
					//echo "File is an image - " . $article_check["mime"] . ".";
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
					$s="article/";
                            		$d=$articleFileType;
					$y=mt_rand(99,9999);
                            		$z= $s.$y.'.'.$d;
                            		$target_article_file=$z;
					//ho "<br>Sorry, file already exists.<br>";
					//rticleuploadOk = 0;
				}
				if ($_FILES["fileToUpload"]["size"] > 500000)
				{
					echo "Sorry, your file is too large.<br>";
					$articleuploadOk = 0;
				}
				// Check file size
				// ($_FILES["fileToUpload"]["size"] > 500000)
				//
					//ho "Sorry, your file is too large.<br>";
					//rticleuploadOk = 0;
				//
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
						//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded in folder.";
					} 
					else 
					{
						echo "Sorry, there was an error uploading your file.";
					}
				}
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
			    	if(isset($_COOKIE['mob']))
			    	{	
			    		//echo "haiiiii im shafna";
			        	$mob=$_COOKIE['mob'];
						//echo $mob;
						
					    $topic=$_POST["topic"];
					    $description=$_POST["description"];
					    $start_date=$_POST["date"];
					                 
					    $st_date=date('Y-m-d', strtotime($start_date)); 
					    //CONVERT(varchar(10),$start_date,103);
					   // echo "hi".$st_date;
					    if(!isset($topic{3}) or trim($topic) == " ")
					    throw new Exception("Please Enter the Topic");
					    if(!isset($description{3}) or trim($description) == " ")
					    throw new Exception("Please Enter the Description");
					    $qry="SELECT * FROM users WHERE mob_no='$mob'";
					    $sql=mysql_query($qry);	
					    //echo $qry;
					    //echo "hiiiiiii";

				  		while($row=mysql_fetch_array($sql))
				  		{
							
							$id=$row["id"];
							$cat=$row["category"];
							//echo $cat;

						    $qrys = "INSERT INTO officer_events (topic,description,start_date,file,uid)VALUES ('".$topic."','".$description."','".$st_date."','".$target_article_file."','".$id."')  ";
						    //echo $qrys;
	//echo $qrys;			
							$s=mysql_query($qrys);
							if($s)
					    	{
					      		
								echo '<script type="text/javascript">';
								echo 'window.alert("You are Successfully Registered...");';
								echo 'document.location.href="officer_dashboard.php"';
								echo '</script>';
		
				        	}
				        	else
				        	{	
								echo '<script type="text/javascript">';
								echo 'window.alert("Try again...");';
								echo 'document.location.href="create_events.php"';
								echo '</script>';


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

</div></form></div>
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