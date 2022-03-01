<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Registrasi Edit</h3>
            </div>
			<?php echo form_open('registrasi/edit/'.$registrasi['no_boking']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis_kendaraan" class="control-label">Jenis Kendaraan</label>
						<div class="form-group">
							<select name="jenis_kendaraan" class="form-control">
								<!-- <option value="">pilih</option> -->
								<?php 
								$jenis_kendaraan_values = array(
									'pesawat'=>'pesawat'
								);

								foreach($jenis_kendaraan_values as $value => $display_text)
								{
									$selected = ($value == $registrasi['jenis_kendaraan']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kunjungan" class="control-label">Tanggal Kunjungan</label>
						<div class="form-group">
							<input type="text" name="tanggal_kunjungan" value="<?php echo ($this->input->post('tanggal_kunjungan') ? $this->input->post('tanggal_kunjungan') : $registrasi['tanggal_kunjungan']); ?>" class="has-datepicker form-control" id="tanggal_kunjungan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pemeriksaan" class="control-label">Pemeriksaan</label>
						<div class="form-group">
							<input type="text" name="pemeriksaan" value="<?php echo ($this->input->post('pemeriksaan') ? $this->input->post('pemeriksaan') : $registrasi['pemeriksaan']); ?>" class="form-control" id="pemeriksaan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_pasien" class="control-label">Jenis Pasien</label>
						<div class="form-group">
							<input type="text" name="jenis_pasien" value="<?php echo ($this->input->post('jenis_pasien') ? $this->input->post('jenis_pasien') : $registrasi['jenis_pasien']); ?>" class="form-control" id="jenis_pasien" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_identitas" class="control-label">Nomor Identitas</label>
						<div class="form-group">
							<input type="text" name="nomor_identitas" value="<?php echo ($this->input->post('nomor_identitas') ? $this->input->post('nomor_identitas') : $registrasi['nomor_identitas']); ?>" class="form-control" id="nomor_identitas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $registrasi['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
						<div class="form-group">
							<input type="text" name="tanggal_lahir" value="<?php echo date("d-m-Y"); ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $registrasi['tanggal_lahir']); ?>" class="has-datepicker form-control" id="tanggal_lahir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telpon" class="control-label">Telpon</label>
						<div class="form-group">
							<input type="text" name="telpon" value="<?php echo ($this->input->post('telpon') ? $this->input->post('telpon') : $registrasi['telpon']); ?>" class="form-control" id="telpon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
						<div class="form-group">
							<input type="text" name="jenis_kelamin" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $registrasi['jenis_kelamin']); ?>" class="form-control" id="jenis_kelamin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kecamatan" class="control-label">Kecamatan</label>
						<div class="form-group">
							<input type="text" name="kecamatan" value="<?php echo ($this->input->post('kecamatan') ? $this->input->post('kecamatan') : $registrasi['kecamatan']); ?>" class="form-control" id="kecamatan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kelurahan" class="control-label">Kelurahan</label>
						<div class="form-group">
							<input type="text" name="kelurahan" value="<?php echo ($this->input->post('kelurahan') ? $this->input->post('kelurahan') : $registrasi['kelurahan']); ?>" class="form-control" id="kelurahan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kota" class="control-label">Kota</label>
						<div class="form-group">
							<input type="text" name="kota" value="<?php echo ($this->input->post('kota') ? $this->input->post('kota') : $registrasi['kota']); ?>" class="form-control" id="kota" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="negara" class="control-label">Negara</label>
						<div class="form-group">
							<input type="text" name="negara" value="<?php echo ($this->input->post('negara') ? $this->input->post('negara') : $registrasi['negara']); ?>" class="form-control" id="negara" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="datang" class="control-label">Datang</label>
						<div class="form-group">
							<input type="text" name="datang" value="<?php echo ($this->input->post('datang') ? $this->input->post('datang') : $registrasi['datang']); ?>" class="form-control" id="datang" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tujuan" class="control-label">Tujuan</label>
						<div class="form-group">
							<input type="text" name="tujuan" value="<?php echo ($this->input->post('tujuan') ? $this->input->post('tujuan') : $registrasi['tujuan']); ?>" class="form-control" id="tujuan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keberangkatan" class="control-label">Keberangkatan</label>
						<div class="form-group">
							<input type="text" name="keberangkatan" value="<?php echo date("d-m-Y"); ($this->input->post('keberangkatan') ? $this->input->post('keberangkatan') : $registrasi['keberangkatan']); ?>" class="has-datepicker form-control" id="keberangkatan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="maskapai" class="control-label">Maskapai</label>
						<div class="form-group">
							<input type="text" name="maskapai" value="<?php echo ($this->input->post('maskapai') ? $this->input->post('maskapai') : $registrasi['maskapai']); ?>" class="form-control" id="maskapai" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="awal_gejala" class="control-label">Awal Gejala</label>
						<div class="form-group">
							<input type="text" name="awal_gejala" value="<?php echo date("d-m-Y"); ($this->input->post('awal_gejala') ? $this->input->post('awal_gejala') : $registrasi['awal_gejala']); ?>" class="has-datepicker form-control" id="awal_gejala" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="demam" class="control-label">Demam</label>
						<div class="form-group">
							<input type="text" name="demam" value="<?php echo ($this->input->post('demam') ? $this->input->post('demam') : $registrasi['demam']); ?>" class="form-control" id="demam" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="menggigil" class="control-label">Menggigil</label>
						<div class="form-group">
							<input type="text" name="menggigil" value="<?php echo ($this->input->post('menggigil') ? $this->input->post('menggigil') : $registrasi['menggigil']); ?>" class="form-control" id="menggigil" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sakit_kepala" class="control-label">Sakit Kepala</label>
						<div class="form-group">
							<input type="text" name="sakit_kepala" value="<?php echo ($this->input->post('sakit_kepala') ? $this->input->post('sakit_kepala') : $registrasi['sakit_kepala']); ?>" class="form-control" id="sakit_kepala" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="abdomen" class="control-label">Abdomen</label>
						<div class="form-group">
							<input type="text" name="abdomen" value="<?php echo ($this->input->post('abdomen') ? $this->input->post('abdomen') : $registrasi['abdomen']); ?>" class="form-control" id="abdomen" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="batuk" class="control-label">Batuk</label>
						<div class="form-group">
							<input type="text" name="batuk" value="<?php echo ($this->input->post('batuk') ? $this->input->post('batuk') : $registrasi['batuk']); ?>" class="form-control" id="batuk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pilek" class="control-label">Pilek</label>
						<div class="form-group">
							<input type="text" name="pilek" value="<?php echo ($this->input->post('pilek') ? $this->input->post('pilek') : $registrasi['pilek']); ?>" class="form-control" id="pilek" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sesak_nafas" class="control-label">Sesak Nafas</label>
						<div class="form-group">
							<input type="text" name="sesak_nafas" value="<?php echo ($this->input->post('sesak_nafas') ? $this->input->post('sesak_nafas') : $registrasi['sesak_nafas']); ?>" class="form-control" id="sesak_nafas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tenggorokan" class="control-label">Tenggorokan</label>
						<div class="form-group">
							<input type="text" name="tenggorokan" value="<?php echo ($this->input->post('tenggorokan') ? $this->input->post('tenggorokan') : $registrasi['tenggorokan']); ?>" class="form-control" id="tenggorokan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="diare" class="control-label">Diare</label>
						<div class="form-group">
							<input type="text" name="diare" value="<?php echo ($this->input->post('diare') ? $this->input->post('diare') : $registrasi['diare']); ?>" class="form-control" id="diare" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lemas" class="control-label">Lemas</label>
						<div class="form-group">
							<input type="text" name="lemas" value="<?php echo ($this->input->post('lemas') ? $this->input->post('lemas') : $registrasi['lemas']); ?>" class="form-control" id="lemas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nyeri_otot" class="control-label">Nyeri Otot</label>
						<div class="form-group">
							<input type="text" name="nyeri_otot" value="<?php echo ($this->input->post('nyeri_otot') ? $this->input->post('nyeri_otot') : $registrasi['nyeri_otot']); ?>" class="form-control" id="nyeri_otot" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mual" class="control-label">Mual</label>
						<div class="form-group">
							<input type="text" name="mual" value="<?php echo ($this->input->post('mual') ? $this->input->post('mual') : $registrasi['mual']); ?>" class="form-control" id="mual" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hamil" class="control-label">Hamil</label>
						<div class="form-group">
							<input type="text" name="hamil" value="<?php echo ($this->input->post('hamil') ? $this->input->post('hamil') : $registrasi['hamil']); ?>" class="form-control" id="hamil" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="diabetes" class="control-label">Diabetes</label>
						<div class="form-group">
							<input type="text" name="diabetes" value="<?php echo ($this->input->post('diabetes') ? $this->input->post('diabetes') : $registrasi['diabetes']); ?>" class="form-control" id="diabetes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="penyakit_jantung" class="control-label">Penyakit Jantung</label>
						<div class="form-group">
							<input type="text" name="penyakit_jantung" value="<?php echo ($this->input->post('penyakit_jantung') ? $this->input->post('penyakit_jantung') : $registrasi['penyakit_jantung']); ?>" class="form-control" id="penyakit_jantung" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hipertensi" class="control-label">Hipertensi</label>
						<div class="form-group">
							<input type="text" name="hipertensi" value="<?php echo ($this->input->post('hipertensi') ? $this->input->post('hipertensi') : $registrasi['hipertensi']); ?>" class="form-control" id="hipertensi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keganasan" class="control-label">Keganasan</label>
						<div class="form-group">
							<input type="text" name="keganasan" value="<?php echo ($this->input->post('keganasan') ? $this->input->post('keganasan') : $registrasi['keganasan']); ?>" class="form-control" id="keganasan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="imunologi" class="control-label">Imunologi</label>
						<div class="form-group">
							<input type="text" name="imunologi" value="<?php echo ($this->input->post('imunologi') ? $this->input->post('imunologi') : $registrasi['imunologi']); ?>" class="form-control" id="imunologi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ginjal_kronis" class="control-label">Ginjal Kronis</label>
						<div class="form-group">
							<input type="text" name="ginjal_kronis" value="<?php echo ($this->input->post('ginjal_kronis') ? $this->input->post('ginjal_kronis') : $registrasi['ginjal_kronis']); ?>" class="form-control" id="ginjal_kronis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gagal_hati" class="control-label">Gagal Hati</label>
						<div class="form-group">
							<input type="text" name="gagal_hati" value="<?php echo ($this->input->post('gagal_hati') ? $this->input->post('gagal_hati') : $registrasi['gagal_hati']); ?>" class="form-control" id="gagal_hati" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ppok" class="control-label">Ppok</label>
						<div class="form-group">
							<input type="text" name="ppok" value="<?php echo ($this->input->post('ppok') ? $this->input->post('ppok') : $registrasi['ppok']); ?>" class="form-control" id="ppok" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor1" class="control-label">Faktor1</label>
						<div class="form-group">
							<input type="text" name="faktor1" value="<?php echo ($this->input->post('faktor1') ? $this->input->post('faktor1') : $registrasi['faktor1']); ?>" class="form-control" id="faktor1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor2" class="control-label">Faktor2</label>
						<div class="form-group">
							<input type="text" name="faktor2" value="<?php echo ($this->input->post('faktor2') ? $this->input->post('faktor2') : $registrasi['faktor2']); ?>" class="form-control" id="faktor2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor3" class="control-label">Faktor3</label>
						<div class="form-group">
							<input type="text" name="faktor3" value="<?php echo ($this->input->post('faktor3') ? $this->input->post('faktor3') : $registrasi['faktor3']); ?>" class="form-control" id="faktor3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor4" class="control-label">Faktor4</label>
						<div class="form-group">
							<input type="text" name="faktor4" value="<?php echo ($this->input->post('faktor4') ? $this->input->post('faktor4') : $registrasi['faktor4']); ?>" class="form-control" id="faktor4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor5" class="control-label">Faktor5</label>
						<div class="form-group">
							<input type="text" name="faktor5" value="<?php echo ($this->input->post('faktor5') ? $this->input->post('faktor5') : $registrasi['faktor5']); ?>" class="form-control" id="faktor5" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor6" class="control-label">Faktor6</label>
						<div class="form-group">
							<input type="text" name="faktor6" value="<?php echo ($this->input->post('faktor6') ? $this->input->post('faktor6') : $registrasi['faktor6']); ?>" class="form-control" id="faktor6" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faktor7" class="control-label">Faktor7</label>
						<div class="form-group">
							<input type="text" name="faktor7" value="<?php echo ($this->input->post('faktor7') ? $this->input->post('faktor7') : $registrasi['faktor7']); ?>" class="form-control" id="faktor7" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $registrasi['alamat']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>