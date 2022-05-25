        <?php if ($compte == "Client") { ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="dashboard.php?mes_lectures=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                </div>
                <h4>Mes Lectures</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="dashboard.php?mes_livres=true"><i class="dm-icon fa fa-book fa-3x"></i></a>
                </div>
                <h4>Mes Livres</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="dashboard.php?mes_auteurs=true"><i class="dm-icon fa fa-pencil fa-3x"></i></a>
                </div>
                <h4>Mes Auteurs</h4>
              </div>
            </div>
            <!-- end dmbox -->
        <?php }else{ ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="dashboard.php?mes_articles=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                </div>
                <h4>Mes Articles</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="dashboard.php?mes_ouvrages=true"><i class="dm-icon fa fa-book fa-3x"></i></a>
                </div>
                <h4>Mes Ouvrages</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="dashboard.php?mes_clients=true"><i class="dm-icon fa fa-user fa-3x"></i></a>
                </div>
                <h4>Mes Clients</h4>
              </div>
            </div>
            <!-- end dmbox -->
          <?php }?>