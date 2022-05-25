  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">REINITIALISER <br />MOT DE PASSE</h2>
        <div class="login-wrap">
          <p>
            <?php
            if (isset($_GET['message'])) {
              echo $_GET['message'];
            }
            ?>
          </p>
          <label>Nom : </label><br />
          <label>Post - nom : </label><br />
          <label>Téléphone : </label><br />
          <label>Pseudo : </label><br />
          <hr>
          <input type="pass" name="pass" class="form-control" placeholder="Mot de passe" required><br/>
          <input type="pass" name="cpass" class="form-control" placeholder="Répéter le mot de passe" required><br/>
          <div class="login-social-link centered">
            <a class="btn btn-default" type="submit" href="index.php">ANNULER
            </a>
            <input type="submit" name="valider" class="btn btn-theme " value="VALIDER">
          </div>
        </div>