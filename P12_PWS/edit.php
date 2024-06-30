<?php
include('teskon.php');
$db = new database();
$nim = $_GET['x'];
if (!is_null($nim)) {
    $data = $db->get_by_id($nim);
} else {
    header('Location: tampil_data.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5" style="max-width: 500px;">
        <div class="card mx-auto">
            <div class="card-body">
                <h3 class="card-title text-center">Update Data Mahasiswa</h3>
                <hr />
                <form method="post" action="proses_input.php?action=update">
                    <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>" />

                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hp" class="col-sm-4 col-form-label">No. HP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="hp" name="hp" value="<?php echo $data['hp']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prodi" class="col-sm-4 col-form-label">Program Studi</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="prodi" name="prodi" required>
                                <option value="IF" <?php if ($data['prodi'] == 'IF') echo 'selected'; ?>>Informatika</option>
                                <option value="SI" <?php if ($data['prodi'] == 'SI') echo 'selected'; ?>>Sistem Informasi</option>
                                <option value="RP" <?php if ($data['prodi'] == 'RP') echo 'selected'; ?>>Rekayasa Perangkat Lunak</option>
                                <option value="SIA" <?php if ($data['prodi'] == 'SIA') echo 'selected'; ?>>Sistem Informasi Akuntansi</option>
                                <option value="TK" <?php if ($data['prodi'] == 'TK') echo 'selected'; ?>>Teknik Komputer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-edit"></i> Update
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