<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('detail_user') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <form action="<?= base_url('detail_user/aksiEdit') ?>" method="post">
                    <div class="row form-group">
                        <label class="col-md-4 text-md-right" for="nik">NIK</label>
                        <div class="col-md-6">
                            <input value="<?= $data_user->nip ?>" type="text" id="nip" name="nip" class="form-control" placeholder="nip">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 text-md-right" for="nama">Nama Lengkap</label>
                        <div class="col-md-6">
                            <input value="<?= $data_user->nama ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 text-md-right" for="jabatan">jabatan</label>
                        <div class="col-md-6">
                            <input value="<?= $data_user->jabatan ?>" type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 text-md-right" for="email">E-mail</label>
                        <div class="col-md-6">
                            <input value="<?= $data_user->email ?>" type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                            <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 text-md-right" for="alamat">Alamat</label>
                        <div class="col-md-6">
                            <input value="<?= $data_user->alamat ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                            <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-4 text-md-right" for="no_telp">Nomor Telepon</label>
                        <div class="col-md-6">
                            <input value="<?= $data_user->no_telp ?>" type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telepon">
                            <?= form_error('no_telp', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="row form-group justify-content-end">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary btn-icon-split">
                                <span class="icon"><i class="fa fa-save"></i></span>
                                <span class="text">Simpan</span>
                            </button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>