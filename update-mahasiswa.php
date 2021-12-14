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
            <?php include_once "aksi/mahasiswa/cari_mahasiswa.php" ?>
            <?php if ($result->num_rows == 1) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <form action="aksi/mahasiswa/update_mahasiswa.php?id=<?= $row['id']; ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Enter Fullname" name="nama_lengkap" value="<?= $row['nama_lengkap']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?= $row['email']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Address</label>
                            <textarea class="form-control" id="alamat" rows="3" placeholder="Enter Address" name="alamat"><?= $row['alamat']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <textarea class="form-control" id="jurusan" rows="3" placeholder="Enter Jurusan" name="jurusan"><?= $row['jurusan']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="nidn" class="form-label">Npm</label>
                            <textarea class="form-control" id="npm" rows="3" placeholder="Enter Npm" name="npm"><?= $row['npm']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <textarea class="form-control" id="jenis_kelamin" rows="3" placeholder="Enter Jenis_kelamin" name="jenis_kelamin"><?= $row['jenis_kelamin']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No Hp</label>
                            <textarea class="form-control" id="no_hp" rows="3" placeholder="Enter No_hp" name="no_hp"><?= $row['no_hp']; ?></textarea>
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