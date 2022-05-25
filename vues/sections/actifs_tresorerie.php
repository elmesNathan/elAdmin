        <?php if ($compte == "Client") { ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="tresorerie.php?tiers=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                </div>
                <h4>Mes Vendeurs</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="tresorerie.php?factures=true"><i class="dm-icon fa fa-book fa-3x"></i></a>
                </div>
                <h4>Mes factures</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="tresorerie.php?operations=true"><i class="dm-icon fa fa-pencil fa-3x"></i></a>
                </div>
                <h4>Mes Achats</h4>
              </div>
            </div>
            <!-- end dmbox -->
        <?php }else{ ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="tresorerie.php?tiers=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                </div>
                <h4>Mes Clients</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="tresorerie.php?factures=true"><i class="dm-icon fa fa-book fa-3x"></i></a>
                </div>
                <h4>Mes Factures</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="tresorerie.php?operations=true"><i class="dm-icon fa fa-user fa-3x"></i></a>
                </div>
                <h4>Mes Ventes</h4>
              </div>
            </div>
            <!-- end dmbox -->
          <?php }?>