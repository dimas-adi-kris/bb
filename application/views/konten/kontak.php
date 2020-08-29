<?php $this->load->view("template/head"); ?>

<!-- Start your project here-->
<!--Navbar -->
<?php $this->load->view('template/navbar'); ?>
<!--/.Navbar -->
<!-- main -->
<main style="background-image: url(Logo/bg-struktural-1.jpg); background-size: cover; width: 100%; height: 640px;">
    <div class="bg-contact" style="background-color: rgba(14, 18, 62, 0.6); height: 640px;">
        <h1 style="margin-bottom: 20px; padding-top: 50px;" class="text-center">Kontak Kami
            <hr width="250px" style="border: 1px solid white; border-style: dashed;">
        </h1>
        <div class="box-contact">
            <h2 class="txt-medsos">Media Sosial</h2>
            <div class="box-medsos">
                <div class="box-hima"><i class="fab fa-instagram fa-4x ic"></i><br>himasiskounsri</div>
                <div class="box-hima"><i class="fab fa-facebook fa-4x ic"></i><br>Himasisko Fasilkom Unsri</div>
                <div class="box-hima"><i class="fab fa-line fa-4x ic"></i><br>@jke4086t</div>
                <div class="box-hima"><i class="fab fa-youtube fa-4x ic"></i><br>Himasisko<br>Universitas Sriwijaya</div>
            </div>
        </div>
        <div class="box-maps text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5212277603737!2d104.64897271446965!3d-3.2194986416972586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bbdf1ba5ade17%3A0xec8169998ecd82bc!2sFakultas%20Ilmu%20Komputer%20Universitas%20Sriwijaya!5e0!3m2!1sid!2sid!4v1594186843048!5m2!1sid!2sid" width="700px" height="170px" frameborder="0" style="border-radius: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</main>
<!-- /.main -->

<!-- Footer -->
<?php $this->load->view("template/footer"); ?>
<!-- Footer -->

<!-- End your project here-->

<?php $this->load->view("template/sour"); ?>