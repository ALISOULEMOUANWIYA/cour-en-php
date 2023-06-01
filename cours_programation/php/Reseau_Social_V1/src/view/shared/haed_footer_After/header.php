<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>
    <?php
    $view = isset($_SESSION["accueille"]) ? $_SESSION["accueille"] : NULL;
    switch ($view) {
      case 'accueillePage':
        echo "accueille";
        break;
    }
    ?>
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="public/assets/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="public/assets/css/scroll.css">
  <link rel="stylesheet" href="public/assets/css/accueille.css">
  <!-- <link rel="stylesheet" href="public/assets/css/style_barBottom.css"> -->
</head>

<body>