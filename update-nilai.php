<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column justify-content-center mt-3">
            <?php include_once "aksi/nilai/cari_nilai.php" ?>
            <?php if ($result->num_rows == 1) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <form action="aksi/nilai/update_nilai.php?id=<?= $row['id']; ?>" method="POST">
                    <div class="mb-3">
                            <label for="sks" class="form-label">MAHASISWA</label>
                            <select class="form-select" name="id_mahasiswa">
                                <?php include_once "./aksi/mahasiswa/ambil_mahasiswa.php" ?>
                                <?php if ($result->num_rows > 0) : ?>
                                    <?php while ($mahasiswa = $result->fetch_assoc()) : ?>
                                        <option value="<?= $mahasiswa['id']; ?>" <?= $row['id_mahasiswa'] == $mahasiswa['id'] ? 'selected' : ''; ?>><?= $mahasiswa['nama_lengkap']; ?></option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_akhir" class="form-label">Nilai Akhir</label>
                            <input type="nilai_akhir" class="form-control" id="nilai_akhir" placeholder="Enter Nilai_akhir" name="nilai_akhir" value="<?= $row['nilai_akhir']; ?>">
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Update Data</button>
                    </form>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>