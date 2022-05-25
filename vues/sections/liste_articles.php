<?php 
  if ($page == "Ouvrages") {
?>
            <div class="row">
              <div class="container">        
          <?php if ($compte == "Client") { ?>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="dmbox">
                    <div class="service-icon">
                      <a class="" href="ouvrages.php?ouvrages=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                    </div>
                    <h4>Mes Livres</h4>
                  </div>
                </div>
                <!-- end dmbox -->
                <div class="col-lg-6 col-md-6  col-sm-12">
                  <div class="dmbox">
                    <div class="service-icon">
                      <a class="" href="ouvrages.php?intervenants=true"><i class="dm-icon fa fa-pencil fa-3x"></i></a>
                    </div>
                    <h4>Mes Auteurs</h4>
                  </div>
                </div>
                <!-- end dmbox -->
          <?php }else{ ?>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="dmbox">
                    <div class="service-icon">
                      <a class="" href="ouvrages.php?ouvrages=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                    </div>
                    <h4>Mes Livres</h4>
                  </div>
                </div>
                <!-- end dmbox -->
                <div class="col-lg-6  col-md-6 col-sm-12">
                  <div class="dmbox">
                    <div class="service-icon">
                      <a class="" href="ouvrages.php?intervenants=true"><i class="dm-icon fa fa-user fa-3x"></i></a>
                    </div>
                    <h4>Mes Clients</h4>
                  </div>
                </div>
                <!-- end dmbox -->
            <?php }?>
            </div> 
          </div>

<?php
  }else{
?>
          <div class="row">
            <div class="container">        
        <?php if ($compte == "Client") { ?>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="dmbox">
                  <div class="service-icon">
                    <a class="" href="articles.php?articles=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                  </div>
                  <h4>Mes Lectures</h4>
                </div>
              </div>
              <!-- end dmbox -->
              <div class="col-lg-6 col-md-6  col-sm-12">
                <div class="dmbox">
                  <div class="service-icon">
                    <a class="" href="articles.php?intervenants=true"><i class="dm-icon fa fa-pencil fa-3x"></i></a>
                  </div>
                  <h4>Mes Auteurs</h4>
                </div>
              </div>
              <!-- end dmbox -->
        <?php }else{ ?>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="dmbox">
                  <div class="service-icon">
                    <a class="" href="articles.php?articles=true"><i class="dm-icon fa fa-desktop fa-3x"></i></a>
                  </div>
                  <h4>Mes Articles</h4>
                </div>
              </div>
              <!-- end dmbox -->
              <div class="col-lg-6  col-md-6 col-sm-12">
                <div class="dmbox">
                  <div class="service-icon">
                    <a class="" href="articles.php?intervenants=true"><i class="dm-icon fa fa-user fa-3x"></i></a>
                  </div>
                  <h4>Mes Lecteurs</h4>
                </div>
              </div>
              <!-- end dmbox -->
          <?php }?>
          </div> 
        </div>
<?php } ?>