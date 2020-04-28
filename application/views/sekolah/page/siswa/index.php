<!-- Main Content Area -->
<div class="main-content">
    <div class="dashboard-area">
        <div class="container-fluid">
        <h4 class="card-title">Management Siswa</h4>
			<!-- add data -->
            <div id="dataCfg" style="display:none;" class="bounceInUp">
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" id="dataForm" novalidate="">
                        <fieldset>
                            <div class="row" style="padding-right: 15px;">
							<div class="col-6 col-sm-6">
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">No Register</label>
									<input type="hidden" id="_txtId">
									<input type="text" id="_txtNoReg" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Nama</label>
									<input type="text" id="_txtNama" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Jenis Kelamin</label>
									<input type="text" id="_txtJk" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">NISN</label>
									<input type="text" id="_txtNisn" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">NIK</label>
									<input type="text" id="_txtNik" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Tempat Lahir</label>
									<input type="text" id="_txtTglLh" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Tanggal Lahir</label>
									<input type="text" id="_txtTmpLh" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
							</div>
							<div class="col-6 col-sm-6">
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Agama</label>
									<input type="text" id="_txtAgama" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">No Telpon</label>
									<input type="text" id="_txtTelp" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">No HP</label>
									<input type="text" id="_txtHp" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Email</label>
									<input type="text" id="_txtEmail" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Kebutuhan Khusus</label>
									<input type="text" id="_txtKebKh" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Tempat Tinggal</label>
									<input type="text" id="_txtTmpTg" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Kendaraan</label>
									<input type="text" id="_txtKend" class="form-control col-8 col-sm-8" aria-describedby=""
										placeholder="" readonly="true">
									<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
								</div>
							</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-1 col-sm-1">
                                    <input class="btn btn-danger btn-block" id="btlAdd" type="reset" value="Batal">
                                </div>
                                <div class="col-1 col-sm-1">
                                    <input class="btn btn-primary btn-block" type="submit" value="Simpan">
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!-- update data -->
            <div id="dataUpdtCfg" style="display:none;" class="bounceInUp">
            <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" id="dataUpdtForm" novalidate="">
						<input type="hidden" id="txtId">
                        <fieldset>
                            <div class="row" style="padding-right: 15px;">
								<div class="col-6 col-sm-6">
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">No Register</label>
										<input type="hidden" id="txtId">
										<input type="text" id="txtNoReg" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Nama</label>
										<input type="text" id="txtNama" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Jenis Kelamin</label>
										<input type="text" id="txtJk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">NISN</label>
										<input type="text" id="txtNisn" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">NIK</label>
										<input type="text" id="txtNik" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Tempat Lahir</label>
										<input type="text" id="txtTglLh" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Tanggal Lahir</label>
										<input type="text" id="txtTmpLh" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Agama</label>
										<input type="text" id="txtAgama" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">No Telpon</label>
										<input type="text" id="txtTelp" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">No HP</label>
										<input type="text" id="txtHp" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Email</label>
										<input type="text" id="txtEmail" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Kebutuhan Khusus</label>
										<input type="text" id="txtKebKh" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Tempat Tinggal</label>
										<input type="text" id="txtTmpTg" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Kendaraan</label>
										<input type="text" id="txtKend" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="" >
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
								</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-1 col-sm-1">
                                    <input class="btn btn-danger btn-block" id="btlUpdt" type="reset" value="Batal">
                                </div>
                                <div class="col-1 col-sm-1">
                                    <input class="btn btn-primary btn-block" type="submit" value="Ubah">
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
						<h4 class="card-title">Daftar Identitas Siswa</h4>
						<hr>
						<form class="form-inline d-flex">
								<div class="input-group mb-3 mr-3">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01">Filter</label>
									</div>
									<select class="custom-select" id="inputGroupSelect01">
										<option value="1">NO. REGISTER</option>
										<option value="2">NISN</option>
										<option value="3">NAMA</option>
									</select>
								</div>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">Cari</button>
									</div>
								</div>
								<div class="form-group mb-30" style="display:none;">
									<label for="status-select" class="mr-2">Status</label>
									<select class="custom-select" id="status-select">
										<option selected="">Choose...</option>
										<option value="1">Paid</option>
										<option value="2">Awaiting Authorization</option>
										<option value="3">Payment failed</option>
										<option value="4">Cash On Delivery</option>
										<option value="5">Fulfilled</option>
										<option value="6">Unfulfilled</option>
									</select>
								</div>
							</form>
						<!-- </div> -->
						<div class="table-responsive">
							<table id="basic-datatable" class="table dt-responsive nowrap w-100">
								<thead class="primary-color">
									<tr>
										<th class="text-white">NO.</th>
										<th class="text-white">NO. REGISTER</th>
										<th class="text-white">NISN</th>
										<th class="text-white">NAMA</th>
										<th class="text-white">EMAIL</th>
										<th class="text-white">AKSI</th>
									</tr>
								</thead>
								<tbody id="f_siswa">
						
							</tbody>
							</table>
						</div>
						<div id="pagination_link"></div>
					<!-- </div> -->
				</div>
			</div>
        </div>
    </div>
</div>

<div class="modal inmodal fade" id="myModalDet" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Detail Data Siswa</h4>
			</div>
			<div class="modal-body">
				<div class="row" style="padding-right: 15px;">
					<div class="col-6 col-sm-6">
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">No Register</label>
							<input type="hidden" id="txtId_">
							<input type="text" id="txtNoReg_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Nama</label>
							<input type="text" id="txtNama_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Jenis Kelamin</label>
							<input type="text" id="txtJk_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">NISN</label>
							<input type="text" id="txtNisn_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">NIK</label>
							<input type="text" id="txtNik_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Tempat Lahir</label>
							<input type="text" id="txtTglLh_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Tanggal Lahir</label>
							<input type="text" id="txtTmpLh_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
					</div>
					<div class="col-6 col-sm-6">
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Agama</label>
							<input type="text" id="txtAgama_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">No Telpon</label>
							<input type="text" id="txtTelp_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">No HP</label>
							<input type="text" id="txtHp_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Email</label>
							<input type="text" id="txtEmail_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Kebutuhan Khusus</label>
							<input type="text" id="txtKebKh_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Tempat Tinggal</label>
							<input type="text" id="txtTmpTg_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Kendaraan</label>
							<input type="text" id="txtKend_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
				<button type="button" data-dismiss="modal" onclick="edit(document.getElementById('txtValId_'))" class="btn btn-primary">Ubah</button>
				<button type="button" data-dismiss="modal" onclick="hapus(document.getElementById('txtValId_'))" class="btn btn-primary">Hapus</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
// var tes [] = 
// console.log()
// $(document).ready(function() {
//     "use strict";
//     $("#basic-datatable").DataTable({
//         keys: !0,
//         language: {
//             paginate: {
//                 previous: "<i class='arrow_carrot-left'>",
//                 next: "<i class='arrow_carrot-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
//         }
// 	});
	
	$(document).ready(function(){
		// alert("test")
	    load_data(1);
	    // load_dropdown();
    }).on("click", ".pagination li a", function(event){
	    event.preventDefault();
	    var page = $(this).data("ci-pagination-page");
	    load_data(page);
    });

    function cari(){
	    var c_filter = $('#c_filter').val();
	    var c_stok = $('#c_stok').val();
	    var v_filter = $('input[name="filter"]').val();
	    load_data(1,{'c_filter_': c_filter, 'v_filter_': v_filter, 'c_stok_': c_stok})
    }

    function load_data(page,data={}) {
		// alert('test');
	    $.ajax({
		    url       : "<?=base_url()?>sekolah/getSiswaFilter/get/"+page,
		    method    : "POST",
		    data      : data,
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
			    console.log(data);
			    $('#f_siswa').html(data.table);
			    // $('#total').html(data.total);
			    $('#pagination_link').html(data.pagination_link);
		    }
	    });
    }
	
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function () {
		'use strict';
		window.addEventListener('load', function () {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function (form) {
				form.addEventListener('submit', function (event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();

	$("#showAdd").click(function () {
		// if($("#dataCfg").hasClass('animated') == true){
		$("#dataUpdtCfg").removeClass('animated');
		$("#dataUpdtCfg").hide();
		// }
		$("#cdList").toggle().toggleClass('animated');
		$("#dataCfg").toggle().toggleClass('animated');
		$('#dataForm')[0].reset();
		$('#dataForm').removeClass('was-validated');
		$("#icAdd").toggleClass('rotate0');
		$("#icAdd").toggleClass('rotate135');
	});

	function edit(id){
		if(id==null){
			id = $("#txtId_").val()
		}
			$.ajax({
		    url       : "<?=base_url()?>sekolah/getSiswaData/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				// console.log(data.result.alamat);
				$("#txtId").val(data.result.id);
				$("#txtNoReg").val(data.result.no_register);
				$("#txtNama").val(data.result.nama);
				$("#txtJk").val(data.result.jenis_kelamin);
				$("#txtNisn").val(data.result.nisn);
				$("#txtNik").val(data.result.nik);
				$("#txtTglLh").val(data.result.tempat_lahir);
				$("#txtTmpLh").val(data.result.tgl_lahir);
				$("#txtAgama").val(data.result.agama);
				$("#txtTelp").val(data.result.telp);
				$("#txtHp").val(data.result.nohp);
				$("#txtEmail").val(data.result.email);
				$("#txtKebKh").val(data.result.kebutuhan_khusus);
				$("#txtTmpTg").val(data.result.tempat_tinggal);
				$("#txtKend").val(data.result.kendaraan);

				$("#dataCfg").removeClass('animated');
				$("#dataCfg").hide();
				$("#dataUpdtCfg").toggle().toggleClass('animated');
				$("#ttAdd").toggle();
				$("#cdList").toggle().toggleClass('animated');
		    }
	    });
	}
	$("#dataUpdtForm").on("submit", function (e) {
		e.preventDefault();
		var valId = $("#txtId").val();
		var valNoReg = $("#txtNoReg").val();
		var valNama = $("#txtNama").val();
		var valJk = $("#txtJk").val();
		var valNisn = $("#txtNisn").val();
		var valNik = $("#txtNik").val();
		var valTglLh = $("#txtTglLh").val();
		var valTmpLh = $("#txtTmpLh").val();
		var valAgama = $("#txtAgama").val();
		var valTelp = $("#txtTelp").val();
		var valHp = $("#txtHp").val();
		var valEmail = $("#txtEmail").val();
		var valKebKh = $("#txtKebKh").val();
		var valTmpTg = $("#txtTmpTg").val();
		var valKend = $("#txtKend").val();
		$.ajax({
		    url       : "<?=base_url()?>sekolah/updateSiswa/",
		    method    : "POST",
		    data      : {
				'_valId':valId,
				'_valNoReg':valNoReg,
				'_valNama':valNama,
				'_valJk':valJk,
				'_valNisn':valNisn,
				'_valNik':valNik,
				'_valTglLh':valTglLh,
				'_valTmpLh':valTmpLh,
				'_valAgama':valAgama,
				'_valTelp':valTelp,
				'_valHp':valHp,
				'_valEmail':valEmail,
				'_valKebKh':valKebKh,
				'_valTmpTg':valTmpTg,
				'_valKend':valKend,
			},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.msg);
				if(data.status=='success'){
					Swal.fire({
						title:"Perhatian!",
						text:data.msg,
						type:"success",
						confirmButtonClass:"btn btn-confirm mt-2"
					})
					// document.location=data.redirect;
					location.reload();
				}else{
					Swal.fire({
						title:"Perhatian!",
						text:"Gagal memperbaharui data!",
						type:"danger",
						confirmButtonClass:"btn btn-confirm mt-2"
					})
				}
		    }
	    });
	});
	
	function hapus(id){
		if(id==null){
			id = $("#txtId_").val()
		}
		Swal.fire({
			title: "Perhatian?",
			text: "Data yang dihapus tidak akan bisa dikembalikan!",
			type: "warning",
			showCancelButton: !0,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			cancelButtonText: "Batal",
			confirmButtonText: "Ya, Hapus"
		}).then(function (t) {
			if (t.value) {
				$.ajax({
					url       : "<?=base_url()?>sekolah/deleteSiswa/",
					method    : "POST",
					data      : {'id':id},
					dataType  : "JSON",
					// beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
					// complete  : function() {$('.first-loader').remove()},
					success   : function(data) {
						console.log(data.msg);
						if(data.status=='success'){
							Swal.fire({
								title:"Perhatian!",
								text:data.msg,
								type:"success",
								confirmButtonClass:"btn btn-confirm mt-2"
							})
							// document.location=data.redirect;
							location.reload();
						}else{
							Swal.fire({
								title:"Perhatian!",
								text:"Gagal menghapus data!",
								type:"danger",
								confirmButtonClass:"btn btn-confirm mt-2"
							})
						}
					}
				});
			}
		})
	}
	
	function detail(id){
		$.ajax({
		    url       : "<?=base_url()?>sekolah/getSiswaData/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.result.alamat);
				$("#txtId_").val(data.result.id);
				$("#txtNoReg_").val(data.result.no_register);
				$("#txtNama_").val(data.result.nama);
				$("#txtJk_").val(data.result.jenis_kelamin);
				$("#txtNisn_").val(data.result.nisn);
				$("#txtNik_").val(data.result.nik);
				$("#txtTglLh_").val(data.result.tempat_lahir);
				$("#txtTmpLh_").val(data.result.tgl_lahir);
				$("#txtAgama_").val(data.result.agama);
				$("#txtTelp_").val(data.result.telp);
				$("#txtHp_").val(data.result.nohp);
				$("#txtEmail_").val(data.result.email);
				$("#txtKebKh_").val(data.result.kebutuhan_khusus);
				$("#txtTmpTg_").val(data.result.tempat_tinggal);
				$("#txtKend_").val(data.result.kendaraan);
				
				$("#myModalDet").modal('show');

		    }
	    });
	}

	$("#btlAdd").click(function () {
		$("#dataCfg").toggle().toggleClass('animated');
		$('#dataForm')[0].reset();
		$('#dataForm').removeClass('was-validated');
		$("#cdList").toggle().toggleClass('animated');
		$("#icAdd").toggleClass('rotate0');
		$("#icAdd").toggleClass('rotate135');
	});

	$("#btlUpdt").click(function () {
		$("#cdList").toggle().toggleClass('animated');
		$("#ttAdd").toggle();
		$("#dataUpdtCfg").toggle().toggleClass('animated');
		$('#dataUpdtForm')[0].reset();
		$('#dataUpdtForm').removeClass('was-validated');
	});
	$("#deleteBtn").click(function () {
		Swal.fire({
			title: "Perhatian!",
			text: "Yakin untuk menghapus data?",
			type: "warning",
			confirmButtonClass: "btn btn-confirm mt-2"
		})
	});
</script>

