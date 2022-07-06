  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Daftar Mahasiswa</li>
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
          <h3 class="card-title">Kelola Data Mahasiswa</h3>
        </div>
        <div class="card-body">
          <a class="btn btn-success" href="mahasiswa/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Mahasiswa</a>
          <br>
          <br>
          <div class="container-fluid">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">IPK</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        foreach($list_mahasiswa as $mhs){
                    ?>

                    <tr>
                        <td><?= $nomor ?></th>
                        <td><?= $mhs -> nim ?></td>
                        <td><?= $mhs -> nama ?></td>
                        <td><?= $mhs-> gender ?></td>
                        <td><?= $mhs -> tmp_lahir ?></td>
                        <td><?= $mhs -> tgl_lahir ?></td>
                        <td><?= $mhs -> ipk ?></td>
                        <td><?= $mhs->prodi_kode?></td>
                        <td>
                          <a href="mahasiswa/view?id=<?=$mhs->nim?>" type="button" class="btn btn-primary">View </a>
                          <a href="mahasiswa/edit?id=<?=$mhs->nim?>"  type="button" class="btn btn-primary">Edit </a>
                          <a href="mahasiswa/delete?id=<?=$mhs->nim?>"
                          onclick="if(!confirm('Anda Yakin Akan Menghapus Data Mahasiswa NIM <?=$mhs->nim?>?')){return false}"  
                          type="button" class="btn btn-primary">Delete</a>
                        </td>
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
  <!-- /.content-wrapper -->    