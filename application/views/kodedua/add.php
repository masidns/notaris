<form action="<?= base_url('kodedua/tambah') ?>" method="post">
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
            <div class="card">
                <div class="card-header">
                    <h4>Form Input Sub Kategori KBLI</h4>
                </div>
                <div class="card-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                <select name="idKategorikbli" class="custom-select" id="inputGroupSelect02-sm">
                                                    <?php foreach ($idKategorikbli as $key):?>
                                                        <option value="<?php echo $key->idKategorikbli ?>" selected><?php echo $key->subkategori.' - '.$key->deskripsikategori  ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02-sm">Kategori</label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="nm_aspek" class="control-label">No Kode</label>
                                                <div class="form-group">
                                                    <input type="text" name="nokodedua" placeholder="00" class="form-control form-control-sm"  value="<?php echo $this->input->post('nokodedua'); ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="deskripsi" class="control-label">Nama Kode</label>
                                                <div class="form-group">
                                                    <input type="text" name="namakodedua" placeholder="Nama Kategori" class="form-control form-control-sm" value="<?php $this->input->post('namakodedua'); ?>"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Descripsi</label>
                            <textarea type="text" name="ketkodedua" class="form-control form-control-sm" rows="3" value="<?php $this->input->post('namakodedua'); ?>"></textarea>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</form>