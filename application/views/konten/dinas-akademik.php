<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("home/head"); ?>
</head>
<body>

  <!-- Start your project here-->  
  <!--Navbar -->
<?php $this->load->view('home/navbar'); ?>
<!--/.Navbar -->
<!-- main -->
<main>
  <div class="cover-dinas" style="background-image:url(bph-logo/dinas-akademik-cover.JPG);">
    <div class="transparent-dinas">
      <div class="text-center header-dinas">
        <img src="Logo/Akademik.png" class="size-icon-dinas">
        <h1>DINAS AKADEMIK</h1>
      </div>    
    </div>
  </div>
  <div class="text-center">
    <h1 style="margin-top: 50px;" class="size-h1-desc">Dinas Akademik</h1>
    <img src="Logo/Akademik.png" class="size-icon-dinas-desc">
  </div>
  <div class="deskripsi-dinas desc-dinas-marg">
    <div class="box-desc-dinas">
      <h1>Deskripsi Dinas : </h1>
      <h4 class="line-height-desc">Dinas yang memiliki peran penting terhadap ilmu pengetahuan dan teknologi Mahasiswa Sistem Komputer, dinas ini bertujuan menjadikan Mahasiswa Sistem Komputer memiliki wawasan yang luas, baik dari segi ilmu pengetahuan dan teknologi maupun dari segi kreatif dan inovatif.</h4>
    </div>
  </div>
  <div class="struktural-dinas">
    <h1 class="text-center">>>   Struktural Dinas   <<</h1>
    <div class="group-dinas struktural-dinas-kadin">
      <img src="bph-logo/deny.png">
      <img src="bph-logo/gulfi.png">
    </div>
    <div class="group-dinas struktural-dinas-staff staff-dinas">
      <img src="bph-logo/agil.png">
      <img src="bph-logo/icha.png">
      <img src="bph-logo/andika.png">
    </div>
    <div class="group-dinas struktural-dinas-staff staff-dinas">
      <img src="bph-logo/dewa.png">
      <img src="bph-logo/robi.png">
      <img src="bph-logo/helmi.png">
    </div>
  </div>
  <!--Carousel Wrapper-->
      <h1 class="text-center marg">>>   Program Kerja Dinas   <<</h1>
    <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" style="margin: 0px 50px;">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1" data-slide-to="0" class="active" style="background-color: #0e123e;"></li>
        <li data-target="#carousel-example-1" data-slide-to="1" style="background-color: #0e123e;"></li>
        <li data-target="#carousel-example-1" data-slide-to="2" style="background-color: #0e123e;"></li>
        <li data-target="#carousel-example-1" data-slide-to="3" style="background-color: #0e123e;"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100" src="img/dinas-akademik-kadin.png" alt="First slide">
            <div class="rgba-black-light"></div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="img/dinas-akademik-anggota1.png" alt="Second slide">
            <div class="rgba-black-strong"></div>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="img/dinas-akademik-anggota2.png" alt="Third slide">
            <div class="rgba-black-slight"></div>
          </div>        
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="img/dinas-akademik-anggota3.png" alt="Third slide">
            <div class="rgba-black-slight"></div>
          </div>      
        </div>        
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
        <span aria-hidden="true"><i class="fas fa-arrow-circle-left fa-3x" style="color: black;"></i></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
        <span aria-hidden="true"><i class="fas fa-arrow-circle-right fa-3x" style="color: black;"></i></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
</main>
<!-- /.main -->

<!-- Footer -->
<?php $this->load->view("home/footer");?>
<!-- Footer -->

  <!-- End your project here-->

<?php $this->load->view("home/sour");?>

</body>
</html>

<script>
</script>
