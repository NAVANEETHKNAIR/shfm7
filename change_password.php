<?php
  
//echo $id;
include_once "change_password.html";
 if($_COOKIE['mob'])
  	{}
	else
  	{
  		header("location:index.php");
  	}

if(isset($_POST["act"])and($_POST["act"]=="register"))
{
	
		$mob=$_COOKIE['mob'];
		//echo $mob;
	try
	{
		$cur_pass=$_POST["current_password"];
		$new_pass=$_POST["new_password"];
		$re_pass=$_POST["re_password"];
		
		//echo $_COOKIE['mob'];
		if(!isset($cur_pass{3}) or trim($cur_pass) == " ")
		throw new Exception("Please Enter the Current Password");
		if(!isset($new_pass{3}) or trim($new_pass) == " ")
		throw new Exception("Please Enter the New Password");
		if(!isset($re_pass{5}) or trim($re_pass) == " ")
		throw new Exception("Please Re enter the Password");
		
		$con=mysql_connect("localhost","root","password");
		if(!$con)
		{
			echo "can't connect to the server";
			exit;
		}
		else
		{
			mysql_select_db("SHFM",$con);
			if($new_pass==$re_pass)
			{

				$qry="SELECT id,password,category FROM users WHERE  mob_no='".$mob."' limit 1" ; 
					$sql=mysql_query($qry);	

				  		while($row=mysql_fetch_array($sql))
				  		{
							$p=$row["password"];
							$id=$row["id"];
							$cat=$row["category"];
							//echo $cat;
								
							if($p==md5($cur_pass))
							{


								$qry="UPDATE users SET password='".md5($new_pass)."' WHERE id='".$id."'	";
					  			$s=mysql_query($qry);
								//if($s)
								if($s === TRUE)
								{		
										if($cat=="farmer")
										{
				 						  echo '<script type="text/javascript">';
				 					      echo 'window.alert("successfully updated.");';
									      echo 'document.location.href="personal_data.php"';
									      echo '</script>';
									    }
									    else if($cat=="officer")
									    {
									      echo '<script type="text/javascript">';
				 					      echo 'window.alert("successfully updated.");';
									      echo 'document.location.href="personal_officer_data.php"';
									      echo '</script>';	
									    }
									    else
									    {
									      echo '<script type="text/javascript">';
				 					      echo 'window.alert("successfully updated.");';
									      echo 'document.location.href="personal_data.php"';
									      echo '</script>';
									    }

					
								}
								
							}


							else
							{
								echo '<script type="text/javascript">';
				 					      echo 'window.alert("Error: try again.");';
									      echo 'document.location.href="change_password.php"';
									      echo '</script>';
								//echo" your current password is not correct";
							}
}
			}else
			{
			 echo '<script type="text/javascript">';
 					      echo 'window.alert("Error: password mismatch.");';
					      echo 'document.location.href="change_password.php"';
					      echo '</script>';

			//echo "password mismatch";
			}
		}
	}
	
	catch(Exception $e)
	{
		echo $e->getmessage();
	}



}
?>
