
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashboard.php" class="logo"><b>ELM<span>ES</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="tresorerie.php">
              <i class="fa fa-money"></i>
              <span class="badge bg-theme"><?php if($data_user['banque']){ echo $data_user['banque'] . " CDF"; }else{echo "0 CDF";} ?></span>
            </a>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="">
            <a href="tresorerie.php">
              <i class="fa fa-bell"></i>
              <span class="badge <?php if($en_cours == 0 ){ echo "bg-danger"; }else{ echo "bg-warning"; }?>"><?php echo $en_cours; ?></span>
            </a>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="controleurs/logout.php">Deconnexion</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->