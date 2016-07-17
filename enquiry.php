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
         <link rel="stylesheet" href="assets/css/style1.css">
         <link rel="stylesheet" href="assets/css/slider.css">


        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
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

              <a href="index.html" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>
            
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_data.php">personal Data</a></li>
                <li><a href="farm_data.php">farm data</a></li>
                <li><a href="seeding1.php">Crop Seedling Entry</a></li>
                
              </ul>
            </li>
              
          
            <li>
              <a href="sensor_no.php"><i class="fa fa-tasks"></i><br>Sensor Module</a>
            </li>
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Notifications<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="event_notifications.php">Events Notifications</a></li>
                <li><a href="farm_data.php">Device Notifications</a></li>
                <li><a href="req_notifications.php">Request Notifications</a></li>
                
              </ul>
           
            </li>
             <li>
              <a href="enquiry.php"><i class="fa fa-tasks"></i><br>Enquiry</a>
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
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:auto;">
                            <center>
                            <div class="main_enq">
                            <div class="eq_q">
                               <form method="POST" action="enquiry.php">
    <div class="texta"><textarea name="question" placeholder="Question" required=""></textarea></div>
    <br>
    <div class="qdiv"><input type="image" src="images/q2a.png" title="click here add" width="50vw" height="60vh" alt="upload"/><br>
      <input type="hidden" name ="act" value="register"></div>
  </form>
  </div>
  <?php
  //include_once "enquiry.html" ;
  if($_COOKIE['mob']  && $_COOKIE['category']=="farmer")
    {}
  else
    {
      header("location:index.php");
    }
  //echo $_GET['id'];
  //$id=$_GET['id'];
  $mob=$_COOKIE['mob'];
  //echo $mob; 
  if($mob){
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
                $qst=$_POST["question"];
                if(!isset($qst{3}) or trim($qst) == " ")
            throw new Exception("Please Enter the Question");
                $qry="SELECT * FROM users WHERE mob_no='$mob' limit 1" ; 
            $sql=mysql_query($qry); 

                while($row=mysql_fetch_array($sql))
                {
                  $id=$row["id"];
                  $qrys = "INSERT INTO enquiry (uid,question)VALUES ('".$id."','".$qst."')";
                  $s=mysql_query($qrys);
                    if($s)
                     {

                        echo "successfully inserted....";
                    echo '<script type="text/javascript">';
                    echo 'window.alert("You are Successfully insert this question...");';
                    echo 'document.location.href="farmer_dashboard.php"';
                    echo '</script>';
                     }




                }
          }
          catch(Exception $e)
          {
            echo $e->getmessage();
          }
        }


        echo'<div class="eq_qsts">';
        
        $qry="SELECT * FROM users WHERE mob_no = '".$mob."' ";
      $sqll = mysql_query($qry);
      
      while($row=mysql_fetch_array($sqll))
      {
                    $idd=$row["id"];
                    $qry1="SELECT * FROM enquiry WHERE uid = '".$idd."' ";
             $sqll1 = mysql_query($qry1);
             //echo $qry1;
              while($row1=mysql_fetch_array($sqll1))
              {

                
                $id_q=$row1["id"];
                $q=$row1["question"];
                $a=$row1["answer"];
                $f=$row1["feedback"];
          
                echo'<div class="eq_sub">';
                         echo '<div class="eq_sub_q">'."<img src='images/bullet_question.png' width=51vw height=41vh;>".'</div>'.'<br>';
                         echo '<div class="eq_sub_qa">'.$q.'</div>';
                        echo "<br>";
                        if($a!=NULL){
                echo '<div class="eq_sub_ans">'." <img src='images/a1.png' width=51vw height=41vh;> ".'</div>'.'<br>';
                echo '<div class="eq_sub_ansa">'.$a.'</div>';
            
               
                //echo '<div class="eq_sub_feeda">'.$f.'</div>';
             if($f==NULL){
               echo '<div class="eq_sub_feed">'." <img src='images/cato.png' width=51vw height=41vh;>   ".'</div>';
         echo'<form action="feedback.php?id_q='.$id_q.'" method="POST">';
         echo'<div class="eq_sub_feeda">';
                echo'<input type="radio" name="feedback"';
                if (isset($feeedback) && $feedback=="excellent") echo "checked";
                  echo'value="excellent">Excellent';
                echo'<input type="radio" name="feedback"';
                if (isset($feedback) && $feedback=="satisfied") echo "checked";
                echo'value="satisfied">Satisfied';
                 echo'<input type="radio" name="feedback"';
                if (isset($feedback) && $feedback=="notsatisfied") echo "checked";
                echo'value="notsatisfied">Not Satisfied';
              
                //echo '<div class="f_ch">'."<a href=feedback.php?id_q=$id_q?feedback= '".$feedback."'><img  src='images/camera.png' height='27vh' title='upload'/>".'</div>';
                echo'<input type="image" src="images/tick.png" alt="submit" title="click here" width="50vw" height="30vh">';
                echo'<input type="hidden" name ="act1" value="register1">';
                echo'</div>';
                echo'</form>';
                }
                echo "<br>";
              }
                   echo'</div>'; 

              }
      } 
      echo'</div>';



}
}
else{
    echo '<script type="text/javascript">';
          echo 'window.alert("Time out please login...");';
          echo 'document.location.href="login.html"';
          echo '</script>';
}
?>

                            </div>
                            </center>
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
                   
