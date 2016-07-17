<?php
include_once "index1.html";

		$con=mysql_connect("localhost","root","password");
		if(!$con)
		{
			echo "can't connect to the server";
			exit;
		}
		else
		{
		       mysql_select_db("SHFM",$con);
		       if(isset($_COOKIE['mob']))
		       {	
		               $mob=$_COOKIE['mob'];

		               $qry = "SELECT mob_no,category FROM users WHERE mob_no = '".$mob."' limit 1";
		               //echo $qry;
		               $results = mysql_query($qry);
			
		               while($row=mysql_fetch_array($results))
		               {

				           $category=$row["category"];
				           //echo $category;
				           if($category=="farmer")
				           {
					         header("location:farmer_dashboard.php");
				           }
				           else if($category=="officer")
				           {
					         header("location:officer_dashboard.php");
				           }
				           else
				           {

					         header("location:customer_dashboard.php");
				            }

		 	         	}	

	     	    }
		         if(isset($_POST["act"])and($_POST["act"]=="register"))
		         {
		              try
		              	{
		
		                 $name=$_POST["name"];
		                 $user_name=$_POST["user_name"];
		                 $address=$_POST["address"];
		                 $category=$_POST["sel_name"];
		                 $id_no=$_POST["box"];
		                 $mob=$_POST["mob_no"];
		                 
		                 $password=$_POST["password"];
		                 $pass=$_POST["re_password"];
		                 $district=$_POST["district"];
		                 $pmc=$_POST["pmc"];
		                 $pamuco_name=$_POST["pamuco"];
		                 setcookie("mob",$mob,time()+3600);
		                 setcookie("category",$category,time()+3600);
		                 //echo $mob;
		                // echo "haiiiiiiiii".$_COOKIE['mob'];
		                 //echo $_COOKIE['mob'];
		                 if(!isset($name{3}) or trim($name) == " ")
		                 throw new Exception("Please Enter the Name");
		                 if(!isset($user_name{3}) or trim($user_name) == " ")
		                 throw new Exception("Please Enter the User Name");
		                 if(!isset($address{5}) or trim($address) == " ")
		                 throw new Exception("Please enter the Address");
		
		                 if(!isset($mob{9}) or trim($mob) == " ")
		                 throw new Exception("Please enter the mobile no");
		                 if(!isset($password{4}) or trim($password) == " ")
		                 throw new Exception("Please enter the Password");
		                 if(!isset($pass{4}) or trim($pass) == " ")
		                 throw new Exception("Please Re-enter the Password");
		                 if($password==$pass)
			        	 {
					       $q = "SELECT id, user_name FROM users WHERE user_name = '$user_name' AND status='1'limit 1";
					       $results = mysql_query($q);
					       $c=0;
					       //echo $q;
					       while($row=mysql_fetch_array($results))
					       {
						      $c++;
					       }
					       if($c > 0)
					       {
	  					      // Username exists.
						      //echo "text/javascript";
						      echo '<script type="text/javascript">';
	 					      echo 'window.alert("Error: Username already taken.");';
						      echo 'document.location.href="index.php"';
						      echo '</script>';
					
					       }
					       $q = "SELECT id, mob_no FROM users WHERE mob_no = '$mob' AND status='1' limit 1";
					       $results = mysql_query($q);
					       $d=0;
					       while($row=mysql_fetch_array($results))
					       {
						       $d++;
					       }
					       if($d > 0)
					       {
	  					     // Username exists.
						     //echo "text/javascript";
						     echo '<script type="text/javascript">';
	 					     echo 'window.alert("Error: Mobile number  already taken.");';
						     echo 'document.location.href="index1.html"';
						     echo '</script>';
					
					       }
					       $q = "SELECT id,identification_no,category FROM users WHERE identification_no = '.$id_no.', category='farmer' AND status='1' limit 1";
					       $results = mysql_query($q);
					       $e=0;
					       //echo $q;
					       while($row=mysql_fetch_array($results))
					       {
						          $e++;
					       }
					       if($e > 0)
					       {
	  					     // Username exists.
						     //echo "text/javascript";
						     echo '<script type="text/javascript">';
	 					     echo 'window.alert("Error: incorrect device id");';
						     echo 'document.location.href="index1.html"';
						     echo '</script>';
					
					       }
					       else
					        {
	  					// Username available.
					        	

				
						      $qrys = "INSERT INTO users (name,user_name,address,category,identification_no,mob_no,district,pamuco,pamuco_name,password,status)VALUES ('".$name."','".$user_name."','".$address."','".$category."','".$id_no."','".$_POST["mob_no"]."','".$district."','".$pmc."','".$pamuco_name."','".md5($password)."','0')";
	//echo $qrys;				
						      //echo $qrys;
						      $s=mysql_query($qrys);
						      
						      
						      if($s)
						       {
			       
							        if($category=="farmer")
							        {
							        	echo "congratzzzz";
							        	//echo $_COOKIE['mob'];
									echo '<script type="text/javascript">';
						 			echo 'window.alert("You are Successfully Registred...");';
									//echo 'document.location.href="farmer_dashboard.php"';
									echo '</script>';
									}
									else if($category=="officer")
									{
										$dt=date("Y-m-d");
					        			//echo $dt;
					        			//echo $_POST["mob_no"];
										$qqq="SELECT * FROM users WHERE mob_no='".$_POST["mob_no"]."' ";
										$ss=mysql_query($qqq);
										//echo $qqq;
										while($row=mysql_fetch_array($ss))
										{
											$uid=$row["id"];
											$cat=$row["category"];
											//echo $cat;
											$qrys = "INSERT INTO officer(uid,identification_no,start_date)VALUES ('".$uid."','".$id_no."','".$dt."')";
											mysql_query($qrys);


										}	
									echo '<script type="text/javascript">';
					 				echo 'window.alert("You are Successfully Registred...you can login after verification");';
									//echo 'document.location.href="officer_dashboard.php"';
									echo '</script>';
									}
									else 
									{
									echo '<script type="text/javascript">';
					 				echo 'window.alert("You are Successfully Registred...");';
									//echo 'document.location.href="customer_dashboard.php"';
									echo '</script>';
									}
								}
							}
					
						}
	
					else
					{
						echo"sry password mismatch....";
					}
		
		
			}	
	catch(Exception $e)
	{
		echo $e->getmessage();
	}

   }

}
?>
