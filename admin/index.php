<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <?php 
            $posting = mysqli_query($koneksi,"SELECT * FROM posting");
            ?>
            <h3><?php echo mysqli_num_rows($posting); ?></h3>
            <p>Jumlah posting/diskusi</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <?php 
            $member = mysqli_query($koneksi,"SELECT * FROM member");
            ?>
            <h3><?php echo mysqli_num_rows($member); ?></h3>
            <p>Jumlah member forum</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php 
            $diskusi = mysqli_query($koneksi,"SELECT * FROM diskusi");
            ?>
            <h3><?php echo mysqli_num_rows($diskusi); ?></h3>
            <p>Jumlah jawaban/komentar diskusi</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-list"></i>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php 
            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
            ?>
            <h3><?php echo mysqli_num_rows($kategori); ?></h3>
            <p>Jumlah Kategori Diskusi</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
        </div>
      </div>



    </div>

   
  </section>

</div>
<?php include 'footer.php'; ?>