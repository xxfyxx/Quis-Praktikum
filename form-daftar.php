<html>
    <head>
        <title>system informasi kepegawaian</title>
    </head>
    <body>
        <header>
            <h3>system informasi kepegawaian</h3>
        </header>

        <form action="proses-pendaftaran.php"method="POST">
            <fieldset>
                <p>
                    <label for="id">Id</label>
                    <textarea name="Id" cols="16" rows="1"></textarea>
                </p>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>\
                    <textarea name="alamat"></textarea>
                </p>
                <p>
                    <label for="Tanggal_lahir">tanggal lahir</label>
                    <input type="date" name="Tanggal_lahir">
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="pendidikan_terakhir">Pendidikan terakhir</label>
                    <input type="text" name="pendidikan_terakhir" placeholder="">
                </p>
                <p>
                    <input type="submit" value="daftar" name="daftar" />
                </p>
            </fieldset>
        </form>
    </body>
</html>