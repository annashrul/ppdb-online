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

							<!-- SmartWizard html -->
							<div id="smartwizard">
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
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='nama_panggilan'; ?>
													<label for="<?=$field?>">Nama Panggilan </label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='jenis_kelamin'; ?>
													<label for="<?=$field?>">Jenis Kelamin </label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
														<option value="">Pilih</option>
														<option value="L">Laki-laki</option>
														<option value="P">Perempuan</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tempat_lahir'; ?>
															<label for="<?=$field?>">Tempat Lahir </label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>

													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tanggal_lahir'; ?>
															<label for="<?=$field?>">Tanggal Lahir </label>
															<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
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
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='jumlah_anak_kandung'; ?>
															<label for="<?=$field?>">Jumlah anak kandung</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='jumlah_anak_tiri'; ?>
															<label for="<?=$field?>">Jumlah anak tiri</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='jumlah_anak_angkat'; ?>
															<label for="<?=$field?>">Jumlah anak angkat</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
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
																<option value="-">-</option>
																<option value="piatu">Piatu</option>
																<option value="yatim">Yatim</option>
																<option value="yatim_piatu">Yatim Piatu</option>
															</select>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='bahasa'; ?>
															<label for="<?=$field?>">Bahasa sehari-hari</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<?php $field='agama'; ?>
													<label for="<?=$field?>">Agama / Kepercayaan</label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
														<option value="">Pilih</option>
														<option value="islam">Islam</option>
														<option value="kristen">Kristen</option>
														<option value="hindu">Hindu</option>
														<option value="budha">Budha</option>
														<option value="konghucu">Konghucu</option>
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
													<label for="<?=$field?>">Anak lengkap siswa</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rt'; ?>
															<label for="<?=$field?>">RT</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rw'; ?>
															<label for="<?=$field?>">RW</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kelurahan'; ?>
															<label for="<?=$field?>">Kelurahan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kecamatan'; ?>
															<label for="<?=$field?>">Kecamatan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<?php $field='kota'; ?>
													<label for="<?=$field?>">Kota</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>

											</div>
											<div class="col-md-6 form-step-1" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='telepon'; ?>
													<label for="<?=$field?>">Telepon</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='email'; ?>
													<label for="<?=$field?>">Email</label>
													<input type="email" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tinggal_pada'; ?>
															<label for="<?=$field?>">Tinggal pada </label>
															<select name="<?=$field?>" id="<?=$field?>" class="form-control" required>
																<option value="">Pilih</option>
																<option value="orang_tua">Orang Tua</option>
																<option value="menumpan">Menumpang</option>
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
																<option value="berjalan">Berjalan Kaki</option>
																<option value="mobil">Mobil</option>
																<option value="motor">Motor</option>
																<option value="lainnya">Lainnya</option>
															</select>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>

												<div class="form-group">
													<?php $field='jarak'; ?>
													<label for="<?=$field?>">Jarak tempat tinggal ke sekolah</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
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
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='tinggi_badan'; ?>
													<label for="<?=$field?>">Tinggi badan</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-md-6 form-step-2" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='golongan_darah'; ?>
													<label for="<?=$field?>">Golongan darah</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='riwayat_penyakit'; ?>
													<label for="<?=$field?>">Riwayat Penyakit <small style="font-weight: bold">( pisahkan dengan - apabila lebih dari satu. contoh : asma-jantung )</small></label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
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
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='nama_ibu'; ?>
													<label for="<?=$field?>">Nama ibu</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tempat_lahir_ayah'; ?>
															<label for="<?=$field?>">Tempat lahir ayah</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tanggal_lahir_ayah'; ?>
															<label for="<?=$field?>">Tanggal lahir ayah</label>
															<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tempat_lahir_ibu'; ?>
															<label for="<?=$field?>">Tempat lahir ibu</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='tanggal_lahir_ibu'; ?>
															<label for="<?=$field?>">Tanggal lahir ibu</label>
															<input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 form-step-3" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='alamat_ortu'; ?>
													<label for="<?=$field?>">Alamat orang tua / wali</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rt_ortu'; ?>
															<label for="<?=$field?>">RT</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='rw_ortu'; ?>
															<label for="<?=$field?>">RW</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kecamatan_ortu'; ?>
															<label for="<?=$field?>">Kecamatan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kelurahan_ortu'; ?>
															<label for="<?=$field?>">Kelurahan</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='kota_ortu'; ?>
															<label for="<?=$field?>">Kota</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<?php $field='email_ortu'; ?>
															<label for="<?=$field?>">Email</label>
															<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
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
		// Toolbar extra buttons
		var btnFinish = $('<button></button>').text('Finish')
			.addClass('btn btn-info')
			.on('click', function(){
				if( !$(this).hasClass('disabled')){
					var elmForm = $("#myForm");
					// if(elmForm){
						//elmForm.validator('validate');
						//var elmErr = elmForm.find('.has-error');
						//if(elmErr && elmErr.length > 0){
						//	alert('Oops we still have error in the form');
						//	return false;
						//}else{
						//	// alert('Great! we are ready to submit form');
						//	// elmForm.submit();
						//	// return false;
						//	elmForm.on('submit',function(e){
						//		e.preventDefault();
						//		$.ajax({
						//			url : "<?//=base_url().'siswa/pendaftaran'?>//",
						//			type:"POST",
						//			dataType:"JSON",
						//			data:$("#myForm").serialize(),
						//			success:function(res){
						//				var values = $(this).serializeArray();
						//				localStorage.setItem("form", JSON.stringify(values))
						//
						//			}
						//		})
						//	});
						//
						//}

					// }
					elmForm.on('submit',function(e){
						e.preventDefault();
						$.ajax({
							url : "<?=base_url().'siswa/pendaftaran'?>",
							type:"POST",
							dataType:"JSON",
							data:$("#myForm").serialize(),
							success:function(res){
								var values = $(this).serializeArray();
								values.forEach(function(item, index) {
									// $("#submitted").append(item.name + " " + item.value + "<br>");
									// load_data(values);
									console.log(item.name);
								});
								localStorage.setItem("form", JSON.stringify(values));

							}
						})
					});
				}
			});
		var btnCancel = $('<button></button>').text('Cancel')
			.addClass('btn btn-danger')
			.on('click', function(){
				$('#smartwizard').smartWizard("reset");
				$('#myForm').find("input, textarea").val("");
			});



		// Smart Wizard
		$('#smartwizard').smartWizard({
			toolbarSettings: {toolbarPosition: 'bottom',
				toolbarExtraButtons: [btnFinish, btnCancel]
			},
			anchorSettings: {
				markDoneStep: true, // add done css
				markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
				removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
				enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
			}
		});

		$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
			var elmForm = $(".form-step-" + stepNumber);
			// if(stepDirection === 'forward' && elmForm){
			// 	elmForm.validator('validate');
			// 	var elmErr = elmForm.children('.has-error');
			// 	if(elmErr && elmErr.length > 0){
			// 		// Form validation failed
			// 		return false;
			// 	}
			// }
			// return true;
		});

		$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
			if(stepNumber === 3){
				$('.btn-finish').removeClass('disabled');
			}else{
				$('.btn-finish').addClass('disabled');
			}
		});

	});
</script>
