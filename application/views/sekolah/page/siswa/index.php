<!-- Main Content Area -->
<div class="main-content">
    <div class="dashboard-area">
        <div class="container-fluid">
        <h4 class="card-title">Management Siswa</h4>
            <div class="card">
                <div class="card-body">
                        <h4 class="card-title">Daftar Identitas Siswa</h4>
                        <hr>
                        <!-- <div class="col-12"> -->
                            <form class="form-inline d-flex justify-content-between">
                                <div class="form-group mb-30">
                                    <label for="inputPassword2" class="sr-only">Search</label>
                                    <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                </div>
                                <div class="form-group mb-30">
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
</script>

