<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <div class="mx-auto" style="width: 50%; margin-top: 5%;">
        <!-- Centered element -->
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>
        <br>

        <form action="proses-pendaftaran.php" method="POST">

            <fieldset>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" />
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" />
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                </div>

                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select name="agama" class="form-control">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="sekolah_asal">Sekolah Asal </label>
                    <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal"
                        placeholder="Nama sekolah" />
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="daftar" />
                </div>
            </fieldset>

            <!-- <fieldset>

                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>

            </fieldset> -->

        </form>
    </div>
</body>

</html>