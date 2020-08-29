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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> </h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <button type="button" class="btn btn-primary btn-icon-split btnadd float-right" data-toggle="modal" data-target="#staticBackdrop">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add New</span>
                            </button>

                            <div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Lokasi</th>

                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($jabatan as $jbtn) : ?>
                                            <tr>
                                                <td>
                                                    <?= $jbtn->jabatan ?>

                                                </td>
                                                <td class="text-center" width="160px">
                                                    <div class="btn btn-primary btn-sm btnupdate" data-toggle="modal" data-target="#staticBackdrop" data-id=<?= $jbtn->id ?>>
                                                        <i class=" far fa-edit "></i>
                                                    </div>
                                                    <?= anchor('admin/dinas/delete/' . $jbtn->id, '<div class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt "></i></div>') ?>
                                                </td>


                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modallabel" id="staticBackdropLabel">Form Input Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="<?= base_url() . 'admin/jabatan/'; ?>" method="post">

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="Input">Jabatan</label>
                                    <input name="id" type="hidden" class="form-control" id="id">
                                    <input name="jabatan" type="text" class="form-control" id="Input">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="btntambah">Save</button>
                                <button type="submit" class="btn btn-primary" id="btnubah">Ubah</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->

    <?php $this->load->view("admin_temp/logout"); ?>
    <script type="text/javascript">
        $(function() {

            const base = "<?= base_url() ?>";
            // nama input data
            const name = "Jabatan";
            // nama url
            const url = "admin/dinas";

            $('.btnadd').on('click', function() {
                $('.modallabel').html('Input Data ' + name);
                $('#btntambah').show();
                $('#btnubah').hide();
                $('[name = "jabatan"]').val('');
                $('[name = "id"]').val('');

                const direct = url + "/addItems";
                $('.modal-body form').attr('action', base + direct);
            });

            $('.btnupdate').on('click', function() {
                $('.modallabel').html('Update Data ' + name);
                $('#btntambah').hide();
                $('#btnubah').show();
                $('[name = "jabatan"]').val('');
                $('[name = "id"]').val('');

                const update = url + "/Update";
                $('.modal-body form').attr('action', base + update);

                const direct = url + "/getUpdate";
                const id = $(this).data('id');

                $.ajax({
                    url: base + direct,
                    data: {
                        id: id
                    },
                    method: 'post',
                    dataType: 'json',
                    success: function(data) {
                        $('[name = "jabatan"]').val(data[0].jabatan);
                        $('[name = "id"]').val(data[0].id);
                    }
                });
            });
        });
    </script>
    <?php $this->load->view("admin_temp/source"); ?>