<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Mahasiswa 2.0</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <h3>Mahasiswa Fakultas Ilmu Komputer</h3>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="btn btn-outline-primary ms-3" href="/">Kembali</a>
              </div>
        </div>
        </nav>
        <div class="container">
        <form method="POST" action="/tambah" class="mt-4">
        <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM anda" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="prodi">Program Studi</label>
                <input type="text" class="form-control" id="prodi" placeholder="Masukkan program studi anda" name="prodi" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email anda" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="container mt-4">
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            </div>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\tugas_laravel\resources\views/tambah.blade.php ENDPATH**/ ?>