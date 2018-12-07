<?php

if($_POST["submit"]) {
    $recipient="info@aesstech.com";
    $subject="Form Submission";
    $fullname=$_POST["fullname"];
    $email=$_POST["email"];
    $contactnumber=$_POST["contactnumber"];
    $whatsappnumber=$_POST["whatsappnumber"];
    $state=$_POST["state"];
    $district=$_POST["district"];
    $location=$_POST["location"];
    $pincode=$_POST["pincode"];
    $message=$_POST["message"];

    $mailBody="Name: $fullname\nEmail: $email\nContact Number:\n$contactnumber:\n$message\nWhatsapp Number: $whatsappnumber\nState: $state\nDistrict: $district\nLocation: $location\nPin Code: $pincode\nMessage: $message";
    mail($recipient, $subject, $mailBody, "From: $fullname <$email>");
    $thankYou="<p>Thank you! We will contact you soon.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/harabara/stylesheet.css" type="text/css" charset="utf-8" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">


    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap bg-white">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="tel:+919745511140" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+91 9745511140</span>
                </a>
                <a href="mailto:info@aesstech.com" class="d-flex align-items-center">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">info@aesstech.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-navbar bg-light">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="index.html" class="aesstechname"><strong>aesstech</strong></a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href="index.html">Home</a>
                      <!-- <ul class="dropdown arrow-top">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li class="has-children">
                          <a href="#">Sub Menu</a>
                          <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                          </ul>
                        </li>
                      </ul> -->
                    </li>

                    <!-- <li><a href="getquote.html">Get Quote</a></li> -->
                    <!-- <li><a href="services.html">Services</a></li> -->
                    <li><a href="about.html">About Us</a></li>
                    <li><!-- <li class="has-children active"> -->
                      <a href="products.html">Our Products</a>
                      <!-- <ul class="dropdown arrow-top">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul> -->
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/maxresdefault.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <a href="#getquote" class="btn btn-primary aesstech"><h1>Get <strong>In Touch</strong></h1></a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5" id="getquote">

            <form class="p-5 bg-white" method="post">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name" name="fullname">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address" name="email">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Contact Number</label>
                  <input type="tel" id="contactnumber" class="form-control" placeholder="Contact Number" name="contactnumber">
                </div>
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Whatsapp Number</label>
                  <input type="tel" id="whatsappnumber" class="form-control" placeholder="Whatsapp Number" name="whatsappnumber">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">State</label>
                  <input type="text" id="state" class="form-control" placeholder="State" name="state">
                </div>
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">District</label>
                  <input type="text" id="district" class="form-control" placeholder="District" name="district">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Location</label>
                  <input type="text" id="location" class="form-control" placeholder="Location" name="location">
                </div>
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Pin Code</label>
                  <input type="number" id="pincode" class="form-control" placeholder="Pin Code" name="pincode">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </div>
            </form>
            <?=$thankYou ?>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <!-- <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Navami, Mummys Colony, Kowdiar P. O, Thiruvananthapuram, Kerala – 695003</p> -->

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:+919745511140">+91 9745511140</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailto:info@aesstech.com">info@aesstech.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Product Consultant</h3>
              <p class="mb-0 font-weight-bold">Name</p>
              <p class="mb-4"><a href="#">Rejith S P</a></p>
              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:+919946067330">+91 9946067330</a></p>
              <p class="mb-0 font-weight-bold">Email ID</p>
              <p class="mb-4"><a href="mailto:rejith.sp@aesstech.com">rejith.sp@aesstech.com</a></p>
              <!-- <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>


<!--
    <div class="promo py-5 bg-primary" data-aos="fade">
      <div class="container text-center">
        <h2 class="d-block mb-0 font-weight-light text-white"><a href="#" class="text-white d-block">Visit Our Office</a></h2>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">


        <div class="row">
          <div class="col-lg-7">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Navigations</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Quick Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row mb-5">
              <div class="col-md-12"><h3 class="footer-heading mb-4">Europe</h3></div>
              <div class="col-md-6">
                <p>London - 2398 <br> 10 Japson Street</p>
              </div>
              <div class="col-md-6">
                Tel. + (123) 3240-345-9348 <br>
                Mail. europe@youdomain.com
              </div>
            </div>

            <div class="row">
              <div class="col-md-12"><h3 class="footer-heading mb-4">USA</h3></div>
              <div class="col-md-6">
                <p>New York - 2398 <br> 10 Hadson Carl Street</p>
              </div>
              <div class="col-md-6">
                Tel. + (123) 3240-345-9348 <br>
                Mail. usa@youdomain.com
              </div>
            </div>

          </div>
        </div> -->
        <div class="pt-2 mt-2 text-center">
          <div class="col-md-12">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | <a href="mailto:info@aesstech.com">info@aesstech.com</a></p>
            <!-- </p> -->
          </div>

        </div>
      </div>
    <!-- </footer> -->
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>



  </body>
</html>

<?php
              
if(isset($_POST['submit']))
{
$fullname=$_POST['fullname'];  
$email=$_POST['email'];
$contactnumber=$_POST['contactnumber'];
$whatsappnumber =$_POST['whatsappnumber'];
$district =$_POST['district'];
$location =$_POST['location'];
$pincode =$_POST['pincode'];
$message=$_POST['message'];

date_default_timezone_set('Asia/Kolkata');
$date= date('l jS \of F Y h:i:s A');

$formdata = 	"\r\n" ."\r\n" ."\r\n" ."\r\n" ."\r\n" ."\r\n" .
		'Timestamp		: ' . $date. "\r\n" . 
		'Full Name		: ' . $fullname . "\r\n" . 
		'Email			: ' . $email. "\r\n" . 
		'Contact Number		: ' . $contactnumber . "\r\n" . 
		'Whatsapp Number		: ' . $whatsappnumber. "\r\n" . 
		'District		: ' . $district . "\r\n" . 
		'Location 		: ' . $location  . "\r\n" . 
		'Pincode 		: ' . $pincode . "\r\n" . 
		'Message			: ' . $message. "\r\n";
		
$mailbody= 	'Timestamp: ' . $date. "\r\n" . 
		'Full Name: ' . $fullname . "\r\n" . 
		'Email	: ' . $email. "\r\n" . 
		'Contact Number: ' . $contactnumber . "\r\n" . 
		'Whatsapp Number: ' . $whatsappnumber. "\r\n" . 
		'District: ' . $district . "\r\n" . 
		'Location: ' . $location  . "\r\n" . 
		'Pincode: ' . $pincode . "\r\n" . 
		"\r\n".
		'<Message>' . "\r\n\r\n". $message;
		
mail("mohamednayif@gmail.com","Form Submission",$mailbody,$email);

$fp = fopen('data.txt', 'a');
fwrite($fp, $formdata);
fclose($fp);


}
?>
