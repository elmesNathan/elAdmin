
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
            <?php 
            if ($compte == "Client") {
            ?>
              <h3>MOYENNE D'ACHATS</h3>
            <?php
            } else {
            ?>
              <h3>MOYENNE DE VENTES</h3>
            <?php
            }
            ?>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>100.000</span></li>
                <li><span>80.000</span></li>
                <li><span>60.000</span></li>
                <li><span>40.000</span></li>
                <li><span>20.000</span></li>
                <li><span>0</span></li>
              </ul>
          <?php
          if (is_array($data_graphique)) {
            foreach ($data_graphique as $k => $v) {
              if ($k == "mois") {
              ?>
              <div class="bar">
                <div class="title"><?php $v; ?></div>
            <?php
              } else {
            ?>
                <div class="value tooltips" data-original-title="10.000" data-toggle="tooltip" data-placement="top"><?php $v; ?></div>
              </div>
            <?php
              }              
            }
          }
          ?>
            </div>
            <!--custom chart end-->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->