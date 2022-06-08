
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <?php 
                  if ($compte == "Client"){
                  ?>
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Récharge(s) en cours</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Réchage(s) antérière(s)</a>
                  </li>
                  <?php 
                  }elseif ($compte == "Auteur" AND $pseudo == "admin") {
                  ?>
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Récharge(s) en attente(s)</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Paiement(s) en attente(s)</a>
                  </li>                  
                  <?php
                  }else{
                  ?>
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Paiement(s) disponible(s) </a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Paiement(s) antérieur(s)</a>
                  </li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <?php 
                      if ($compte == "Client") {
                      ?>
                      <div class="col-md-12">
                        <table class="table table-striped table-advance table-hover">
                          <thead>
                            <tr>
                              <th><i class="fa fa-calendar"></i> Date de récharge</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Preuve</th>
                              <th><i class="fa fa-bookmark"></i> Montant</th>
                              <th><i class=" fa fa-edit"></i> Bénéficiaire</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!--//<?php 
                            //foreach ($recharges_non_confirmer as $key => $value) {
                            //  if ($key == "date_recharge") {
                            //    $date_rech = $value;
                            //  }elseif ($key == "CDF_Ref") {
                            //    $preuve = $value;
                            //  }elseif ($key == "montant") {
                             //   $montant = $value;
                            //  }else{
                            ?>-->
                            <tr>
                              <td>
                                <a href="basic_table.html#"><?= //$date_rech; ?></a>
                              </td>
                              <td class="hidden-phone"><?= //$preuve; ?></td>
                              <td><?= //$montant; ?></td>
                              <td><?= //$value; ?></td>
                            </tr>
                            <?php    
                            //  }
                            //}
                            ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /col-md-12 -->
                      <script>
                        
                      </script>
                      <?php
                      //Suppression du fichier JSON 

                      }elseif ($compte == "Auteur" AND !($pseudo == "admin")) {
                      ?>
                      <div class="col-md-12">
                        <table class="table table-striped table-advance table-hover">
                          <thead>
                            <tr>
                              <th><i class="fa fa-calendar"></i> Date de récharge</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Preuve</th>
                              <th><i class="fa fa-bookmark"></i> Montant</th>
                              <th><i class=" fa fa-edit"></i> Bénéficiaire</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="basic_table.html#">
                                  Dashio co
                                  </a>
                              </td>
                              <td class="hidden-phone">Lorem Ipsum dolor</td>
                              <td>17900.00$ </td>
                              <td><span class="label label-warning label-mini">Due</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /col-md-12 -->
                      <?php
                      } else {
                      ?>
                      <div class="col-md-12">
                        <table class="table table-striped table-advance table-hover">
                          <thead>
                            <tr>
                              <th><i class="fa fa-calendar"></i> Date de récharge</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Preuve</th>
                              <th><i class="fa fa-bookmark"></i> Montant</th>
                              <th><i class=" fa fa-edit"></i> Bénéficiaire</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="basic_table.html#">Company Ltd</a>
                              </td>
                              <td class="hidden-phone">Lorem Ipsum dolor</td>
                              <td>12000.00$ </td>
                              <td><span class="label label-danger label-mini">Due</span></td>
                              <td>
                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /col-md-12 -->
                      <?php
                      }
                      ?>
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      <?php 
                      if ($compte == "Client") {
                      ?>
                      <div class="col-md-12">
                        <table class="table table-striped table-advance table-hover">
                          <thead>
                            <tr>
                              <th><i class="fa fa-calendar"></i> Date de récharge</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Preuve</th>
                              <th><i class="fa fa-bookmark"></i> Montant</th>
                              <th><i class=" fa fa-edit"></i> Bénéficiaire</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="basic_table.html#">Company Ltd</a>
                              </td>
                              <td class="hidden-phone">Lorem Ipsum dolor</td>
                              <td>12000.00$ </td>
                              <td><span class="label label-success label-mini">Due</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /col-md-12 -->
                      <?php
                      }elseif ($compte == "Auteur" AND !($pseudo == "admin")) {
                      ?>
                      <div class="col-md-12">
                        <table class="table table-striped table-advance table-hover">
                          <thead>
                            <tr>
                              <th><i class="fa fa-calendar"></i> Date de récharge</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Preuve</th>
                              <th><i class="fa fa-bookmark"></i> Montant</th>
                              <th><i class=" fa fa-edit"></i> Bénéficiaire</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="basic_table.html#">
                                  Dashio co
                                  </a>
                              </td>
                              <td class="hidden-phone">Lorem Ipsum dolor</td>
                              <td>17900.00$ </td>
                              <td><span class="label label-success label-mini">Due</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /col-md-12 -->
                      <?php
                      } else {
                      ?>
                      <div class="col-md-12">
                        <table class="table table-striped table-advance table-hover">
                          <thead>
                            <tr>
                              <th><i class="fa fa-calendar"></i> Date de récharge</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Preuve</th>
                              <th><i class="fa fa-bookmark"></i> Montant</th>
                              <th><i class=" fa fa-edit"></i> Bénéficiaire</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="basic_table.html#">
                                  Dashio co
                                  </a>
                              </td>
                              <td class="hidden-phone">Lorem Ipsum dolor</td>
                              <td>17900.00$ </td>
                              <td><span class="label label-warning label-mini">Due</span></td>
                              <td>
                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /col-md-12 -->
                      <?php
                      }
                      ?>
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>