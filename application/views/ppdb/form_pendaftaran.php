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
							<div id="smartwizard" class="sw-main sw-theme-arrows">
								<ul>
									<li><a href="#step-1">Data Diri</a></li>
									<li><a href="#step-2">Alamat</a></li>
									<li><a href="#step-3">Orang Tua / Wali</a></li>
									<li><a href="#step-4">Tambahan</a></li>
									<li><a href="#step-5">Prestasi</a></li>
								</ul>

								<div>
									<div id="step-1">
										<div class="row">
											<div class="col-md-6 form-step-0" role="form" data-toggle="validator">

												<input type="hidden" name="id_sekolah" value="<?=$data['id']?>">
												<input type="hidden" name="id_siswa" value="<?=$this->session->sess_login['uid']?>">
												<div class="form-group">
													<?php $field='no_register'; ?>
													<label for="<?=$field?>">No Pendaftaran</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" value="" required readonly>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='nama'; ?>
													<label for="<?=$field?>">Nama Lengkap <small style="color:black;font-weight: bold">( harus sesuai dengan akte lahir )</small></label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<?php $field='jenis_kelamin'; ?>
													<label for="<?=$field?>">Jenis Kelamin </label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control"  required>
														<option value="">Pilih</option>
														<option value="L">Laki-laki</option>
														<option value="P">Perempuan</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
                                                <div class="form-group">
                                                    <?php $field='nisn'; ?>
                                                    <label for="<?=$field?>">NISN </label>
                                                    <input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='nik_siswa'; ?>
                                                    <label for="<?=$field?>">NIK</label>
                                                    <input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
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
                                                            <?php $field='tgl_lahir'; ?>
                                                            <label for="<?=$field?>">Tanggal Lahir </label>
                                                            <input type="date" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>

											</div>
											<div class="col-md-6 form-step-0" role="form" data-toggle="validator">
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
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <?php $field='telp'; ?>
                                                            <label for="<?=$field?>">Telepon</label>
                                                            <input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <?php $field='nohp'; ?>
                                                            <label for="<?=$field?>">No handphone</label>
                                                            <input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='email'; ?>
                                                    <label for="<?=$field?>">Email</label>
                                                    <input type="email" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='tempat_tinggal'; ?>
                                                    <label for="<?=$field?>">Tempat Tinggal</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='kendaraan'; ?>
                                                    <label for="<?=$field?>">Kendaraan</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='kebutuhan_khusus'; ?>
                                                    <label for="<?=$field?>">Kebutuhan Khusus</label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control">
														<option value="-">-</option>
														<option value="tunanetra">tunanetra</option>
														<option value="tunarunggu">tunarunggu</option>
														<option value="tunagrahita">tunagrahita</option>
														<option value="tunadaksa">tunadaksa</option>
														<option value="tunalaras">tunalaras</option>
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
                                                    <?php $field='provinsi'; ?>
                                                    <label for="<?=$field?>">Provinsi</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='kota'; ?>
                                                    <label for="<?=$field?>">Kota</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='kecamatan'; ?>
                                                    <label for="<?=$field?>">Kecamatan</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='kelurahan'; ?>
                                                    <label for="<?=$field?>">Kelurahan</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-step-1" role="form" data-toggle="validator">
                                                <div class="form-group">
                                                    <?php $field='rt'; ?>
                                                    <label for="<?=$field?>">RT</label>
                                                    <input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='rw'; ?>
                                                    <label for="<?=$field?>">RW</label>
                                                    <input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='alamat'; ?>
                                                    <label for="<?=$field?>">Alamat lengkap</label>
                                                    <textarea name="<?=$field?>" class="form-control" id="<?=$field?>" cols="320" rows="5" placeholder="contoh : jln kebon manggu no 112"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                            </div>
                                        </div>
									</div>
									<div id="step-3">
										<div class="row">
										<?php $no=0; for($i=1;$i<4;$i++):?>
											<div class="col-md-4 form-step-2" role="form" >
												<div class="row">
													<div class="col-md-12">
														<div class="form-group" style="border-bottom: 1px solid #eeeeee">
															<h5><?php if($i==1){echo 'Ayah';}elseif ($i==2){echo 'Ibu';}else{echo 'Wali';}?></h5>
														</div>
													</div>
												</div>
												<div class="form-group">
													<?php $field='nama_ortu_'.$i; ?>
													<label for="<?=$field?>">Nama</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='tahun_lahir_'.$i; ?>
													<label for="<?=$field?>">Tahun Lahir</label>
													<input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='nik_ortu_'.$i; ?>
													<label for="<?=$field?>">NIK</label>
													<input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='pendidikan_'.$i; ?>
													<label for="<?=$field?>">Pendidikan</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='pekerjaan_'.$i; ?>
													<label for="<?=$field?>">Pekerjaan</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='penghasilan_bulanan_'.$i; ?>
													<label for="<?=$field?>">Penghasilan Perbulan</label>
													<input type="number" class="form-control" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='kebutuhan_khusus_ortu_'.$i; ?>
													<label for="<?=$field?>">Kebutuhan Khusus</label>
													<select name="<?=$field?>" id="<?=$field?>" class="form-control">
														<option value="">-</option>
														<option value="tunanetra">tunanetra</option>
														<option value="tunarunggu">tunarunggu</option>
														<option value="tunagrahita">tunagrahita</option>
														<option value="tunadaksa">tunadaksa</option>
														<option value="tunalaras">tunalaras</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group" style="display: none">
													<?php $field='hubungan_'.$i; ?>
													<label for="<?=$field?>">Hubungan</label>
													<input type="number" class="form-control" value="<?php if($i==1){echo 1;}elseif ($i==2){echo 2;}else{echo 3;}?>" name="<?=$field?>" id="<?=$field?>">
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<?php $no++; endfor; ?>
										</div>
										<input type="hidden" name="nomor" value="<?=$no?>">

									</div>
									<div id="step-4">
										<div class="row">
											<div class="col-md-6 form-step-3" role="form" data-toggle="validator">
												<div class="form-group">
													<?php $field='berat_badan'; ?>
													<label for="<?=$field?>">Berat Badan</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
												<div class="form-group">
													<?php $field='jarak'; ?>
													<label for="<?=$field?>">Jarak</label>
													<input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
                                                <div class="form-group">
                                                    <?php $field='waktu_tempuh'; ?>
                                                    <label for="<?=$field?>">Waktu Tempuh</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='jml_saudara'; ?>
                                                    <label for="<?=$field?>">Jumlah Saudara</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
											</div>
											<div class="col-md-6 form-step-3" role="form" data-toggle="validator">
                                                <div class="form-group">
                                                    <?php $field='scan_akta'; ?>
                                                    <label for="<?=$field?>">Scan Akta</label>
                                                    <input type="file" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='scan_kk'; ?>
                                                    <label for="<?=$field?>">Scan KK</label>
                                                    <input type="file" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
												<div class="form-group">
													<?php $field='scan_skl'; ?>
													<label for="<?=$field?>">Scan Skl</label>
													<input type="file" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
													<div class="help-block with-errors"></div>
												</div>
                                                <div class="form-group">
                                                    <?php $field='scan_raport'; ?>
                                                    <label for="<?=$field?>">Scan Raport</label>
                                                    <input type="file" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>

											</div>
										</div>
									</div>
                                    <div id="step-5">
                                        <div class="row">
                                            <div class="col-md-12 form-step-4" role="form" data-toggle="validator">
                                                <div class="form-group">
                                                    <?php $field='title'; ?>
                                                    <label for="<?=$field?>">Title</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='tingkat'; ?>
                                                    <label for="<?=$field?>">Tingkat</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='tahun'; ?>
                                                    <label for="<?=$field?>">Tahun</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <?php $field='penyelenggara'; ?>
                                                    <label for="<?=$field?>">Penyelenggara</label>
                                                    <input type="text" class="form-control" name="<?=$field?>" id="<?=$field?>" required>
                                                    <div class="help-block with-errors"></div>
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
	var img_loader = '<img src="<?=base_url()?>assets/spin.svg">';
	function load_data(){
		$.ajax({
			url : "<?=base_url().'ppdb/generate_code'?>",
			type:"POST",
			dataType:"JSON",
			data:{noreg:'<?=$this->m_website->generate_code("REG",$data["id"])?>'},
			beforeSend: function() {$('body').append('<div class="first-loader">'+img_loader+'</div>')},
			complete: function() {$('.first-loader').remove()},
			success:function(res){
				$("#no_register").val(res.no_register)
			}
		});
	}
	$(document).ready(function(){

		// Toolbar extra buttons
		var btnFinish = $('<button></button>').text('Simpan').addClass('btn btn-info').on('click', function(){
			if( !$(this).hasClass('disabled')){
				var elmForm = $("#myForm");
				console.log(elmForm);
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
							console.log($("#myForm").serialize());

							var formData = new FormData($(this)[0]);
							$.ajax({
								url : "<?=base_url().'ppdb/pendaftaran'?>",
								type:"POST",
								dataType:"JSON",
								data:formData,
								mimeType: "multipart/form-data",
								contentType: false,
								processData: false,
								beforeSend: function() {$('body').append('<div class="first-loader">'+img_loader+'</div>')},
								complete: function() {$('.first-loader').remove()},
								success:function(res){
									console.log(res);
									load_data();
									alert('data berhasil disimpan');
									// location.reload();
									window.location.href='<?=base_url().$data["slug"]?>?v=form_pendaftaran#step-1';
									$('#smartwizard').smartWizard("reset");
									$('#myForm').find("input, textarea, select").val("");

									// localStorage.setItem("form",res);
									// alert('berhasil disimpan');
									// location.reload();
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
			console.log(stepNumber);

			//if(stepNumber===1){
			//	$("#<?//=$alamatSiswa?>//").focus();
			//}
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

	function keyUp(id1,id2){
		$("#"+id1).on('keyup',function(){$("#"+id2).val($(this).val());});
	}
</script>
