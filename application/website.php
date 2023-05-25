<?php
require_once '../layout/_top.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Website Application</h1>
    <a href="../dashboard/index.php" class="btn btn-primary">Dashboard</a>
  </div>

  <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="mt-4"></div>
              <h4><a href="">Login Account</a></h4>
              <p>Pengguna melakukan login sesuai data yang sudah terdaftar di sistem.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
              <div class="mt-4"></div>
              <h4><a href="">Monitoring System</a></h4>
              <p>Pengguna dapat memonitoring beberapa data smart trash yang telah terhubung.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="mt-4"></div>
              <h4><a href="">Smart Trash Management</a></h4>
              <p>Pengguna melakukan pengecekan jika terdeteksi smart trash yang kapasitasnya terisi penuh.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>