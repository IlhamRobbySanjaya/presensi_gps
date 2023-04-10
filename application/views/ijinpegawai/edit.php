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
                        <a href="<?= base_url('ijinpegawai/') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="no">No</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('nik'); ?>" type="text" id="no" name="no" class="form-control" placeholder="No">
                        <?= form_error('no', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nik">NIK/NIP</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('nik/nip'); ?>" type="text" id="nik/nip" name="nik/nip" class="form-control" placeholder="NIK/NIP">
                        <?= form_error('nik/nip', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama">Nama Lengkap</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('nama'); ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jabatan">Jabatan Fungsional</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('jabatan'); ?>" type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan">
                        <?= form_error('jabatan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal_mulai">Tanggal Mulai</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('tanggal_mulai'); ?>" type="text" id="tanggal_mulai" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai">
                        <?= form_error('tanggal_mulai', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal_selesai">Tanggal Selesai</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('tanggal_selesai'); ?>" type="text" id="tanggal_selesai" name="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai">
                        <?= form_error('tanggal_selesai', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="keterangan">Keterangan</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('keterangan'); ?>" type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan">
                        <?= form_error('keterangan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="file">File</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('file'); ?>" type="text" id="file" name="file" class="form-control" placeholder="File">
                        <?= form_error('file', '<span class="text-danger small">', '</span>'); ?>
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
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>