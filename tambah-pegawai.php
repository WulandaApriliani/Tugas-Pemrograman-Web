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
            <form action="aksi/pegawai/tambah_pegawai.php" method="POST">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Enter Fullname" name="nama_lengkap">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
                <div class="mb-3">
                    <label for="tempat_tanggal_lahir" class="form-label">Tempat Tanggal Lahir</label>
                    <textarea class="form-control" id="tempat_tanggal_lahir" rows="3" placeholder="Enter Tempat_tanggal_lahir" name="tempat_tanggal_lahir"></textarea>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <textarea class="form-control" id="jurusan" placeholder="Enter jurusan" name="jurusan"></textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Address</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Enter Address" name="alamat"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Tambah Data</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>