<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body"><br><br><br>
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Siswa</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>NIS</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Jurusan</th>
							<th>Alamat</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from siswa order by nis ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nis']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['tempat_lahir']?></td>
							<td><?php echo $row['tanggal_lahir']?></td>
							<td><?php echo $row['jurusan']?></td>
							<td><?php echo $row['alamat']?></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
	
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page --><br><br><br>
		<?php include "footer.php";?>