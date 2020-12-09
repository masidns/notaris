<div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <i class="fas fa-table mr-1"></i>
                    Data 2 Digit Kategori KBLI
                    </div>
                    <div>
                        <a href="<?= base_url('kodedua/tambah') ?>" class="btn btn-success btn-sm"><i class="fas fa-plus mr-1"></i>Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ; text-justify" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action....</th>
                            </tr>
                        </thead>
                        <?php foreach ($kodedua as $key => $value) : ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?= $key+1; ?></th>
                                    <td><?= $value->subkategori; ?></td>
                                    <td><?= $value->nokodedua; ?></td>
                                    <td><?= $value->namakodedua; ?></td>
                                    <td><?= $value->ketkodedua; ?></td>
                                    <td>
                                        <a href="<?= base_url('kodedua/update/'.$value->idkodedua); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                                        <a href="<?= base_url('kodedua/hapus/'.$value->idkodedua); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <div>
                        <i class="fas fa-table mr-1"></i>
                    Data Kategori KBLI
                    </div>
                    <div>
                        <a href="<?= base_url('kodedua/tambah') ?>" class="btn btn-success btn-sm"><i class="fas fa-plus mr-1"></i>Tambah</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
        
