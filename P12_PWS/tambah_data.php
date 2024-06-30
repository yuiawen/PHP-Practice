<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5" style="max-width: 500px;">
        <div class="card mx-auto">
            <div class="card-body">
                <h3 class="card-title text-center">Tambah Data Mahasiswa</h3>
                <form method="post" action="proses_input.php?action=add">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hp" class="col-sm-4 col-form-label">No. HP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="hp" name="hp" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-4 col-form-label">Program Studi</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="prodi" name="prodi" required>
                                <option value="IF">Informatika</option>
                                <option value="SI">Sistem Informasi</option>
                                <option value="RP">Rekayasa Perangkat Lunak</option>
                                <option value="SIA">Sistem Informasi Akuntansi</option>
                                <option value="TK">Teknik Komputer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>