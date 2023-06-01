<?php include_once "header.php";
	require_once "models/domaine.php";

	$domaines = getDomaines();

	// echo "<pre>";
	// var_dump($domaines);
	// echo "</pre>";
?>

<div class="container">
	<div class="row bg-dark text-white" >
	<div class="col-md-4">
		<img src="/new_project/L2_memoires/public/image/recherche.jpg" width="40%">
		<br>
		<a href="" class="btn-outline-primary btn btn-lg rounded-circle">Espace Superviseur</a>
	</div>
	<div class="col-md-8">
		<div class="row mt-2"><!-- mt c'est pour la margin top donc la marge du haut qui est traduit en bootstrap. -->
			<div class="col-md-6 text-center "> 
				Loïc Armand KHONO
			</div>
			<div class="col-md-6">
				<button class="btn btn-primary btn-lg float-right">Se connecter</button> <!-- le float-right pour faire flotter le button à droite. -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				Pour nous contacter : <h6>00221 78 146 05 28</h6>
			</div>
			<div class="col-md-3 offset-3">
				Envoyez un mail : <h6><a href="">akhono@yahoo.com</a></h6>
			</div>
		</div>
			<div class="row mt-2 mr-2">
				<div class="alert alert-primary pr-5 col-md-12 role="alert">
					<h4 class="text-center">Bienvenue ! Nous vous facilitons la recherche de votre sujet de mémoire</h4>
				</div>
			</div>
	</div>
</div>
		<div class="row">
			<div class="card col-md-12">
				<div class="card-header">
					<div class="row">
						<span class="h2 text-primary">Nos Domaines</span>
					</div>
				</div>
				<div class="card-body">
				<?php foreach ($domaines as $dom) { ?>

					<button value="<?= $dom['idDomaine']?>" class="btn btn-info btn-lg"> <?= $dom['nomDomaine']?> </button>

				<?php } 
				?>
				</div>
			</div>
		</div>
</div>
</body>
<script>
    fonction chargerSujet(element){
      //alert(element.value); 
      $.ajax({ 
           type:"get",
           url:"" ,
           data : {idDomaine:element.value},
          dataType :  "JSON",
          success: fonction(resultat){
             console.log(resultat);
          }
      });                              
    }                                                                          
</script>
                                                                                      
</html>