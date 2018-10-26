<!doctype html>
<html lang="en">
  <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->


	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117935552-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117935552-3');
    </script>




    <!-- CSS -->
    <?php

    if($Is_Index == true){
      echo'
      <!--Address Bar Color -->
      <!-- Chrome, Firefox OS and Opera -->
      <meta name="theme-color" content="#fa8c03">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#fa8c03">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-status-bar-style" content="#fa8c03">
      ';
    } else if ($About_Me == true) {
      echo'
      <!--Address Bar Color -->
      <!-- Chrome, Firefox OS and Opera -->
      <meta name="theme-color" content="#00AD5E">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#00AD5E">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-status-bar-style" content="#00AD5E">
      ';
    } else {
      echo'
      <!--Address Bar Color -->
      <!-- Chrome, Firefox OS and Opera -->
      <meta name="theme-color" content="#ffffff">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#ffffff">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
      ';
    }

    if($Is_Index == true){
      echo'
      <!-- CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/jquery.fancybox.css">
  	  <link rel="stylesheet" href="css/style.css">

      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon-16x16.png">
      <link rel="manifest" href="imgs/favicon/site.webmanifest">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      ';
    }else{
      echo'
      <!-- CSS -->
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/jquery.fancybox.css">
  	  <link rel="stylesheet" href="../css/style.css">

      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="../imgs/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../imgs/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../imgs/ffavicon/avicon-16x16.png">
      <link rel="manifest" href="../imgs/favicon/site.webmanifest">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      ';
    }
    ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald|Rammetto+One" rel="stylesheet">


    <title><?php echo $Page_Title ?></title>
  </head>
