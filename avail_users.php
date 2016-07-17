<?php

	//include_once "login.html";
	

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
		if(isset($_COOKIE['mob']))
		{	
			echo '<a href="logout.php">Logout</a>';
			echo "&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp";
			echo '<a href="admin_dashboard.php">Back</a>';
			

			echo "<br>";
			$mob=$_COOKIE['mob'];
			$q="SELECT * FROM users WHERE status='1' AND category <>'admin' order by id DESC";
			$r=mysql_query($q);
			while($row=mysql_fetch_array($r))
			{
				$user_name=$row["user_name"];
				$idf=$row["id"];

				echo "Name  :" .$user_name. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ";
				
						
				echo "<a href=edit_deactivate.php?id=$idf>De-Activate</a>";
				echo "<br>";
			}
		}
	}
?>