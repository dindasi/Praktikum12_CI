<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Daftar Dosen</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Dosen</li>
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
            <h3 class="card-title">Kelola Data Dosen</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-success" href="dosen/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Dosen</a>
            <br>
            <br>
            <!-- Konten -->
            <div class="container-fluid">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Kode Prodi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $nomor = 1;
                            foreach($list_dosen as $dsn){
                        ?>

                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $dsn->nidn ?></td>
                            <td><?= $dsn->nama?></td>
                            <td><?= $dsn->gender ?></td>
                            <td><?= $dsn->tgl_lahir ?></td>
                            <td><?= $dsn->tmp_lahir ?></td>
                            <td><?= $dsn->pendidikan_akhir ?></td>
                            <td><?= $dsn->prodi_kode ?></td>
                            <td>
                            <a href="dosen/view?id=<?=$dsn->nidn?>" type="button" class="btn btn-primary">View </a>
                            <a href="dosen/edit?id=<?=$dsn->nidn?>" type="button" class="btn btn-primary">Edit </a>
                            <a href="dosen/delete?id=<?=$dsn->nidn?>"
                            onclick="if(!confirm('Anda Yakin Akan Menghapus Data Dosen dengan NIDN : <?=$dsn->nidn?>?')){return false}"
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