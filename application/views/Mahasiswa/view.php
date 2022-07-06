<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
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
            <h2>Data dari Form</h2>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td scope="col">NIM</td>
                    <td scope="col"><?= $mhs->nim?></td>
                  </tr>
                  <tr>
                    <td scope="col">Nama Lengkap</td>
                    <td scope="col"><?= $mhs->nama?></td>
                  </tr>
                  <tr>
                    <td scope="col">Jenis Kelamin</td>
                    <td scope="col"><?= $mhs->gender?></td>
                  </tr>
                  <tr>
                    <td scope="col">Tempat, Tgl Lahir</td>
                    <td scope="col"><?= $mhs->tmp_lahir?>, <?= $mhs->tgl_lahir?></td>
                  </tr>
                  <tr>
                    <td scope="col">Program Studi</td>
                    <td scope="col"><?= $mhs->prodi_kode?></td>
                  </tr>
                  <tr>
                    <td scope="col">IPK</td>
                    <td scope="col"><?= $mhs->ipk?></td>
                  </tr>
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