<?php session_start(); ?> <!-- starting session -->
<?php require 'function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Yes Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/clubstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/clubstyle.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">YES Club</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">AWARDS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">UPCOMMING EVENT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section5">MEET OUR MEMBERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section6">JOINING REQUEST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section7">CONTACT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            MORE
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section41">CHAT ROOM</a>
            <a class="dropdown-item" href="#section42">All Events</a>
          </div>
        </li>

      </ul>

      <form class="form-inline my-2 my-lg-0">

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGIN</button>
      </form>

    </div>
  </nav>

  <section id="section1" class=" bg-primary" style="padding-top:55px;">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="photos/pic01.jpg" alt="NSU Club" width="1100" height="500">
          <div class="carousel-caption">
            <h3>auditorium</h3>
            <p>We had such a great time in auditorium</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic02.jpg" alt="NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>robot wrestling</h3>
            <p>Thank you, Team M4za1</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic03.jpg" alt="Bd in NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>NSU APC Club</h3>
            <p>We love the them</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic04.jpg" alt="Bd NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Club fair</h3>
            <p>Club fair is comming soon</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic05.jpg" alt="B NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Club fair</h3>
            <p>Club fair is comming soon</p>
          </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </section>



  <?php
    $events="SELECT * FROM all_clubs where club_id=7";
    $event_result=mysqli_query($db,$events);

      $event_record=mysqli_fetch_assoc($event_result);
        ?>

  <section id="section2" class="container" style="padding-top:70px;padding-bottom:70px; text-align:center;">
    <h1 style="padding-top:20px; padding-bottom:20px;">ABOUT</h1>
    <p style="font-size:20px;"><?php echo $event_record['about'] ; ?> </p>
  </section>



  <section id="section3" class="container " style="padding-top:70px; padding-bottom:70px; width:100%;">
    <h1 style="text-align:center; padding-bottom:40px;">AWARDS</h1>
    <div class="container-fluid">
      <div class="row flex-row">
        <!--Grid column-->
        <div class="col-4 col-md-4 mt-2 col-sm-6 col-lg-2" id="aw01">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award01.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw02">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award02.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw03">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award03.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw04">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award04.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw05">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award05.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw06">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award06.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw07">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award07.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw08">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award08.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw09">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award09.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw10">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award10.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw11">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award11.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw12">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award12.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw13">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award13.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw14">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award14.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw15">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award15.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw16">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award07.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw17">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award08.png" data-holder-rendered="true">
        </div>
        <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2" id="aw18">
          <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/award07.png" data-holder-rendered="true">
        </div>
      </div>
    </div>


  </section>






  <section id="section4" class="container" style="padding-top:70px;padding-bottom:70px; width:100%;">
    <h1 style="text-align:center; padding-bottom:40px;">UPCOMMING EVENTS</h1>
    <div class="container-fluid">
      <div class="row flex-row flex-nowrap">

        <?php
          $create_date = date("Y-m-d");
          $events="SELECT * FROM event WHERE root_id = 7 AND publish_date > '$create_date' ";
          $event_result=mysqli_query($db,$events);
          if (mysqli_num_rows($event_result)>0) {
            while ($event_record=mysqli_fetch_assoc($event_result)) {
          ?>

        <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
          <div class="card profile-card-5 card-style">
            <div class="card-img-block">
              <img class="card-img-top event-data" src="dashboard/upload/<?php echo $event_record['photo']; ?>" alt="Card image cap">
            </div>
            <div class="col-12 card-body pt-0">
              <h5 class="card-title title-card"><?php echo $event_record['title'];?></h5>
              <p class="card-text card-inner-text"><?php echo $event_record['description']; ?></p>
              <a href="eventdetails.php?id=<?php echo $event_record['event_id']; ?>" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <?php
      }
    }
     ?>

      </div>
    </div>


  </section>







  <section id="section5" class="container" style="padding-top:70px;padding-bottom:70px">


    <h1 style="text-align:center; padding-bottom:40px;">MEET OUR MEMBERS</h1>

    <div class="row">


      <!--Profile Card 3-->
      <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4" style="position: center;">
        <div class="card profile-card-3">
          <div class="background-block">

          </div>
          <div class="profile-thumb-block">
            <img src="photos/maruf.jpg" alt="profile-image" class="profile" />
          </div>
          <div class="card-content">
            <h2>Maruf Billah<small>Designer</small></h3>
              <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
          </div>
        </div>

      </div>

      <!--Profile Card 3-->
      <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
        <div class="card profile-card-3">
          <div class="background-block">

          </div>
          <div class="profile-thumb-block">
            <img src="photos/maruf.jpg" alt="profile-image" class="profile" data-holder-rendered="true" />
          </div>
          <div class="card-content">
            <h2>Maruf Billah<small>Designer</small></h3>
              <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
          </div>
        </div>

      </div>

      <!--Profile Card 3-->
      <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
        <div class="card profile-card-3">
          <div class="background-block">
            <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background" />
          </div>
          <div class="profile-thumb-block">
            <img src="photos/maruf.jpg" alt="profile-image" class="profile" data-holder-rendered="true" />
          </div>
          <div class="card-content">
            <h2>Maruf Billah<small>Designer</small></h3>
              <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
          </div>
        </div>

      </div>

      <!--Profile Card 3-->
      <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
        <div class="card profile-card-3">
          <div class="background-block">
            <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background" />
          </div>
          <div class="profile-thumb-block">
            <img src="photos/maruf.jpg" alt="profile-image" class="profile" data-holder-rendered="true" />
          </div>
          <div class="card-content">
            <h2>Maruf Billah<small>Designer</small></h3>
              <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
          </div>
        </div>

      </div>

      <!--Profile Card 3-->
      <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
        <div class="card profile-card-3">
          <div class="background-block">
            <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background" />
          </div>
          <div class="profile-thumb-block">
            <img src="photos/maruf.jpg" alt="profile-image" class="profile" data-holder-rendered="true" />
          </div>
          <div class="card-content">
            <h2>Maruf Billah<small>Designer</small></h3>
              <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
          </div>
        </div>

      </div>
    </div>

  </section>








  <section id="section6" class="container " style="padding-top:100px;padding-bottom:70px">
    < <div class="">
      <img src="photos/arrowdown.gif" alt="click the button" style="width: -webkit-fill-available;">
      <a href="JoinRequest.php?id=7" class="btn btn-xxl btn-yellow">CLICK HERE FOR JOINING REQUEST</a>
      <!-- <img src="photos/arrowup.gif" alt="click the button" style="width: -webkit-fill-available;"> -->
      </div>

  </section>





  <section id="section42" class="container" style="padding-top:70px;padding-bottom:70px; width:100%;">
    <h1 style="text-align:center; padding-bottom:40px;">All Events</h1>
    <div class="container-fluid">
      <div class="row flex-row flex-nowrap">

        <?php
          $events="SELECT * FROM event WHERE root_id = 7";
          $event_result=mysqli_query($db,$events);
          if (mysqli_num_rows($event_result)>0) {
            while ($event_record=mysqli_fetch_assoc($event_result)) {
              ?>

        <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
          <div class="card profile-card-5 card-style">
            <div class="card-img-block">
              <img class="card-img-top event-data" src="dashboard/upload/<?php echo $event_record['photo']; ?>" alt="Card image cap">
            </div>
            <div class="col-12 card-body pt-0">
              <h5 class="card-title title-card"><?php echo $event_record['title'];?></h5>
              <p class="card-text card-inner-text"><?php echo $event_record['description']; ?></p>
              <a href="eventdetails.php?id=<?php echo $event_record['event_id']; ?>" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <?php
      }
    }
     ?>


        </div>
      </div>






  </section>
  <section id="section7" class="noclass" style="padding-top:130px;padding-bottom:35px">
    <h1 style="text-align:center; padding-bottom:0px;">Get in Touch</h1>
    <div class="container">



      <div class=" contactTOClub">


      <form id="contactForm" onsubmit="return validate()" action="yesclub.php" method="post">

        <input class="formInput" type="text" id="name" name="name" autocorrect="off" placeholder="Name?" />
        <input class="formInput" type="email" name="email" id="email" autocapitalize="off" autocorrect="off" placeholder="Email?" />
        <textarea class="formInput" name="message" id="message" placeholder="Message?"></textarea>

        <br>
        <input class="submitForm" type="reset" value="Clear your message" />
        <input class="submitForm" type="submit" name="submit" value="Send" />

      </form>
      <?php
        if (isset($_POST['submit'])) {

          $name=$_POST['name'];
          $email=$_POST['email'];
          $message=$_POST['message'];
          $club_id=7;
          $sql="INSERT INTO user_message VALUES (NULL,'$name','$email','$message',$club_id)";
          $sql_result=mysqli_query($db,$sql);
          if (!$sql_result) {
          ?><script>swal("Wrong Info","Registration Error", "error");</script> <?php
          }
          else{
            ?><script>swal("Success","Registration Successfull", "success");</script> <?php
          }
        }
       ?>

    </div>
    </div>
  </section>




    <section id="section8" class="noclass" style="padding-top:0px;padding-bottom:0px">


      <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <!--Column1-->
                <div class="footer-pad">
                  <h4>About Club</h4>
                  <ul class="list-unstyled">
                    <li><a href="#"></a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">News and Updates</a></li>
                    <li><a href="#">FAQs</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <!--Column1-->
                <div class="footer-pad">
                  <h4>About NSU</h4>
                  <ul class="list-unstyled">
                    <li><a href="#">Website Tutorial</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Webmaster</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <!--Column1-->
                <div class="footer-pad">
                  <h4>About Project</h4>
                  <ul class="list-unstyled">
                    <li><a href="CDCClub/index.html">CDC Club</a></li>
                    <li><a href="eceClub/index.html">CEC Club</a></li>
                    <li><a href="yesClub/index.html">Yes Club</a></li>
                    <li><a href="#">Yef Club</a></li>
                    <li><a href="#">Earth Club</a></li>
                    <li>
                      <a href="#"></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <h4>Follow Us</h4>
                <ul class="social-network social-circle">
                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 copy">
                <p class="text-center">&copy; Copyright 2019 - SU19CSE299S17G04NSU . All rights reserved.</p>
              </div>
            </div>


          </div>
        </div>
      </footer>



    </section>



    <!-- <div id="section7" class="container-fluid bg-dark" style="padding-top:700px;padding-bottom:70px">

    </div> -->


  </body>

  </html>
