<h1 class="mt-4">Ubah Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                        $id = $_GET['id'];
                        if(isset($_POST['submit'])) {
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori=$id");

                            if($query) {
                                echo '<script>alert("Update data berhasil.");</script>';
                            } else {
                                echo '<script>alert("Update data gagal.");</script>';
                            }
                        }

                        $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori=$id");
                        $data = mysqli_fetch_array($query);
                    ?>
                    <div class="form-group row mb-3">
                        <label class="col-md-4 col-form-label">Nama Kategori</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $data['kategori']; ?>" name="kategori">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary me-2" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary me-2">Reset</button>
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
