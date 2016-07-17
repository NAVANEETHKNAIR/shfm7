<?php
	include_once("edit_panchayath.html");
	if($_COOKIE['mob']  && $_COOKIE['category']=="officer")
  	{}
	else
  	{
  		header("location:index.php");
  	}
        $id=$_GET['id'];
	$mob=$_COOKIE['mob'];
//echo $id;
	if(isset($_POST["act"])and($_POST["act"]=="register"))
	{
		try
		{
			 $district=$_POST["district"];
		     $panchayath=$_POST["panchayath"];
			 $servername = "localhost";
			 $username = "root";
			 $password = "password";
			 $con = mysql_connect($servername, $username, $password);
			if(!$con)
			{
			echo "can't connect to the server";
			exit;
			}
			else
			{
				mysql_select_db("SHFM",$con);

				
				$qrys = "UPDATE users SET district='$district', panchayath ='$panchayath' WHERE mob_no='$mob' " ;
				$s=mysql_query($qrys);
				//echo $qrys;
				//echo $id;
				if($s)
				{
					echo '<script type="text/javascript">';
	 				echo 'window.alert(" Succesfully updated...");';
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

