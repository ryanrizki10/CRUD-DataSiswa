<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="fontAwesome/css/font-awesome.min.css">

</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD - BS5
            </a>
        </div>
    </nav>

     <!-- Judul -->
 <div class="container">
  <h1 class="mt-4">Data Siswa</h1>
  <figure>
      <blockquote class="blockquote">
          <p>Berisi data yang telah disimpan di database.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">Create Read Update Delete</cite>
      </figcaption>
  </figure>

  <a href="kelola.php" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

  <div class="table-responsive">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr>
            <th><center>No.</center></th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><center>1.</center></td>
            <td>112233</td>
            <td>Alexander Kurniawan</td>
            <td>Laki-laki</td>
            <td>
              <img src="img/img1.jpg" alt="gambar1" width="200px">
            </td>
            <td>Jl. Kusuma Negara</td>
            <td>
              <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
              <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td><center>2.</center></td>
            <td>112234</td>
            <td>Susanti</td>
            <td>Perempuan</td>
            <td>
              <img src="img/img2.jpg" alt="gambar1" width="200px">
            </td>
            <td>Jl. Kusuma Bangsa</td>
            <td>
            <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
              <a href="proses.php?hapus=2" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

</div>

</body>

</html>