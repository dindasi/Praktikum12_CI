<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Daftar Program Studi</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Prodi</li>
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
            <h3 class="card-title">Kelola Data Program Studi</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-success" href="prodi/create" role="button"><i class="fas fa-plus-circle"></i> Create Data Prodi</a>
            <br>
            <br>
            <!-- Konten -->
            <div class="container-fluid">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Prodi</th>
                            <th scope="col">Ketua Prodi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($list_prodi as $prd){
                        ?>

                        <tr>
                            <td><?= $nomor ?></th>
                            <td><?= $prd->kode ?></td>
                            <td><?= $prd->nama ?></td>
                            <td><?= $prd->kaprodi ?></td>
                            <td>
                                <a href="prodi/view?id=<?=$prd->kode?>" type="button" class="btn btn-primary">View </a>
                                <a href="prodi/edit?id=<?=$prd->kode?>" type="button" class="btn btn-primary">Edit </a>
                                <a href="prodi/delete?id=<?=$prd->kode?>"
                                onclick="if(!confirm('Anda Yakin Akan Menghapus Data Prodi dengan kode : <?=$prd->kode?>?')){return false}" 
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