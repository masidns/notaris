<form action="<?= base_url('kategorikbli/update/'.$kategorikbli->idKategorikbli) ?>" method="post">
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
                                                <input type="text" name="subkategori" pleacholder="Kategori" value="<?php echo ($this->input->post('subkategori')? $this->input->post('subkategori') : $kategorikbli->subkategori) ?>" class="form-control form-control-sm"  class="form-control" id="" />
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="deskripsi" class="control-label">Nama Kategori</label>
                                            <div class="form-group">
                                                <input type="text" name="deskripsikategori" placeholder="Nama Kategori" value="<?php echo ($this->input->post('deskripsikategori') ? $this->input->post('deskripsikategori') : $kategorikbli->deskripsikategori) ?>" class="form-control form-control-sm" class="form-control" id=""  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="ketkategori" placeholder="Keterangan Kategori" value="<?php echo ($this->input->post('ketkategori') ? $this->input->post('ketkategori') : $kategorikbli->ketkategori) ?>" class="form-control form-control-sm" rows="3" ></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
            