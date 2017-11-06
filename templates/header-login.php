<!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $title; ?></title>
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Rubik:900" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="assets/css/invoila-style.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>

    <body>

      <nav class="nav-main navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed sidenav-toggle">
              <!-- <span class="sr-only">Toggle navigation</span> -->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="assets/images/invoila-logo.png" /></a>
          </div>
          <div class="navbar-collapse sidenav-menu">
            <ul class="nav navbar-nav navbar-right nav-login visible-lg">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PT Iinvelli <span class="caret"></span></a>
                <div class="dropdown-menu">
                  <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Pendanaan</a></li>
                    <li><a href="#">Deposit Dana</a></li>
                    <li><a href="#">Penarikan Dana</a></li>
                    <li><a href="#">Mutasi</a></li>
                    <li><a href="#">Keluar</a></li>
                  </ul>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php" class="active">Beranda</a></li>
              <li><a href="pinjambisnis.php" class="">Pinjaman Bisnis </a></li>
              <li><a href="pendanaan.php" class="">Pendanaan</a></li>
              <li><a href="statistik.php" class="">Statistik</a></li>
              <li><a href="carakerja.php" class="">Cara Kerja</a></li>
              <li><a href="faq.php" class="">FAQ</a></li>
              <li><a href="tentangkami.php" class="">Tentang Kami</a></li>
              <li class="visible-lg"><span class="divider"></span></li>
            </ul>

            <!-- MOBILE MENU -->
            <ul class="nav navbar-nav navbar-right nav-login-m visible-xs">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PT Iinvelli <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Profil</a></li>
                  <li><a href="#">Pendanaan</a></li>
                  <li><a href="#">Deposit Dana</a></li>
                  <li><a href="#">Penarikan Dana</a></li>
                  <li><a href="#">Mutasi</a></li>
                  <li><a href="#">Keluar</a></li>
                </ul>

              </li>
            </ul>
          </div>
        </div>

      </nav>
