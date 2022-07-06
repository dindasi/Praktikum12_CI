<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <h2>Form Kelola Data Dosen</h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Data Dosen</h3>
        </div>
        <div class="card-body">
          <?php echo form_open('dosen/save')?>  
        <div class="form-group row">
            <label for="nidn" class="col-4 col-form-label">NIDN</label> 
            <div class="col-8">
              <input id="nidn" name="nidn" placeholder="Masukkan NIDN" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Dosen</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                  </div>
                </div> 
                <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Dosen" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required"> 
                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required"> 
                <label for="gender_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tgl_lahir" name="tgl_lahir" placeholder="yyyy-mm-dd" type="text" required="required" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
            <div class="col-8">
              <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="pendidikan" class="col-4 col-form-label">Pendidikan Terakhir</label> 
            <div class="col-8">
              <input id="pendidikan_akhir" name="pendidikan_akhir" type="text" class="form-control" aria-describedby="pendidikanHelpBlock" required="required"> 
              <span id="pendidikanHelpBlock" class="form-text text-muted">Contoh : S2</span>
            </div>
          </div>
          <div class="form-group row">
            <label for="prodi_kode" class="col-4 col-form-label">Kode Prodi</label> 
            <div class="col-8">
              <input id="prodi_kode" name="prodi_kode" placeholder="Masukkan Kode Program Studi" type="text" class="form-control" required="required" aria-describedby="prodi_kodeHelpBlock"> 
              <span id="prodi_kodeHelpBlock" class="form-text text-muted">Contoh : TI</span>
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