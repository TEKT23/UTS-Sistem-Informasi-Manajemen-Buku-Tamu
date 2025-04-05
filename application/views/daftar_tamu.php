<h2>Daftar Tamu</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal</th>
        <th>Waktu Datang</th>
    </tr>
    <?php $no = 1; foreach ($tamu as $t): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $t->nama ?></td>
        <td><?= $t->alamat ?></td>
        <td><?= $t->tanggal ?></td>
        <td><?= $t->waktu_datang ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="<?= site_url('tamu') ?>">← Kembali ke Form</a>
