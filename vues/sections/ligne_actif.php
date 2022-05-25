
        <!-- /row -->
        <div class="row content-panel">
          <div class="col-md-10 col-md-offset-1 mt mb">
            <div class="accordion" id="accordion2">
           
<?php 
if ($compte == "Client"){
  if (!isset($_GET['mes_lectures'])) {
    if (!isset($_GET['mes_livres'])) {
      if (!isset($_GET['mes_auteurs'])) {
?>
              <p>Il n'y a pas d'information...</p>
<?php
      } else {
        if (is_array($intervenants)) {
         echo "<p>Vous n'avez rien acheté jusque là...</p>";
        } else {
          foreach ($intervenants as $key => $value) {
            $i = $i + 1;
            if ($key == "nom") {
              $nom = $value;
            } elseif ($key == "postnom") {
              $postnom = $value;
            } else {
              $description = $value;
?>
             
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dashboard.php#collapse<?= $i; ?>">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?= $nom . ' ' . $postnom; ?>
                    </a>
                </div>
                <div id="collapse<?= $i; ?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?= nl2br(str_replace('<br>', ' ', $description)); ?>.</p>
                  </div>
                </div>
              </div>
<?php
            $i = 0; }
          }
        }
      }
    } else {
    if (is_array($ouvrages)) {
     echo "<p>Vous n'avez rien acheté jusque là...</p>";
    } else {
      foreach ($ouvrages as $key => $value) {
        $i = $i + 1;
        if ($key == "nom") {
          $nom = $value;
        } elseif ($key == "postnom") {
          $postnom = $value;
        } else {
          $description = $value;
?>
            
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dashboard.php#collapse<?= $i; ?>">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?= $nom . ' ' . $postnom; ?>
                    </a>
                </div>
                <div id="collapse<?= $i; ?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?= nl2br(str_replace('<br>', ' ', $description)); ?>.</p>
                  </div>
                </div>
              </div>
<?php
          $i = 0; }
        }
      }
    }    
  } else {
  if (is_array($articles)) {
   echo "<p>Vous n'avez rien acheté jusque là...</p>";
  } else {
    foreach ($articles as $key => $value) {
      $i = $i + 1;
      if ($key == "nom") {
        $nom = $value;
      } elseif ($key == "postnom") {
        $postnom = $value;
      } else {
        $description = $value;
?>
             
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dashboard.php#collapse<?= $i; ?>">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?= $nom . ' ' . $postnom; ?>
                    </a>
                </div>
                <div id="collapse<?= $i; ?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?= nl2br(str_replace('<br>', ' ', $description)); ?>.</p>
                  </div>
                </div>
              </div>
<?php
      $i = 0; }
    }
  }
} 
} else {
  if (!isset($_GET['mes_articles'])) {
    if (!isset($_GET['mes_ouvrages'])) {
      if (!isset($_GET['mes_clients'])) {
?>
              
              <p>Il n'y a pas d'information...</p>
<?php
      } else {
        foreach ($intervenants as $key => $value) {
          $i = $i + 1;
          if ($key == "nom") {
            $nom = $value;
          } elseif ($key == "postnom") {
            $postnom = $value;
          } else {
            $description = $value;
?>
             
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dashboard.php#collapse<?= $i; ?>">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?= $nom . ' ' . $postnom; ?>
                    </a>
                </div>
                <div id="collapse<?= $i; ?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?= nl2br(str_replace('<br>', ' ', $description)); ?>.</p>
                  </div>
                </div>
              </div>
<?php
          $i = 0; }
        }
      }
    } else {
      foreach ($ouvrages as $key => $value) {
        $i = $i + 1;
        if ($key == "nom") {
          $nom = $value;
        } elseif ($key == "postnom") {
          $postnom = $value;
        } else {
          $description = $value;
?>
              
              <div class="accordion-group">
                //Nom et postnom
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dashboard.php#collapse<?= $i; ?>">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?= $nom . ' ' . $postnom; ?>
                    </a>
                </div>
                //Description
                <div id="collapse<?= $i; ?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?= nl2br(str_replace('<br>', ' ', $description)); ?>.</p>
                  </div>
                </div>
              </div>
<?php 
        $i = 0; }
      }
    }    
  } else {
    foreach ($articles as $key => $value) {
      $i = $i + 1;
      if ($key == "nom") {
        $nom = $value;
      } elseif ($key == "postnom") {
        $postnom = $value;
      } else {
        $description = $value;
?>        
             
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dashboard.php#collapse<?= $i; ?>">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em><?= $nom . ' ' . $postnom; ?>
                    </a>
                </div>
                <div id="collapse<?= $i; ?>" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?= nl2br(str_replace('<br>', ' ', $description)); ?>.</p>
                  </div>
                </div>
              </div>
<?php 
      $i = 0; }
    }
  } 
}
?>
            </div>
            <!-- end accordion -->
          </div>
          <!-- col-md-10 -->