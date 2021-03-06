<?php session_start(); ?> <!-- starting session -->
<?php require 'function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();


 ?>


<!DOCTYPE html>
<html>

<head>
  <!-- FILE: HEADER 1 -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Oswald" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/material/theme.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.torrentbd.net/torrent/themes/material/static/favicon/apple-touch-icon.png">
  <link rel="manifest" href="https://www.torrentbd.net/torrent/themes/material/static/favicon/site.webmanifest">
  <script type="text/javascript" src="https://www.torrentbd.net/torrent/themes/material/jquery-2.1.1.min.js"></script>
  <script src="https://www.torrentbd.net/torrent/themes/material/jquery.cookie.js"></script>
  <script type="text/javascript" src="https://www.torrentbd.net/torrent/themes/material/code264.js"></script>


  <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/material/scheme_01_009.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/material/inhouse_007.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/immutables.css" media="screen,projection" />
  <!--sweetalert lib-->
<script src="assets/js/sweetalert.min.js"></script>
<link rel="stylesheet" href="assets/css/sweetalert.min.css">

  <style>
    .inline-block {
      display: inline-block;
    }

    .personal-links h6 {
      font-size: 1.05em;
      margin: 10px auto;
    }

    .personal-links-ul li {
      list-style-type: none;
      padding: 5px 4px;
      display: inline-block;
      font-size: .9em;
    }

    .personal-links-ul li a:hover {
      font-weight: normal;
      text-decoration: underline;
    }

    @media only screen and (max-width: 1400px) {
      nav ul a {
        padding: 0 10px;
      }
    }

    .side-nav li:hover,
    .side-nav li:active {
      background: #006064;
      color: whitesmoke;
    }

    .side-nav li:hover>a {
      color: whitesmoke !important;
    }

    .sidenav-btn i {
      font-size: 20px !important;
    }
  </style>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".button-collapse").sideNav();
      $('.modal-trigger').leanModal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .8, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
      });
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd'
      });
      $('.materialboxed').materialbox();
      $('select').material_select();
      $('.option').material_select();
    });
  </script>
  <title>NSUClub: Donation</title>


  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45626362-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-45626362-2');
    </script>
    -->

</head>


<body>
  <header>
    <!-- Modal Structure -->










  </header>



  <main>

    <div class=" container">

      <!-- middle block -->
      <div class="col l9 m12 s12" style="margin-top:6px">



        <style>
          .tabs .tab a {
            font-size: 13pt;
          }

          .amount {
            font-weight: 300;
          }

          .fac-list {
            padding: 15px;
          }

          .fac-list li {
            list-style-type: square;
          }

          .gateway {
            min-height: 300px;
          }

          .credentials {
            font-weight: 300;
            font-size: 15pt;
          }

          .bankField,
          .rocketField,
          .paypalField {
            display: none;
          }

          .bonus {
            font-style: italic;
            font-weight: 600;
            color: #ffab40;
            margin-right: 4px;
            display: none;
          }

          .bonus-ln {
            font-weight: normal;
          }

          .donation-card,
          .donation-row .card-panel {
            padding: 18px 20px;
          }

          .donation-card {
            background: #546e7a;
          }

          .donation-card li {
            background: inherit;
          }

          .donation-gateway {
            min-height: 300px;
          }

          .donation-form-panel {
            background: #eceff1;
          }
        </style>

        <!-- <div class="teal darken-3" style="color: white; padding: 7px 25px;"><h5>Donation</h5></div> -->

        <div class="row">
          <div class="col s12 content-title">
            <h3 style="text-align:center;">Payment Mathod</h3>
          </div>
        </div>

        <div class="row donation-row cbg">

          <div style="margin-bottom:35px" class="col s12">
            <ul class="tabs">
              <li class="tab col s12 m12"><a href="#facilities">Facilities</a></li>
              <li class="tab col s12 m12"><a href="#procedure">Methods</a></li>
              <li class="tab col s12 m12"><a href="#form">Form</a></li>
              <li class="tab col s12 m12"><a href="#faq">FAQ</a></li>
            </ul>
          </div>

          <!-- #faciilities -->
          <div id="facilities" class="col s12" style="float: none;margin: 0 auto;">
            <div class="row">

              <div class="col s12 m6 l6">
                <div class="card-panel donation-card">
                  <h5 class="amount">৳ 200.00</h5>
                  <ul class="fac-list">
                    <li>You can send 100 message to yur members</li>
                    <li>Ypu can uplaod your 1 event notification</li>
                    <li>You can send notification to all members for 1 days</li>
                  </ul>
                </div>
              </div>

              <div class="col s12 m6 l6">
                <div class="card-panel donation-card">
                  <h5 class="amount">৳ 1000.00</h5>
                  <ul class="fac-list">
                    <li>You cam send 3000 messages to your members</li>
                    <li>You can upload 2 event notification</li>
                    <li>You can send notification to all members for 15 days</li>
                  </ul>
                </div>
              </div>

              <div class="col s12 m6 l6">
                <div class="card-panel donation-card">
                  <h5 class="amount">৳ 5000.00</h5>
                  <ul class="fac-list">
                    <li>You cam send 5000 messages to your members</li>
                    <li>You can upload 10 event</li>
                    <li>You can send notification to all members for 30 days</li>
                    <li>Your members can use chatroom for 30 days</li>
                    <li>Update your 1 customise feature</li>
                  </ul>
                </div>
              </div>

              <div class="col s12 m6 l6">
                <div class="card-panel donation-card">
                  <h5 class="amount">৳ 10000.00</h5>
                  <ul class="fac-list">
                    <li>You cam send unlimmited messages to your members for 3 months</li>
                    <li>You can upload event freely for 3 months</li>
                    <li>You can send notification to all members for 90 days</li>
                    <li>Your members can use chatroom for 90 days</li>
                    <li>Update your customise feature</li>

                  </ul>
                </div>
              </div>



            </div>
          </div> <!-- #facilities -->

          <!-- #procedure -->
          <div id="procedure" class="col s12">
            <div class="row">
              <div class="col s12 m6 l6">
                <div class="donation-gateway card-panel" style="text-align:center">
                  <img class="responsive-img tooltipped" src="https://www.torrentbd.net/torrent/donation/img/logo/logo-bkash.png" data-position="right" data-delay="50" data-tooltip="bKash"> <br><br><br>
                  <p class="credentials">
                    bKash Account (Personal): <br>
                    01675708783
                  </p>
                </div>
              </div>

              <div class="col s12 m6 l6">
                <div class="donation-gateway card-panel" style="text-align:center">
                  <img style="max-width: 200px" class="responsive-img tooltipped" src="https://www.torrentbd.net/torrent/donation/img/logo/logo-rocket-1.jpeg" data-position="right" data-delay="50" data-tooltip="ROCKET (Dutch Bangla Mobile Banking)">
                  <br><br><br>

                  <p class="credentials">
                    DBBL Mobile Banking Account: <br>
                    016757087835
                    <!-- <i style="font-size: .75em;">Temporarily Unavailable</i> -->
                  </p>
                </div>
              </div>

              <div class="col s12 m6 l6">
                <div class="donation-gateway card-panel" style="text-align:center">
                  <img class="responsive-img tooltipped" src="https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/big_2/public/feature/images/united_commercial_bank.jpg?itok=AuasI77g" data-position="right" data-delay="50"
                    data-tooltip="The UCB Bank Limited" style="margin-left:25px; height:100px;">
                  <img style="max-width: 150px;" class="responsive-img tooltipped" src="http://abbl.com/wp-content/uploads/2015/04/rebranding-img-new.png" data-position="right" data-delay="50" data-tooltip="AB Bank Limited" style=" height:100px;">
                  <p class=" credentials" style="margin-top: 50px; font-size:40px;">
                  <br><br>
                  Account number is hide for now. It will be available when the page is publish.
                  </p>
                </div>
              </div>

              <div class="col s12 m6 l6">
                <div class="donation-gateway card-panel" style="text-align:center">
                  <img style="max-width: 160px" class="responsive-img tooltipped" src="https://www.torrentbd.net/torrent/donation/img/logo-paypal.png" data-position="right" data-delay="50" data-tooltip="PayPal"> <br><br><br><br>

                  <p class="credentials">
                    Account number is hide for now. It will be available when the page is publish.
                  </p>
                </div>
              </div>
            </div>
          </div> <!-- #procedure -->

          <!-- #form -->
          <div id="form" class="col s12">
            <div class="row">
              <div class="col s12 m8 l7" style="float: none;margin: 0 auto;">
                <div class="card-panel donation-form-panel">
                  <form action="payment.php" method="POST">
                    <div class="card-content">
                      <div class="row">
                        <h5 class="col s12 center" style="font-weight:300; color:#009688; padding-bottom:10px">Hi mdmarufbillah! Please submit this form after donation:</h5> <br><br>
                        <div class="input-field col s12">
                          <label for="date">Date of Donation</label>
                          <input id="date" name="date" type="date" class="datepicker" required="required">
                        </div>
                        <div class="input-field col m9 s8">
                          <input id="amount" name="amount" type="text" class="validate" required="required">
                          <label for="amount">Amount</label>
                        </div>
                        <div class="input-field col m3 s4">
                          <select name="currency">
                            <option value="BDT" selected>BDT</option>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="CAD">CAD</option>
                            <option value="AUD">AUD</option>
                          </select>
                        </div>
                        <div class="col s12">
                          <br>
                          <h6>Donation Method:</h6>
                          <p>
                            <input class="method" name="method" type="radio" id="bkash" value="bkash" checked="checked" />
                            <label for="bkash">bKash</label>
                          </p>
                          <p>
                            <input class="method" name="method" type="radio" id="rocket" value="rocket" />
                            <label for="rocket">ROCKET</label>
                          </p>
                          <!-- <p>
                            <input class="method" name="method" type="radio" id="bank" value="bank" />
                            <label for="bank">Bank Deposit</label>
                          </p> -->
                          <p>
                            <input class="method" name="method" type="radio" id="paypal" value="paypal" />
                            <label for="paypal">PayPal</label>
                          </p>
                          <br>
                        </div>

                        <div class="input-field col s12 bkashField">
                          <input id="trxid" name="trxid" type="text" class="validate">
                          <label for="trxid">TrxID (Transaction ID)</label>
                        </div>
                        <div class="input-field col s12 bkashField">
                          <input id="agent_number" name="agent_number" type="text" class="validate">
                          <label for="agent_number">Agent Number / bKash Number</label>
                        </div>

                        <div class="input-field col s12 rocketField">
                          <input id="txnid" name="txnid" type="text" class="validate">
                          <label for="txnid">TxnId (Transaction ID)</label>
                        </div>
                        <div class="input-field col s12 rocketField">
                          <input id="rocket_number" name="rocket_number" type="text" class="validate">
                          <label for="rocket_number">Agent Number / ROCKET Account Number</label>
                        </div>

                        <div class="input-field col s12 bankField">
                          <h6>Bank:</h6>
                          <p>
                            <input class="method" name="bank_name" type="radio" id="cbl" value="CBL" checked="checked" />
                            <label for="cbl">UCB Bank</label>
                          </p>
                          <p>
                            <input class="method" name="bank_name" type="radio" id="scb" value="SCB" />
                            <label for="scb">AB bank</label>
                          </p>
                          <p>
                            <input class="method" name="bank_name" type="radio" id="dbbl" value="DBBL" />
                            <label for="dbbl">Dutch Bangla Bank</label>
                          </p>
                          <br>
                        </div>
                        <!-- <div class="input-field col s12 bankField">
                          <input id="depositor" name="depositor" type="text" class="validate">
                          <label for="depositor">Depositor Name</label>
                        </div>
                        <div class="input-field col s12 bankField">
                          <input id="bank_account_number" name="bank_account_number" type="text" class="validate">
                          <label for="bank_account_number">Account Number (Applicable for online transfer)</label>
                        </div> -->

                        <div class="input-field col s12 paypalfield">
                          <input id="pp_account" name="pp_account" type="email" class="validate">
                          <label for="pp_account">PayPal Account</label>
                        </div>
                        <div class="input-field col s12 paypalfield">
                          <input id="pp_transaction_id" name="pp_transaction_id" type="text" class="validate">
                          <label for="pp_transaction_id">PayPal Transaction ID</label>
                        </div>

                        <div class="input-field col s12">
                          <input id="phone" name="phone" type="text" class="validate">
                          <label for="phone">Contact Number (Optional)</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="further_info" name="further_info" class="materialize-textarea"></textarea>
                          <label for="further_info">Further Info (Optional)</label>
                        </div>
                      </div>
                    </div>
                    <div class="card-action">
                      <div class="row">
                        <div class="col m6" style="padding-top:20px">
                          <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> <!-- #form -->


          <?php
            if (isset($_POST['submit'])) {


              $date = $_POST['date'];
              $amount = $_POST['amount'];
              $currency = $_POST['currency'];
              $method = $_POST['method'];
              $t_id = $_POST['trxid'];
              $t_number = $_POST['agent_number'];
              $c_number = $_POST['phone'];
              $info = $_POST['further_info'];

              $sql="INSERT INTO payment VALUES (NULL,'$date',$amount,'$currency','$method',$t_id,$t_number,$c_number,'$info')";
              $sql_result=mysqli_query($db,$sql);
              if (!$sql_result) {
              ?><script>swal("Wrong Info","Input Error", "error");</script> <?php
              }
              else{
                ?><script>swal("Success","Input Successfull", "success");</script> <?php
              }
            }
           ?>

          <!-- #faq -->
          <div id="faq" class="col s12">
            <ul class="collapsible popout" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">Why payment?</div>
                <div class="collapsible-body flow-text">
                  <p>payment for your update. get more facilities and updates. security and extra database. large amount of student capability.
                  </p>
                </div>
              </li>
              <li>
                <div class="collapsible-header">I want to payment and update my account? What to do?</div>
                <div class="collapsible-body flow-text">
                  <p>We accept payment via bKash, ROCKET, Bank deposits and PayPal. Please click on the Methods tab for details. Choose the method more convenient to you. After payment you have
                    to fill in thepayment Form with required information and submit it. You will receive a confirmation PM once the payment is verified.
                  </p>
                </div>
              </li>
              <li>
                <div class="collapsible-header">How long does it take to update my account?</div>
                <div class="collapsible-body flow-text">
                  <p>Account is updated within 12 hours of form submission. Once your account is updated, you will be notified via a confirmation PM. However, if for some reason you do not receive any confirmation PM within 12 hours, please submit a
                    Support.
                  </p>
                </div>
              </li>
              <li>
                <div class="collapsible-header">What are the TrxID, Agent / Account Number for bKash?</div>
                <div class="collapsible-body flow-text">
                  <p>
                    <b>TrxID:</b> Every bKash transaction has a Unique ID which is called TrxID. bKash provides the TrxID to both sender and receiver through an sms immediately after a transaction. It helps in identifying or verifying the
                    transaction. <br><br>
                    <b>Agent Number / bKash Number:</b> The number from which the money is sent. If TrxID cannot be provided for some reason, the agent number can be used for verification.
                  </p>
                </div>
              </li>
              <li>
                <div class="collapsible-header">What are the TxnId, Agent / Account Number for ROCKET?</div>
                <div class="collapsible-body flow-text">
                  <p>
                    <b>TxnId:</b> Similar to TrxID for bKash. See the aforementioned answer.<br><br>
                    <b>Agent Number / ROCKET Account Number:</b> Similar to Agent / bKash Number. See the aforementioned answer.
                  </p>
                </div>
              </li>
            </ul>
          </div> <!-- #faq -->

        </div> <!-- main row -->


        <button class="btn waves-effect waves-light" type="submit" name="action">

          Back to home page

        </button>


        <script>
          $(document).ready(function() {

            $(".bankField").hide();
            $(".rocketField").hide();
            $(".paypalfield").hide();

            document.getElementById('bank').onchange = function() {
              $(".bkashField").hide();
              $(".rocketField").hide();
              $(".paypalfield").hide();
              $(".bankField").show();
            }
            document.getElementById('bkash').onchange = function() {
              $(".bankField").hide();
              $(".rocketField").hide();
              $(".paypalfield").hide();
              $(".bkashField").show();
            }
            document.getElementById('rocket').onchange = function() {
              $(".bankField").hide();
              $(".bkashField").hide();
              $(".paypalfield").hide();
              $(".rocketField").show();
            }
            document.getElementById('paypal').onchange = function() {
              $(".bankField").hide();
              $(".bkashField").hide();
              $(".rocketField").hide();
              $(".paypalfield").show();
            }
          }); //ready
        </script>

      </div> <!-- middle block -->
    </div> <!-- .row ends -->
  </main>










  <footer class="page-footer blue-grey darken-2" style="padding-top:0px">
    <div class="footer-copyright">
      <div class="container">
        © CSE299S17G04NSU | by mdmarufbillah
        <a class="grey-text text-lighten-4 right">Served in 0 secs</a> </div>
    </div>
  </footer>

  <script type="text/javascript" src="https://www.torrentbd.net/torrent/themes/material/marquee.js"></script>

  <script>
    function init() {
      var imgDefer = document.getElementsByTagName('img');
      for (var i = 0; i < imgDefer.length; i++) {
        if (imgDefer[i].getAttribute('data-src')) {
          imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
        }
      }
    }

    $(window).load(function() {

      init();


    });
  </script>
  <!-- FILE: FOOTER 1 -->
  
</body>

</html>
