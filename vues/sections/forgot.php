  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">RECUPERER COMPTE</h2>
        <div class="login-wrap">
          <p>
            <?php
            if (isset($_GET['message'])) {
              echo $_GET['message'];
            }
            ?>
          </p>
          <input type="tel" class="form-control" name="tel" placeholder="Numéro de téléphone" autofocus>
          <br>
          <input type="text" class="form-control" name="nom" placeholder="Votre nom, Lisongo">
          <br>
          <input type="text" class="form-control" name="postnom" placeholder="Votre Post - nom, Senga">
          <div class="radio">
            <label>
              <input type="radio" name="compte" id="optionsRadios1" value="client" checked>
              Client
              </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="compte" id="optionsRadios2" value="auteur">
              Auteur
              </label>
          </div>
          <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
          <div class="login-social-link centered">
            <a class="btn btn-default" type="submit" href="index.php">ANNULER
            </a>
            <input type="submit" name="valider" class="btn btn-theme " value="VALIDER">
          </div>
        </div>