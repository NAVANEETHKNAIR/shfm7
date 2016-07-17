<?php

$id=$_GET['id_q'];
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
					
					if(isset($_POST["act1"])and($_POST["act1"]=="register1"))
					{
						$a=$_POST["feedback"];
						$qry1 = "UPDATE enquiry SET feedback='$a' WHERE id='$id'";
                      $s=mysql_query($qry1);
                        if($s)
                        {
                          echo '<script type="text/javascript">';
                         echo 'window.alert(" Thank you for your feedback");';
                         echo 'document.location.href="enquiry.php"';
                         //echo'onClick="window.close()"';
                         echo '</script>';
                        }	

					}
			
		}	

	}



?>
