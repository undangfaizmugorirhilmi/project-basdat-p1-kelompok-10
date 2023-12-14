<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <?php 
  include '../koneksi.php';
  session_start();
  if($_SESSION['status'] != "login"){
    header("location:../login.php?alert=belum_login");
  }
  ?>
</head>
<body>
  <header>
    <nav class="amber darken-2">
      <div class="nav-wrapper container">
      <a href="index.php" class="brand-logo"><i class=""></i>CAT LOVERS FORUM</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
              $id_admin = $_SESSION['id'];
              $profil = mysqli_query($koneksi,"select * from admin where admin_id='$id_admin'");
              $profil = mysqli_fetch_assoc($profil);
              if($profil['admin_foto'] == ""){ 
                ?>
                <img src="../gambar/sistem/user.png" class="img-circle" style="max-width: 40px;">
              <?php }else{ ?>
                <img src="../gambar/user/<?php echo $profil['admin_foto'] ?>" class="img-circle" style="max-width: 40px;">
              <?php } ?>
              <span class="hidden-xs"><?php echo $_SESSION['nama']; ?> - Admin</span>
            </a>
          </li>
          <li>
            <a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
          </li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
      <li><a href="kategori.php"><i class="fa fa-folder"></i> KATEGORI DISKUSI</a></li>
      <li><a href="member.php"><i class="fa fa-users"></i> MEMBER FORUM</a></li>
      <li><a href="diskusi.php"><i class="fa fa-comment"></i> DATA DISKUSI</a></li>
      <li><a href="admin.php"><i class="fa fa-user"></i> DATA ADMIN</a></li>
      <li><a href="gantipassword.php"><i class="fa fa-lock"></i> GANTI PASSWORD</a></li>
      <li><a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a></li>
    </ul>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image" style="max-width: 100px;">
          <?php 
          $id = $_SESSION['id'];
          $profil = mysqli_query($koneksi,"select * from admin where admin_id='$id'");
          $profil = mysqli_fetch_assoc($profil);
          if($profil['admin_foto'] == ""){ 
            ?>
            <img src="../gambar/sistem/user.png" class="img-circle" style="width: 100%; height: auto;">
          <?php }else{ ?>
            <img src="../gambar/user/<?php echo $profil['admin_foto'] ?>" class="img-circle" style="width: 100%; height: auto;">
          <?php } ?>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>
        <li><a href="kategori.php"><i class="fa fa-folder"></i> <span>KATEGORI DISKUSI</span></a></li>
        <li><a href="member.php"><i class="fa fa-users"></i> <span>MEMBER FORUM</span></a></li>
        <li><a href="diskusi.php"><i class="fa fa-comment"></i> <span>DATA DISKUSI</span></a></li>
        <li><a href="admin.php"><i class="fa fa-user"></i> <span>DATA ADMIN</span></a></li>
        <li><a href="gantipassword.php"><i class="fa fa-lock"></i> <span>GANTI PASSWORD</span></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>LOGOUT</span></a></li>
      </ul>
    </section>
  </aside>

  <main>
    <div class="container">
      <h2>Welcome, <?php echo $_SESSION['nama']; ?>!</h2>
      <!-- Additional content goes here -->
    </div>
  </main>

  <!-- ... (remaining code) ... -->
</body>
</html>
