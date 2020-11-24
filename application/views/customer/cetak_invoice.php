<table style="width: 60%">
    <h2>Invoice Pembayaran Anda</h2>
    <?php foreach ($transaksi as $tr) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?= $tr->nama; ?></td>
        </tr>
        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?= $tr->merk; ?></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?= $tr->tanggal_rental; ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?= $tr->tanggal_kembali; ?></td>
        </tr>
        <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td>Rp. <?= number_format($tr->harga, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <?php
            $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_rental);
            $jmlHari = abs(($x - $y) / (60 * 60 * 24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?= $jmlHari; ?> Hari</td>
        </tr>
        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td><?php if ($tr->status_pembayaran == '1') { ?>
                    <?= 'Lunas'; ?>
                <?php } else { ?>
                    <?= 'Belum Lunas'; ?>
                <?php } ?>
            </td>
        </tr>
        <tr style="font-weight: bold; color: red">
            <td>JUMLAH PEMBAYARAN</td>
            <td>:</td>
            <td>
                <?= number_format($tr->harga * $jmlHari, 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li> Bank Mandiri 1233123123</li>
                    <li> Bank BCA 2324365675</li>
                    <li> Bank BNI 1241246234832</li>
                    <li> Bank BRI 83274623654</li>
                </ul>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>