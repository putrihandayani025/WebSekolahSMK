<?php include "header.php"; ?><br><br><br>

                
                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, Anda telah berhasi mendaftar!
                                    </div>
                    <?php

                    }

                    ?>
                    
                    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">PENDAFTARAN SISWA</h2><br><br><br>
            <form action="proses-pendaftaran.php" method="post">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                </div>


                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat"class="form-control" placeholder="Alamat" required></textarea>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah">
                </div>

                <div class="form-group">
                    <label for="nomor_hp">Nomor HP/WA Orang Tua/Wali</label>
                    <input type="text" class="form-control" name="nomor_hp" placeholder="Nomor HP/WA Orang Tua/Wali">
                </div>

                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan</label>
                    <select class="form-control" name="pilihan_jurusan">
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                        <option value="Agribisnis Perikanan Air Tawar">Agribisnis Perikanan Air Tawar</option>
                    </select>
                </div><br>

                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
    </div><br><br><br>

    <?php include "footer.php"; ?>