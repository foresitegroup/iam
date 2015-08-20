<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Investment Account Manager<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css" type="text/css">

    <script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        $(".testimonials").cycle();
      });
    </script>

    <!--[if lt IE 9]><script src="inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->
  </head>
  <body>

    <header>
      <a href="."><img src="images/logo.png" alt="Investment Account Manager" id="logo"></a>

      <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
      <input type="checkbox" id="show-menu" role="button">

      <nav id="menu">
        <?php include "menu.php"; ?>
      </nav>
    </header>
