<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Dashboard Admin</h2>
        <a href="<?= base_url('login/logout') ?>" class="btn btn-outline-danger">Logout</a>
    </div>

    <!-- Statistik -->
    <div class="row text-center mb-4">
        <div class="col-md-4 mb-3">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tamu Hari Ini</h5>
                    <p class="card-text fs-4"><?= $jumlah_today ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tamu Bulan Ini</h5>
                    <p class="card-text fs-4"><?= $jumlah_bulan ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-dark shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Tamu</h5>
                    <p class="card-text fs-4"><?= $jumlah_total ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Tamu -->
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Daftar Tamu</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Waktu Datang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tamu as $t): ?>
                        <tr>
                            <td><?= $t->nama ?></td>
                            <td><?= $t->alamat ?></td>
                            <td><?= $t->tanggal ?></td>
                            <td><?= $t->waktu_datang ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit/'.$t->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('admin/hapus/'.$t->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
