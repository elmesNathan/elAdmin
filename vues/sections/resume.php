
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4><?= $metric_articles; ?></h4>
                  <h6><?php if($compte == "Client"){ echo "Articles lu"; }else{ echo "Articles postés"; } ?> </h6>
                  <h4><?= $metric_products; ?></h4>
                  <h6><?php if($compte == "Client"){ echo "Ouvrages achetés"; }else{ echo "Ouvrages vendus"; } ?></h6>
                  <h4><?php if ($data_user['banque']) { echo $data_user['banque'] . " CDF"; }else{ echo 0 . " CDF";} ?></h4>
                  <h6>Solde banque</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $data_user['nom'] ." ". $data_user['postnom']; ?></h3>
                <h6><?php echo $data_user['profession']; ?></h6>
                <?php if($data_user['description']){?><p> <?php echo $data_user['description'];?> </p><?php }else{ ?> <p> Vous n'avez pas encore rempli votre description </p><?php }?>
                <br>
                <p><a href="profile.php?description" class="btn btn-theme"><i class="fa fa-user"></i> Modifier votre description</a></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?= $data_user['avatar']; ?>" class="img-circle"></p>
                  <p>
                    <a href="tresorerie.php#recharge" class="btn btn-theme"><i class="fa fa-check"></i> Recharger mon compte</a>
                    <a href="ouvrages.php" class="btn btn-theme02">Voir mes ouvrages</a>
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->