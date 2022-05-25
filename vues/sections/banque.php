              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Solde Banque</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-university fa-3x"></i></h1>
                  <p>Total</p>
                  <footer>
                    <div class="centered">
                      <h5><i class="fa fa-money"></i> <?php if($data_user['banque']){ echo $data_user['banque'] . " CDF"; }else{echo "0 CDF";} ?></h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!--  TODO PANEL -->
              <div class="col-lg-8 col-md-8 col-sm-8">
                <!-- BUTTON BLOCK -->
                <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#myModal1">Notre politique bancaire</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Politique bancaire</h4>
                      </div>
                      <div class="modal-body">
                        ELMES délegue à toute équipe la tâche de 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-theme" data-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#myModal">Notre politique de paiement</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          Hi there, I am a Modal Example for Dashio Admin Panel.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                </div>
                <br >
                <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#myModal">Procédure de rétrait</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        Hi there, I am a Modal Example for Dashio Admin Panel.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <?php 
                if($compte == "Client"){
                ?>
                <a class="btn btn-danger btn-lg btn-block" href="recharge.php">Je souhaite débiter mon compte</a>
                <?php 
                }elseif ($compte == "Auteur"){
                ?>
                <a class="btn btn-danger btn-lg btn-block" href="paiement.php">Je souhaite récevoir mes paiements</a>
                <br>
                <?php } ?>
              </div>
              <!-- /col-lg-6 -->
