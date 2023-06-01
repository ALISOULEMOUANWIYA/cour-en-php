			<div classe="TableauBordContent bg-dark text-white">
			    <!-- LISTES DES TABLES -->
			    <div class="card p-3 ">
			        <nav>
			            <div class="nav nav-tabs mx-auto bg-dark text-white rounded-pill shadow mb-2 p-2" id="nav-tab" role="tablist">
			                <a class="nav-item nav-link active rounded-pill" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Liste clients</a>
			                <a class="nav-item nav-link rounded-pill" id="nav-cadre-Client" data-toggle="tab" href="#nav-cadreClient" role="tab" aria-controls="nav-cadreClient" aria-selected="false">Liste card clients</a>
			                <a class="nav-item nav-link rounded-pill" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Les inpresions réalisées</a>
			                <a class="nav-item nav-link rounded-pill" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">clients Masquées</a>
			                <a class="nav-item nav-link rounded-pill" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">clients Supprimer</a>
			                <a class="nav-item nav-link rounded-pill" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Email: user <i class="fa fa-retweet" aria-hidden="true"></i> clients</a>
			            </div>
			        </nav>
			        <div class="tab-content bg-dark text-white" id="nav-tabContent">
			            <!-- liste des clients -->
			            <div class="tab-pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			                <div class="p-3 ">
			                    <div class="row rounded-pill shadow mb-3 p-2">
			                        <div class="col-sm-4 ">
			                            <h4 class=" box-title align-bottom">Liste des clients</h4>
			                        </div>
			                        <div class="col-sm-8">
			                            <div class="row">
			                                <div class="col-sm-12">
			                                    <button class="btn btn-primary shadow" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
			                                        <i class="menu-icon fa fa-user-plus"></i>
			                                    </button>
			                                    <button class="btn btn-dark shadow">
			                                        <i class="menu-icon fa fa-pencil-square-o"></i>
			                                    </button>
			                                    <button class="btn btn-info shadow">
			                                        <i class="menu-icon fa fa-print"></i>
			                                    </button>
			                                    <button class="btn btn-danger  shadow">
			                                        <i class="menu-icon fa fa-trash"></i>
			                                    </button>
			                                    <button class="btn btn-light actualiserbtn shadow">
			                                        <i class="menu-icon fa fa-refresh"></i>
			                                    </button>
			                                    <button class="btn btn-secondary actualiserbtn shadow">
			                                        <i class="menu-icon fa fa-envelope"></i>
			                                    </button>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                    <table id="ListeTableUser" class=" shadow table table-striped table-bordered " style="width:100%" id="bootstrap-data-table">
			                        <thead class="text-center  shadow p-4 mb-4 bg-white">
			                            <tr>
			                                <th>
			                                    <button class="btn btn-warning">
			                                        <i class="menu-icon fa fa-check-circle"></i>
			                                    </button>
			                                </th>
			                                <th>Nom</th>
			                                <th>Prenom</th>
			                                <th>Email</th>
			                                <th>Village</th>
			                                <th>Abonnement</th>
			                                <th>Reglement</th>
			                            </tr>
			                        </thead>
			                        <tbody class="TableUser text-center shadow p-4 mb-4 bg-white">

			                        </tbody>
			                        <tfoot class="text-center shadow p-4 mb-4 bg-white">
			                            <tr>
			                                <th>
			                                    <div class=" form-check">
			                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>

			                                    </div>
			                                </th>
			                                <th>Nom</th>
			                                <th>Prenom</th>
			                                <th>Email</th>
			                                <th>Village</th>
			                                <th>Abonnement</th>
			                                <th>Reglement</th>
			                            </tr>
			                        </tfoot>
			                    </table>
			                </div>
			            </div>
			            <!-- /#liste des clients -->

			            <!-- liste des compteurs -->
			            <div class="tab-pane fade" id="nav-cadreClient" role="tabpanel" aria-labelledby="nav-cadre-Client">
			                <div class=" p-3 ">
			                    <div class="row rounded-pill shadow mb-3 p-2">
			                        <div class="col-sm-4 ">
			                            <h4 class=" box-title align-bottom">Liste cadreé des clients</h4>
			                        </div>
			                        <div class="col-sm-8">
			                            <div class="row">
			                                <div class="col-sm-12">
			                                    <button class="btn btn-primary shadow" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
			                                        <i class="menu-icon fa fa-user-plus"></i>
			                                    </button>
			                                    <button class="btn btn-info shadow">
			                                        <i class="menu-icon fa fa-print"></i>
			                                    </button>
			                                    <button class="btn btn-light actualiserbtn shadow">
			                                        <i class="menu-icon fa fa-refresh"></i>
			                                    </button>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-4">
			                            <aside class="profile-nav alt">
			                                <section class="card">
			                                    <div class="card-header user-header alt bg-dark">
			                                        <div class="media">
			                                            <a href="#">
			                                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="public/assets/images/admin.jpg">
			                                            </a>
			                                            <div class="media-body">
			                                                <h2 class="text-light display-6">Jim Doe</h2>
			                                                <p>Project Manager</p>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <ul class="list-group list-group-flush">
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
			                                        </li>
			                                    </ul>
			                                </section>
			                            </aside>
			                        </div>

			                        <div class="col-md-4">
			                            <aside class="profile-nav alt">
			                                <section class="card">
			                                    <div class="card-header user-header alt bg-dark">
			                                        <div class="media">
			                                            <a href="#">
			                                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="public/assets/images/admin.jpg">
			                                            </a>
			                                            <div class="media-body">
			                                                <h2 class="text-light display-6">Jim Doe</h2>
			                                                <p>Project Manager</p>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <ul class="list-group list-group-flush">
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
			                                        </li>
			                                    </ul>
			                                </section>
			                            </aside>
			                        </div>

			                        <div class="col-md-4">
			                            <aside class="profile-nav alt">
			                                <section class="card">
			                                    <div class="card-header user-header alt bg-dark">
			                                        <div class="media">
			                                            <a href="#">
			                                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="public/assets/images/admin.jpg">
			                                            </a>
			                                            <div class="media-body">
			                                                <h2 class="text-light display-6">Jim Doe</h2>
			                                                <p>Project Manager</p>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <ul class="list-group list-group-flush">
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
			                                        </li>
			                                    </ul>
			                                </section>
			                            </aside>
			                        </div>

			                        <div class="col-md-4">
			                            <aside class="profile-nav alt">
			                                <section class="card">
			                                    <div class="card-header user-header alt bg-dark">
			                                        <div class="media">
			                                            <a href="#">
			                                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="public/assets/images/admin.jpg">
			                                            </a>
			                                            <div class="media-body">
			                                                <h2 class="text-light display-6">Jim Doe</h2>
			                                                <p>Project Manager</p>
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <ul class="list-group list-group-flush">
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
			                                        </li>
			                                        <li class="list-group-item">
			                                            <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
			                                        </li>
			                                    </ul>
			                                </section>
			                            </aside>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <!-- /#liste des compteurs -->
			        <!-- modal Liste des consommation -->
			        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			            <div class="modal-dialog" role="document">
			                <div class="modal-content">
			                    <div class="modal-header">
			                        <button type="button" class="close actualiserAfterClose" data-dismiss="modal" aria-label="Close">
			                            <span aria-hidden="true">&times;</span>
			                        </button>
			                        <h5 class="modal-title text-center  text-dark" id="exampleModalLabel"><i class="fa fa-user" style="font-size: 32px" aria-hidden=" true"></i></h5>
			                    </div>
			                    <div class="modal-body bg-dark text-white">
			                        <section class="form signup ">
			                            <form>
			                                <div class="text-center error-txt rounded-pill shadow mb-1 ">Ajoute d'un utilisateur</div>
			                                <div class="input-group mb-3 name-details field input p-2">
			                                    <span class="input-group-text">Person<i class="fa fa-user" aria-hidden="true"></i></span>
			                                    <input type="text" class="form-control champs1" name="nom" placeholder="First Name">
			                                    <input type="text" class="form-control champs2" name="prenom" placeholder="Last Name">
			                                </div>
			                                <div class="input-group mb-3 field input">
			                                    <span class="input-group-text">Address E-mail <i class="fa fa-envelope" aria-hidden="true"></i></span>
			                                    <input type="email" class="form-control champs3" name="email" placeholder="Address E-mail">
			                                </div>
			                                <div class="input-group mt-3 mb-3 field input">
			                                    <button type="button" class="btn btn-primary dropdown-toggle champs4" data-bs-toggle="dropdown">
			                                        Reglement <i class="fa fa-legal" aria-hidden="true"></i>
			                                    </button>
			                                    <ul class="dropdown-menu listeReglement ">

			                                    </ul>
			                                    <input type="Number" min="1" max="4" class="form-control champs4" name="reglement" placeholder="Reglement">
			                                </div>

			                                <div class="input-group mt-3 mb-3 field input">
			                                    <button type="button" class="btn btn-primary dropdown-toggle champs5" data-bs-toggle="dropdown">
			                                        village <i class="fa fa-home" aria-hidden="true"></i>
			                                    </button>
			                                    <ul class="dropdown-menu listeVillage">

			                                    </ul>
			                                    <input type="Number" class="form-control champs5" name="village" placeholder="village">
			                                </div>
			                                <div class="input-group mt-3 mb-3 field input">
			                                    <button type="button" class="btn btn-primary dropdown-toggle champs5" data-bs-toggle="dropdown">
			                                        Roles <i class="fa fa-home" aria-hidden="true"></i>
			                                    </button>
			                                    <ul class="dropdown-menu listeRoles">

			                                    </ul>
			                                    <input type="Number" class="form-control champs6" name="rolesUser" placeholder="Roles">
			                                </div>

			                                <div class="input-group mb-3 field input eye">
			                                    <span class="input-group-text">Mot de Passe <i class="fa fa-eye" aria-hidden="true"></i></span>
			                                    <input type="password" class="form-control champs7" name="password" placeholder="Mot de Passe">
			                                </div>
			                                <div class="field button modal-footer">
			                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			                                    <button class="btn btn-primary envoyerDonner"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
			                                </div>
			                            </form>
			                        </section>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <!-- /modal Liste des consommation -->
			    </div>


			</div>
			<!-- /#LISTES DES TABLES -->
			</div>

			<script src="public/assets/javascripte/addUser.js"></script>
			<script type="public/assets/javascripte/addUser.js"></script>
			<script src="public/assets/javascripte/pass_show_hide.js"></script>