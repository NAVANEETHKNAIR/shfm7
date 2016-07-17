<?php
  
//echo $id;
include_once "forgot_password.html";
 
if(isset($_POST["act"])and($_POST["act"]=="register"))
{
	
		//$mob=$_COOKIE['mob'];
		//echo $mob;
	try
	{
		$user_name=$_POST["user_name"];
		$device_id=$_POST["device_id"];
		$pass=$_POST["password"];
		$re_pass=$_POST["re_password"];
		
		//echo $_COOKIE['mob'];
		if(!isset($user_name{3}) or trim($user_name) == " ")
		throw new Exception("Please Enter the User name");
		if(!isset($device_id{3}) or trim($device_id) == " ")
		throw new Exception("Please Enter the Device id");
		if(!isset($pass{5}) or trim($pass) == " ")
		throw new Exception("Please Enter the Password");
		if(!isset($re_pass{5}) or trim($re_pass) == " ")
		throw new Exception("Please Re-Enter the Password");
		$con=mysql_connect("localhost","root","password");
		if(!$con)
		{
			echo "can't connect to the server";
			exit;
		}
		else
		{
			mysql_select_db("SHFM",$con);
			if($pass==$re_pass)
			{

				$qry="SELECT * FROM users WHERE  user_name='$user_name'AND identification_no='$device_id' limit 1" ; 
					$sql=mysql_query($qry);	

				  		while($row=mysql_fetch_array($sql))
				  		{
				  			$idd=$row["id"];

				  			$qr="UPDATE users SET password='".md5($pass)."' WHERE id='".$idd."'	";
					  			$s=mysql_query($qr);
								//if($s)
								if($s === TRUE)
								{		
										echo "successfully updated....";
										echo '<script type="text/javascript">';
						 				echo 'window.alert("You are Successfully updated...");';
										echo 'document.location.href="login.html"';
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