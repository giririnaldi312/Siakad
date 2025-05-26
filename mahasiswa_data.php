<section class="konten mt-2">
    <div class="container-fluid>"

        <div class="card">
        <div class="card-header">
            Manajemen Data Mahasiswa

            <a href="?page=Mahasiswa-Add" class="btn btn-success float-right">
                Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nim</th>
                        <th scope="col">nama_mahasiswa</th>
                        <th scope="col">jenis_kelamin</th>
                        <th scope="col">umur</th>
                    </tr>
                </thead>
                <?php
                $mySql = "SELECT * FROM mahasiswa ORDER BY nim ASC";

                $myQry = mysql_query($mySql, $koneksidb)
                    or die("Query Salah : " . mysql_error());

                $nomor = 0;

                while ($myData = mysql_fetch_array($myQry)) {
                    $nomor++;
                    $Kode = $myData['nim'];
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nomor; ?></th>
                            <td><?= $myData['nim']; ?></td>
                            <td><?= $myData['nama_mahasiswa']; ?></td>
                            <td><?= $myData['jenis_kelamin']; ?></td>
                            <td><?= $myData['umur']; ?></td>
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