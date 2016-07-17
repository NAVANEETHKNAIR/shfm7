


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
              //echo $qry;
              if($query3==TRUE)
            //echo $query3;
                 {
                 echo '<script type="text/javascript">';
                        echo 'window.alert("successfully updated.");';
                        echo 'document.location.href="personal_officer_data.php"';
                        echo '</script>';
               }
               else
               {
                echo '<script type="text/javascript">';
                        echo 'window.alert("Updation Failed...Try again");';
                        echo 'document.location.href="personal_officer_data.php"';
                        echo '</script>';
               }

            /* if($query3)
            {
              header('location:personal_officer_data.php');
            }*/
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
        <body onload="fillDistrict();" class="page1">
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
<br>
              <a  href="personal_officer_data.php">
         <img src="assets/img/back1.png" width="50" height="50" title="previous Page" >
         </a>
        
                <br></li>
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
 <li><a href="search.php"><img src="images/search.png" title="search" width="40" height="40">
    </a>
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
        
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:auto;">
<center><div class="inside">
 <!--<form method="POST" action="farmer_dashboard.php">-->

<br>
<br><br>
<br>

<form method="POST" action="">
        
        <br>    <select name="district" id="district" onchange="choose_panchayath(this.id,'pamuco_name');"><br/><br>
    <!--<option disabled selected value>-- Select District  --</option>-->
    <option  disabled selected value > <?php echo $dist;   ?> </option><br/>
    <option value="Trivandrum">Trivandrum</option><br/>
    <option value="Kollam">Kollam</option><br/>
    <option value="Pathanamthitta">Pathanamthitta</option><br/>
    </select></br></br>
    <select name="pamuco_name" id="pamuco_name" required ><option disabled selected value> <?php echo $pan; } }?></option></select><br/><br/>



    <br>
   <br>
  <input type="submit" name="submit" value="submit">
    <input type="hidden" name="act" value="register">
    </form>

</div>
</center></div>
<!--</div>-->
</div>
                       
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <!-- Footer -->
     <?php include_once "footer.html";?>
    </body>

</html>
        
   
<?php
}
?>


 
