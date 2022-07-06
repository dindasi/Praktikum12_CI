<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Prodi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <h2><?=$judul?></h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Program Studi</h3>
        </div>
        <div class="card-body">

        <?php echo form_open('prodi/save')?>

            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label> 
                <div class="col-8">
                <input id="kode" name="kode" type="text" aria-describedby="kodeHelpBlock" required="required" class="form-control"> 
                <span id="kodeHelpBlock" class="form-text text-muted">Contoh : SI</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Nama Prodi</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" aria-describedby="prodiHelpBlock" required="required"> 
                <span id="prodiHelpBlock" class="form-text text-muted">Contoh : Sistem Informasi</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="kaprodi" class="col-4 col-form-label">Kaprodi</label> 
                <div class="col-8">
                <input id="kaprodi" name="kaprodi" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        <?php echo form_close()?>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->