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
                <h3 class="card-title">Tambah Gejala</h3>
              </div>
              <!-- /.card-header -->
              <form action="<?= base_url("admin/gejala/edit/" . $gejala["id_gejala"]); ?>" method="post">
                <div class="card-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gejala</label>
                      <input type="text" class="form-control" placeholder="Gejala" name="gejala" value="<?= $gejala["gejala"]; ?>">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Edit</button>
                </div>
              </form>
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