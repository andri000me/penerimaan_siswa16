<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-17">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Seleksi Tes Ujian</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>No induk</th><th>Nama Lengkap</th><th>Jurusan</th><th>Jenis Kelamin</th><th>B.indonesia</th><th>B.inggris</th><th>MM</th><th>Jumlah</th><th>Putusan hasil</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pendaftaran";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_induk'] ?></td>
									<td><?= $data['nama_siswa'] ?></td>
									<td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
									<td><?= $data['bi'] ?></td>
                                    <td><?= $data['bing'] ?></td>
                                    <td><?= $data['mm'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['putusan_hasil'] ?></td>
                                    
                                    <td>
                                        <a href="?page=seleksi&actions=edit&id=<?= $data['no_induk'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										<a href="?page=seleksi&actions=tambah&nope=<?= $data['no_induk'] ?>" class="btn btn-info btn-xs">
											<span class="fa fa-plus"></span>
										</a>
                                        <a href="?page=seleksi&actions=delete&id=<?= $data['no_induk'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=seleksi&actions=tambah" class="btn btn-success">
                                        Tambah Seleksi Ujian

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

