
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4><?= $data_user['prenom'] . " " . $data_user['nom'] . " " . $data_user['postnom'] ?></h4>
                  <h6><?= $data_user['niv_etude']; ?></h6>
                  <h4><?= $data_user['nationalite']; ?></h4>
                  <h6><?= $data_user['date_naiss']; ?></h6>
                  <h4><?= $data_user['profession']; ?></h4>
                  <h6><?= $data_user['grade']; ?></h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?= $data_user['pseudo']; ?></h3>
                <h6><?php if($data_user['sexe'] == 'M'){ echo "Monsieur"; }else{ echo "Madame"; } ?></h6>
                <p><?= $data_user['description']; ?>.</p>
                <br>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?= $data_user['avatar']; ?>" class="img-circle"></p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div> 