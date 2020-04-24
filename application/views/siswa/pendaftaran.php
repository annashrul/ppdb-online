<?php
	$namaLengkap='nama_lengkap';//1
	$namaPanggilan='nama_panggilan';//2
	$jk='jenis_kelamin';//3
	$tmpLahir='tempat_lahir';//4
	$tglLahir='tanggal_lahir';//5
	$anakKeBerapa='anak_ke_berapa';//6
	$jmlAnakKandung='jumlah_anak_kandung';//7
	$jmlAnakTiri='jumlah_anak_tiri';//8
	$jmlAnakAngkat='jumlah_anak_angkat';//9
	$statusAnak='status_anak';//10
	$bahasa='bahasa';//11
	$agama='agama';//12
	$alamatSiswa='alamat_siswa';//13
	$rt='rt';//14
	$rw='rw';//15
	$kel='kelurahan';//16
	$kec='kecamatan';//17
	$kota='kota';//18
	$telp='telepon';//19
	$email='email';//20
	$tingalPada='tinggal_pada';//21
	$pergiDengan='pergi_dengan';//22
	$jarak='jarak';//23
	$beratBadan='berat_badan';//24
	$tinggiBadan='tinggi_badan';//25
	$golonganDarah='golongan_darah';//26
	$riwayatPenyakit='riwayat_penyakit';//27
	$namaAyah='nama_ayah';//28
	$namaIbu='nama_ibu';//29
	$tmpLahirAyah='tempat_lahir_ayah';//30
	$tglLahirAyah='tanggal_lahir_ayah';//31
	$tmpLahirIbu='tempat_lahir_ibu';//32
	$tglLahirIbu='tanggal_lahir_ibu';//33
	$alamatOrtu='alamat_ortu';//34
	$rtOrtu='rt_ortu';//35
	$rwOrtu='rw_ortu';//36
	$kecOrtu='kecamatan_ortu';//37
	$kelOrtu='kelurahan_ortu';//38
	$kotaOrtu='kota_ortu';//39
	$emailOrtu='email_ortu';//40

?>

<!-- Main Content Area -->
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card height-card box-margin">
					<div class="card-body">
						<h4 class="card-title mb-4">FORMULIR PENDAFTARAN SISWA BARU ( isi dengan <small style="color: red;font-size: 25px;">-</small> apabila ada form yang akan dikosongkan )</h4>
						<form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
							<?php $sess = $this->session->res_daftar; ?>
							<!-- SmartWizard html -->

							<div id="smartwizard" class="sw-main sw-theme-arrows">
								<ul>
									<li><a href="#step-1">Form 1</a></li>
									<li><a href="#step-2">Form 2</a></li>
									<li><a href="#step-3">Form 3</a></li>
									<li><a href="#step-4">Form 4</a></li>
								</ul>

								<div>
									<div id="step-1">
										<div class="row">
											<div class="col-md-6 form-step-0" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='nama_lengkap'; ?>
													<label for="<?=$field?>">Nama Lengkap <small style="color:black;font-weight: bold">( harus sesuai dengan akte lahir )</small></label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[0])!=null?$sess[0]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='nama_panggilan'; ?>
													<label for="<?=$field?>">Nama Panggilan </label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[1])!=null?$sess[1]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='jenis_kelamin'; ?>
													<label for="<?=$field?>">Jenis Kelamin </label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control"  required>
														<option value="">Pilih</option>
														<option value="L"<?=isset($sess[2])=='L'?'selected':null?>>Laki-laki</option>
														<option value="P"<?=isset($sess[2])=='P'?'selected':null?>>Perempuan</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tempat_lahir'; ?>
															<label for="<?=$field?>">Tempat Lahir </label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[3])!=null?$sess[3]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tanggal_lahir'; ?>
															<label for="<?=$field?>">Tanggal Lahir </label>
															<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[4])!=null?$sess[4]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>

											</div>
											<div class="col-md-6 form-step-0" role="form" data-toggle="validator">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='anak_ke_berapa'; ?>
															<label for="<?=$field?>">Anak ke berapa</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[5])!=null?$sess[5]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='jumlah_anak_kandung'; ?>
															<label for="<?=$field?>">Jumlah anak kandung</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[6])!=null?$sess[6]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='jumlah_anak_tiri'; ?>
															<label for="<?=$field?>">Jumlah anak tiri</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[7])!=null?$sess[7]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='jumlah_anak_angkat'; ?>
															<label for="<?=$field?>">Jumlah anak angkat</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[8])!=null?$sess[8]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='status_anak'; ?>
															<label for="<?=$field?>">Status anak</label>
															<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
																<option value="">Pilih</option>
																<option value="-"<?=isset($sess[9])=='-'?'selected':null?>>-</option>
																<option value="piatu" <?=isset($sess[9])=='piatu'?'selected':null?>">Piatu</option>
																<option value="yatim"<?=isset($sess[9])=='yatim'?'selected':null?>>Yatim</option>
																<option value="yatim_piatu"<?=isset($sess[9])=='yatim_piatu'?'selected':null?>>Yatim Piatu</option>
															</select>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='bahasa'; ?>
															<label for="<?=$field?>">Bahasa sehari-hari</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[10])!=null?$sess[10]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<?php $field='agama'; ?>
													<label for="<?=$field?>">Agama / Kepercayaan</label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
														<option value="">Pilih</option>
														<option value="islam"<?=isset($sess[11])=='islam'?'selected':null?>>Islam</option>
														<option value="kristen"<?=isset($sess[11])=='kristen'?'selected':null?>>Kristen</option>
														<option value="hindu"<?=isset($sess[11])=='hindu'?'selected':null?>>Hindu</option>
														<option value="budha"<?=isset($sess[11])=='budha'?'selected':null?>>Budha</option>
														<option value="konghucu"<?=isset($sess[11])=='konghucu'?'selected':null?>>Konghucu</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>


											</div>
										</div>
									</div>
									<div id="step-2">
										<div class="row">
											<div class="col-md-6 form-step-1" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='alamat_siswa'; ?>
													<label for="<?=$field?>">Alamat lengkap siswa</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[12])!=null?$sess[12]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rt'; ?>
															<label for="<?=$field?>">RT</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[13])!=null?$sess[13]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rw'; ?>
															<label for="<?=$field?>">RW</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[14])!=null?$sess[14]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kelurahan'; ?>
															<label for="<?=$field?>">Kelurahan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[15])!=null?$sess[15]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kecamatan'; ?>
															<label for="<?=$field?>">Kecamatan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[16])!=null?$sess[16]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<?php $field='kota'; ?>
													<label for="<?=$field?>">Kota</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[17])!=null?$sess[17]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>

											</div>
											<div class="col-md-6 form-step-1" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='telepon'; ?>
													<label for="<?=$field?>">Telepon</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[18])!=null?$sess[18]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='email'; ?>
													<label for="<?=$field?>">Email</label>
													<input type="email" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[19])!=null?$sess[19]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tinggal_pada'; ?>
															<label for="<?=$field?>">Tinggal pada </label>
															<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
																<option value="">Pilih</option>
																<option value="orang_tua"<?=isset($sess[20])=='orang_tua'?'selected':null?>>Orang Tua</option>
																<option value="menumpang"<?=isset($sess[20])=='menumpang'?'selected':null?>>Menumpang</option>
															</select>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='pergi_dengan'; ?>
															<label for="<?=$field?>">Pergi dengan</label>
															<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
																<option value="">Pilih</option>
																<option value="berjalan"<?=isset($sess[21])=='berjalan'?'selected':null?>>Berjalan Kaki</option>
																<option value="mobil"<?=isset($sess[21])=='mobil'?'selected':null?>>Mobil</option>
																<option value="motor"<?=isset($sess[21])=='motor'?'selected':null?>>Motor</option>
																<option value="lainnya"<?=isset($sess[21])=='lainnya'?'selected':null?>>Lainnya</option>
															</select>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>

												<div class="form-group">
													<?php $field='jarak'; ?>
													<label for="<?=$field?>">Jarak tempat tinggal ke sekolah</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[22])!=null?$sess[22]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>

											</div>
										</div>
									</div>
									<div id="step-3">
										<div class="row">
											<div class="col-md-6 form-step-2" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='berat_badan'; ?>
													<label for="<?=$field?>">Berat badan</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[23])!=null?$sess[23]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='tinggi_badan'; ?>
													<label for="<?=$field?>">Tinggi badan</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[24])!=null?$sess[24]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-md-6 form-step-2" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='golongan_darah'; ?>
													<label for="<?=$field?>">Golongan darah</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[25])!=null?$sess[25]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='riwayat_penyakit'; ?>
													<label for="<?=$field?>">Riwayat Penyakit <small style="font-weight: bold">( pisahkan dengan - apabila lebih dari satu. contoh : asma-jantung )</small></label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[26])!=null?$sess[26]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>

											</div>
										</div>

									</div>
									<div id="step-4" class="">
										<div class="row">
											<div class="col-md-6 form-step-3" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='nama_ayah'; ?>
													<label for="<?=$field?>">Nama ayah</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[27])!=null?$sess[27]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='nama_ibu'; ?>
													<label for="<?=$field?>">Nama ibu</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[28])!=null?$sess[28]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tempat_lahir_ayah'; ?>
															<label for="<?=$field?>">Tempat lahir ayah</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[29])!=null?$sess[29]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tanggal_lahir_ayah'; ?>
															<label for="<?=$field?>">Tanggal lahir ayah</label>
															<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[30])!=null?$sess[30]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tempat_lahir_ibu'; ?>
															<label for="<?=$field?>">Tempat lahir ibu</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[31])!=null?$sess[31]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tanggal_lahir_ibu'; ?>
															<label for="<?=$field?>">Tanggal lahir ibu</label>
															<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[32])!=null?$sess[32]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 form-step-3" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='alamat_ortu'; ?>
													<label for="<?=$field?>">Alamat orang tua / wali</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[33])!=null?$sess[33]:null?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rt_ortu'; ?>
															<label for="<?=$field?>">RT</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[34])!=null?$sess[34]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rw_ortu'; ?>
															<label for="<?=$field?>">RW</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[35])!=null?$sess[35]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kelurahan_ortu'; ?>
															<label for="<?=$field?>">Kelurahan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[36])!=null?$sess[36]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kecamatan_ortu'; ?>
															<label for="<?=$field?>">Kecamatan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[37])!=null?$sess[37]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kota_ortu'; ?>
															<label for="<?=$field?>">Kota</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[38])!=null?$sess[38]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='email_ortu'; ?>
															<label for="<?=$field?>">Email</label>
															<input type="email" class="form-control" name="<?=$field?>" id="<?=$field?>" value="<?=isset($sess[39])!=null?$sess[39]:null?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div> <!-- end card-->
			</div> <!-- end col -->
		</div>
	</div>
</div>

<script>
	load_data();
	function load_data(){
		console.log(localStorage.getItem('form'));
	}
	$(document).ready(function(){
		keyUp('<?=$rt?>','<?=$rtOrtu?>');
		keyUp('<?=$rw?>','<?=$rwOrtu?>');
		keyUp('<?=$kel?>','<?=$kelOrtu?>');
		keyUp('<?=$kec?>','<?=$kecOrtu?>');
		keyUp('<?=$kota?>','<?=$kotaOrtu?>');
		keyUp('<?=$alamatSiswa?>','<?=$alamatOrtu?>');
		// Toolbar extra buttons
		var btnFinish = $('<button></button>').text('Simpan').addClass('btn btn-info').on('click', function(){
			if( !$(this).hasClass('disabled')){
				var elmForm = $("#myForm");
				 if(elmForm){
					elmForm.validator('validate');
					var elmErr = elmForm.find('.has-error');
					if(elmErr && elmErr.length > 0){
						alert('form masih kosong');
						return false;
					}else{
						// alert('Great! we are ready to submit form');
						// elmForm.submit();
						// return false;
						elmForm.on('submit',function(e){
							e.preventDefault();
							var img_loader = '<img src="<?=base_url()?>assets/spin.svg">';
							$.ajax({
								url : "<?=base_url().'siswa/pendaftaran'?>",
								type:"POST",
								dataType:"JSON",
								data:$("#myForm").serialize(),
								beforeSend: function() {$('body').append('<div class="first-loader">'+img_loader+'</div>')},
								complete: function() {$('.first-loader').remove()},
								success:function(res){
									console.log(res);
									alert('berhasil disimpan');
									location.reload();
								}
							})
						});

					}

				 }

			}
		});
		var btnCancel = $('<button></button>').text('Ulangi').addClass('btn btn-danger').on('click', function(){
			$('#smartwizard').smartWizard("reset");
			$('#myForm').find("input, textarea").val("");
		});



		// Smart Wizard
		$('#smartwizard').smartWizard({
			selected: 0,  // Initial selected step, 0 = first step
			keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
			autoAdjustHeight:true, // Automatically adjust content height
			cycleSteps: false, // Allows to cycle the navigation of steps
			backButtonSupport: true, // Enable the back button support
			useURLhash: true, // Enable selection of the step based on url hash
			lang: {  // Language variables
				next: 'Lanjut',
				previous: 'Kembali'
			},
			toolbarSettings: {
				toolbarPosition: 'bottom',
				toolbarExtraButtons: [btnFinish, btnCancel]
			},
			anchorSettings: {
				markDoneStep: true, // add done css
				markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
				removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
				enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
			},
			transitionEffect: 'fade', // Effect on navigation, none/slide/fade
			transitionSpeed: '400'
		});

		$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
			var elmForm = $(".form-step-" + stepNumber);
			if(stepDirection === 'forward' && elmForm){
				elmForm.validator('validate');
				var elmErr = elmForm.children('.has-error');
				if(elmErr && elmErr.length > 0){
					// Form validation failed
					return false;
				}
			}
			return true;
		});

		$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
			if(stepNumber === 3){
				$('.btn-finish').removeClass('disabled');
			}else{
				$('.btn-finish').addClass('disabled');
			}
		});

	});

	function keyUp(id1,id2){
		$("#"+id1).on('keyup',function(){$("#"+id2).val($(this).val());});
	}
</script>
