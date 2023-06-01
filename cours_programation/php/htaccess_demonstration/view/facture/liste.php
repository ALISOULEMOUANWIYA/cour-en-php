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
        <script src="./public/js/listeFactures.js"></script>
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
                </ul>
            </div>
        </nav>
        <!-- facturation -->
        <div class="contenaire col-md-6">
            <div class="panel panel-primary TableauF">
                <div class="listeFacture ">
                   <h4 class="afficheInfo"><i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> Liste des factures</h4> 
                </div>
                <div class="panel-body paneTable">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Date</td>
                                <td>Consommation</td>
                                <td>prix</td>
                                <td>Etat de facture</td>
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
                   <h4 class="afficheInfoF"><i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> Formulaire de gestion des factures</h4> 
                </div>
                <div class="panel-body panelForm">
                    <form action="factureController" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="date">Date de facturation</label>
                            <input class="form-control dateFacture" type="date" name="date" id="date">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="consommation">Consommation de la facture</label>
                            <input class="form-control ConsommationFacture" type="number" name="consommation" id="consommation">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prix">Prix de la facture</label>
                            <input class="form-control prixFacture" type="number" name="prix" id="prix">
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

