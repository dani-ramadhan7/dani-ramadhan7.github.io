<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <div class="mx-auto" style="width: 50%; margin-top: 5%;">
        <!-- Centered element -->
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>
        <br>

        <form action="proses-edit.php" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat </label>
                    <textarea name="alamat" class="form-control" id="alamat" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin </label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"
                            <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"
                            <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama </label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama" class="form-control">
                        <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Sekolah Asal </label>
                    <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal" placeholder="nama sekolah"
                        value="<?php echo $siswa['sekolah_asal'] ?>" />
                </div>
                <div class="mb-3">
                    <input type="submit"  class="btn btn-primary" value="Simpan" name="simpan" />
                </div>

            </fieldset>


        </form>
    </div>
</body>

</html>