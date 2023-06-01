			<div classe="TableauBordContent bg-dark text-white">
				<!-- LISTES DES TABLES -->
				<div class="card p-3 ">
					<nav>
						<div class="nav nav-tabs mx-auto bg-dark text-white rounded-pill shadow mb-2 p-2" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active rounded-pill" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Liste user</a>
							<a class="nav-item nav-link rounded-pill" id="nav-cadre-Client" data-toggle="tab" href="#nav-cadreClient" role="tab" aria-controls="nav-cadreClient" aria-selected="false">Liste card user</a>
						</div>
					</nav>
					<div class="tab-content bg-dark text-white" id="nav-tabContent">
						<!-- liste des clients -->
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="p-3 ">
								<div class="row rounded-pill shadow mb-3 p-2">
									<div class="col-sm-4 ">
										<h4 class=" box-title align-bottom">Liste des Utilisateurs</h4>
									</div>
									<div class="col-sm-8">
										<div class="row">
											<div class="col-sm-12">
												<button class="btn btn-primary rounded-pill shadow" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
													<i class="menu-icon fa fa-user-plus"></i>
												</button>
												<button class="btn btn-dark rounded-pill shadow">
													<i class="menu-icon fa fa-pencil-square-o"></i>
												</button>
												<button class="btn btn-info rounded-pill shadow">
													<i class="menu-icon fa fa-print"></i>
												</button>
												<button class="btn btn-danger  rounded-pill shadow deleteSelecte">
													<i class="menu-icon fa fa-trash"></i>
												</button>
												<button class="btn btn-light actualiserbtn rounded-pill shadow">
													<i class="menu-icon fa fa-refresh"></i>
												</button>
												<button class="btn btn-secondary actualiserbtn rounded-pill shadow">
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
												<button class="btn btn-warning rounded-pill shadow checkboxBtn">
													<i class="menu-icon fa fa-check-circle"></i>
												</button>
											</th>
											<th>Id</th>
											<th>Email</th>
											<th>Password</th>
										</tr>
									</thead>
									<tbody class="TableUser text-center shadow p-4 mb-4 bg-white">

									</tbody>
									<tfoot class="text-center shadow p-4 mb-4 bg-white">
										<tr>
											<th>
												<div class=" form-check ">
													<input class="form-check-input " type="checkbox" value="" id="defaultCheck2" disabled>
												</div>
											</th>
											<th>Id</th>
											<th>Email</th>
											<th>Password</th>
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
												<button class="btn btn-primary rounded-pill shadow" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
													<i class="menu-icon fa fa-user-plus"></i>
												</button>
												<button class="btn btn-info rounded-pill shadow">
													<i class="menu-icon fa fa-print"></i>
												</button>
												<button class="btn btn-light actualiserbtn rounded-pill shadow">
													<i class="menu-icon fa fa-refresh"></i>
												</button>
											</div>
										</div>
									</div>
								</div>

								<div class="row cadreUser">

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

												<div class="input-group mb-3 field input">
													<span class="input-group-text">Address E-mail <i class="fa fa-envelope" aria-hidden="true"></i></span>
													<input type="email" class="form-control champs3" name="email" placeholder="Address E-mail">
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