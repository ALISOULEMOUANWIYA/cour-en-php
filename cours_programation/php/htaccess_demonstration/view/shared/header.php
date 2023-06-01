<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>facturation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="public/fontawesome/css/font-awesome.css">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery/jquery.min.js"></script>
        <script src="public/js/bootstrap_js/bootstrap.min.js"></script>
        <script src="js.js"></script>
    </head>
    <body>
    <div>
       
       <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Gestion De Paiment</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="factures">Gestion des factures</a></li>
                    <li><a href="reglements">Gestion des reglements</a></li>
                    <li><a href="#"><small class="text-info"><?= Utils::afficheDate()?></small></a></li>
                </ul>
            </div>
        </nav>
