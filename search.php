

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SHFM</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <!--<link rel="stylesheet" href="css/style.css">-->


        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/slider.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        
        <!-- Top menu -->
    <nav class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="top-navbar-1">
          <ul class="nav navbar-nav navbar-right">

            <li>

              <a href="officer_dashboard.php" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>

            
            <li class="dropdown ">
              <a href="officer_dashboard.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_officer_data.php">Personal Data</a></li>
                <li><a href="create_events.php">Create Events</a></li>
                <li><a href="create_package.php">Create Package</a></li>
                <li><a href="create_news.php">Create News</a></li>
              </ul>
            </li>
              
          
            <li>
              <a href="farmer_notifications.php"><i class="fa fa-tasks"></i><br>Notifications</a>
            </li>
             
             <li>
              <a href="exit.php"><i class="fa fa-tasks"></i><br>Exit</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-user"></i><br>logout</a>
            </li>
 
            
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pricing-tables.html">Pricing tables</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>

       
    </nav>

        <!-- Slider -->
        <div class="slider-container">
        <div class="back">
        <a  href="officer_dashboard.php">
         <img src="assets/img/back1.png" width="80" height="50" title="previous Page" >
         </a>
         </div>
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:auto;">
<center>
 

<?php
	//include_once "farmer_dashboard.html" ;
	if($_COOKIE['mob'])
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
            echo "<br>";
              echo "<br>";
echo'<form method="post" action="">';
    echo'<input type="text" name="item_name" >';
    
    
    echo'<input type="submit" name="submit" value="search" >';
    echo '<input type="hidden" name="act" value="register">';
       
    echo"</form>";
echo "<br>";
              echo "<br>";echo '<img src="assets/img/line.jpg " width="15000" height="20"  />';
 $sname=$_POST["item_name"];

                
           if(isset($_POST["act"])and($_POST["act"]=="register"))
         {
             try
         {
                   
        $qry="SELECT * FROM users WHERE mob_no='$mob' ";
           $results=mysql_query($qry);
          // echo $qry;
           while($row=mysql_fetch_array($results))
        {
          $pan=$row["pamuco_name"];
          $gid=$row["id"];
          //$nme=$row["user_name"];
          
          //echo "<pre>";
          //print_r($row);
          //echo "</pre>";
          $qr="SELECT * FROM package WHERE uid='$gid' AND p_name='".$_POST["item_name"]."'";
              $result=mysql_query($qr);
              //echo $qr;
              while($row1=mysql_fetch_array($result))
          {
            $p=$row1["id"];
            $p_name=$row1["p_name"];
            //echo $p;
        

            $q="SELECT * FROM crop_items WHERE pid='$p'";
                $result1=mysql_query($q);
                //echo $q;
                while($row2=mysql_fetch_array($result1))
            {
              $idd=$row2["uid"];
              $sdate=$row2["seed_date"];
              $nc=$row2["no_of_crops"];
              $sq=$row2["sell_qty"];
              $w=$row2["willing_date"];


            $qq="SELECT * FROM users WHERE id='$idd'";
                $result11=mysql_query($qq);
                //echo  $qq;

                while($row3=mysql_fetch_array($result11))
            {

                                         //echo "hiiii";

                    $nme=$row3["user_name"];
                    $mob=$row3["mob_no"];
                    $adrs=$row3["address"];
                    $photo=$row3["photo"];
                    echo' <div class="s1">';
                    echo "<br>";
                    echo "<br>";
                    if($photo == NULL)
                               {
                                   echo '<img src="photo/index.jpeg" class="img-circle"  width="150" height="100" >';
                                          echo "</img>";
                      echo "<br>";
                       
                }

                else
                {
                  
                                   

                                   echo "<img src='".$row3['photo']."'  width='150' height='100' class='img-circle'>";
                                          echo "</img>";
                    echo "<br>";
                      
                }
                echo "</div>";
                echo' <div class="s2" >';
                    echo "<h1>";
                    echo  $nme;
                    echo "</h1>";
                    
                    echo " Address:".$adrs;
                    echo "<br>";
                    echo  " Mobile number:".$mob;
                    echo "<br>";
                    
                    
                    echo " Seed Date:".$sdate;
                    echo "<br>";
                    echo " Number Of Crops:".$nc;
                    echo "<br>";
                    
                                         
                                  
                                    echo'</a>'; 
                                    echo "<br>";echo "<br>";  




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
        
    else
    {

$c=1;
    $qry="SELECT * FROM users WHERE mob_no='$mob' ";
    $results=mysql_query($qry);
    
      while($row=mysql_fetch_array($results))
    {
      $pan=$row["pamuco_name"];
      $gid=$row["id"];
      $qryy="SELECT * FROM officer WHERE uid='$gid' ";
      $resul=mysql_query($qryy);
      if(mysql_num_rows($resul)>0)
      {
        while($row6=mysql_fetch_array($resul))
        {
          $ndate=$row6["end_date"];
          echo $ndate;
          $d=date('Y-m-d');
          echo "<br>";
          echo $d;
          if($ndate!==NULL)

          {
            
            //$st_date=date('d-m-Y', strtotime($ndate));
            //mysql_query("DELETE FROM officer_notification WHERE st_date < date('Y-m-d') ");
            if($ndate< $d)
            {
              
              $q="UPDATE users SET status='0' WHERE id='$gid'";
              mysql_query($q);
              header("location:logout.php");

            }

          }

        }
      }
      $qr="SELECT * FROM package WHERE uid='$gid'"; 
        $result=mysql_query($qr); 

        while($row1=mysql_fetch_array($result))
      {
        $p=$row1["id"];
        $p_name=$row1["p_name"];
        $p_img=$row1["p_image"];

        $w="SELECT * FROM users WHERE pamuco_name='$pan' AND category='farmer'";
          $r=mysql_query($w); 
          while($row22=mysql_fetch_array($r))
        {
          $fid=$row22["id"];
        
          $q="SELECT * FROM crop_items WHERE pid='$p' AND uid='$fid'" ;
              $result1=mysql_query($q);
                  //echo $q;
              if(mysql_num_rows($result1)>0)
          { 

                while($row2=mysql_fetch_array($result1))
            {
              $idd=$row2["uid"];
              $sdate=$row2["seed_date"];
              $nc=$row2["no_of_crops"];
              $qq="SELECT * FROM users WHERE id='$idd'" ;
                  $result11=mysql_query($qq);
                  
                  while($row3=mysql_fetch_array($result11))
              {
                ++$c;
                
                $nme=$row3["user_name"];
                $mob=$row3["mob_no"];
                $adrs=$row3["address"];
                $photo=$row3["photo"];        
              } 
              
          echo '<center>';
            if( $c % 2 == 0 )     

                  {
                    
                          echo' <div class="even" >';
                          
if($photo == NULL)
  
                    {
                                  
                    echo '<img  class="img-circle" src="photo/index.jpeg " width="150" height="100" >';
                        echo "</img>";
                echo "<br>";
                echo "</a>"; 
              }
              else
              {
                  
                        echo "<img src='".$photo."' width='150' height='100' class='img-circle'>";
                        echo "</img>";
                echo "<br>";
                echo "</a>";//echo "hi";

              }
                            echo '</div>';  
              
              echo' <div class="odd" style="background: greenyellow">';
              echo '<center>';
                            
                            echo' <div class="lc">';
                            echo '<font color="black">';
                    echo " ItemName";echo "<br>";
                    echo "<br>";
                            echo " Name";echo "<br>";
                            echo "<br>";
                            echo " Address";echo "<br>";
                            echo "<br>";
                            echo  " MobileNumber";echo "<br>";
                            echo "<br>";
                            echo '</font>';
                            echo '</div>';
                    



                    echo' <div class="rc">';
                     echo '<font  color="green">';
                    echo $p_name;
                    
              echo "<br>";
                  
                   echo "<br>";
              echo $nme;
              
              echo "<br>";
              echo "<br>";
              echo $adrs;
              
              echo "<br>";
              echo "<br>";
              echo $mob;
              
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo '</div>';
              echo '</div>';echo '<img src="assets/img/line.jpg " width="15000" height="20"  />';
              
              }

 
              if( $c % 2 == 1 )     

                  { 
                         
                    echo '<div class="odd" >';
                    
if($photo == NULL)
                    {
                                  
                      echo '<img src="photo/index.jpeg" width="150" height="100"  class="img-circle">';
                        echo "</img>";
                echo "<br>";
                
              }
              else
              {
                  
            echo "<img src='".$photo."' width='150' height='100' class='img-circle' >";
                        echo "</img>";
                echo "<br>";
                

              }
              
              echo '</div>';  
            echo ' <div class="even" style="background: greenyellow">'; 
            
                    echo' <div class="lc">';
                            echo '<font color="brown">';
                    echo " ItemName";echo "<br>";echo "<br>";
                            echo " Name";echo "<br>";echo "<br>";
                            echo " Address";echo "<br>";echo "<br>";
                            echo  " MobileNumber";echo "<br>";echo "<br>";
                            echo '</font>';
                            echo '</div>';
                    



                    echo' <div class="rc">';
                     echo '<font  color="green">';
                    echo $p_name;
                    
              echo "<br>";
                  
                   echo "<br>";
              echo $nme;
              
              echo "<br>";
              echo "<br>";
              echo $adrs;
              
              echo "<br>";
              echo "<br>";
              echo $mob;
              
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo '</div>';
              echo '</div>';
               echo '<img src="assets/img/line.jpg " width="1500" height="20"  />';
              
              }

          }
echo '</center>';
        
            }
          else if($result=='0'){echo"No new entries available";}

        }

      }
      
        
    }   







       
}

		
        
       // echo $sname;
        

}					
?>

</div>
</center></div>
<!--</div>-->

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>

   
        <!-- Footer -->
         <?php include_once "footer.html";?>
       

    </body>

</html>