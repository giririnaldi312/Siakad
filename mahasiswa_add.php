<?php
if (isset($_POST['btnSimpan'])) {
    # Baca Variabel Form
    $nim                = $_POST['nim'];
    $nama_mahasiswa      = $_POST['nama_mahasiswa'];
    $alamat             = $_POST['alamat'];
    $jenis_kelamin            = $_POST['jenis_kelamin'];
    $umur                   = $_POST['umur'];

    $mySql = "INSERT INTO mahasiswa (nim, 
                                  nama_mahasiswa,
                                  alamat,
                                  jenis_kelamin,
                                  umur)
                    VALUES('$nim',
                           '$nama_mahasiswa',
                           '$alamat',
                           '$jenis_kelamin',
                           '$umur')";
    $myQry    = mysql_query($mySql, $koneksidb)
        or die("Gagal query" . mysql_error());
}
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="">nim</label>
        <input type="text" class="form-control" id="" name="nim" placeholder="Isi nim">
    </div>

    <div class="form-group">
        <label for="">nama_mahasiswa</label>
        <input type="text" class="form-control" id="" name="nama_mahasiswa" placeholder="Isi nama_mahasiswa">
    </div>

    <div class="form-group">
        <label for="">alamat</label>
        <input type="text" class="form-control" id="" name="alamat" placeholder="Isi alamat">
    </div>

   <div class="form-check form-check-inline">
        <label class="form-check-label" for="inlineRadio1">Jenis Kelamin</label>
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Laki-laki">
        <label class="form-check-label" for="">Pria</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Perempuan">
        <label class="form-check-label" for="">Wanita</label>
    </div>

    <div class="form-group">
        <label for="">umur</label>
        <input type="text" class="form-control" id="" name="umur" placeholder="Isi umur">
    </div>

    <div class="form-group">
        <button type="submit" name="btnSimpan" class="btn btn-success btn-sm">Simpan</button>
         
    </div>

</form>