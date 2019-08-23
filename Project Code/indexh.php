<?php require 'index.php'; ?>
<?php

   $db=db_connect();
   // checking session validation


 ?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


  <link rel="stylesheet" href="css/indexstyle.css">


</head>



<body style="background-color:white;">








  <section>


    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">MARUF_BILLAH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </section>




  <!-- <section style="padding: 1rem 0rem;">
    <h1 style="text-align:center; font-size: 3rem; ">NSU CLUB PRO</h1>
  </section> -->






  <section style="padding-top:55px;">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
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
          <img src="photos/pic04.jpg" alt="Bd in NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Club fair</h3>
            <p>Club fair is comming soon</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>



  <section class="container">




    <section style="height: 4rem;   margin-top: .1rem solid black;">

    </section>


    <h2 style="text-align: center; font-size: 3rem;">TOP EVENTS</h2>


    <section style="height: 1rem">

    </section>



    <section style="width :100%;">

      <div class="container-fluid">
        <div class="row flex-row flex-nowrap">

          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="col-12 card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>

        </div>
      </div>


    </section>






    <section style="height: 4rem">

    </section>


    <h2 style="text-align: center; font-size: 3rem;">UPCOMMING EVENTS</h2>


    <section style="height: 1rem">

    </section>

    <section style="width :100%;">

      <div class="container-fluid">
        <div class="row flex-row flex-nowrap">

          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="col-12 card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5">
              <div class="card-img-block">
                <img class="card-img-top" src="http://www.northsouth.edu/assets/images/PRO-Office/19conv-3.jpg" alt="Card image cap">
              </div>
              <div class="card-body pt-0">
                <h5 class="card-title">19th Convocation of NSU</h5>
                <p class="card-text">On Thursday, February 18, North South University held its 19th Convocation for our new graduates. It was a grand ceremony to bid farewell to our former students, now new graduates, with both a heavy and a happy
                  heart.</p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>

        </div>
      </div>


    </section>







    <section style="height: 4rem">

    </section>


    <h2 style="text-align: center; font-size: 3rem;">All Clubs</h2>


    <section style="height: 1rem">

    </section>




    <section style="width :100%;">

      <div class="container-fluid">
        <div class="row flex-row">

          <!--Grid column-->
          <div class="col-4 col-md-4 mt-2 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsuyesclub.png" data-holder-rendered="true">
            <p style="text-align:center;" ><a href="yesClub/index.html">Vist Website</a></p>
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsucecclub.png" data-holder-rendered="true">
              <p style="text-align:center;" ><a href="eceClub/index.html">Vist Website</a></p>
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsuearthclub.png" data-holder-rendered="true">
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsufinanceclub.png" data-holder-rendered="true">
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsumcclub.png" data-holder-rendered="true">
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsustudentclub.png" data-holder-rendered="true">
            <p style="text-align:center;" ><a href="CDCClub/index.html">Vist Website</a></p>
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsuyefclub.png" data-holder-rendered="true">
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsuhrclub.jpg" data-holder-rendered="true">
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsuyesclub.png" data-holder-rendered="true">
            <p style="text-align:center;" ><a href="yesClub/index.html">Vist Website</a></p>
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsucecclub.png" data-holder-rendered="true">
            <p style="text-align:center;" ><a href="eceClub/index.html">Vist Website</a></p>
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsuearthclub.png" data-holder-rendered="true">
          </div>
          <div class="col-4 col-md-4 mt-3 col-sm-6 col-lg-2">
            <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/nsustudentclub.png" data-holder-rendered="true">
            <p style="text-align:center;" ><a href="CDCClub/index.html">Vist Website</a></p>
          </div>


        </div>

      </div>


    </section>


  </section>



  <section>


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
                  <li><a href="#">Payment Center</a></li>
                  <li><a href="#">Contact Directory</a></li>
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
                  <li><a href="http://www.northsouth.edu/">University Website</a></li>
                  <li><a href="http://www.northsouth.edu/academic/academic-calendar/">Academic Calendar</a></li>
                  <li><a href="https://rds3.northsouth.edu/">NSU Portal</a></li>
                  <li><a href="http://www.northsouth.edu/nsu-announcements/">NSU Announcements</a></li>
                  <li><a href="http://www.northsouth.edu/tuition-fees.html">Tuition and Other Fees</a></li>
                  <li><a href="http://institutions.northsouth.edu/alumniportal/public/">Alumni portal</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <!--Column1-->
              <div class="footer-pad">
                <h4>Top Clubs</h4>
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
              <p class="text-center">&copy; Copyright 2018 - Company Name. All rights reserved.</p>
            </div>
          </div>


        </div>
      </div>
    </footer>



  </section>






</body>



</html>
