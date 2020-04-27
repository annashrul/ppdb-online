
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?=assets('landing/vendors/owl-carousel/css/owl.carousel.min.css');?>">
	<link rel="stylesheet" href="<?=assets('landing/vendors/owl-carousel/css/owl.theme.default.css');?>">
	<link rel="stylesheet" href="<?=assets('landing/vendors/mdi/css/materialdesignicons.min.css');?>">
	<link rel="stylesheet" href="<?=assets('landing/vendors/aos/css/aos.css');?>">
	<link rel="stylesheet" href="<?=assets('landing/css/style.min.css');?>">
	<style>
		.modal-full {
			width: 98%;
		}
		.modal { overflow: auto !important; }
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
	</style>


	<script src="<?=assets('landing/vendors/jquery/jquery.min.js');?>"></script>
	<script src="<?=assets('landing/vendors/bootstrap/bootstrap.min.js');?>"></script>
	<!-- Form Validation -->
	<script type="text/javascript" src="<?=assets('landing/js/');?>jquery-validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=assets('landing/js/');?>jquery-validation/additional-methods.min.js"></script>
<!--	<script type="text/javascript" src="--><?//=assets('landing/js/');?><!--sweetalert2/sweetalert2.all.js"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<!-- Numeric -->
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
<header id="header-section">
	<nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
		<div class="container">
			<div class="navbar-brand-wrapper d-flex w-100">
				<img src="<?=assets('landing/images/Group2.svg')?>" alt="">
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="mdi mdi-menu navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
				<ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
					<li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
						<div class="navbar-collapse-logo">
							<img src="<?=assets('landing/images/Group2.svg')?>" alt="">
						</div>
						<button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
						</button>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#features-section">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#digital-marketing-section">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#feedback-section">Testimonials</a>
					</li>
					<li class="nav-item btn-contact-us pl-4 pl-lg-0">
						<button class="btn btn-info" onclick="show_modal('login')">Sign In</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<?php $this->load->view($content);?>
<div class="content-wrapper">
	<div class="container">
		<footer class="border-top">
			<p class="text-center text-muted pt-4">Copyright © 2019<a href="https://www.bootstrapdash.com/" class="px-1">Bootstrapdash.</a>All rights reserved.</p>
		</footer>
	</div>
</div>




<script src="<?=assets('landing/vendors/owl-carousel/js/owl.carousel.min.js');?>"></script>
<script src="<?=assets('landing/vendors/aos/js/aos.js');?>"></script>
<script src="<?=assets('landing/js/landingpage.js');?>"></script>

<script>
	function show_modal(param){
		if(param === 'login'){
			$("#modal_login").modal('show');
			focus_field('email');
		}
	}
	$('#form_login').validate({
		rules: {
			email: {
				required: true,
				email: true,
			},
			password:{required:true}
		},
		//For custom messages
		messages: {
			email:{
				required: "Email tidak boleh kosong!",
				email: "Email tidak valid!",
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
				"landing/auth/login",
				$("#form_login").serialize(),
				function(res){
					var _url = res.result.url;
					console.log(_url);
					if(res.status===true){
						$("#modal_login").modal('hide');
						document.getElementById("form_login").reset();
						$( "#form_login" ).validate().resetForm();
						Swal.fire({
							title: 'Konfirmasi',
							html:'<b>transfer dengan nominal sebesar 50,000 untuk biaya administrasi pendaftaran</b>',
							input: 'text',
							inputAttributes: {
								autocapitalize: 'off'
							},
							showCancelButton: true,
							confirmButtonText: 'Look up',
							showLoaderOnConfirm: true,
							preConfirm: (login) => {
								return fetch(`//api.github.com/users/${login}`)
									.then(response => {
										if (!response.ok) {
											throw new Error(response.statusText)
										}
										return response.json()
									})
									.catch(error => {
										Swal.showValidationMessage(
											`masukan nominal`
										)
									})
							},
							allowOutsideClick: () => !Swal.isLoading()
						}).then((result) => {
							window.location.href="<?=base_url()?>"+_url;
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
</body>
</html>
