<!-- Test -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Mes contacts</a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#edit">Modifier mon profile</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      <div class="col-md-6 detailed">
                        <h4>Addresse physique</h4>
                        <div class="col-lg-12 mt">
                          <p>
                            <?= $data_user['address']; ?>
                          </p>
                          <br>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed">
                        <h4>Addresse numérique</h4>
                        <div class="col-lg-12 mt">
                          <p>
                            <?= $data_user['email']; ?>
                          </p>
                          <br>
                          <p>
                            <?= $data_user['telephone']; ?>
                          </p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane active">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Informations Personelle</h4>
                        <?php 
                        if (isset($_GET['message'])) {
                        ?>
                        <br>
                        <br>
                        <p><?= $_GET['message']; ?></p>
                        <br>
                        <?php
                        }
                        ?>
                        <form role="form" class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-6">
                              <input type="file" id="exampleInputFile" class="file-pos" name="avatar">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pré - nom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Pré - nom, Ex. Nathan" id="c-name" class="form-control" name="prenom">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Nom, Ex. Lisongo" id="lives-in" class="form-control" name="nom">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Post - nom</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Post - nom, Ex. Semete" id="country" class="form-control" name="postnom">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Sexe</label>
                            <div class="col-lg-6">
                              <select class="form-select form-control" aria-label="Default select example" id="country" name="sexe">
                                <option value="M" selected>Masculin</option>
                                <option value="F">Féminin</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Date de naissance</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Date de naissance, Ex. 1998/01/27" id="country" class="form-control" name="date_naiss">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nationalite</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Origine, Ex. Congolaise" id="country" class="form-control" name="nationalie">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
                              <textarea rows="10" cols="30" class="form-control" id="country" name="description"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <input class="btn btn-theme" type="submit" name="valider1" value="Enregister les modifications">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Contacts</h4>
                        <?php 
                        if (isset($_GET['message2'])) {
                        ?>
                        <br>
                        <br>
                        <p><?= $_GET['message2']; ?></p>
                        <br>
                        <?php
                        }
                        ?>
                        <form role="form" class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Téléphone</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Numéro de tél., Ex. +243 85" id="c-name" class="form-control" name="telephone">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="email" placeholder="E-mail, Ex. gaidanathan@gmail.com" id="lives-in" class="form-control" name="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Addresse physique</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Addresse, Ex. XX Avenue/Quartier Ville/Province" id="country" class="form-control" name="address">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <input class="btn btn-theme" type="submit" name="valider2" value="Enregister les modifications">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Informations Divers</h4>
                        <?php 
                        if (isset($_GET['message3'])) {
                        ?>
                        <br>
                        <br>
                        <p><?= $_GET['message3']; ?></p>
                        <br>
                        <?php
                        }
                        ?>
                        <form role="form" class="form-horizontal" method="POST" action="">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Niveau d'étude</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Ex. Gradué, Licencié, Docteur, etc..." id="addr1" class="form-control" name="niv_etude">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Profession</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Ex. Etudiant, Enseigant, Avocat, etc..." id="addr2" class="form-control" name="profession">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Grade</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Ex. Ass, CT, PO, etc..." id="phone" class="form-control" name="grade">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <input class="btn btn-theme" type="submit" name="valider3" value="Enregister les modifications">
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
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