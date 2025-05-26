<section class="konten mt-2">
    <div class="container-fluid>"

        <div class="card">
        <div class="card-header">
            Manajemen Data Dosen

            <a href="?page=dosen-Add" class="btn btn-success float-right">
                Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">id_dosen</th>
                        <th scope="col">nama_dosen</th>
                        <th scope="col">jenis_kelamin</th>
                        <th scope="col">alamat</th>
                        <th scope="col">no_hp</th>
                    </tr>
                </thead>
                <?php
                $mySql = "SELECT * FROM dosen ORDER BY id_dosen ASC";

                $myQry = mysql_query($mySql, $koneksidb)
                    or die("Query Salah : " . mysql_error());

                $nomor = 0;

                while ($myData = mysql_fetch_array($myQry)) {
                    $nomor++;
                    $Kode = $myData['id_dosen'];
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nomor; ?></th>
                            <td><?= $myData['id_dosen']; ?></td>
                            <td><?= $myData['nama_dosen']; ?></td>
                            <td><?= $myData['jenis_kelamin']; ?></td>
                            <td><?= $myData['alamat']; ?></td>
                            <td><?= $myData['no_hp']; ?></td>
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