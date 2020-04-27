<!-- Main Content Area -->
<div class="main-content">
	<!-- Timeline area Start -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 height-card box-margin">
				<div class="card">
					<div class="card-body">
						<!-- Table with outer spacing -->
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>No Invoice</th>
									<th>Atas Nama</th>
									<th>Nominal</th>
									<th>Tanggal</th>
									<th>Status</th>
								</tr>
								</thead>
								<tbody>
								<?php $read=$this->m_crud->read_data("tbl_invoice","*","id_user='".$this->session->sess_login['uid']."'");foreach($read as $row):?>
								<tr>
									<td class="text-bold-500"><?=$row['no_invoice']?></td>
									<td class="text-bold-500"><?=$row['pengirim']?></td>
									<td><?=$row['jumlah']?></td>
									<td class="text-bold-500"><?=date('Y-m-d',strtotime($row['created_at']));?></td>
									<td>
										<?php if($row['status']==0):?>
										<span class="label label-warning">Menunggu</span>
										<?php else: ?>
										<span class="label label-primary">Berhasil</span>
										<?php endif; ?>
									</td>
								</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
