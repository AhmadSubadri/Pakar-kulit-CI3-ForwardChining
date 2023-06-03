<div class="heading_container heading_center" style="background-color: #FFBE33; box-shadow: 2px 2px 2px 2px #CFF1F7; padding: 20px;">
    <h2>Hasil Periksa</h2>
</div><br>
<div class="form">
    <div>
        <div class="heading_container heading_center" style="background-color: #FFBE33; box-shadow: 2px 2px 2px 2px #CFF1F7;">
            <h2>Biodata User</h2>
        </div><br>
        <table class="table" style="box-shadow: 1px 1px 3px 3px #CFF1F7;">
            <tr>
                <th scope="row">Nama</th>
                <td>: <?php echo $biodata['nama']; ?></td>
            </tr>
            <tr>
                <th scope="row">Umur</th>
                <td>: <?php echo $biodata['umur']; ?></td>
            </tr>
            <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>: <?php echo $biodata['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <th scope="row">No. KK</th>
                <td>: <?php echo $biodata['no_kk']; ?></td>
            </tr>
            <tr>
                <th scope="row">Telp</th>
                <td>: <?php echo $biodata['telp']; ?></td>
            </tr>
            <tr>
                <th scope="row">Alamat</th>
                <td>: <?php echo $biodata['alamat']; ?></td>
            </tr>
        </table>
        <div class="heading_container heading_center" style="background-color: #FFBE33; box-shadow: 2px 2px 2px 2px #CFF1F7;">
            <h2>Gejala yang Dipilih</h2>
        </div><br>
        <ul style="box-shadow: 1px 1px 3px 3px #CFF1F7;">
            <table class="table">
                <?php $i = 1;
                foreach ($nama_gejala as $gejala) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>: <?= $gejala; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </ul>
        <div class="heading_container heading_center" style="background-color: #FFBE33; box-shadow: 2px 2px 2px 2px #CFF1F7;">
            <h2>Hasil Diagnosa</h2>
        </div><br>
        <?php if (!empty($result)) : ?>
            <table class="table" style="box-shadow: 1px 1px 3px 3px #CFF1F7;">
                <tr>
                    <th>Kode Penyakit</th>
                    <th>Nama Penyakit</th>
                    <th>Gejala di dapat</th>
                    <th>Proses Hitung</th>
                    <th>Penanganan</th>
                    <th>Persentase</th>
                </tr>
                <?php foreach ($result as $penyakit) : ?>
                    <tr>
                        <td><?php echo $penyakit['kode_penyakit']; ?></td>
                        <td><?php echo $penyakit['nama_penyakit']; ?></td>
                        <td><?php echo $penyakit['count']; ?> gejala user dari <?php echo $total_gejala_penyakit[$penyakit['kode_penyakit']]; ?> gejala dalam rule(aturan)</td>
                        <?php
                        $perkalian = $penyakit['count'] / $total_gejala_penyakit[$penyakit['kode_penyakit']] * 100;
                        $persentase = round($perkalian, 2);
                        ?>
                        <td><?php echo $penyakit['count']; ?>/<?php echo $total_gejala_penyakit[$penyakit['kode_penyakit']]; ?> * 100</td>
                        <td><?php echo $penyakit['penanganan']; ?></td>
                        <td><?php echo $persentase; ?>%</td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else : ?>
            <p>Tidak ada hasil diagnosa yang sesuai dengan gejala yang dipilih.</p>
        <?php endif; ?>
    </div>
</div>