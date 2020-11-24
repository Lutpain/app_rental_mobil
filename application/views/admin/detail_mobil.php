      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Mobil</h1>
          </div>
        </section>

        <?php foreach ($detail as $dt) : ?>

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <img src="<?= base_url() . 'assets/upload/' . $dt->gambar; ?>" width="400px">
                </div>
                <div class="col-md-7">
                  <table class="table">
                    <tr>
                      <td>Type Mobil</td>
                      <td>
                        <?php
                        if ($dt->kode_type == "SDN") {
                          echo "Sedan";
                        } elseif ($dt->kode_type == "HTB") {
                          echo "Hatchback";
                        } elseif ($dt->kode_type == "MPV") {
                          echo "Multi Purpose Vechile";
                        } else {
                          echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
                        }
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>Merek Mobil</td>
                      <td><?= $dt->merk ?></td>
                    </tr>

                    <tr>
                      <td>No. Plat</td>
                      <td><?= $dt->no_plat ?></td>
                    </tr>

                    <tr>
                      <td>Warna</td>
                      <td><?= $dt->warna ?></td>
                    </tr>

                    <tr>
                      <td>Tahun</td>
                      <td><?= $dt->tahun ?></td>
                    </tr>

                    <tr>
                      <td>Harga</td>
                      <td>Rp. <?= number_format($dt->harga, 0, ',', '.') ?></td>
                    </tr>

                    <tr>
                      <td>Denda</td>
                      <td>Rp. <?= number_format($dt->denda, 0, ',', ','); ?></td>
                    </tr>

                    <tr>
                      <td>Status</td>
                      <td>
                        <?php
                        if ($dt->status == "0") {
                          echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                        } else {
                          echo "<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>AC</td>
                      <td>
                        <?php
                        if ($dt->ac == "0") {
                          echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                        } else {
                          echo "<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>Supir</td>
                      <td>
                        <?php
                        if ($dt->supir == "0") {
                          echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                        } else {
                          echo "<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>MP3 PLayer</td>
                      <td>
                        <?php
                        if ($dt->mp3_player == "0") {
                          echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                        } else {
                          echo "<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>Central Lock</td>
                      <td>
                        <?php
                        if ($dt->mp3_player == "0") {
                          echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                        } else {
                          echo "<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?>
                      </td>
                    </tr>

                  </table>
                  <a class="btn btn-sm btn-danger ml-4" href="<?= base_url('admin/data_mobil'); ?>">Kembali</a>
                  <a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_mobil/update_mobil/' . $dt->id_mobil); ?>">Update</a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>