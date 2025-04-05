<!DOCTYPE html>
<html>
<head>
  <title>Form Buku Tamu</title>
</head>
<body>
  <h2>Form Buku Tamu</h2>

  <?php if ($this->session->flashdata('success')): ?>
    <div style="color: green; margin-bottom: 10px;">
        <?= $this->session->flashdata('success') ?>
    </div>
<?php elseif ($this->session->flashdata('error')): ?>
    <div style="color: red; margin-bottom: 10px;">
        <?= $this->session->flashdata('error') ?>
    </div>
<?php endif; ?>
 
  <?= validation_errors('<p style="color:red">', '</p>'); ?>

  <form method="post" action="<?= base_url('tamu/simpan') ?>">
    <label>Nama</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat</label><br>
    <input type="text" name="alamat" required><br><br>

    <button type="submit">Simpan</button>
  </form>
</body>
</html>
