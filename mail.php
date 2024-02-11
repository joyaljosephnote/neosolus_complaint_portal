<?php

$name = $_POST['w3lName'];
$subject = "Complaint Registration";
$mobileNumber = $_POST['w3lMobileNumber'];
$senderEmail = $_POST['w3lSender'];
$assetId = $_POST['w3lassetId'];
$message = $_POST['w3lMessage'];

$mailheader = "Form:".$name."<".$senderEmail.">\r\n"

$recipient = "neosolus2023@gmail.com";

mail($recipient, $subject, $message, $mailheader)

or die("Error!");

echo'

<html lang="eng">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Secttore Industrial Category Bootstrap Responsive Web Template | Error </title>
  <link href="//fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
  <!--/Error-Page-->
  <!--/Error-->
  <div class="w3l-error-grid py-5 text-center">
    <div class="container py-lg-4 py-md-3">
        <div class="error-block">
            <!-- <h1>4<span class="fas fa-smile-wink"></span>4</h1> -->
            <h2>Success!</h2>
            <p class="mt-4">Your complaint has been registered successfully. Our team will contact you within 24 hours on business days.</p>
            <a href="index.html" class="btn back-button mt-md-5 mt-4"> <span class="fa fa-arrow-left mr-2"></span> Back</a>
        </div>
    </div>
</div>
  <!--//Error-->
  <!--//Error-Page-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>



';

?>