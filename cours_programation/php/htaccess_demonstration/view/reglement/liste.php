<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>facturation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- <link rel="stylesheet" href="./public/js/jquery/jquery.min.js"> -->
        <link rel="stylesheet" href="./public/fontawesome/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="./public/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="./public/css/ProgesisionBare.css">
        <script src="./public/js/listeReglement.js"></script>
    </head>
    <body>
    <div> 
       
       <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Gestion De Paiment</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="factures">Gestion des factures</a></li>
                    <li class="active"><a href="reglements">Gestion des reglements</a></li>
                </ul>
            </div>
        </nav>
        <!-- facturation -->
        
        <div class="contenaire col-md-6">
            <div class="panel panel-primary TableauF">
                <div class="listeFacture">
                    <h4 class="afficheInfo"><i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> Liste des reglements</h4>
                </div>
                <div class="panel-body paneTable">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Date</td>
                                <td>Facture</td>
                            </tr>
                        </thead>
                        <tbody class="tableauListe">
                            
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">DITI 4</div>
            </div>
        </div>

        <!-- formulaire -->
        <div class="contenaire col-md-6">
            <div class="panel panel-primary forms">
                <div class=" infoProgessionF">
                   <h4 class="afficheInfoF"><i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> Formulaire de gestion des reglements</h4> 
                </div>
                <div class="panel-body panelForm">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="date">Date de reglements</label>
                            <input class="form-control dates" type="date" name="date" id="date">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="date">Factures</label>
                            <select class="form-control listeEtat" name="idF" id="idF">
                            <option value=''>Faites votre choix</option>

                            </select>
                        </div>
                        <div class="form-group btnAction">
                            <ul class="pager">
                                <li class="ajouter">
                                    <button type="button" class="btn btn-default btn-sm ajouterF  disabled">
                                        <span class="glyphicon glyphicon-save"></span> Save
                                    </button>
                                </li>
                                <li class="annuler ">
                                    <button type="button" class="btn btn-default btn-sm annulerF disabled">
                                        <span class="glyphicon glyphicon-remove"></span> Remove
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div id="myProgress">
                            <ul class="pager">
                                <li class="ajouter">
                                     <div id="myBar"></div> 
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">DITI 4</div>
            </div>
        </div>

      
<!-- 
        :root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}  -->