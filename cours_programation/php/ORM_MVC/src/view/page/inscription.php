
       <div class="wrapper">
           <section class="form signup">
             <header>Application de chat en temps réel</header>
             <form action="#" enctype="multipart/form-data" autocomplete="off">
               <div class="error-txt"></div>
                <div class="name-details">
                  <div class="field input">
                    <label>Nom Utilisateur</label>
                    <input type="text" name="nom" placeholder="Nom" required>
                  </div>
                  <div class="field input">
                    <label>Prenom Utilisateur</label>
                    <input type="text" name="prenom" placeholder="Prenom" required>
                  </div>
                </div>
                 <div class="field input">
                    <label>Eamil Address</label>
                    <input type="email" name="email" placeholder="Entrez Votre Eamil" required>
                  </div>
                  <div class="field input">
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
                Déjà inscrit ?<a href="index.php">Connecte-toi maintenant</a>
             </div>
           </section>
       </div>
<script src="assets/javascripte/signup.js"></script>
<script src="assets/javascripte/pass_show_hide.js"></script>