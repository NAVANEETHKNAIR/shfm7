
<?php
//include_once("edit.html");
	if($_COOKIE['mob'] && $_COOKIE['category']=="officer")
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
				$dist=$_POST["district"];
				$pan=$_POST["pamuco_name"];

				if(!isset($dist{5}) or trim($dist) == "")
				throw new Exception("Please Enter the District");
			
		      
					//echo $mob;
					$id=$_GET['id'];
					if(isset($_POST['submit']))
					{
						$dist=$_POST['district'];
						$pan=$_POST['pamuco_name'];
						$qr="SELECT * FROM users WHERE mob_no='$mob' ";
						$q=mysql_query($qr);
						while ($row=mysql_fetch_array($q)) 
						{
							$id=$row["id"];
						

							$qry="UPDATE users SET district='".$dist."',pamuco_name='".$pan."' WHERE id='".$id."' AND mob_no='".$mob."' ";
							$query3=mysql_query($qry);
							echo $qry;
							

							//echo $query3;
							if($query3)
							{
								header('location:personal_officer_data.php');
							}
						}
					}
				
			}
			catch(Exception $e)
			{
				echo $e->getmessage();
			}
		}
		else
		{
			$query1="select * from users where id='$id'";
			//echo $query1;
			$sql1=mysql_query($query1);
					//$query2=mysql_fetch_array($query1);
			while($row=mysql_fetch_array($sql1))
			{
				$dist=$row["district"];
				$pan=$row["pamuco_name"];
				//echo $addr;
					
			
			?>

		<html>
		<head>
		<script>

		function choose_panchayath(s1,s2)
		{
			var s1=document.getElementById(s1);
			var s2=document.getElementById(s2);
			//document.write(s1.value);		
			s2.innerHTML = "pamuco_name";
			if(s1.value == "Trivandrum")
			{
						var optionArray=["|","Palode|Palode","Poojappura|Poojappura","Pothencode|Pothencode"];
				
				
			}
			else if(s1.value=="Kollam")
			{
				var optionArray = ["|","Anchal|Anchal","Arynkavu|Arynkavu","Madathara|Madathara"];
			}
			 else if(s1.value == "Pathanamthitta")
			{
				var optionArray = ["|","Adoor|Adoor","Ranni|Ranni","Pamba|Pamba"];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}

		}







		</script>
        </head>
        <body onload="fillDistrict();">
       	<form method="POST" action="">
		<select name="district" id="district" onchange="choose_panchayath(this.id,'pamuco_name');"><br/><br>
		<!--<option disabled selected value>-- Select District  --</option>-->
		<option  disabled selected value > <?php echo $dist;   ?> </option><br/>
		<option value="Trivandrum">Trivandrum</option><br/>
		<option value="Kollam">Kollam</option><br/>
		<option value="Pathanamthitta">Pathanamthitta</option><br/>
		</select></br></br>
		<select name="pamuco_name" id="pamuco_name" required ><option disabled selected value> <?php echo $pan; } }?></option></select><br/><br/>



		<input type="submit" name="submit" value="update" >
		<input type="hidden" name="act" value="register">

		</form>
		</body>
		</html>
<?php
}
?>


 