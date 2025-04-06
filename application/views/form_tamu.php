<!DOCTYPE html>
<html>
<head>
  <title>Form Buku Tamu</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white text-center">
          <h4>Form Buku Tamu</h4>
        </div>
        <div class="card-body">

          <!-- Flash message -->
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <?= $this->session->flashdata('success') ?>
            </div>
          <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
              <?= $this->session->flashdata('error') ?>
            </div>
          <?php endif; ?>

          <!-- Validation errors -->
          <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

          <!-- Form -->
          <form method="post" action="<?= base_url('tamu/simpan') ?>">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
