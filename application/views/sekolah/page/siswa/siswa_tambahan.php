<!-- Main Content Area -->
<div class="main-content">
    <div class="dashboard-area">
        <div class="container-fluid">
        <h4 class="card-title">Management Tambahan Siswa</h4>
			<!-- add data -->
            <div id="dataCfg" style="display:none;" class="bounceInUp">
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" id="dataForm" novalidate="">
                        <fieldset>
                            <div class="row" style="padding-right: 15px;">
								<div class="col-6 col-sm-6">
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Berat Badan</label>
										<input type="hidden" id="_txtId">
										<input type="text" id="_txtBb" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Jarak</label>
										<input type="text" id="_txtJrk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Waktu Tempuh</label>
										<input type="text" id="_txtWakTem" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Jumlah Saudara</label>
										<input type="text" id="_txtJmlSdr" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan Akta</label>
										<input type="text" id="_txtScAk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan KK</label>
										<input type="text" id="_txtScKk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan SKL</label>
										<input type="text" id="_txtScSkl" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan Raport</label>
										<input type="text" id="_txtScRpt" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
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
										<label class="col-4 col-sm-4 text-left">Berat Badan</label>
										<input type="hidden" id="_txtId">
										<input type="text" id="txtBb" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Jarak</label>
										<input type="text" id="txtJrk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Waktu Tempuh</label>
										<input type="text" id="txtWakTem" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Jumlah Saudara</label>
										<input type="text" id="txtJmlSdr" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
								</div>
								<div class="col-6 col-sm-6">
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan Akta</label>
										<input type="text" id="txtScAk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan KK</label>
										<input type="text" id="txtScKk" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan SKL</label>
										<input type="text" id="txtScSkl" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
										<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
									</div>
									<div class="form-group row">
										<label class="col-4 col-sm-4 text-left">Scan Raport</label>
										<input type="text" id="txtScRpt" class="form-control col-8 col-sm-8" aria-describedby=""
											placeholder="">
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
						<h4 class="card-title">Daftar Wali Siswa</h4>
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
										<th class="text-white">NISN</th>
										<th class="text-white">NAMA SISWA</th>
										<th class="text-white">NAMA WALI</th>
										<th class="text-white">NIK</th>
										<th class="text-white">PENDIDIKAN</th>
										<th class="text-white">PEKERJAAN</th>
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
				<h4 class="modal-title">Detail Wali Siswa</h4>
			</div>
			<div class="modal-body">
				<div class="row" style="padding-right: 15px;">
					<div class="col-6 col-sm-6">
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Berat Badan</label>
							<input type="hidden" id="_txtId">
							<input type="text" id="txtBb_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Jarak</label>
							<input type="text" id="txtJrk_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Waktu Tempuh</label>
							<input type="text" id="txtWakTem_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Jumlah Saudara</label>
							<input type="text" id="txtJmlSdr_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
					</div>
					<div class="col-6 col-sm-6">
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Scan Akta</label>
							<input type="text" id="txtScAk_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Scan KK</label>
							<input type="text" id="txtScKk_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Scan SKL</label>
							<input type="text" id="txtScSkl_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Scan Raport</label>
							<input type="text" id="txtScRpt_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="">
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
		    url       : "<?=base_url()?>sekolah/getSiswaTambahanFilter/get/"+page,
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
		    url       : "<?=base_url()?>sekolah/getSiswaTambahanData/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				// console.log(data.result.alamat);
				$("#txtId").val(data.result.id);
				$("#txtBb").val(data.result.nama);
				$("#txtJrk").val(data.result.thn_lahir);
				$("#txtWakTem").val(data.result.nik);
				$("#txtJmlSdr").val(data.result.pendidikan);
				$("#txtScAk").val(data.result.pekerjaan);
				$("#txtScKk").val(data.result.penghasilan_bulanan);
				$("#txtScSkl").val(data.result.kebutuhan_khusus);
				$("#txtScRpt").val(data.result.hubungan);

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
		var valBb = $("#txtBb").val();
		var valJrk = $("#txtJrk").val();
		var valWakTem = $("#txtWakTem").val();
		var valJmlSdr = $("#txtJmlSdr").val();
		var valScAk = $("#txtScAk").val();
		var valScKk = $("#txtScKk").val();
		var valScSkl = $("#txtScSkl").val();
		var valScRpt = $("#txtScRpt").val();
		$.ajax({
		    url       : "<?=base_url()?>sekolah/updateSiswaTambahan/",
		    method    : "POST",
		    data      : {
				'_valId':valId,
				'_valBb':valBb,
				'_valJrk':valJrk,
				'_valWakTem':valWakTem,
				'_valJmlSdr':valJmlSdr,
				'_valScAk':valScAk,
				'_valScKk':valScKk,
				'_valScSkl':valScSkl,
				'_valScRpt':valScRpt,
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
					url       : "<?=base_url()?>sekolah/deleteSiswaTambahan/",
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
		    url       : "<?=base_url()?>sekolah/getSiswaTambahanData/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.result.alamat);
				$("#txtId_").val(data.result.id);
				$("#txtBb_").val(data.result.nama);
				$("#txtJrk_").val(data.result.thn_lahir);
				$("#txtWakTem_").val(data.result.nik);
				$("#txtJmlSdr_").val(data.result.pendidikan);
				$("#txtScAk_").val(data.result.pekerjaan);
				$("#txtScKk_").val(data.result.penghasilan_bulanan);
				$("#txtScSkl_").val(data.result.kebutuhan_khusus);
				$("#txtScRpt_").val(data.result.hubungan);
				
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

