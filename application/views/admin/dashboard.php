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
        <?php $this->load->view('admin_temp/topbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- trial table -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $count = 0;
              foreach ($atabled->result() as $row) :
                $count++;
              ?>
                <tr>
                  <th scope="row"><?php echo $row->id; ?></th>
                  <td><?php echo $row->judul; ?></td>
                  <td><?php echo $row->isi; ?></td>
                  <td>
                    <a href="<?php echo site_url('product/edit_it/' . $row->id); ?>" class="btn btn-primary" data-toggle="modal" data-target="#kt_modal_1">Edit Post
                    </a>
                    <!--begin::Modal-->
                    <div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>TES MODAL</p>
                            <form action="<?php echo site_url('admin/edit_data'); ?>" method="post">
                              <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" id="judul" value="<?php echo $row->judul; ?>" placeholder="Judul" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Isi</label>
                                <input type="text" name="isi" id="isi" value="<?php echo $row->isi; ?>" placeholder="Isi" class="form-control">
                              </div>
                            </form>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--end::Modal-->
                    <a href="<?php echo site_url('admin/home/delete/' . $row->id); ?>" class="btn btn-danger btn-circle">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- trial table -->

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