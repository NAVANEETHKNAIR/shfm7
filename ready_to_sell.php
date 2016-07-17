<?php

	include_once "ready_to_sell.html";
	if (isset($_GET["id"]))
	{
		$gid=$_GET["id"];
	setcookie("gidd",$gid,time()+3600);
	
	}
	if($_COOKIE['mob'])
		{}
		else
		{
			header("location:index.php");
		}
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
			
			$mob=$_COOKIE['mob'];
			
			if(isset($_POST["act"])and($_POST["act"]=="register"))
		         {
		              try
		              	{
		              $target_article_dir = "capture/";
					$target_article_file = $target_article_dir . basename($_FILES["fileToUpload"]["name"]);
					$temp_article_name=$_FILES["fileToUpload"]["name"];
					$articleuploadOk = 1;
					$articleFileType = pathinfo($target_article_file,PATHINFO_EXTENSION);

					
					if(isset($_POST["submit"])) 
					{
						$article_check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($article_check !== false) 
						{
							//echo "File is an image - " . $article_check["mime"] . ".";
							$articleuploadOk = 1;
						} 
						else 
						{
							echo "File is not an image.";
							$articleuploadOk = 0;
						}
						// Check if file already exists
						if (file_exists($target_article_file)) 
						{
							$s="capture/";
		                            		$d=$articleFileType;
							$y=mt_rand(99,9999);
		                            		$z= $s.$y.'.'.$d;
		                            		$target_article_file=$z;
							//ho "<br>Sorry, file already exists.<br>";
							//rticleuploadOk = 0;
						}
						if ($_FILES["fileToUpload"]["size"] > 500000)
						{
							echo "Sorry, your file is too large.<br>";
							$articleuploadOk = 0;
						}
						// Check file size
						// ($_FILES["fileToUpload"]["size"] > 500000)
						//
							//ho "Sorry, your file is too large.<br>";
							//rticleuploadOk = 0;
						//
						// Allow certain file formats
						if($articleFileType != "jpg" && $articleFileType != "png" && $articleFileType != "jpeg"
									&& $articleFileType != "gif" ) 
						{
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
							$articleuploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($articleuploadOk == 0) 
						{
							echo "Sorry, your file was not uploaded."."<br>";
							// if everything is ok, try to upload file
						} 
						else 
						{
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_article_file)) 
							{
								//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded in folder.";
							} 
							else 
							{
								echo '<script type="text/javascript">';
								echo 'window.alert("Sorry, there was an error uploading your file....");';
								//echo 'document.location.href="officer_dashboard.php"';
								echo '</script>';
								
							}
						}
					}
				
		                 $sell_qnty=$_POST["sell_quantity"];
		                 $total_qnty=$_POST["total_quantity"];
		                 $date=$_POST["date"];
		                 if(!isset($sell_qnty{1}) or trim($sell_qnty) == " ")
		                 throw new Exception("Please Enter the quantity which you wish to sell");
		                 if(!isset($total_qnty{1}) or trim($total_qnty) == " ")
		                 throw new Exception("Please Enter the Total quantity");
		             	 if(!isset($date{1}) or trim($date) == " ")
		                 throw new Exception("Please Enter the Date");
		             	 $gidf=$_COOKIE['gidd'];
		             	 $st_date=date('Y-m-d', strtotime($date)); 
		             	
		             	 $qr = "SELECT * FROM users WHERE mob_no='$mob'"; 
					       $results = mysql_query($qr);
					      
					       while($row=mysql_fetch_array($results))
					       {
					       		$idd=$row["id"];
					       		$q = "SELECT * FROM crop_items WHERE uid='$idd' and pid='$gidf'";
					       		$result = mysql_query($q);
					       	
					       		while($row=mysql_fetch_array($result))
					       		{	
					       			$qrr="UPDATE crop_items SET total_qty='".$total_qnty."',sell_qty='".$sell_qnty."',willing_date='".$st_date."',capture_image='". $target_article_file."' WHERE pid='".$gidf."'";

			      			$s=mysql_query($qrr);
						      			if($s)
						       			{
						       				echo '<script type="text/javascript">';
								echo 'window.alert("You are Successfully updated...");';
								echo 'document.location.href="view_cropdetails.php"';
								echo '</script>';

						       			}
						       			else
						       			{
						       				echo '<script type="text/javascript">';
								echo 'window.alert("Sorry try again...");';
								//echo 'document.location.href="officer_dashboard.php"';
								echo '</script>';
						       			}


					       		}




					       }
					    }
					    catch(Exception $e)
						{
							echo $e->getmessage();
						}

   }
}

		
?>


