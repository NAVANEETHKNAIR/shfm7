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
<br>
              <a  href="farmer_notifications.php">
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
  
<?php
//include_once("edit.html");

  if($_COOKIE['mob']  && $_COOKIE['category']=="officer")
    {}
  else
    {
      header("location:index.php");
    }
    if($_GET['id']){
        $gid=$_GET['id'];
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
    echo '<div class="replyleft">';
    if(isset($_POST["act"])and($_POST["act"]=="register"))
    {
      try
      {
        $ans=$_POST["answer"];
        // if(!isset($ans{3}) or trim($aans) == "")
        //throw new Exception("Please Enter the Answer");
      
          
          //echo $mob;
          $gid=$_GET['id'];
          if(isset($_POST['submit']))
          {
            $ans=$_POST["answer"];

            //$age=$_POST['age'];
             $qry= "UPDATE enquiry SET answer='$ans' WHERE id='$gid'";
           // echo $qry;
            $query3=mysql_query($qry);
                 if($query3==TRUE)
            //echo $query3;
                 {
                 echo '<script type="text/javascript">';
                        echo 'window.alert("successfully Entered.");';
                        echo 'document.location.href="farmer_notifications.php"';
                        echo '</script>';
               }
               else
               {
                echo '<script type="text/javascript">';
                        echo 'window.alert("Updation Failed...Try again");';
                        echo 'document.location.href="farmer_notifications.php"';
                        echo '</script>';
               }
            if($query3)
            {
              header('location:farmer_notifications.php');
            }
          }
        
      }
      catch(Exception $e)
      {
        echo $e->getmessage();
      }
    }

    $query1="select * from enquiry where id='$gid'";
    //echo $query1;
    $sql1=mysql_query($query1);
        //$query2=mysql_fetch_array($query1);
    while($row3=mysql_fetch_array($sql1))
    {
      $ans=$row3["answer"];
      //echo $addr;
       $q=$row3["question"]; 
       $fid=$row3["uid"];
    }echo '<br>';
    echo '<font size=2vh color="blue">';

    echo "Question:".$q;
    echo '</font>';
    echo '<br>';echo '<br>';
    echo'<form method="post" action="">';
    echo'<textarea name="answer" placeholder="Answer" required="">'.$ans.'</textarea>';
    echo"<br>"; echo"<br>";
    echo'<input type="submit" name="submit" value="submit">';
  // echo'<input type="image" src="assets/img/submit.png" alt="Submit" title="Submit" width="200" height="50">';
    echo '<input type="hidden" name="act" value="register">';
    
    echo"</form>";echo "<br>";echo "<br>";
    echo '<font size="4vh" color="green"> ';
   echo " Past Enquiry Details";

echo '</font>';
                 $q2="select * from enquiry where uid='$fid'";
    //echo $query1;

    $sql2=mysql_query($q2);
        //$query2=mysql_fetch_array($query1);
    while($row4=mysql_fetch_array($sql2))
         {
          $a=$row4["answer"];
      //echo $addr;
       $q1=$row4["question"]; 
       $f=$row4["feedback"]; 
         
         if($a)
         {
echo '<font size="2vh" color="brown"> ';
echo '<br>';
echo "Que:"."&nbsp"."&nbsp".$q1;echo '<br>';
echo "Ans:"."&nbsp"."&nbsp".$a;echo '<br>';
            if($f)
            {
              echo "Feedback"."&nbsp"."&nbsp".$f;echo '<br>';

            }
}


    
echo '</div>';



}
echo '<div class="replyfull">';

$q3="select * from users where id='$fid'";
    //echo $query1;
echo '<font size="5vh" color="yellowgreen"> ';
echo "Details of farmer";
    $sql3=mysql_query($q3);
        //$query2=mysql_fetch_array($query1);
    while($row7=mysql_fetch_array($sql3))
         {
          $n=$row7["name"];
          $ad=$row7["address"];
          $m=$row7["mob_no"];
          $c=$row7["category"];
          $photo=$row7["photo"];


echo '<br>';
echo '<br>';
if($photo == NULL)
                               {
                                    

                      echo '<img class="img-circle" src="photo/index.jpeg" width="100vh">';
                                          echo "</img>";
                                          
                }

                else
                {
                   
                                   echo "<img  class='img-circle' src='".$row7['photo']."'height='100vh' >";
                                          echo "</img>";




                                         
                
                }





          


echo '<font size="3vh" color="white"> ';
echo "<br>";
echo $n;echo "<br>";
echo $ad;echo "<br>";
echo $c;echo "<br>";
echo $m;echo "<br>";
echo '</div>';

}
}
?>
</div>
</div>
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