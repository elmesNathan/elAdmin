  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">SE CONNECTER</h2>
        <div class="login-wrap">
          <p>
            <?php
            if (isset($_GET['message'])) {
              echo $_GET['message'];
            }
            ?>
          </p>
          <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" autofocus required>
          <br>
          <input type="password" class="form-control" name="pass" placeholder="Mot de passe" required>
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
          <label class="checkbox">
            <span class="pull-right">
            <a href="forgot.php"> Mot de passe oublié</a>
            </span>
          </label>
          <i class="fa fa-lock"></i><input type="submit" name="connection" class="btn btn-theme btn-block" value="Connexion">
          <hr>
          <div class="registration">
            Je n'ai pas encore de compte<br/>
            <a class="btn btn-warning" href="signin.php">
              S'INSCRIRE
              </a>
          </div>
        </div>