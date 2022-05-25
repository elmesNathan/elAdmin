  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">INSCRIPTION</h2>
        <div class="login-wrap">
          <p>
            <?php
            if (isset($_GET['message'])) {
              echo $_GET['message'];
            }
            ?>
          </p>
          <p>
            IDENTITES DE L'UTILISATEURS
          </p>
          <hr>
          <input type="text" class="form-control" name="nom" placeholder="Votre nom" autofocus required>
          <br>
          <input type="text" class="form-control" name="postnom" placeholder="Votre Post - nom" required>
          <br>
          <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom"  required>
          <br>
          <select class="form-control" name="sexe"  required>
              <option checked value="M">Masculin</option>
              <option value="F">Féminin</option>
          </select>
          <br>
          <p>
            AUTHENTIFATION SUR LA PLATEFORME
          </p>
          <hr>
          <input type="text" class="form-control" name="pseudo" placeholder="Pseudo"  required>
          <br>
          <input type="password" class="form-control" name="pass" placeholder="Mot de passe" required>
          <br />
          <input type="password" class="form-control" name="cpass" placeholder="Confirmer le mot de passe" required><br />
          <p>Type de compte</p>
          <div class="radio">
            <label>
              <input type="radio" name="compte" id="optionsRadios1" value="Client" checked>
              Client
              </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="compte" id="optionsRadios2" value="Auteur">
              Auteur
              </label>
          </div>
          <input type="submit" name="inscription" class="btn btn-theme btn-block" value="S'incrire" required>
          <hr>
          <div class="registration">
            J'ai déjà un compte<br/>
            <a class="btn btn-warning" href="index.php">
              SE CONNECTER
              </a>
          </div>
        </div>