<h2>Edit Data Tamu</h2>
<form action="<?= base_url('admin/update/'.$tamu->id) ?>" method="post">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $tamu->nama ?>"><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" value="<?= $tamu->alamat ?>"><br><br>

    <button type="submit">Update</button>
</form>
