<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Website Forum</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="assets_forum/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets_forum/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link type="text/css" href="assets_forum/assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>
<style>
  .cke_inner{
    display: none !important;
  }

  .dropdown-menu{
    margin-top: 10px !important;
  }
</style>

<?php
include 'koneksi.php';
session_start();
$file = basename($_SERVER['PHP_SELF']);

if(!isset($_SESSION['member_status'])){

  // halaman yg dilindungi jika member belum login
  $lindungi = array('member.php','member_logout.php','member_profil.php','member_password.php');
  // periksa halaman, jika belum login ke halaman di atas, maka alihkan halaman
  if(in_array($file, $lindungi)){
    header("location:index.php");
  }
  if($file == "posting.php"){
    header("location:masuk.php?alert=login-dulu");
  }

}else{

  // halaman yg tidak boleh diakses jika member sudah login
  $lindungi = array('masuk.php','daftar.php');
  // periksa halaman, jika sudah dan mengakses halaman di atas, maka alihkan halaman
  if(in_array($file, $lindungi)){
    header("location:member.php");
  }

}

?>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
      <div class="container-fluid">
        <div class="row">
          <img src="gambar/sistem/logok.png" height="100px">
          <a class="navbar-brand float-right ml-2" href="index.php" style="font-size: 32pt; margin-top: 15px;">
            CAT LOVERS Forum
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-primary">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-3 collapse-brand">
                <a href="index.php">
                  <img src="gambar/sistem/logok.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-yellow" aria-controls="navbar-yellow" aria-expanded="false" aria-label="Toggle navigation">
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav ml-lg-auto">

            <li class="nav-item">
              <a class="nav-link p-1 nav-link-icon" style="font-size:11pt;font-weight:bold" href="index.php">
                HOME
              </a>
            </li>

            <li class="nav-item mr-5">
              <a class="nav-link p-1 nav-link-icon" style="font-size:11pt;font-weight:bold" href="login.php">
                LOGIN ADMIN 
              </a>
            </li>

            <?php 
            if(isset($_SESSION['member_status'])){
              $id_member = $_SESSION['member_id'];
              $member = mysqli_query($koneksi,"select * from member where member_id='$id_member'");
              $c = mysqli_fetch_assoc($member);
              ?>

              <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" style="padding:7px;font-size:10pt;font-weight:bold" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <?php 
                  if($c['member_foto'] == ""){
                    ?>
                    <img class="img-fluid rounded-circle shadow" style="width: 22px;height: 22px" src="gambar/sistem/member.png">
                    <?php
                  }else{
                    ?>
                    <img class="img-fluid rounded-circle shadow" style="width: 22px;height: 22px" src="gambar/member/<?php echo $c['member_foto'] ?>">
                    <?php
                  }
                  ?>
                  &nbsp;
                  <?php echo $c['member_nama']; ?> 
                  <i class="fa fa-caret-down"></i>
                  <span class="nav-link-inner--text d-lg-none">Settings</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                  <a class="dropdown-item" href="member.php">Dashboard</a>
                  <a class="dropdown-item" href="member_profil.php">Profil</a>
                  <a class="dropdown-item" href="member_password.php">Ganti Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="member_logout.php">Logout</a>
                </div>
              </li>

              <?php
            }else{
              ?>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" style="padding:7px;font-size:10pt;font-weight:bold;" href="masuk.php">
                  &nbsp;
                  <i class="fa fa-sign-in"></i> &nbsp; LOGIN
                  &nbsp;
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-icon" style="padding:7px;font-size:10pt;font-weight:bold;" href="daftar.php">
                  &nbsp;
                  <i class="fa fa-sign-out"></i> &nbsp; DAFTAR
                  &nbsp;
                </a>
              </li>
              <?php
            }
            ?>

          </ul>

        </div>
      </div>
    </nav>

    

      

  
        </div>

      
          
            
              
                
              
              
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>

  </header>