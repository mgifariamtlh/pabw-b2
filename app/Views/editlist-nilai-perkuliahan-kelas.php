<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>


<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
                </ol>
                <h3 class="font-weight-bolder text-white mb-0">Tables</h3>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-header pb-0">
                        <h5>Form Edit</h5>

                        <div class="card-body px-0 pt-0 pb-2">
                            <form action="" method="post" id="text-editor">
                                <label>Nama Matakuliah</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $listNilaiPerkuliahanKelas['nama_mata_kuliah'] ?>" name="nama_mata_kuliah" placeholder="Nama Matakuliah" aria-describedby="email-addon" required>
                                </div>
                                <label>Nama Prodi</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $listNilaiPerkuliahanKelas['nama_prodi'] ?>" name="nama_prodi" placeholder="Nama Prodi" aria-describedby="email-addon">
                                </div>
                                <label>Nama Kelas Kuliah</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" value="<?= $listNilaiPerkuliahanKelas['nama_kelas_kuliah'] ?>" name="nama_kelas_kuliah" placeholder="Nama Kelas Kuliah" aria-describedby="email-addon">
                                </div>
                                <label>SKS Mata Kuliah</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" value="<?= $listNilaiPerkuliahanKelas['sks_mata_kuliah'] ?>" name="sks_mata_kuliah" placeholder="SKS Mata Kuliah" aria-label="keterangan" aria-describedby="password-addon">
                                </div>
                                <label>Jumlah mahasiswa KRS</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" value="<?= $listNilaiPerkuliahanKelas['jumlah_mahasiswa_krs'] ?>" name="jumlah_mahasiswa_krs" placeholder="Jumlah mahasiswa KRS" aria-label="keterangan" aria-describedby="password-addon">
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="status" value="simpan" class="btn btn-primary">Simpan</button>
                                    <button type="reset" name="status" value="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<body class="g-sidenav-show bg-primary">




</body>

<?= $this->endSection() ?>