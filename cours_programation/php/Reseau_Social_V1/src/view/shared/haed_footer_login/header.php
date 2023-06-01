<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <title>
    <?php
    $view = isset($_GET['view']) ? $_GET['view'] : NULL;
    switch ($view) {
      case 'Inscription':
        echo "Inscription";
        break;
      default:
        echo "Authetification";
        break;
    }
    ?>
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="public/assets/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="public/assets/css/style0.css">
  <link rel="stylesheet" href="public/assets/css/style.css">
  <link rel="stylesheet" href="public/assets/css/style3.css">
  <link rel="stylesheet" href="public/assets/css/fichier.css">
</head>

<body>