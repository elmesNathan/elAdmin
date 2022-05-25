  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">CREDITER MON COMPTE</h2>
        <div class="login-wrap">
          <?php
          if (isset($_GET['message'])) { ?>
          <p>
              <?php echo $_GET['message']; ?>
          </p>
          <hr>
          <?php
          }
          ?>
          <input type="text" class="form-control" name="num_client" placeholder="Le numéro créditeur(OrangeMoney)" autofocus required>
          <br>
          <input type="text" class="form-control" name="montant" placeholder="Montant du crédit" required>
          <br>
          <input type="text" class="form-control" name="CDF_Ref" placeholder="CDF_Ref de la transaction"  required>
          <br>
          <input type="text" class="form-control" name="date_recharge" placeholder="Date de la transaction"  required>
          <br>
          <input type="submit" name="recharger" class="btn btn-theme btn-block" value="ENVOYER" required>
          <hr>
          <div class="registration">
            <a class="btn btn-danger" href="tresorerie.php">
              ANNULER
            </a>
          </div>
        </div>