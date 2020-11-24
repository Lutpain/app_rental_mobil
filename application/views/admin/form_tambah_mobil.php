<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/data_mobil/tambah_mobil_aksi'); ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Type Mobil</label>
                                <select name="kode_type" id="kode_type" class="form-control">
                                    <option value="">--Pilih Type Mobil--</option>
                                    <?php foreach ($type as $tp) : ?>
                                        <option value="<?= $tp->kode_type; ?>"><?= $tp->nama_type; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" id="merk" class="form-control">
                                <?= form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Plat</label>
                                <input type="text" name="no_plat" id="no_plat" class="form-control">
                                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" id="warna" class="form-control">
                                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>AC</label>
                                <select name="ac" id="ac" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                    <?= form_error('ac', '<div class="text-small text-danger">', '</div>') ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Supir</label>
                                <select name="supir" id="supir" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                    <?= form_error('supir', '<div class="text-small text-danger">', '</div>') ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>MP3 Player</label>
                                <select name="mp3_player" id="mp3_player" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                    <?= form_error('mp3_player', '<div class="text-small text-danger">', '</div>') ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Central Lock</label>
                                <select name="central_lock" id="central_lock" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                    <?= form_error('central_lock', '<div class="text-small text-danger">', '</div>') ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Harga Sewa/Hari</label>
                                <input type="number" name="harga" id="harga" class="form-control">
                                <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Denda</label>
                                <input type="number" name="denda" id="number" class="form-control">
                                <?= form_error('number', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="tahun" id="tahun" class="form-control">
                                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>