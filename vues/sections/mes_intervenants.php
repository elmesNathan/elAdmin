<?php 
if (isset($_GET['intervenants'])) {
    foreach ($data_actifs['intervenants'] as $key => $value) {
      if ($key == "nom") {
        $nom = $value;
      } elseif ($key == "postnom") {
        $postnom = $value;
      } elseif ($key == "prenom") {
        $prenom = $value;
      } elseif ($key == "comp") {
        $comp = $value;
      } else {
        $nbre = $value;
?>
<br>
          <div class="col-lg-12">
            <div class="row">
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5><?php echo $prenom; ?></h5>
                  </div>
                  <p><img src="vues/assets/img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <p><b><?= $nom . " " . $postnom; ?></b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt"><?php if ($page == "Ouvrages") { echo "Nombre d'ouvrages"; } else { echo "Nombre d'articles"; } ?></p>
                      <p><?= $nbre; ?></p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt">Grade</p>
                      <p><?= $comp; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
<?php
      }
    }
}
?>