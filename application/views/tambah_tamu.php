<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .form-container {
        max-width: 600px;
        margin: 60px auto;
    }
    </style>
</head>

<body>

    <div class="container form-container">
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white text-center">
                <h3>Tambah Data Tamu</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('tamu/tambah') ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="<?= base_url('admin/admin') ?>" class="btn btn-secondary w-100">Batal</a>
                        <button type="submit" class="btn btn-success w-100">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>