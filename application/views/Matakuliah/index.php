<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Daftar Mata Kuliah</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Mata Kuliah</li>
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
          <h3 class="card-title">Kelola Data Mata kuliah</h3>
        </div>
        <div class="card-body">
          <a class="btn btn-success" href="matakuliah/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Matkul</a>
          <br>
          <br>
          <div class="container-fluid">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Kode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        foreach($list_mk as $mk){
                    ?>

                    <tr>
                        <td><?= $nomor ?></th>
                        <td><?= $mk -> nama ?></td>
                        <td><?= $mk -> sks ?></td>
                        <td><?= $mk-> kode ?></td>
                    </tr>

                    <?php
                        $nomor++;
                        }
                    ?>
                </tbody>
            </table>
          </div>   
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
</div>