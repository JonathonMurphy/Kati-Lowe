<!doctype html>
<html lang="en">
  <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->


	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <?php
    if($Is_Index == true){
      echo'
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/jquery.fancybox.css">
  	  <link rel="stylesheet" href="css/style.css">
      ';
    }else{
      echo'
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/jquery.fancybox.css">
  	  <link rel="stylesheet" href="../css/style.css">
      ';
    }
    ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald|Rammetto+One" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
    <link rel="manifest" href="imgs/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo $Page_Title ?></title>
  </head>
