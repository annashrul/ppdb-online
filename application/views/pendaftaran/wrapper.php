
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Title -->
	<title><?=$data['nama']?></title>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Source+Code+Pro:wght@200&family=Special+Elite&display=swap" rel="stylesheet">
	<link rel="icon" href="<?=$data['logo']?>">
	<!-- These plugins only need for the run this page -->
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/default-assets/notification.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/c3.min.css">
	<!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/animate.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/jquery-ui.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/default-assets/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/style.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>etline/style.css">
	<link rel="stylesheet" href="<?=base_url().'assets/mtrl/'?>style.css">
	<!-- CSS -->
	<!--	<link href="https://cdn.jsdelivr.net/npm/smartwizard@4.4.1/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />-->
	<!-- CSS -->
	<link href="https://unpkg.com/smartwizard@4.4.1/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<style>
		html,body,a,h1,h2,h3,h4,h5,h6,p,small{
			font-family: 'Noto Sans JP', sans-serif!important;
			font-weight: bold;

		}
		.error {
			color: red;
			display: block;
		}
		.first-loader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1050;
			background: rgba(168, 168, 168, .5)
		}
		.first-loader img {
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			width: 60px;
			height: 60px
		}
		ul.list-unstyled li{color:red!important;}
		/*.sw-btn-group{display: none!important;}*/
	</style>
	<!-- Must needed plugins to the run this Template -->
	<script src="<?=base_url().'assets/mtrl/'?>js/jquery.min.js"></script>
	<script src="<?=base_url().'assets/mtrl/'?>js/popper.min.js"></script>
	<script src="<?=base_url().'assets/mtrl/'?>js/bootstrap.min.js"></script>
	<!-- JavaScript -->
	<script src="https://unpkg.com/smartwizard@4.4.1/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
	<!-- Form Validation -->
	<script type="text/javascript" src="<?=assets('landing/js/');?>jquery-validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=assets('landing/js/');?>jquery-validation/additional-methods.min.js"></script>
	<script type="text/javascript" src="<?=assets('landing/js/');?>sweetalert2/sweetalert2.all.js"></script>
	<!-- Include jQuery Validator plugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script>
		function show_modal(id_modal_,focus_,title){
			$("#"+id_modal_).modal('show');
			focus_field(focus_);
			$("#modal_title").text(title)
		}
		function focus_field(id){
			return setTimeout(function () {$("#"+id).focus();}, 600);
		}
		var img_loader = '<img src="<?=base_url()?>assets/spin.svg">';
		function ajaxQ(url,req=null,func_req){
			$.ajax({
				url : "<?=base_url()?>"+url,
				type:"POST",
				dataType : "JSON",
				data:req?req:null,
				success:func_req,
				beforeSend: function() {$('body').append('<div class="first-loader">'+img_loader+'</div>')},
				complete: function() {$('.first-loader').remove()},
			});
			return;
		}
	</script>
</head>

<body>

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
	<!-- Sidemenu Area -->
	<div class="ecaps-sidemenu-area">
		<!-- Desktop Logo -->
		<div class="ecaps-logo">
			<a href="javascript:void(0)"><img class="desktop-logo" src="<?=$data['logo']?>" alt="Desktop Logo"> <img class="small-logo" src="<?=$data['logo']?>" alt="Mobile Logo"></a>
		</div>

		<!-- Side Nav -->
		<div class="ecaps-sidenav" id="ecapsSideNav">
			<!-- Side Menu Area -->
			<div class="side-menu-area">
				<!-- Sidebar Menu -->
				<nav>
					<ul class="sidebar-menu" data-widget="tree">
						<?php $controller='pendaftaran'; $side_menu=null;$side_menu=array('home','form_pendaftaran','kelulusan','invoice');?>
						<li class="<?=$page==$side_menu[0]?'active':null?>"><a href="<?=base_url().$controller.'?q='.$data['slug'].'&page='.$side_menu[0].'&session='.$token?>"><i class="zmdi zmdi-view-dashboard"></i><span><?=rplc_($side_menu[0])?></span></a></li>
						<?php if($this->session->id==null): ?>
						<li><a href="javascript:void(0)" onclick="show_modal('modal_login','nama','Form Login')"><i class="zmdi zmdi-view-dashboard"></i><span><?=rplc_($side_menu[1])?></span></a></li>
						<?php else : ?>
						<li class="<?=$page==$side_menu[1]?'active':null?>"><a href="<?=base_url().$controller.'?q='.$data['slug'].'&page='.$side_menu[1].'&session='.$token?>"><i class="zmdi zmdi-view-dashboard"></i><span><?=rplc_($side_menu[1])?></span></a></li>
							<li class="<?=$page==$side_menu[3]?'active':null?>"><a href="<?=base_url().$controller.'?q='.$data['slug'].'&page='.$side_menu[3].'&session='.$token?>"><i class="zmdi zmdi-view-dashboard"></i><span><?=rplc_($side_menu[3])?></span></a></li>
						<?php endif; ?>
						<li class="<?=$page==$side_menu[2]?'active':null?>"><a href="<?=base_url().$controller.'?q='.$data['slug'].'&page='.$side_menu[2].'&session='.$token?>"><i class="zmdi zmdi-view-dashboard"></i><span><?=rplc_($side_menu[2])?></span></a></li>

					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Page Content -->
	<div class="ecaps-page-content">
		<!-- Top Header Area -->
		<header class="top-header-area d-flex align-items-center justify-content-between">
			<div class="left-side-content-area d-flex align-items-center">
				<!-- Mobile Logo -->
				<div class="mobile-logo mr-3 mr-sm-4">
					<a href="<?=base_url()?>"><img src="<?=$data['logo']?>" alt="Mobile Logo"></a>
				</div>

				<!-- Triggers -->
				<div class="ecaps-triggers mr-1 mr-sm-3">
					<div class="menu-collasped" id="menuCollasped">
						<i class="zmdi zmdi-menu"></i>
					</div>
					<div class="mobile-menu-open" id="mobileMenuOpen">
						<i class="zmdi zmdi-menu"></i>
					</div>
				</div>


			</div>

			<div class="right-side-navbar d-flex align-items-center justify-content-end">
				<!-- Mobile Trigger -->
				<div class="right-side-trigger" id="rightSideTrigger">
					<i class="ti-align-left"></i>
				</div>

				<!-- Top Bar Nav -->
				<ul class="right-side-content d-flex align-items-center">
					<?php if($this->session->id==null): ?>
					<li class="nav-item"><button class="btn btn-primary" onclick="show_modal('modal_login','nama','Form Login')">Masuk <i class="fa fa-sign-in"></i></button></li>
					<?php else: ?>
					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle font-15 text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->nama?><i class="arrow_carrot-down"></i></button>
						<div class="dropdown-menu language-dropdown dropdown-menu-right">
							<a href="<?=base_url().'pendaftaran/logout?q='.$data['slug'].'&page=home&session='.$token?>" class="dropdown-item">Keluar</a>
						</div>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</header>

		<?php $this->load->view($content); ?>
	</div>
</div>
<!-- The Modal -->
<div class="modal" tabindex="-1" role="dialog" data-backdrop="static" id="modal_login" style="display: none">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="modal_title"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form class="form-horizontal" id="form_login">
				<div class="modal-body">
					<div class="form-group">
						<?php $field='nama'; ?>
						<label>Nama</label>
						<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
					</div>
					<div class="form-group">
						<?php $field='email'; ?>
						<label>Email</label>
						<input type="email" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
					</div>
					<div class="form-group">
						<?php $field='password'; ?>
						<label>Password</label>
						<input type="password" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
				</div>
				<input type="text" name="param" id="param" value="<?=$_GET['q']?>">
			</form>
		</div>
	</div>
</div>

<div class="modal" tabindex="-1" role="dialog" data-backdrop="static" id="modal_transfer" style="display: none">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form class="form-horizontal" id="form_transfer">
				<div class="modal-body">
					<p class="text-center"><b>transfer dengan nominal sebesar 50,000 untuk biaya administrasi pendaftaran</b></p>
					<div class="form-group">
						<?php $field='nominal'; ?>
						<label>Nominal</label>
						<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" value="50000" disabled autocomplete="off">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Bayar</button>
				</div>
				<input type="text" id="url">
				<input type="text" id="id" name="id">
				<input type="text" id="idr" name="idr">
				<input type="text" id="emails" name="emails">
				<input type="text" id="namas" name="namas">
			</form>
		</div>
	</div>
</div>

<script src="<?=base_url().'assets/mtrl/'?>js/bundle.js"></script>
<!-- Active JS -->
<script src="<?=base_url().'assets/mtrl/'?>js/default-assets/active.js"></script>
<!-- These plugins only need for the run this page -->
<script src="<?=base_url().'assets/mtrl/'?>js/d3.min.js"></script>
<script src="<?=base_url().'assets/mtrl/'?>js/c3.min.js"></script>

<script>

	$('#form_login').validate({
		rules: {
			nama:{required:true},
			email: {
				required: true,
				email: true,
				remote: {
					url: "<?=base_url().'pendaftaran/auth/cek_email'?>",
					type: "post"
				}
			},
			password:{required:true}
		},
		//For custom messages
		messages: {
			nama:{required:"Nama tidak boleh kosong!"},
			email:{
				required: "Email tidak boleh kosong!",
				email: "Email tidak valid!",
				remote: "Email sudah tersedia!"
			},
			password:{
				required: "Password tidak boleh kosong!",
			}
		},
		errorElement : 'div',
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			var type = $(element).attr("type");
			if (placement) {
				$(placement).append(error)
			} else {
				if (type === "radio") {
					error.insertAfter(".errorRadio");
				} else {
					error.insertAfter(element);
				}
			}
		},
		submitHandler: function (form) {
			ajaxQ(
				"pendaftaran/auth/login",
				$("#form_login").serialize(),
				function(res){
					var _url = res.result.url;
					console.log(res.result.result.email);
					if(res.status===true){
						$("#url").val(res.result.url);
						$("#id").val(res.result.result.id);
						$("#idr").val(res.result.result.idr);
						$("#emails").val(res.result.result.email);
						$("#namas").val(res.result.result.nama);
						$("#modal_login").modal('hide');
						$("#form_login" ).validate().resetForm();
						show_modal('modal_transfer','nominal','');
						document.getElementById("form_login").reset();
					}else{
						Swal.fire({
							type: 'error',
							title: 'Terjadi kesalahan',
							text: res.msg
						})
					}
				}
			)
		}
	});

	$('#form_transfer').validate({
		submitHandler: function (form) {
			ajaxQ(
				"pendaftaran/transfer",
				$("#form_transfer").serialize(),
				function(res){
					if(res.status===true){
						$("#modal_transfer").modal('hide');
						Swal.fire({
							title: 'Berhasil',
							html:'<b>Konfirmasi Pembayaran Berhasil Dilakukan, Silahkan Tunggu Konfirmasi Dari Admin</b>',
							confirmButtonText: 'Lanjut',
						}).then((result) => {
							window.location.href='<?=base_url()?>'+$("#url").val();
						})

					}else{
						Swal.fire({
							type: 'error',
							title: 'Terjadi kesalahan',
							text: res.msg
						})
					}
				}
			)
		}
	});

</script>

</html>
