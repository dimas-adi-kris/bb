<?php $this->load->view("admin_temp/head"); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin_temp/sidebar"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('admin_temp/Topbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1>Post Baru</h1>
          <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('admin/home/save'); ?>" method="post">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" placeholder="Judul" class="form-control">
              </div>
              <div class="form-group">
                <label>Isi</label>
                <input type="text" name="isi" placeholder="isi" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">submit</button>
            </form>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin_temp/footer"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("admin_temp/logout"); ?>
  <?php $this->load->view("admin_temp/source"); ?>