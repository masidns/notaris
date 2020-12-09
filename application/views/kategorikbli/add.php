<form action="<?= base_url('kategorikbli/tambah'); ?>" method="post">
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
                                            <div class="col-md-2">
                                                <label for="nm_aspek" class="control-label">Kategori</label>
                                                <div class="form-group">
                                                    <input type="text" name="subkategori" placeholder="A-Z" class="form-control form-control-sm"  value="<?php echo $this->input->post('subkategori'); ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <label for="deskripsi" class="control-label">Nama Kategori</label>
                                                <div class="form-group">
                                                    <input type="text" name="deskripsikategori" placeholder="Nama Kategori" class="form-control form-control-sm" value="<?php $this->input->post('deskripsikategori'); ?>"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Descripsi</label>
                            <textarea type="text" name="ketkategori" class="form-control form-control-sm" rows="3" value="<?php $this->input->post('ketkategori'); ?>"></textarea>
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