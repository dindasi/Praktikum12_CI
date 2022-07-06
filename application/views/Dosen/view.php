<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Dosen</li>
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
          <h3 class="card-title">Data dari Form</h3>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-sm-8">

                <table class="table table-bordered">
                    <tbody>
                        <tr><td>NIDN</td><td><?= $dosen->nidn?></td></tr>
                        <tr><td>Nama Dosen</td><td><?= $dosen->nama?></td></tr>
                        <tr><td>Jenis Kelamin</td><td><?= $dosen->gender?></td></tr>
                        <tr><td>Tanggal Lahir</td><td><?= $dosen->tgl_lahir?></td></tr>
                        <tr><td>Tempat Lahir</td><td><?= $dosen->tmp_lahir?></td></tr>
                        <tr><td>Pendidikan Terakhir</td><td><?= $dosen->pendidikan_akhir?></td></tr>
                        <tr><td>Kode Prodi</td><td><?= $dosen->prodi_kode?></td></tr>
                    </tbody>
                </table>  

            </div>
            <div class="col-sm-4">
              Ini Foto
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->