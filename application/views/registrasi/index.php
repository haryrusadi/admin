
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
	.thtable { display: block; overflow: scroll; }
.maintable { table-layout: fixed }
th{	
	width: 100px;
}
	</style>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <!-- <h3 class="box-title">Registrasi Listing</h3> -->
            	<!-- <div class="box-tools">
                    <a href="<?php echo site_url('registrasi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div> -->
				<form action="<?= base_url('index.php/SearchController/index/') ?>" method="get">
				<div class="input-group">
	                <input type="text" class="form-inline" name="keyword" placeholder="Masukan Kata Kunci...">
					<input type="submit" name="search_submit" value="Cari">
	            </div>
</form>
				
				<!-- <?php echo form_open('product/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?> -->

	
            </div>
			<div class='inner'><h4> Total Register: <?php echo $total_registrasi?> </h4></div>
            <div class="scrollmenu">
			<table class="table  table-striped table-bordered table-hover maintable" >
			<thtable class="thtable">
			<tbody class="thtable">
                    <tr >
						<th >No_Boking</th>
						<th>Jenis_Kendaraan</th>
						<th>Tanggal_Kunjungan</th>
						<th>Tanggal_Registrasi  </th>
						<th>Pemeriksaan</th>
						<th>Jenis_Pasien</th>
						<th>Nomor_Identitas</th>
						<th>Nama</th>
						<th>Tanggal_Lahir</th>
						<th>Telpon</th>
						<th>Jenis_Kelamin</th>
						<th>Kecamatan</th>
						<th>Kelurahan</th>
						<th>Kota</th>
						<th>Negara</th>
						<th>Datang</th>
						<th>Tujuan</th>
						<th>Keberangkatan</th>
						<th>Maskapai</th>
						<th>Awal_Gejala</th>
						<th>Demam</th>
						<th>Menggigil</th>
						<th>Sakit Kepala</th>
						<th>Abdomen</th>
						<th>Batuk</th>
						<th>Pilek</th>
						<th>Sesak Nafas</th>
						<th>Tenggorokan</th>
						<th>Diare</th>
						<th>Lemas</th>
						<th>Nyeri Otot</th>
						<th>Mual</th>
						<th>Hamil</th>
						<th>Diabetes</th>
						<th>Penyakit Jantung</th>
						<th>Hipertensi</th>
						<th>Keganasan</th>
						<th>Imunologi</th>
						<th>Ginjal Kronis</th>
						<th>Gagal Hati</th>
						<th>Ppok</th>
						<th>Faktor1</th>
						<th>Faktor2</th>
						<th>Faktor3</th>
						<th>Faktor4</th>
						<th>Faktor5</th>
						<th>Faktor6</th>
						<th>Faktor7</th>
						<th>Alamat</th>
						<th> Status_Pengerjaan </th>
						<th> Status_Bayar </th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($registrasi as $r){ 
						?>
                    <tr>
						<td><?php echo $r['no_boking']; ?></td>
						<td><?php echo $r['jenis_kendaraan']; ?></td>
						<td><?php echo $r['tanggal_kunjungan']; ?></td>
						<td><?php echo $r['tanggal']; ?></td>
						<td><?php echo $r['pemeriksaan']; ?></td>
						<td><?php echo $r['jenis_pasien']; ?></td>
						<td><?php echo $r['nomor_identitas']; ?></td>
						<td><?php echo $r['nama']; ?></td>
						<td><?php echo $r['tanggal_lahir']; ?></td>
						<td><?php echo $r['telpon']; ?></td>
						<td><?php echo $r['jenis_kelamin']; ?></td>
						<td><?php echo $r['kecamatan']; ?></td>
						<td><?php echo $r['kelurahan']; ?></td>
						<td><?php echo $r['kota']; ?></td>
						<td><?php echo $r['negara']; ?></td>
						<td><?php echo $r['datang']; ?></td>
						<td><?php echo $r['tujuan']; ?></td>
						<td><?php echo $r['keberangkatan']; ?></td>
						<td><?php echo $r['maskapai']; ?></td>
						<td><?php echo $r['awal_gejala']; ?></td>
						<td><?php echo $r['demam']== 1? 'YA': 'Tidak';?></td>
						<td><?php echo $r['menggigil']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['sakit_kepala']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['abdomen']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['batuk']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['pilek']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['sesak_nafas']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['tenggorokan']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['diare']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['lemas']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['nyeri_otot']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['mual']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['hamil']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['diabetes']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['penyakit_jantung']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['hipertensi']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['keganasan']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['imunologi']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['ginjal_kronis']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['gagal_hati']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['ppok']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor1']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor2']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor3']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor4']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor5']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor6']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['faktor7']== 1? 'YA': 'Tidak'; ?></td>
						<td><?php echo $r['alamat']; ?></td>
						<td>

						<div class="btn-group">
						<button type="button" class="btn btn-sm btn-success" value="Terdaftar">Terdaftar</button>
						<button onClick="updateDropdown()" type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					
						</button>
						<div class="dropdown-menu" >
   						 <a class="dropdown-item" type="submit" value="Diproses"  href="#">Diproses</a> <br>
   						 <a class="dropdown-item"  type="submit" value="Selesai" href="#">Selesai</a><br>
   						 <a class="dropdown-item" value="Batal" href="#">Batal</a>
						</div> 
						</div>

						<script>
 						$('.dropdown-menu a').on('click', function(e){
						e.preventDefault();
  						var anchor = $(e.currentTarget);
 						 var text = anchor.text();
						var button = anchor.closest('.btn-group').find('button:first-child');
					 	 button.text(text);
							});

						</script>
					</td>

					<td>
					<div class="btn-group">
						<button type="button" class="btn btn-sm btn-success">Belum Bayar</button>
						<button onClick="updateDropdown()" type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			
						</button>
						<div class="dropdown-menu">
						<a class="dropdown-item" value="Selesai" href="#">Lunas</a><br>
						<a class="dropdown-item" value="Selesai" href="#">Batal</a><br>
					
						</div>
						</div>
					</td>

					<td>	
                            <a href="<?php echo site_url('registrasi/edit/'.$r['no_boking']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('registrasi/remove/'.$r['no_boking']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                     

            </div>
        </div>
    </div>
</div>

