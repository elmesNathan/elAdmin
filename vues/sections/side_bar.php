
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?= $data_user['avatar']; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $data_user['nom'] . " " . $data_user['postnom']; ?></h5>
          <li class="mt">
            <a <?php if ($page == "Admin") { ?> class="active" <?php } ?>href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de bord</span>
              </a>
          </li>
          <li class="sub-menu">
            <a <?php if ($page == "Articles") { ?> class="active" <?php } ?>href="articles.php">
              <i class="fa fa-desktop"></i>
              <span>Articles</span>
              </a>
          </li>
          <li class="sub-menu">
            <a <?php if ($page == "Ouvrages") { ?> class="active" <?php } ?>href="ouvrages.php">
              <i class="fa fa-book"></i>
              <span>Ouvrages</span>
              </a>
          </li>
          <li class="sub-menu">
            <a <?php if ($page == "Tresorerie") { ?> class="active" <?php } ?>href="tresorerie.php">
              <i class="fa fa-money"></i>
              <span>Tresorerie</span>
              </a>
          </li>
          <li class="sub-menu">
            <a <?php if ($page == "Profile") { ?> class="active" <?php } ?>href="profile.php">
              <i class="fa fa-user"></i>
              <span>Profile</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">