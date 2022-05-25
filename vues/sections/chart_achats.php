
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>ACHATS DERNIERS MOIS</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>50 000</span></li>
                <li><span>40 000</span></li>
                <li><span>30 000</span></li>
                <li><span>20 000</span></li>
                <li><span>10 000</span></li>
                <li><span>0</span></li>
              </ul>
            <?php foreach ($data_user['operations'] as $key => $value) {?>
              <div class="bar">
                <?php if ($key == "mois") { ?>
                <div class="title"><?= $value; ?></div>
                <?php } ?>
                <?php if ($key == "solde") { ?>
                <div class="value tooltips" data-original-title="<?= $value . "CDF" ; ?>" data-toggle="tooltip" data-placement="top"><?= $value; ?>%</div>
              <?php } ?>
              </div>
            <?php } ?>
            </div>
            <!--custom chart end-->
          </div>