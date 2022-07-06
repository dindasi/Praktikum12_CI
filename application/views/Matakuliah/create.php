<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mata Kuliah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Mata Kuliah</h3>
        </div>
        <div class="card-body">

        <?php echo form_open('matakuliah/save')?>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Nama Mata Kuliah</label> 
                <div class="col-8">
                <input id="matkul" name="matkul" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="sks" class="col-4 col-form-label">Jumlah SKS</label> 
                <div class="col-8">
                <input id="sks" name="sks" type="text" required="required" class="form-control" aria-describedby="sksHelpBlock"> 
                <span id="sksHelpBlock" class="form-text text-muted">Masukkan data dalam bentuk angka</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode Mata Kuliah</label> 
                <div class="col-8">
                <input id="kode" name="kode" type="text" required="required" class="form-control">
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