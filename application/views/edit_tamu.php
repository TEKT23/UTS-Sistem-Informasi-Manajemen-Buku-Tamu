<h2>Edit Data Tamu</h2>
<form action="<?= base_url('admin/update/'.$tamu->id) ?>" method="post">
    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $tamu->nama ?>"><br><br>

    <label>Alamat</label><br>
    <input type="text" name="alamat" value="<?= $tamu->alamat ?>"><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" value="<?= $tamu->tanggal ?>"><br><br>

    <label>Waktu Datang</label><br>
    <input type="time" name="waktu_datang" value="<?= $tamu->waktu_datang ?>"><br><br>

    <button type="submit">Update</button>
</form>
