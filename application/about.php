<?php
require_once '../layout/_top.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>About Us</h1>
    <a href="../dashboard/index.php" class="btn btn-primary">Dashboard</a>
  </div>
</section>

<section id="about" class="about">
  <div class="container mt-5" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2 mt-5" data-aos="fade-left" data-aos-delay="100">
        <img src="../assets/img/article/About -Smart Trash.jpg" width="450" class="img-fluid rounded" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h3> <strong>Smart Trash</strong></h3>
        <div class="fs-5 text-justify">
          <p>
            The National Institute of Technology Bandung currently relies on conventional trash bins. To address this, there is a need for smart trash bins equipped with automated open-close lids, capable of transmitting data and monitoring to waste management personnel. The objective of this research is to assist the campus in effectively and efficiently tackling waste issues in the Industry 4.0 era by developing an internet of things-based application called the Smart Trash Bin Monitoring System. The system will utilize ESP and Arduino Uno microcontrollers, an ultrasonic sensor (HCSR-04), and a servo motor to control the trash bin lid. Additionally, an application will be designed to collect garbage level data and relay it to the waste management team.
          </p>
        </div>
      </div>
    </div>

  </div>

  <?php
  require_once '../layout/_bottom.php';
  ?>