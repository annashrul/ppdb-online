<!-- Main Content Area -->
<div class="main-content">
    <div class="dashboard-area">
        <div class="container-fluid">
        <h4 class="card-title" id="ttAdd">Management Alamat Siswa</h4>
            <!-- add data -->
            <div id="dataCfg" style="display:none;" class="bounceInUp">
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" id="dataForm" novalidate="">
                        <fieldset>
                            <div class="row" style="padding-right: 15px;">
                                <div class="col-6 col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Alamat</label>
                                        <input type="text" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">RT/RW</label>
                                        <input type="text" class="form-control col-4 col-sm-4" aria-describedby=""
                                            placeholder="" required>
                                        <input type="text" class="form-control col-4 col-sm-4" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Desa</label>
                                        <select class="form-control col-8 col-sm-8" id="" required>
                                            <option>List</option>
                                            <option>List</option>
                                        </select>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Kecamatan</label>
                                        <input type="text" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Kabupaten</label>
                                        <input type="text" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Provinsi</label>
                                        <input type="text" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
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
                        <form class="needs-validation" id="dataFormUpdt" novalidate="">
						<input type="hidden" id="txtId">
                        <fieldset>
                            <div class="row" style="padding-right: 15px;">
								<div class="col-6 col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Alamat</label>
                                        <input type="text" id="txtAlm" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">RT/RW</label>
                                        <input type="text" id="txtRt" class="form-control col-4 col-sm-4" aria-describedby=""
                                            placeholder="" required>
                                        <input type="text" id="txtRw" class="form-control col-4 col-sm-4" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Desa</label>
                                        <input type="text" id="txtDes" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Kecamatan</label>
                                        <input type="text" id="txtKec" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Kabupaten</label>
                                        <input type="text" id="txtKab" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
                                        <div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 col-sm-4 text-left">Provinsi</label>
                                        <input type="text" id="txtProv" class="form-control col-8 col-sm-8" aria-describedby=""
                                            placeholder="" required>
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
                    <!-- <div class="stacked-form-area"> -->
                        
                        <h4 class="card-title">Daftar Alamat Siswa</h4>
                        <hr>
                        <!-- <div class="col-12"> -->
                            <form class="form-inline d-flex">
								<div class="input-group mb-3 mr-3">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01">Filter</label>
									</div>
									<select class="custom-select" id="inputGroupSelect01">
										<option value="1">Nama</option>
										<option value="2">Alamat</option>
										<option value="3">Desa</option>
										<option value="3">Kecamatan</option>
										<option value="3">Kabupaten</option>
										<option value="3">Provinsi</option>
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
                                        <th class="text-white">NAMA</th>
                                        <th class="text-white">ALAMAT</th>
                                        <th class="text-white">DESA</th>
                                        <th class="text-white">RT/RW</th>
                                        <th class="text-white">KECAMATAN</th>
                                        <th class="text-white">KABUPATEN</th>
                                        <th class="text-white">PROVINSI</th>
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
				<h4 class="modal-title">Detail Alamat Siswa</h4>
			</div>
			<div class="modal-body">
				<div class="row" style="padding-right: 15px;">
					<div class="col-6 col-sm-6">
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Alamat</label>
							<input type="hidden" id="txtId_">
							<input type="text" id="txtAlm_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">RT/RW</label>
							<input type="text" id="txtRt_" class="form-control col-4 col-sm-4" aria-describedby=""
								placeholder="" readonly="true">
							<input type="text" id="txtRw_" class="form-control col-4 col-sm-4" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Desa</label>
							<input type="text" id="txtDes_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
					</div>
					<div class="col-6 col-sm-6">
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Kecamatan</label>
							<input type="text" id="txtKec_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Kabupaten</label>
							<input type="text" id="txtKab_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-sm-4 text-left">Provinsi</label>
							<input type="text" id="txtProv_" class="form-control col-8 col-sm-8" aria-describedby=""
								placeholder="" readonly="true">
							<div class="invalid-feedback col-8 col-sm-8 offset-4">Harus di isi!</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
				<button type="button" onclick="edit(document.getElementById('txtValId_'))" class="btn btn-primary">Ubah</button>
				<button type="button" onclick="hapus(document.getElementById('txtValId_'))" class="btn btn-primary">Hapus</button>
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
		    url       : "<?=base_url()?>sekolah/getSiswaAlamatFilter/get/"+page,
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
			$.ajax({
		    url       : "<?=base_url()?>sekolah/getSiswaAlamatData/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.result.alamat);
				$("#txtId").val(data.result.id);
				$("#txtAlm").val(data.result.alamat);
				$("#txtRt").val(data.result.rt);
				$("#txtRw").val(data.result.rw);
				$("#txtDes").val(data.result.desa);
				$("#txtKec").val(data.result.kecamatan);
				$("#txtKab").val(data.result.kabupaten);
				$("#txtProv").val(data.result.provinsi);

				$("#dataCfg").removeClass('animated');
				$("#dataCfg").hide();
				$("#dataUpdtCfg").toggle().toggleClass('animated');
				$("#ttAdd").toggle();
				$("#cdList").toggle().toggleClass('animated');
				$('#dataUpdtForm')[0].reset();
				$('#dataUpdtForm').removeClass('was-validated');
		    }
	    });
	}

	$("#dataFormUpdt").on("submit", function (e) {
		e.preventDefault();
		var valId = $("#txtId").val();
		var valAlm = $("#txtAlm").val();
		var valRt = $("#txtRt").val();
		var valRw = $("#txtRw").val();
		var valDes = $("#txtDes").val();
		var valKec = $("#txtKec").val();
		var valKab = $("#txtKab").val();
		var valProv = $("#txtProv").val();
		$.ajax({
		    url       : "<?=base_url()?>sekolah/updateSiswaAlamat/",
		    method    : "POST",
		    data      : {
				'_valId':valId,
				'_valAlm':valAlm,
				'_valRt':valRt,
				'_valRw':valRw,
				'_valDes':valDes,
				'_valKec':valKec,
				'_valKab':valKab,
				'_valProv':valProv
			},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.result.msg);

		    }
	    });
	});
	
	function hapus(id){
			$.ajax({
		    url       : "<?=base_url()?>sekolah/deleteSiswaAlamat/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.result.msg);
		    }
	    });
	}
	
	function detail(id){
		$.ajax({
		    url       : "<?=base_url()?>sekolah/getSiswaAlamatData/",
		    method    : "POST",
		    data      : {'id':id},
		    dataType  : "JSON",
		    // beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
		    // complete  : function() {$('.first-loader').remove()},
		    success   : function(data) {
				console.log(data.result.alamat);
				$("#txtId_").val(data.result.id);
				$("#txtAlm_").val(data.result.alamat);
				$("#txtRt_").val(data.result.rt);
				$("#txtRw_").val(data.result.rw);
				$("#txtDes_").val(data.result.desa);
				$("#txtKec_").val(data.result.kecamatan);
				$("#txtKab_").val(data.result.kabupaten);
				$("#txtProv_").val(data.result.provinsi);
				
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

