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


        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

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
                            <!--<div class="dash" style="height:auto;">-->
                             <?php
 error_reporting(0);
 if($_COOKIE['mob']  && $_COOKIE['category']=="farmer")  
    {}
  else
    {
      header("location:index.php");
    }
    $mob=$_COOKIE['mob'];
    //echo $mob;
    if(isset($_COOKIE["mob"]))
  {
 $con = @mysql_connect("localhost","root","password");

 if (!$con) {
 echo "not connected";
 die('Could not connect: ' . mysql_error());
  }
else
{
 mysql_select_db("SHFM", $con);
 $qry="SELECT * FROM users WHERE mob_no = '".$mob."' ";
      $sqll = mysql_query($qry);
      
      while($row1=mysql_fetch_array($sqll))
      {
        
        
        $id = $row1["id"];
        $dev=$row1["identification_no"];
        $SQL1 =     "SELECT * FROM sensor_data WHERE dev_id='$dev' ";

        $result1 = mysql_query($SQL1);

        $data1 = array();
        $data2 = array();

  while ($row = mysql_fetch_array($result1)) {
   $data2[] = $row['temperature'];
   $data1[] = $row['sense_date'];
   $data3[] = $row['moisture'];
   $data4[]=$row['pH'];
   
      }
  }
  }
}
   ?>


    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org  /TR/xhtml1/DTD/xhtml1-transitional.dtd">
     <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
   <script src="http://code.highcharts.com/modules/exporting.js"></script>

       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
      </head>

    <body>
      <div id="container1" style="min-width: auto ; 
      height: auto; margin: 0 auto">               </div>

    </body>

     </html>
 <script type="text/javascript">
      $(function () {
      $('#container1').highcharts({
    chart: {
        type: 'column',
        margin: [ 50, 20, 130, 80],
        backgroundColor:'black'
    },
    title: {
        text: '..Live Monitoring...'
    },
credits: {
enabled: false
},
    xAxis: {
    	title: {
            text: 'Date',
            style: {
            	 fontSize: '3vh',
            	 color:'red'
            	}
        },
       categories: ['<?php echo join("','",$data1); ?>'],
        labels: {
            rotation: -30,
            align: 'right',
            style: {
                fontSize: '1vw',
                fontFamily: 'Verdana, sans-serif',
               color:'yellow'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            style: {
            	 fontSize: '3vh',
            	 color:'red'
            	}
        }
    },

    legend: {
    	
        enabled: false,
layout: 'vertical',
                    backgroundColor: '#FFFFFF',
                    align: 'left',
                    verticalAlign: 'top',
                    x: 50,
                    y: 35,
                    floating: true,
                    shadow: true
    },
    tooltip: {
        //pointFormat: '<b>{point.y:.1f} Temperature</b>',
    },
 plotOptions: {
                        column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                    },
    series: [{
      type: 'line',
        name: 'temperature',
       data: [<?php echo join(',', $data2); ?>],

dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            x: 4,
            y: 10,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif',
                textShadow: '0 0 3px black',

            }
        }
    },
    {
		 name: 'pH',
    	 type: 'line',
    	 data: [<?php echo join(',', ""); ?>]},
    { 
    	 name: 'moisture',
    	 type: 'line',
    	 data: [<?php echo join(',', $data3); ?>],
    	  style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif',
                textShadow: '0 0 3px black',
                color:'red',

            }

	},{
		 name: 'pH',
    	 type: 'line',
    	 data: [<?php echo join(',', $data4); ?>]}
    	 ]

   });
 });

</script>

</div>

                       
                        <!--</div>-->

                    </div>
                </div>
            </div>
        </div>


       
    <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
                          <p>
                           Easily collect and manage the explosion of data from sensors, cloud services. 
                            Enable farmers to easily visualize data and take action on insights and recommendations.
                          </p>
                          <p><a href="about.html">Read more...</a></p>
                        </div>
                    </div>
                     <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Email Updates</h4>
                        <div class="footer-box-text footer-box-text-subscribe">
                          <p>Enter your email and you'll be one of the first to get new updates:</p>
                          <form role="form" action="assets/subscribe.php" method="post">
                          <div class="form-group">
                            <label class="sr-only" for="subscribe-email">Email address</label>
                              <input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
                            </div>
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                        <p class="success-message"></p>
                        <p class="error-message"></p>
                        </div>
                    </div>
                   <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Flickr Photos</h4>
                        <div class="footer-box-text flickr-feed"></div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
                          <p><i class="fa fa-map-marker"></i> Address: Department of Computer Science</p>
                          <p><i class="fa fa-phone"></i> Phone:9999999900</p>
                          <p><i class="fa fa-user"></i> Skype: SHFM</p>
                          <p><i class="fa fa-envelope"></i> Email: <a href="">contact@andia.co.uk</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2016 SHFM - All rights reserved<a href="http://azmind.com/free-bootstrap-themes-templates/">SHFM</a>.</p>
                    </div>
                    
                </div>
            </div>
        </footer>
    </body>

</html>
                   




















