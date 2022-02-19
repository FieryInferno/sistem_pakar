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
                <h3 class="card-title">Edit Relasi</h3>
              </div>
              <!-- /.card-header -->
              <form action="<?= base_url("admin/relasi/edit/" . $relasi["id_relasi"]); ?>" method="post">
                <div class="card-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Penyakit</label>
                      <select name="penyakit" id="penyakit" class="form-control">
                        <?php
                          foreach ($penyakit as $key) { ?>
                            <option value="<?= $key['id_penyakit']; ?>" <?= $key["id_penyakit"] === $relasi["penyakit_id"] ? "selected" : ""; ?>><?= $key['penyakit']; ?></option>
                          <?php }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Daftar Gejala</label>
                      <!-- <table id="example2" class="table table-bordered table-striped" width="100%"> -->
                      <table class="table table-bordered table-striped" width="100%">
                        <thead>
                          <tr>
                            <th width="5%">#</th>
                            <th width="95%">Nama Gejala</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            foreach ($gejala as $key) { ?>
                              <tr>
                                <td>
                                  <div class='form-check'>
                                    <input class='form-check-input' type='checkbox' value='<?= $key["id_gejala"]; ?>' id='defaultCheck1' name='gejala[]' <?= in_array($key['id_gejala'], json_decode($relasi["gejala_id"])) ? 'checked' : ''; ?>>
                                  </div>
                                </td>
                                <td><?= $key["gejala"]; ?></td>
                              </tr>
                            <?php }
                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>#</th>
                            <th>Nama Gejala</th>
                          </tr>
                        </tfoot>
                      </table>
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