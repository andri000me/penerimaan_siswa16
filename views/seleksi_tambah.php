<style type="text/css">
<!--
body {
	background-color: #0033FF;
}
-->
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-13">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Seleksi Calon Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="no_induk" class="col-sm-3 control-label">No Induk</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_induk" class="form-control" id="no_induk" placeholder="Inputkan Nomor induk" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Inputkan Nama siswa" required>
                            </div>
                        </div>
                           

                       
                       <div class="form-group">
                            <div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="jurusan" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="Rpl">RPL</option>
                                    <option value="Tkj">TKJ</option>
                                    <option value="Tkr">TKR</option>
                                    <option value="Tsm">TSM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="jenis_kelamin" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="bi" class="col-sm-3 control-label">Bahasa indonesia</label>
                            <div class="col-sm-9">
                                <input type="text" name="bi" class="form-control" id="bi" placeholder="Inputkan B.indonesia" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="asal_sekolah" class="col-sm-3 control-label">Bahasa Inggris</label>
                            <div class="col-sm-9">
                                <input type="text" name="bing" class="form-control" id="bing" placeholder="Inputkan B.inggris" required>
                            </div>
                        </div>

                        
                       
                         <div class="form-group">
                            <label for="mm" class="col-sm-3 control-label">Matematika</label>
                            <div class="col-sm-9">
                                <input type="text" name="mm" class="form-control" id="mm" placeholder="Inputkan MM" required>
                            </div>
                        </div>

                         
                      

                         <div class="form-group">
                            <div class="form-group">
                            <label for="putusan_hasil" class="col-sm-3 control-label">Hasil Keputusan</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="putusan_hasil" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="tolak">Tolak</option>
                                </select>
                            </div>
                        </div>
                       
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=seleksi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Seleksi
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<?php 
if($_POST){
    //Ambil data dari formid
  $no_induk=$_POST['no_induk'];
    $nama_siswa=$_POST['nama_siswa'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $alamat=$_POST['alamat'];
     $tgl_lahir=$_POST['tgl_lahir'];
     $asal_sekolah=$_POST['asal_sekolah']; 
  $tahun_lulus=$_POST['tahun_lulus'];
  $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $bi=$_POST['bi'];
  $bing=$_POST['bing'];
    $mm=$_POST['mm'];
   $jumlah=$_POST['bi']+$_POST['bi']+$_POST['mm']; 
  $putusan_hasil=$_POST['putusan_hasil'];

 
    //buat sql
    $sql="INSERT INTO pendaftaran VALUES ('$no_induk','$nama_siswa','$tempat_lahir','$alamat','$tgl_lahir','$asal_sekolah','$tahun_lulus','$jurusan','$agama','$jenis_kelamin','$bi','$bing','$mm','$jumlah','$putusan_hasil')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Seleksi Error");
    if ($query){
        echo "<script>window.location.assign('?page=seleksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
