<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center gap-3">
                <img src="<?= base_url('assets/img/profil.jpg') ?>" class="rounded-circle" width="50" height="50"
                    alt="Foto Admin">
                <h4 class="mb-0">Selamat Datang Tuan</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="<?= base_url('tamu/tambah') ?>" class="btn btn-outline-dark">Tambah Tamu</a>
                <a href="<?= base_url('auth/logout') ?>" class="btn btn-outline-danger">Logout</a>
            </div>
        </div>



        <!-- Statistik -->
        <div class="row text-center mb-4">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-3 border-primary"
                    style="background: linear-gradient(135deg, rgba(0,123,255,0.1), rgba(0,123,255,0.3)); backdrop-filter: blur(5px);">
                    <div class="card-body">
                        <h5 class="card-title">Tamu Hari Ini</h5>
                        <p class="card-text display-5 fw-bold"><?= $jumlah_today ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-3 border-success"
                    style="background: linear-gradient(135deg, rgba(40,167,69,0.1), rgba(40,167,69,0.3)); backdrop-filter: blur(5px);">
                    <div class="card-body">
                        <h5 class="card-title">Tamu Bulan Ini</h5>
                        <p class="card-text display-5 fw-bold"><?= $jumlah_bulan ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-3 border-dark"
                    style="background: linear-gradient(135deg, rgba(52,58,64,0.1), rgba(52,58,64,0.3)); backdrop-filter: blur(5px);">
                    <div class="card-body">
                        <h5 class="card-title">Total Tamu</h5>
                        <p class="card-text display-5 fw-bold"><?= $jumlah_total ?></p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Daftar Tamu -->
        <div class="card">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Tamu</h5>
                <form action="<?= base_url('tamu/daftar') ?>" method="get" class="d-flex" role="search">
                    <input class="form-control form-control-sm me-2" type="search" name="keyword"
                        placeholder="Cari tamu..." value="<?= $this->input->get('keyword') ?>" aria-label="Search">
                    <button class="btn btn-outline-light btn-sm" type="submit">Cari</button>
                </form>
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
                                <a href="<?= base_url('admin/admin/edit/' . $t->id) ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/admin/delete/' . $t->id) ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus?')">Hapus</a>
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