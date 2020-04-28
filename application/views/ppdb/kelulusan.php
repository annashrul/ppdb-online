<!-- Main Content Area -->
<div class="main-content">
	<!-- Timeline area Start -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 height-card box-margin">
				<div class="card">
					<div class="card-body">

						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="cari no/nama/email" id="any">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button" onclick="cari()">Cari</button>
							</div>
						</div>
						<!-- Table with outer spacing -->
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>No Pendaftaran</th>
									<th>Nama</th>
									<th>Email</th>
									<th>No Telepon</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Daftar</th>
									<th>Status</th>
								</tr>
								</thead>
								<tbody id="result_table">

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	focus_field('any');
	load_data();
	function load_data(data={}){
		ajaxQ(
			"ppdb/kelulusan",
			data,
			function(res){
				$("#result_table").html(res.result_table);
			}
		)
	}
	function cari(){
		load_data({any:$("#any").val()});
	}
</script>
