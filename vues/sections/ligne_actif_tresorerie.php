<?php
if (isset($_GET['tiers'])) {
  $i = 1;
?>
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Post - nom</th>
                    <th>Niveau d'étude</th>
                    <th>Ouvrage</th>
                  </tr>
                </thead>
                <tbody>
<?php
  foreach ($data_actifs['tiers'] as $key => $value) {
     switch ($key) {
       case 'prenom':
         $prenom = $value;
         break;
       case 'nom':
         $nom = $value;
         break;
       case 'postnom':
         $postnom = $value;
         break;
       case 'niv_etude':
         $niv_etude = $value;
         break;
       default:
         $ouvrage = $value;
?>
                  <tr>
                    <td><a href="#"><?= $i; ?></a></td>
                    <td><a href="#"><?= $prenom; ?></a></td>
                    <td><a href="#"><?= $nom; ?></a></td>
                    <td><a href="#"><?= $postnom; ?></a></td>
                    <td><?= $niv_etude; ?></td>
                    <td><a href="#"><?= $ouvrage; ?></a></td>
                  </tr>
 <?php   
         break;
     }
     $i = $i + 1;
   }
?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        </div>

<?php
} elseif(isset($_GET['factures'])) {
  $i = 1;
?>
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Date d'émission</th>
                    <th><i class="fa fa-bookmark"></i> Quantités</th>
                    <th><i class=" fa fa-edit"></i> Total</th>
                  </tr>
                </thead>
                <tbody>
<?php
  foreach ($data_actifs['factures'] as $key => $value) {
     switch ($key) {
       case 'date_e':
         $date_e = $value;
         break;
       case 'qte':
         $qte = $value;
         break;
       default:
         $tot = $value;
?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td class="hidden-phone"><?= $date_e; ?></td>
                    <td><?= $qte; ?></td>
                    <td><?= $tot . " CDF"; ?></td>
                    <td>
                      <a type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?= $i; ?>" href = "?date=true">Voir le détail</a>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Facture</h4>
                            </div>
                            <div class="modal-body">
                              <div class="col-lg-12 mt">
                                <div class="row content-panel">
                                  <div class="col-lg-10 col-lg-offset-1">
                                    <div class="invoice-body">
                                      <div class="pull-left">
                                        <h1>ELMES</h1>
                                        <address>
                                      <strong>Nos adresses</strong><br>
                                      1538, Av. DE LA DOUANE, Rd. Point<br>
                                      Forescom, Gombe<br>
                                      <abbr title="Phone">Téléphone:</abbr> +243 82 800 72 98
                                    </address>
                                      </div>
                                      <!-- /pull-left -->
                                      <div class="pull-right">
                                        <h2>Facture du <?= $date_e; ?></h2>
                                      </div>
                                      <!-- /pull-right -->
                                      <div class="clearfix"></div>
                                      <br>
                                      <br>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-9">
                                          <h4><?= $data_user['prenom'] . " " . $data_user['nom']; ?></h4>
                                          <address>
                                        <strong><?= $data_user['niv_etude'] . " " . $data_user['profession']; ?></strong><br>
                                        <?= $data_user['address'] ?><br>
                                        <?= $data_user['email'] ?><br>
                                        <abbr title="Phone">Téléphone:</abbr> <?= $data_user['telephone'] ?>
                                      </address>
                                        </div>
                                        <!-- /col-md-9 -->
                                        <div class="col-md-3">
                                          <br>
                                          <div>
                                            <div class="pull-left"> DATE DE COMMANDE : </div>
                                            <div class="pull-right"> <?= $date; ?> </div>
                                            <div class="clearfix"></div>
                                          </div>
                                          <div>
                                            <!-- /col-md-3 -->
                                            <div class="pull-left"> NOMBRE DE PRODUITS: </div>
                                            <div class="pull-right"> <?= $nbre_ouvrages; ?> </div>
                                            <div class="clearfix"></div>
                                          </div>
                                          <!-- /row -->
                                        </div>
                                        <!-- /invoice-body -->
                                      </div>
                                      <!-- /col-lg-10 -->
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th style="width:60px" class="text-center">QTE</th>
                                            <th class="text-left">TITRE</th>
                                            <th style="width:90px" class="text-right">TYPE</th>
                                            <th style="width:90px" class="text-right">PRIX U</th>
                                            <th style="width:90px" class="text-right">TOTAL</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          foreach ($$data_actifs['lignes_facture']  as $key => $value) {
                                            $i = 1;
                                            switch ($key) {
                                              case 'date_e':
                                                $date_e = $value;
                                                break;
                                              
                                              case 'titre':
                                                $titre = $value;
                                                break;

                                              case 'type':
                                                $type = $value;
                                                break;

                                              case 'qte':
                                                $qte = $value;
                                                break;

                                              case 'prix_unit':
                                                $prix_unit = $value;
                                                break;

                                              default:
                                                $tot = $value;
                                          ?>
                                          <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= $titre; ?></td>
                                            <td class="text-right"><?= $type; ?></td>
                                            <td class="text-right"><?= $qte; ?></td>
                                            <td class="text-right"><?= $prix_unit; ?></td>
                                            <td class="text-right"><?= $tot; ?></td>
                                          </tr>

                                          <?php
                                                break;
                                            }
                                            $i = $i + 1;
                                          }
                                          ?>
                                          <tr>
                                            <td colspan="2" rowspan="4">
                                              <h4>Termes et condition</h4>
                                              <?php 
                                              if ($compte == "Client") {
                                              ?>
                                              <p>ELMES vous remercie vivement de l'avoir fait confiance, tout en vous souhaitant une très bonne lecture nous vous prions de nous contacter pour toutes préoccupations le cas écheant.</p>
                                              <?php
                                              } else {
                                              ?>
                                              <p>ELMES vous remercie vivement de l'avoir confier vos ouvrages, le versement de vos dividendes s'effectuera après trois jours après l'émission de la présente facture.</p>
                                              <td class="text-right"><strong>Total général</strong></td>
                                              <td class="text-right"><?= $tot_general . " CDF"; ?></td>
                                          </tr>
                                          <tr>
                                            <td class="text-right no-border"><strong>Cout de l'opération</strong></td>
                                            <td class="text-right"><?= "-" . $tot_general*0.1 . " CDF"; ?></td>
                                          </tr>
                                          <tr>
                                            <td class="text-right no-border"><strong>ELMES</strong></td>
                                            <td class="text-right"><?= "-" . $tot_general*0.3 . " CDF"; ?></td>
                                          </tr>
                                          <tr>
                                            <td class="text-right no-border">
                                              <div class="well well-small green"><strong>Total Due</strong></div>
                                            </td>
                                            <td class="text-right"><strong><?= $tot_general*0.6 . " CDF"; ?></strong></td>
                                          </tr>
                                              <?php
                                              }
                                              ?>
                                        </tbody>
                                      </table>
                                      <br>
                                      <br>
                                    </div>
                                    <!--/col-lg-12 mt -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <?php if ($compte == "Client") { ?>
                              <a type="button" class="btn btn-theme" href="controleurs/paiement.php">Récommander</a>
                              <?php } ?>
                              <button type="button" class="btn btn-theme" data-dismiss="modal">Fermer</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
 <?php   
         break;
     }
     $i = $i + 1;
   }
?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        </div>
<?php
} elseif (isset($_GET['operations'])) {
  $i = 1;
?>
          <div class="col-md-12 mt">
            <div class="content-panel">
              <h4>  Nombre d'ourages : <strong><?= $nbre_ouvrages; ?></strong> 
                <br><br> Total : <strong><?= $tot_general; ?></strong>
              </h4>
              <hr>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Type de support</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                  </tr>
                <thead>
                <tbody>
<?php
  foreach ($data_actifs['operations'] as $key => $value) {
     switch ($key) {
       case 'titre':
         $titre = $value;
         break;
       case 'type':
         $support = $value;
         break;
       case 'qte':
         $qte = $value;
         break;
       case 'prix_unit':
         $prix = $value;
         break;
       default:
         $tot = $value;
?>
                  <tr>
                    <td><a href="#"><?= $i; ?></a></td>
                    <td><a href="#"><?= $titre; ?></a></td>
                    <td><a href="#"><?= $support; ?></a></td>
                    <td><a href="#"><?= $qte; ?></a></td>
                    <td><?= $prix; ?></td>
                    <td><a href="#"><?= $tot; ?></a></td>
                  </tr>
 <?php   
         break;
     }
     $i = $i + 1;
   }
?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        </div>
<?php
} else{
  $i = 1;
?>
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Post - nom</th>
                    <th>Niveau d'étude</th>
                    <th>Ouvrage</th>
                  </tr>
                </thead>
                <tbody>
<?php
  foreach ($data_actifs['tiers'] as $key => $value) {
     switch ($key) {
       case 'prenom':
         $prenom = $value;
         break;
       case 'nom':
         $nom = $value;
         break;
       case 'postnom':
         $postnom = $value;
         break;
       case 'niv_etude':
         $niv_etude = $value;
         break;
       default:
         $ouvrage = $value;
?>
                  <tr>
                    <td><a href="#"><?= $i; ?></a></td>
                    <td><a href="#"><?= $prenom; ?></a></td>
                    <td><a href="#"><?= $nom; ?></a></td>
                    <td><a href="#"><?= $postnom; ?></a></td>
                    <td><?= $niv_etude; ?></td>
                    <td><a href="#"><?= $ouvrage; ?></a></td>
                  </tr>
 <?php   
         break;
     }
     $i = $i + 1;
   }
?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        </div>
<?php
}
?>