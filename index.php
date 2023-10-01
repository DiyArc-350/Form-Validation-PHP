<?php
include 'inc/header.php';
include 'functions/functions.php';
?>
<!-- daftar form -->
<div class="container">
    <div class="row semoga-bisa">
        <div class="col">
            <div class="form-container">
                <h2 style="text-align:center; margin-bottom: 10px;" class="card-header ">Pendaftaran Siswa Baru</h2>
                <form action="" method="post" class="my-form " novalidate>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap :</label>
                        <input type="text" name="nama" id="nama" class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" placeholder="nama lengkap" autocomplete="off" value="<?php echo $nama; ?>" required>
                        <span class="warning invalid-feedback"><?php echo $error_nama; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="gender">Gender :</label>
                                <input type="text" name="gender" id="gender" class="form-control <?php echo ($error_gender != "" ? "is-invalid" : ""); ?>" placeholder="P / L" autocomplete="off" value="<?php echo $gender; ?>" required>
                                <span class="warning invalid-feedback"><?php echo $error_gender; ?></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="agama">Agama :</label>
                                <input type="text" name="agama" id="agama" class="form-control <?php echo ($error_agama != "" ? "is-invalid" : ""); ?>" placeholder="agama" autocomplete="off" value="<?php echo $agama; ?>" required>
                                <span class="warning invalid-feedback"><?php echo $error_agama; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tanggal lahir :</label>
                        <input type="date" name="ttl" id="ttl" class="form-control <?php echo ($error_ttl != "" ? "is-invalid" : ""); ?>" placeholder="bulan/tanggal/tahun" autocomplete="off" value="<?php echo $ttl; ?>" required>
                        <span class="warning invalid-feedback"><?php echo $error_ttl; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="gD">Golongan Darah :</label>
                                <input type="text" name="gD" id="gD" class="form-control <?php echo ($error_gD != "" ? "is-invalid" : ""); ?>" placeholder=" A / B / AB / O" autocomplete="off" value="<?php echo $gD; ?>" required>
                                <span class="warning invalid-feedback"><?php echo $error_gD; ?></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="usia">Usia :</label>
                                <input type="text" name="usia" id="usia" class="form-control <?php echo ($error_usia != "" ? "is-invalid" : ""); ?>" placeholder="usia" autocomplete="off" value="<?php echo $usia; ?>" required>
                                <span class="warning invalid-feedback"><?php echo $error_usia; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <textarea class="form-control <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>" name="alamat" id="alamat" autocomplete="off" rows="3"><?= $alamat; ?></textarea>
                        <span class="warning invalid-feedback"><?php echo $error_alamat; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" name="email" id="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" placeholder="siapayaa@email.com" autocomplete="off" value="<?php echo $email; ?>" required>
                        <span class="warning invalid-feedback"><?php echo $error_email; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon :</label>
                        <input type="text" name="telp" id="telp" class="form-control <?php echo ($error_telp != "" ? "is-invalid" : ""); ?>" placeholder="nomor telepon" autocomplete="off" value="<?php echo $telp; ?>" required>
                        <span class="warning invalid-feedback"><?php echo $error_telp; ?></span>
                    </div>
                    <div class="row kirim-data">
                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-warning btn-block">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col show-input">
            <!-- show input data -->
            <?= $wNama; ?>
            <?= $wGender; ?>
            <?= $wAgama; ?>
            <?= $wTtl; ?>
            <?= $wGD; ?>
            <?= $wUsia; ?>
            <?= $wAlamat; ?>
            <?= $wEmail; ?>
            <?= $wTelp; ?>
        </div>
    </div>
</div>



<!-- end of daftar form -->


<?php
include 'inc/footer.php';
?>