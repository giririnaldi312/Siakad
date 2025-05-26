<?php
if (isset($_POST['btnSimpan'])) {
    # Baca Variabel Form
    $id_dosen        = $_POST['id_dosen'];
    $nama_dosen    = $_POST['nama_dosen'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $alamat            = $_POST['alamat'];
    $no_hp             = $_POST['no_hp'];

    $mySql = "INSERT INTO dosen (id_dosen, 
                                  nama_dosen,
                                  jenis_kelamin,
                                  alamat,
                                  no_hp)
                    VALUES('$id_dosen',
                           '$nama_dosen',
                           '$jenis_kelamin',
                           '$alamat',
                           '$no_hp')";
    $myQry    = mysql_query($mySql, $koneksidb)
        or die("Gagal query" . mysql_error());
}
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="">id_dosen</label>
        <input type="text" class="form-control" id="" name="id_dosen" placeholder="Isi id_dosen">
    </div>

    <div class="form-group">
        <label for="">nama_dosen</label>
        <input type="text" class="form-control" id="" name="nama_dosen" placeholder="Isi nama_dosen">
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
        <label for="">alamat</label>
        <input type="text" class="form-control" id="" name="alamat" placeholder="Isi alamat">
    </div>

    <div class="form-group">
        <label for="">no_hp</label>
        <input type="text" class="form-control" id="" name="no_hp" placeholder="Isi no_hp">
    </div>

    <div class="form-group">
        <button type="submit" name="btnSimpan" class="btn btn-success btn-sm">Simpan</button>
         
    </div>

</form>