<?php
if (isset($_POST['btnSimpan'])) {
    # Baca Variabel Form
    $Kode_mk                = $_POST['Kode_mk'];
    $Nama_mk                = $_POST['Nama_mk'];
    $Jumlah_sks             = $_POST['Jumlah_sks'];
    $Deskripsi_mk            = $_POST['Deskripsi_mk'];

    $mySql = "INSERT INTO matakuliah (Kode_mk, 
                                  Nama_mk,
                                  Jumlah_sks,
                                  Deskripsi_mk)
                    VALUES('$Kode_mk',
                           '$Nama_mk',
                           '$Jumlah_sks',
                           '$Deskripsi_mk')";
    $myQry    = mysql_query($mySql, $koneksidb)
        or die("Gagal query" . mysql_error());
}
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="">Kode_mk</label>
        <input type="text" class="form-control" id="" name="Kode_mk" placeholder="Isi kode_mk">
    </div>

    <div class="form-group">
        <label for="">Nama_mk</label>
        <input type="text" class="form-control" id="" name="Nama_mk" placeholder="Isi Nama_mk">
    </div>


    <div class="form-group">
        <label for="">Jumlah_sks</label>
        <input type="text" class="form-control" id="" name="Jumlah_sks" placeholder="Isi Jumlah_sks">
    </div>

    <div class="form-group">
        <label for="">Deskripsi_mk</label>
        <input type="text" class="form-control" id="" name="Deskripsi_mk" placeholder="Isi Deskripsi_mk">
    </div>

    <div class="form-group">
        <button type="submit" name="btnSimpan" class="btn btn-success btn-sm">Simpan</button>
         
    </div>

</form>