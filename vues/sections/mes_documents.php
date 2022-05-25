<?php 
if (isset($_GET['articles'])) {
    foreach ($data_actifs['articles'] as $key => $value) {
      if ($key == "id") {
        $id = $value;
      } elseif ($key == "couveture") {
        $couverture = $value;
      } elseif ($key == "titre") {
        $titre = $value;
      } elseif ($key == "date_pub") {
        $date_pub = $value;
      } elseif ($key == "prenom") {
        $prenom = $value;
      } elseif ($key == "nom") {
        $nom = $value;
      } else {
        $postnom = $value;
?>
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="product-panel-2 pn">
                  <br /><img src="<?= $couveture; ?>" width="200" alt="">
                  <h5 class="mt"><?= $titre . " > " . $date_pub; ?></h5>
                  <h6><?= $prenom . " " . $nom . " " . $postnom; ?></h6>
                  <a <?php if($page == "Articles"){ echo "href='/elmes/article.php?id=" . $id . "'"; }else{ echo "href='/elmes/ouvrages.php?id=" . $id . "'"; } ?> class="btn btn-small btn-warning"><?php if ($page == "Ouvrages") { echo "Lire l'ouvrages"; } else { echo "Lire l'articles"; } ?></a>
                </div>
              </div>
              <!-- /col-md-4 -->
<?php
      }
    }
}
?>