
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Motrila - Responsive Bootstrap Admin Template</title>

	<!-- Favicon -->
	<link rel="icon" href="<?=base_url().'assets/mtrl/'?>img/core-img/favicon.png">

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
	<style>
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
</head>

<body class="login-area">
<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="main-content- h-100vh">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center">
			<div class="col-12">
				<!-- Middle Box -->
				<div class="middle-box">
					<div class="card">
						<div class="card-body p-4">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="xs-d-none mb-50-xs break-320-576-none">
										<img src="<?=base_url().'assets/mtrl/'?>img/bg-img/1.png" alt="">
									</div>
								</div>

								<div class="col-md-6">
									<!-- Logo -->
									<h4 class="font-18 mb-30">Welcome back! Log in to your account.</h4>

									<form action="#" id="form_login">
										<div class="form-group">
											<label class="float-left" for="emailaddress">Email address</label>
											<input class="form-control" name="email" type="email" id="email" placeholder="Enter your email">
										</div>

										<div class="form-group">
											<label class="float-left" for="password">Password</label>
											<input class="form-control" name="password" type="password" id="password" placeholder="Enter your password">
										</div>

										<div class="form-group mb-0">
											<button class="btn btn-primary btn-block" type="submit"> Log In </button>
										</div>
										<input type="text" name="param" id="param" value="<?=$_GET['q']?>">
									</form>
								</div> <!-- end card-body -->
							</div>
							<!-- end card -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="<?=base_url().'assets/mtrl/'?>js/jquery.min.js"></script>
<script src="<?=base_url().'assets/mtrl/'?>js/popper.min.js"></script>
<script src="<?=base_url().'assets/mtrl/'?>js/bootstrap.min.js"></script>
<script src="<?=base_url().'assets/mtrl/'?>js/bundle.js"></script>

<!-- Active JS -->
<script src="<?=base_url().'assets/mtrl/'?>js/default-assets/active.js"></script>

<script type="text/javascript" src="<?=assets('landing/js/');?>jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=assets('landing/js/');?>jquery-validation/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
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
					if(res.status===true){
						window.location.href="<?=base_url()?>"+_url;
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

</html>
