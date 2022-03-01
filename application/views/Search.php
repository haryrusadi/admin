
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
	.thtable { display: block; overflow: scroll; }
.maintable { table-layout: fixed; width: 100% }
	</style>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <!-- <h3 class="box-title">Registrasi Listing</h3> -->
				<form action="<?= base_url('index.php/SearchController/index/') ?>" method="get">
				<div class="input-group">
	                <input type="text" class="form-inline" name="keyword" placeholder="Masukan Kata Kunci...">
	                <span class="input-group-btn">
	                    <button class="btn btn-default" type="submit">Cari</button>
	                </span>
	            </div>
</form>
				
				<!-- <?php echo form_open('product/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?> -->

            </div>
            <div class="scrollmenu">
			<table class="table table-striped table-bordered table-hover maintable" >
			<thead class="thtable">
			<tbody class="thtable">
                    <tr>
						<th scope="col">No_Boking</th>
						<th scope="col">Jenis_Kendaraan</th>
						<th scope="col">Tanggal_Kunjungan</th>
						<th scope="col">Tanggal_Registrasi </th>
						<th scope="col">Pemeriksaan</th>
						<th scope="col">Jenis_Pasien</th>
						<th scope="col">Nomor_Identitas</th>
						<th scope="col">Nama</th>
						<th scope="col">Tanggal_Lahir</th>
						<th scope="col">Telpon</th>
						<th scope="col">Jenis_Kelamin</th>
						<th scope="col">Kecamatan</th>
						<th scope="col">Kelurahan</th>
						<th scope="col">Kota</th>
						<th scope="col">Negara</th>
						<th scope="col">Datang</th>
						<th scope="col">Tujuan</th>
						<th scope="col">Keberangkatan</th>
						<th scope="col">Maskapai</th>
						<th scope="col">Awal_Gejala</th>
						<th scope="col">Demam</th>
						<th scope="col">Menggigil</th>
						<th scope="col">Sakit_Kepala</th>
						<th scope="col">Abdomen</th>
						<th scope="col">Batuk</th>
						<th scope="col">Pilek</th>
						<th scope="col">Sesak_Nafas</th>
						<th scope="col">Tenggorokan</th>
						<th scope="col">Diare</th>
						<th scope="col">Lemas</th>
						<th scope="col">Nyeri Otot</th>
						<th scope="col">Mual</th>
						<th scope="col">Hamil</th>
						<th scope="col">Diabetes</th>
						<th scope="col">Penyakit_Jantung</th>
						<th scope="col">Hipertensi</th>
						<th scope="col">Keganasan</th>
						<th scope="col">Imunologi</th>
						<th scope="col">Ginjal_Kronis</th>
						<th scope="col">Gagal_Hati</th>
						<th scope="col">Ppok</th>
						<th scope="col">Faktor1</th>
						<th scope="col">Faktor2</th>
						<th scope="col">Faktor3</th>
						<th scope="col">Faktor4</th>
						<th scope="col">Faktor5</th>
						<th scope="col">Faktor6</th>
						<th scope="col">Faktor7</th>
						<th scope="col">Alamat</th>
						<th> Status_Pengerjaan </th>
						<th> Status_Bayar </th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($data as $r){ ?>
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
						<td><?php echo $r['demam']; ?></td>
						<td><?php echo $r['menggigil']; ?></td>
						<td><?php echo $r['sakit_kepala']; ?></td>
						<td><?php echo $r['abdomen']; ?></td>
						<td><?php echo $r['batuk']; ?></td>
						<td><?php echo $r['pilek']; ?></td>
						<td><?php echo $r['sesak_nafas']; ?></td>
						<td><?php echo $r['tenggorokan']; ?></td>
						<td><?php echo $r['diare']; ?></td>
						<td><?php echo $r['lemas']; ?></td>
						<td><?php echo $r['nyeri_otot']; ?></td>
						<td><?php echo $r['mual']; ?></td>
						<td><?php echo $r['hamil']; ?></td>
						<td><?php echo $r['diabetes']; ?></td>
						<td><?php echo $r['penyakit_jantung']; ?></td>
						<td><?php echo $r['hipertensi']; ?></td>
						<td><?php echo $r['keganasan']; ?></td>
						<td><?php echo $r['imunologi']; ?></td>
						<td><?php echo $r['ginjal_kronis']; ?></td>
						<td><?php echo $r['gagal_hati']; ?></td>
						<td><?php echo $r['ppok']; ?></td>
						<td><?php echo $r['faktor1']; ?></td>
						<td><?php echo $r['faktor2']; ?></td>
						<td><?php echo $r['faktor3']; ?></td>
						<td><?php echo $r['faktor4']; ?></td>
						<td><?php echo $r['faktor5']; ?></td>
						<td><?php echo $r['faktor6']; ?></td>
						<td><?php echo $r['faktor7']; ?></td>
						<td><?php echo $r['alamat']; ?></td>

						<td>
						<div class="btn-group">
 						 <button type="button" name="status_pengerjaan" class="btn btn-success">Terdaftar</button>
 					 <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  </button>
  						<div class="dropdown-menu">
   						 <a class="dropdown-item" href="#">Diproses</a> <br>
   						 <a class="dropdown-item" href="#">Selesai</a><br>
   						 <a class="dropdown-item" href="#">Batal</a>
						</div>
					</td>

					<td>
					<div class="btn-group">
 						 <button type="button" name="status_bayar" class="btn btn-success">Belum Bayar</button>
 					 <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  </button>
  						<div class="dropdown-menu">
   						 <a class="dropdown-item" href="#">Lunas</a> <br>
   						 <a class="dropdown-item" href="#">Batal</a>
						</div>
					</td>

						<td>	
                            <a href="<?php echo site_url('registrasi/edit/'.$r['no_boking']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('registrasi/remove/'.$r['no_boking']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
				<button onclick="goBack()">Go Back</button>
		<script>
  			  function goBack() {
     	   window.history.back();
 			   }
		</script>

            </div>
        </div>
    </div>
</div>

