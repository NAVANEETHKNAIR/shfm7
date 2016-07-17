<?php
       $servername = "localhost";
       $username = "root";
       $password = "password";
       $dbname = "SHFM";
       if(isset($_COOKIE['mob'])&& $_COOKIE['category']=="farmer")
      {}
      else{
            header("location:index.php");
      }
      
            // Create connection
 
            $conn = new mysqli($servername, $username, $password, $dbname);
 
            // Check connection
 
            if ($conn->connect_error) {
 
            die("Connection failed: " . $conn->connect_error);
 
            }

            $mob=$_COOKIE["mob"];
             /*$q="SELECT identification_no FROM users WHERE mob_no ='$mob'" ;
            $y=$conn->query($q);
            $row3=$result->fetch_assoc()
            //echo $q;
            while($row=mysql_fetch_array($y))
            {
                  //$fid=$row["id"];
                  $dev=$row["identification_no"];
                  //echo $dev;*/
                  $sql = "SELECT * from exception where status = '0' and mob_no='$mob'";
             //echo $sql;
             $result = $conn->query($sql);
             $row = $result->fetch_assoc();
             $count = $result->num_rows;
             if($count>0)
            {
             echo $count;
            }
            
           
             
             /*$sql1 = "SELECT * from moi_exception where status = '0'";
             $result1 = $conn->query($sql1);
             $row1 = $result1->fetch_assoc();
             $count1= $result1->num_rows;
             $sql2 = "SELECT * from pH_exception where status = '0'";
             $result2 = $conn->query($sql2);
             $row2 = $result2->fetch_assoc();
             $count2= $result2->num_rows;
             $count3=$count+$count1+$count2;*/
             
      
             $conn->close();
      
?>