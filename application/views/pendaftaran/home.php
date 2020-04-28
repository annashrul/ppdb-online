<!-- Main Content Area -->
<div class="main-content">
	<!-- Timeline area Start -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-xs-12 col-sm-12 col-md-6 height-card box-margin">
				<div class="card">
					<div class="card-body">
						<center><img src="<?=$data['logo']?>" alt="" style="height: 100px;margin-bottom: 10px;"></center>
						<h4 class="text-center">SELAMAT DATANG DI SISTEM INFORMASI PENERIMAAN PESERTA DIDIK BARU</h4>
						<h4 class="text-center"><?=$data['nama']?></h4>
						<p class="text-center"><?=$data['alamat']?> <br> ( <?=$data['telepon']?> )</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-6 height-card box-margin">
				<div class="card">

					<div class="card-body">
						<!-- Ibox content -->
						<div class="ibox-content" id="ibox-content">
							<div id="vertical-timeline" class="vertical-container light--timeline">
								<?php $no=1; $content=array(
									'<p>klik menu <b>Form Pendaftaran</b> pada menu di samping</p>',
									'<p>klik menu <b>Form Pendaftaran</b> pada menu di samping</p>',
									'<p>Isikan biodata lengkap yang sudah pada form pendaftaran</p>',
									'<p>Pastikan sebelum mensubmit form isian registrasi tidak ada salah satu isian yang kosong</p>',
									'<p>Apabila berhasil melakukan registrasi tahap awal silahkan menunggu konfirmasi penerimaan siswa baru dari piha operator PSB</p>',
									'<p>Silahkan cek pendaftaran pada menu kelulusan, apabila data psb dengan nomor pendaftaran anda diterima, silahkan login untuk melengkapi file pas foto</p>'
								); foreach($content as $value): ?>
								<div class="vertical-timeline-block">
									<div class="vertical-timeline-icon blue-bg"><p style="padding:5px;color:white;font-weight: bold"><?=$no++?></p></div>
									<div class="vertical-timeline-content">
										<?=$value?>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
