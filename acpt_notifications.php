<?php

if($_COOKIE['mob']  && $_COOKIE['category']=="farmer")
  	{
  		
  	}
	else
  	{
  		header("location:index.php");
  	}
	$mob=$_COOKIE['mob'];
	//echo $mob; 
	$con=mysql_connect("localhost","root","password");
		if(!$con)
		{
			echo "can't connect to the server";
			exit;
		}
		else
		{

			echo "hiii";
		       mysql_select_db("SHFM",$con);
			
                       if(isset($_GET['idd']))
  							{
								$gid= $_GET['uid'];
								setcookie("idd",$gid,time()+3600);
	                             echo $gid;
		                      }	
							
	
echo '<script type="text/javascript">';
		 echo 'window.alert("You are Successfully Accepted");';
		echo 'document.location.href="req_notifications.php"';
		echo '</script>';

	 
	}


?>