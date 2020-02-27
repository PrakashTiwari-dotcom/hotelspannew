
<!-- -------------------------------------------------------------------------------------------- -->


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>Display events</title>
<meta name="viewport" content="wid=device-wid, initial-scale=1, maximum-scale=1">
<meta name="auor" content="Ansu Tech">
<meta name="auor" content="Pranil GC">
<meta name="Description" content="Stepup Hospitality" />
<link href="../css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,600" rel="stylesheet" type="text/css" />
<script src="../js/modernizr.custom.js" type="text/javascript"></script>
   
</head>

<body class="blog">

<!-- start header -->
<header class="clearfix">
  <!-- <div > <a href="index.html">Stepup</a> </div> -->
  <div class="tagline"><span>Stepup Hospitality</span></div>
  <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
  
  <nav>
    <ul id="nav">
      <li><a href="../index.html#ancor1">Home</a> </li>
      <li><a href="../index.html#ancor3">Reservation</a> </li>
      <li><a href="../index.html#ancor4">About</a> </li>
      <li  class="active"><a href="#">Events</a></li>
      <li><a href="workshops.php#cocktail-workshop">Cocktail Workshop</a></li>
      <li><a href="workshops.php#barista-workshop">Barista Workshop</a></li>
      <li><a href="../index.html#ancor6">Contact</a> </li>
      <li><a href="../gallery.html">Gallery</a> </li>
      <li><a href="../login/login.php">Login</a></li>
    </ul>
  </nav>

</header>
<!-- end header --> 
<!-- start main content  -->
<section class=" ">
    <div class="containe-fluid">
            <div class="row ">
                 <div class="col-md-12 col-sm-12" >
                  <!-- ----start display events (fetching from database and displaying on page) -->
                                      
                      <h1 class="text-center bg-primary"  style=" color:white;padding-bottom:1%">Events</h1>
                                     
                <?php 
                   $conn = mysqli_connect("localhost","root","","hotelspan");
                   $sql ="SELECT `title`,`description`,`date`,TIME_FORMAT(`time`,'%H %i %s %p') as `time`,`venue`,`id`,`image`,`organizer` FROM events";
                   $result = mysqli_query($conn,$sql);
                   if($result){

                       while($row = mysqli_fetch_assoc($result)){
                            $title=$row['title'];
                            $description =$row['description'];
                            $date = $row['date'];
                            $time = $row['time'];
                            $venue = $row['venue'];
                            $id = $row['id'];
                            $image = $row['image'];
                            $organizer = $row['organizer'];
                        ?>
                      
                <!--display event in page ---------------------- -->
             <div class="card col-md-3 col-sm-12  text-center  "  style="border:2px solid #eee;margin:2.5%;">
                 <div class="card-body " style="height:250px;" > 
                   <img style="height:250px;width:100%;" src="<?php echo $image;?>" >
                </div>
                <div class="card-footer text-muted ">
                    <h5 class=" text-success text-white"><?php echo $title ?></h5>
                       <p ><?php echo "Date: ".$date ?></p>
                      <p ><?php echo "Time: ".$time ?></p>
                      <p ><?php echo "Venue: ".$venue ?></p>
                      <p ><?php echo "Organizer: ".$organizer ?></p>
                      
                    <a href="eventdetails.php?id=<?php  global $id; echo $id; ?>" class="btn btn-warning text-white " style="margin-bottom:10px;">view details</a>
                </div>
              
             </div>
                   
                    <?php 
                       }
                      }
                 ?>
                       <!-- --------------------------------------- -->
           </div> 
        
       </div>
    </div>
  </section>
<!-- end main content --> 
<!-- start footer -->
<footer style="margin-top:5%">
  <div class="container clearfix">
  <div class="col-lg-12"> <span class="alignleft small">© 2020, Stepup Hospitality Butwal. All Rights Reserved.</span> <span class="alignright small">Made with <i class="fa fa-heart"></i> by <a href="http://www.ansunepal.com" data-title="Ansu Tech">Ansu Tech</a>. </span> </div>
  </div>
</footer>
<!-- end footer --> 

<script src="../js/jquery-1.12.4.min.js" type="text/javascript"></script> 
<script src="../js/jquery-easing-1.3.js" type="text/javascript"></script> 
<script src="../js/jquery.touchSwipe.min.js" type="text/javascript"></script> 
<script src="../js/jquery.isotope2.min.js" type="text/javascript"></script> 
<script src="../js/packery-mode.pkgd.min.js" type="text/javascript"></script> 
<script src="../js/jquery.isotope.load.js" type="text/javascript"></script> 
<script src="../js/jquery.nav.js" type="text/javascript"></script> 
<script src="../js/responsive-nav.js" type="text/javascript"></script> 
<script src="../js/jquery.sticky.js" type="text/javascript"></script> 
<script src="../js/jquery.form.js" type="text/javascript"></script> 
<script src="../js/starter.js" type="text/javascript"></script> 
<script src="../js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script src="../js/ajax.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-datepicker.min.js"></script> 
<script src="../js/jquery.fitvids.js" type="text/javascript"></script> 
<script src="../js/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 
<script src="../js/googlemaps.js" type="text/javascript"></script> 
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>

<!-- -------------------------------------------------------------------------------------------- -->


