<?php $this->load->view("template/head"); ?>

<!-- Start your project here-->
<!--Navbar -->
<?php $this->load->view('template/navbar'); ?>
<!--/.Navbar -->
<!-- Header -->
<header>
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
            <li data-target="#carousel-example-2" data-slide-to="4"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <a href="">
                        <h1 class="h1-responsive">Open Recruitment</h1>
                    </a>
                    <p>BPH Himasisko 2020</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <a href="">
                        <h1 class="h1-responsive">Apresiasi Mahasiswa</h1>
                    </a>
                    <p>Mahasiswa Of The Month</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <a href="">
                        <h1 class="h1-responsive">Tech Story</h1>
                    </a>
                    <p>Hololens</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <a href="">
                        <h1 class="h1-responsive">Informasi Penting</h1>
                    </a>
                    <p>Pendataan Suliet</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <a href="#">
                        <h1 class="h1-responsive">Info Lomba</h1>
                    </a>
                    <p>Technology Euphoria</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</header>
<!-- /.Header -->
<!-- main -->
<main style="background-color: #ececec">
    <div class="content-proker">
        <h1 class="txt-proker-box text-center">Program Kerja</h1>
        <div class="box-content-proker">
            <div class="logo-tanggal">
                <h3>Jul</h3>
                <h2>16</h2>
            </div>
            <h2 style="padding-top: 5px;">Open Recruitment</h2>
            <div class="owner-proker">
                <h5 style="padding-right: 30px;"><i class="fas fa-user logo-owner"></i>HIMASISKO</h5>
                <h5><i class="fas fa-file-alt logo-owner"></i>Program Kerja, PSDM</h5>
            </div>
            <img src="bph-logo/dinas-akademik-cover.JPG" style="margin: 0 auto;">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</main>
<!-- /.main -->
<!-- Footer -->
<?php $this->load->view("template/footer"); ?>
<!-- Footer -->

<!-- End your project here-->

<?php $this->load->view("template/sour"); ?>