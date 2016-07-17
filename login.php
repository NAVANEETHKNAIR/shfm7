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
		$mob=$_COOKIE['mob'];
echo"me hoooooooo";
		$qry = "SELECT mob_no,category FROM users WHERE mob_no = '".$mob."' limit 1";
		echo $qry;
		$results = mysql_query($qry);
			
		while($row=mysql_fetch_array($results))
		{

			$category=$row["category"];
			echo $category;
			if($category=="farmer")
			{
				header("location:farmer_dashboard.php");
			}
			else if($category=="officer")
			{
				header("location:officer_dashboard.php");
			}
			else if($category=="customer") {

				header("location:customer_dashboard.php");
			    }
			   else if($category=="admin") {

				header("location:admin_dashboard.php");
			    }

		}

	}


		if(isset($_POST["act"])and($_POST["act"]=="register"))
		{
			try
				{
					$user_name = $_POST["user_name"];
					$pass = $_POST["password"];
					if(!isset($user_name{3}) or trim($user_name) == " ")
					throw new Exception("please enter the name");
					if(!isset($pass{4}) or trim($pass) == " ")
					throw new Exception("please enter the password");
					$qry="SELECT user_name,password FROM users WHERE user_name='".$user_name."'AND password='".md5($pass)."'  AND status='1' "; 
					$sql=mysql_query($qry);
					//echo $qry;
					if(mysql_num_rows($sql)>0)
				 	{	

				  		while($row=mysql_fetch_array($sql))
				  		{
							$qry1="SELECT mob_no,category FROM users WHERE user_name='".$user_name."' and password='".md5($pass)."'";
							$sql1=mysql_query($qry1);
		
							while($row=mysql_fetch_array($sql1))
							{	
		
								if($row["category"]=="farmer")
								{
	
									
									$mob=$row["mob_no"];
									$category=$row["category"];
									setcookie("mob",$mob,time()+3600);
									setcookie("category",$category,time()+3600);

									header("location:farmer_dashboard.php");
								}
								else if($row["category"]=="officer"){
								$mob=$row["mob_no"];
								$category=$row["category"];
								setcookie("mob",$mob,time()+3600);
								setcookie("category",$category,time()+3600);

								header("location:officer_dashboard.php");}
								else if($row["category"]=="customer"){
								$mob=$row["mob_no"];
								$category=$row["category"];
								setcookie("category",$category,time()+3600);

								setcookie("mob",$mob,time()+3600);
								header("location:customer_dashboard.php");}
								else if($row["category"]=="admin"){
								$mob=$row["mob_no"];
								$category=$row["category"];
								setcookie("category",$category,time()+3600);

								setcookie("mob",$mob,time()+3600);
								header("location:admin_dashboard.php");}


							}
						}
					}
					else
					{
						
						echo '<script type="text/javascript">';
	 					echo 'window.alert("Error:Invalid username and password..");';
						echo 'document.location.href="login.html"';
						echo '</script>';
					}
			

		
				}
			
				catch(Exception $e)
				{
					echo $e->getmessage();
				}
			

		}	
	}



?>
