<?php 
if ($page == "Articles") {

if (isset($recent_article)) {
?>
          <div class="col-lg-12 main-chart">
            <div class="row">
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              <div class="col-md-12 mb">
                <div class="message-p pn">
                  <div class="message-header">
                    <h5><?php if($compte == "Client"){ echo "Dernier Article"; }else{ echo "Dernier Ouvrages"; } ?></h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="vues/assets/img/ui-danro.jpg" class="img-circle" width="65">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name><?= $recent_article['prenom'] . ' ' . $recent_article['nom'] . ' ' . $recent_article['postnom']; ?></name>
                      </p>
                      <p class="small"><?= $recent_article['date_pub']; ?></p>
                      <p class="message"><?= $recent_article['problematiquee']; ?></p>
                      <form class="form-inline" role="form">
                        <button type="submit" class="btn btn-default" <?php if($page == "Articles"){ echo "href='/elmes/article.php?id=" . $recent_article['id'] . "'"; }else{ echo "href='/elmes/ouvrages.php?id=" . $recent_article['id'] . "'"; } ?>>Lire l'article</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Message Panel-->
              </div>
              <!-- /col-md-8  -->
            </div>
          </div>
<?php
}
} else {
if (isset($recent_ouvrage)) {
  $recent_article = $recent_ouvrage;
?>
          <div class="col-lg-12 main-chart">
            <div class="row">
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              <div class="col-md-12 mb">
                <div class="message-p pn">
                  <div class="message-header">
                    <h5><?php if($compte == "Client"){ echo "Dernier Article"; }else{ echo "Dernier Ouvrages"; } ?></h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="vues/assets/img/ui-danro.jpg" class="img-circle" width="65">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name><?= $recent_article['prenom'] . ' ' . $recent_article['nom'] . ' ' . $recent_article['postnom']; ?></name>
                      </p>
                      <p class="small"><?= $recent_article['date_pub']; ?></p>
                      <p class="message"><?= $recent_article['problematiquee']; ?></p>
                      <form class="form-inline" role="form">
                        <button type="submit" class="btn btn-default" <?php if($page == "Articles"){ echo "href='/elmes/article.php?id=" . $recent_article['id'] . "'"; }else{ echo "href='/elmes/ouvrages.php?id=" . $recent_article['id'] . "'"; } ?>>Lire l'article</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Message Panel-->
              </div>
              <!-- /col-md-8  -->
            </div>
          </div>
<?php
}
}
?>