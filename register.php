<?php
   include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register Ke Perpustakaan Digital</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                       if(isset($_POST['register'])) {
                                          $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                                          $email = mysqli_real_escape_string($koneksi, $_POST['email']);
                                          $no_telepon = mysqli_real_escape_string($koneksi, $_POST['no_telepon']);
                                          $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
                                          $username = mysqli_real_escape_string($koneksi, $_POST['username']);
                                          $level = mysqli_real_escape_string($koneksi, $_POST['level']);
                                          $password = md5($_POST['password']);

                                          $insert = mysqli_query($koneksi, "INSERT INTO user(nama, email, no_telepon, alamat, username, password, level) 
                                                       VALUES ('$nama', '$email', '$no_telepon', '$alamat', '$username', '$password', '$level')");

                                          if($insert){
                                            echo '<script>alert("Selamat, register berhasil. Silahkan login"); location.href="login.php"</script>';
                                          }else{
                                            echo '<script>alert("Register gagal, silahkan ulangi kembali.");</script>';
                                          }
                                        }
                                    ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1">Nama Lengkap:</label>
                                            <input class="form-control py-3" type="text" required name="nama" placeholder="Masukan Nama Lengkap" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Email:</label>
                                            <input class="form-control py-3" type="email" required name="email" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">No. Telepon:</label>
                                            <input class="form-control py-3" type="text" required name="no_telepon" placeholder="Masukan No. Telepon" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Alamat:</label>
                                            <textarea name="alamat" rows="5" required class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control py-3" id="username" required name="username" type="text" placeholder="username" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-3" id="inputPassword" required name="password" type="password" placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Level</label>
                                            <select name="level" required class="form-control">
                                                <option value="peminjam">Peminjam</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                            <a class="btn btn-danger" href="login.php">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
