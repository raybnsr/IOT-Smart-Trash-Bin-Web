<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Mobile Application</h1>
    <a href="../dashboard/index.php" class="btn btn-primary">Dashboard</a>
  </div>

  <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("../assets/img/article/Mobile.png");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-2" data-aos="zoom-in" data-aos-delay="150">
              <h4>Registrasi Akun</h4>
              <p>Pengguna melakukan registrasi akun agar terdaftar pada sistem aplikasi.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <h4>Login Akun</h4>
              <p>Pengguna melakukan login akun untuk dapat masuk ke menu aplikasi.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <h4>Monitoring System</h4>
              <p>Pengguna dapat memonitoring beberapa data smart trash yang telah terhubung.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <h4>Smart Trash Management</h4>
              <p>Pengguna melakukan pengecekan jika terdeteksi smart trash yang kapasitasnya terisi penuh.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
  
</section>

<?php
require_once '../layout/_bottom.php';
?>