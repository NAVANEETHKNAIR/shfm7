<?php
include_once "upload.html";
$mob=$_COOKIE['mob'];
if($_COOKIE['mob'])
  	{}
	else
  	{
  		header("location:index.php");
  	}
if(isset($_POST["act"])and($_POST["act"]=="register"))
{
	try
	{		
		$target_photo_dir = "photo/";		
		$target_photo_file = $target_photo_dir . basename($_FILES["photoToUpload"]["name"]);
		$temp_photo_name=$_FILES["photoToUpload"]["name"];
		$photouploadOk = 1;
		$photoFileType = pathinfo($target_photo_file,PATHINFO_EXTENSION);

		// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				$photo_check = getimagesize($_FILES["photoToUpload"]["tmp_name"]);

				
				if($photo_check !== false) 
				{
					echo "File is an image - " . $photo_check["mime"] . ".";
					$photouploadOk= 1;
				} 
				else 
				{
					echo "File is not an image.<br>";
					$photouploadOk = 0;
				}

				// Check if file already exists
				
				if (file_exists($target_photo_file)) 
				{
					//echo "<br>Sorry, file already exists.<br>";
					//$photouploadOk = 0;
					$s="photo/";
                            		$d=$photoFileType;
					$y=mt_rand(99,9999);
                            		$z= $s.$y.'.'.$d;
                            		$target_photo_file=$z;

				}
				// Check file size
				
				//if ($_FILES["photoToUpload"]["size"] > 500000)
				//{
					//echo "Sorry, your file is too large.<br>";
				//	$photouploadOk = 0;
				//}
				// Allow certain file formats
				
				if($photoFileType != "jpg" && $photoFileType != "png" && $photoFileType != "jpeg"
				&& $photoFileType != "gif" ) 
				{
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
					$photouploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				
				if ($photouploadOk == 0) 
				{
					echo "Sorry, your photo was not uploaded."."<br>";
					// if everything is ok, try to upload file
				}
			   	else 
				{
					if (move_uploaded_file($_FILES["photoToUpload"]["tmp_name"], $target_photo_file)) 
					{
						echo "The file ". basename( $_FILES["photoToUpload"]["name"]). " has been uploaded in folder.";
					} 
					else 
					{
						echo "Sorry, there was an error uploading your photo.";
					}
				}
				
			}
// DB connection...
				$x = mysql_connect("localhost","root","password");
				if(!$x)
				{
					echo"cannot connect to server";
					exit;
				}
				else
				{
						
					mysql_select_db("SHFM",$x);
					$qrys = "UPDATE users SET photo='".$target_photo_file."' WHERE mob_no='".$mob."'";

					$s=mysql_query($qrys) or die("error in $query_upload == ----> ".mysql_error());
					if($s)
					{
						echo '<script type="text/javascript">';
								echo 'window.alert("successfully uploaded your photo...");';
								echo 'document.location.href="personal_data.php"';
								echo '</script>';

					} 		
				}
	}	
	catch(Exception $e)
	{
		echo $e->getmessage();
	}
	
}
?>
