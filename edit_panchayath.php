
<?php
//include_once("edit.html");
	if($_COOKIE['mob']  && $_COOKIE['category']=="officer")
  	{}
	else
  	{
  		header("location:index.php");
  	}
  	if($_GET['id']){
        $id=$_GET['id'];
  	}
	$mob=$_COOKIE['mob'];
//echo $id;
	$con=mysql_connect("localhost","root","password");
	if(!$con)
	{
		echo "can't connect to the server";
		exit;
	}
	else
	{	
		mysql_select_db("SHFM",$con);	
		if(isset($_POST["act"])and($_POST["act"]=="register"))
		{
			try
			{
				$pan=$_POST["pamuco_name"];
				if(!isset($pan{3}) or trim($pan) == "")
				throw new Exception("Please Enter the Panchayath/Corporation/Municipality ");
			
		      
					//echo $mob;
					$id=$_GET['id'];
					if(isset($_POST['submit']))
					{
						$pan=$_POST['pamuco_name'];
						//$age=$_POST['age'];
						//$qry="update users set panchayath='$pan' where mob_no='$mob'";
						$qry="UPDATE users SET pamuco_name='".$pan."' WHERE mob_no='".$mob."'";
						//echo $qry;
						$query3=mysql_query($qry);

						//echo $query3;
						if($query3)
						{
							header('location:personal_officer_data.php');
						}
					}
				
			}
			catch(Exception $e)
			{
				echo $e->getmessage();
			}
		}

		$query1="select * from users where id='".$id."'";
		//echo $query1;
		$sql1=mysql_query($query1);
				//$query2=mysql_fetch_array($query1);
		while($row=mysql_fetch_array($sql1))
		{
			$pan1=$row["pamuco_name"];
			//echo $addr;
				
		}
		
		echo'<form method="post" action="">';
		echo'<textarea name="pamuco_name" >'.$pan1.'</textarea>';

		echo"<br>";
		echo'<input type="submit" name="submit" value="update" >';
		echo '<input type="hidden" name="act" value="register">';

		echo"</form>";

}
?>


 