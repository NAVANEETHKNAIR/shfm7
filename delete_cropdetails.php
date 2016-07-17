<?php
echo"haiiiiiiiii";
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
		 $qr = "SELECT * FROM crop_items WHERE pid='".$_GET['id']."'"; 
					       $results = mysql_query($qr);
					      
					       while($row=mysql_fetch_array($results))
					       {
					$crop_id=$row['id'];		
					$qry="DELETE FROM crop_items WHERE pid='".$_GET['id']."'"; 
		$sql=mysql_query($qry);	
		if($sql)
		{

		$qry1="DELETE FROM device WHERE crop_id='".$crop_id."' "; echo"delete".$qry1;
		$sql1=mysql_query($qry1);	

		 echo '<script type="text/javascript">';
		 echo 'window.alert(" successfully deleted");';
		echo 'document.location.href="view_cropdetails.php"';
		echo '</script>';
		}
						 					     
	}
	}
	else{


		 echo '<script type="text/javascript">';
		 echo 'window.alert(" try again");';
		echo 'document.location.href="view_cropdetails.php"';
		echo '</script>';
	}
}

?>