<?php
include_once "shared/header.php";
?>
<div class="wrapper">
    <section class="form signup">
        <header>Inscription</header>
        <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-txt"></div>
            <div class="name-details">
                <div class="field input">
                    <label>Nom Utilisateur</label>
                    <input type="text" name="nom" placeholder="Nom" required>
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="field input">
                    <label>Prenom Utilisateur</label>
                    <input type="text" name="prenom" placeholder="Prenom" required>
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            </div>
            <div class="field input">
                <label>Address E-mail </label>
                <input type="email" name="email" placeholder="Entrez Votre Emial" required>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>

            <div class="field input">
                <label>Reglement</label>
                <input type="reglement" name="reglement" placeholder="Entrez Votre Eamil" required>
                <i class="fa fa-legal" aria-hidden="true"></i>
            </div>

            <div class="field input">
                <label>village</label>
                <input type="village" name="village" placeholder="Entrez Votre Eamil" required>
                <i class="fa fa-home" aria-hidden="true"></i>
            </div>
            <div class="field input eye">
                <label>Mot de Passe</label>
                <input type="password" name="password" placeholder="Entrez Password" required>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="field image">
                <label>Selection Image</label>
                <input type="file" name="image" placeholder="choisir photo" required>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Enrigistrer">
            </div>
        </form>
        <div class="link">
            Déjà inscrit ?<a href="login">Connecte-toi maintenant</a>
        </div>
    </section>
</div>
<script src="public/assets/javascripte/signup.js"></script>
<script src="public/assets/javascripte/pass_show_hide.js"></script>
<?php
include_once "shared/footer.php";
?>