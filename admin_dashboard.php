<?php

	include_once "admin_dashboard.html";
	

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
			$mob=$_COOKIE['mob'];
			$qry= "SELECT * FROM users WHERE status='0' order by id";
			$q=mysql_query($qry);
			while($row=mysql_fetch_array($q))
			{
				$user_name=$row["user_name"];
				$idf=$row["id"];

				echo "Name  :" .$user_name. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ";
				
						
				echo "<a href=edit_activate.php?id=$idf>Activate</a>";
				echo "<br>";
			}
		}
	}
?>