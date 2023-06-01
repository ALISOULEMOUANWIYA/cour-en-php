<?php
// session_start();
// // remove all session variables
// session_unset();

// // destroy the session
// session_destroy();
include_once "shared/header.php";
?>
<!-- Page Content -->

<div class="wrapper">
    <section class="form login">
        <header>Login</header>
        <form action="#" autocomplete="off">
            <div class="error-txt">c'est un error message!</div>
            <div class="field input">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Entrez Votre Email" required>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="field input eye">
                <label>Mot de Passe</label>
                <input type="password" class="champs7" name="password" placeholder="Entrez Password" required>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="field button">
                <input type="submit" value="Connexion">
            </div>
        </form>
        <div class="link">
            Pas inscrit ? <a href="Inscription?view=Inscription">Creer maintenant</a>
        </div>
    </section>
</div>
<script src="public/assets/javascripte/login.js"></script>
<script src="public/assets/javascripte/pass_show_hide.js"></script>
<?php
include_once "shared/footer.php";
?>