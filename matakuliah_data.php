<section class="konten mt-2">
    <div class="container-fluid>"

        <div class="card">
        <div class="card-header">
            Manajemen Data Mata Kuliah

            <a href="?page=matakuliah-Add" class="btn btn-success float-right">
                Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode_mk</th>
                        <th scope="col">Nama_mk</th>
                        <th scope="col">jumlah_sks</th>
                        <th scope="col">Deskripsi_mk</th>
                    </tr>
                </thead>
                <?php
                $mySql = "SELECT * FROM matakuliah ORDER BY Kode_mk ASC";

                $myQry = mysql_query($mySql, $koneksidb)
                    or die("Query Salah : " . mysql_error());

                $nomor = 0;

                while ($myData = mysql_fetch_array($myQry)) {
                    $nomor++;
                    $Kode = $myData['Kode_mk'];
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nomor; ?></th>
                            <td><?= $myData['Kode_mk']; ?></td>
                            <td><?= $myData['Nama_mk']; ?></td>
                            <td><?= $myData['Jumlah_sks']; ?></td>
                            <td><?= $myData['Deskripsi_mk']; ?></td>
                            <td>
                                ubah | hapus
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    </div>
</section>