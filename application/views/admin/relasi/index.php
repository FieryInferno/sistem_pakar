<?php $this->load->view("template/head"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php $this->load->view("template/header"); ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Relasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?= base_url(); ?>admin/relasi/tambah" class="btn btn-success mb-1">Tambah Relasi Baru</a>
                <?php
                  if ($this->session->flashdata("sukses")) { ?>
                    <div class="alert alert-success" role="alert">
                      <?= $this->session->flashdata("sukses"); ?>
                    </div>
                  <?php }
                ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Penyakit</th>
                      <th>Gejala</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($relasi as $key) { ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $key["penyakit"]; ?></td>
                          <td><?= json_encode($key["gejala_id"]); ?></td>
                          <td>
                            <a class="btn btn-primary" href="<?= base_url("admin/relasi/edit/" . $key["id_relasi"]); ?>">Edit</a>
                            <a class="btn btn-danger" href="<?= base_url("admin/relasi/hapus/" . $key["id_relasi"]); ?>">Hapus</a>
                          </td>
                        </tr>
                      <?php }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view("template/footer"); ?>