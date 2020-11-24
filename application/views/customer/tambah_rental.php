<div class="container">
    <div class="card" style="margin-top: 200px; margin-bottom: 50px">
        <div class="card-header">
            Form Rental Mobil
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <form method="post" action="<?= base_url('customer/rental/tambah_rental_aksi'); ?>">

                    <div class="form-group">
                        <label for="">Harga Sewa/Hari</label>
                        <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil; ?>">
                        <input type="text" name="harga" class="form-control" value="Rp. <?= number_format($dt->harga, 0, ',', '.'); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda</label>
                        <input type="text" name="denda" class="form-control" value="Rp. <?= number_format($dt->denda, 0, ',', '.'); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-sm btn-warning">Submit</button>

                </form>
            <?php endforeach; ?>

        </div>
    </div>
</div>