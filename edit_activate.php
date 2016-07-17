<?php

	//include_once "login.html";
	

	// Create connection
	$con = mysql_connect("localhost","root","password");
	$idf=$_GET['id'];

	// Check connection
	if (!$con) 
        {

		echo"cannot connect to the server";
		exit;
	}
	else
	{
		mysql_select_db("SHFM",$con);
		
			$name=$row["user_name"];

			$q="UPDATE users SET status='1' WHERE id='$idf' ";
			$s=mysql_query($q);
			//echo $q;
			if($s)
			{
				//echo "succeessfully activated";
				echo '<script type="text/javascript">';
				echo 'window.alert("You are Successfully Activated....");';
				echo 'document.location.href="admin_dashboard.php"';
				echo '</script>';
			}
		
	}
?>