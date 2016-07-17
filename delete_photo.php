<?php

if($_COOKIE['mob']  && $_COOKIE['category']=="farmer")
  	{}
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
		       mysql_select_db("SHFM",$con);
			echo $_GET['id'];
	if($_GET['id'])
	{
		 	
					
					$qry="update users set photo = null WHERE id='".$_GET['id']."'";
		$sql=mysql_query($qry);	
		if($sql)
		{

		

		 echo '<script type="text/javascript">';
		 echo 'window.alert(" successfully deleted");';
		echo 'document.location.href="personal_data.php"';
		echo '</script>';
		}
						 					     
	}
	else{


		 echo '<script type="text/javascript">';
		 echo 'window.alert(" try again");';
		echo 'document.location.href="personal_data.php"';
		echo '</script>';
	}
}

?>