
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
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Source+Code+Pro:wght@200&family=Special+Elite&display=swap" rel="stylesheet">
	<link rel="icon" href="<?=base_url().'assets/mtrl/'?>img/core-img/favicon.png">
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
	<!--<script type="text/javascript" src="--><?//=assets('landing/js/');?><!--jquery-validation/jquery.validate.min.js"></script>-->
	<!--<script type="text/javascript" src="--><?//=assets('landing/js/');?><!--jquery-validation/additional-methods.min.js"></script>-->
	<script type="text/javascript" src="<?=assets('landing/js/');?>sweetalert2/sweetalert2.all.js"></script>
	<!-- Include jQuery Validator plugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
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
			<a href="javascript:void(0)"><img class="desktop-logo" src="<?=base_url().'assets/mtrl/'?>img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="<?=base_url().'assets/mtrl/'?>img/core-img/small-logo.png" alt="Mobile Logo"></a>
		</div>

		<!-- Side Nav -->
		<div class="ecaps-sidenav" id="ecapsSideNav">
			<!-- Side Menu Area -->
			<div class="side-menu-area">
				<!-- Sidebar Menu -->
				<nav>
					<ul class="sidebar-menu" data-widget="tree">
						<?php if($page=='pendaftaran'): ?>
						<li class="active"><a href="#"><i class="zmdi zmdi-view-dashboard"></i><span>Form Pendaftaran</span></a></li>
						<?php else : ?>
						<li class="active"><a href="#"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
						<?php endif; ?>
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
					<a href="index.html"><img src="<?=base_url().'assets/mtrl/'?>img/core-img/small-logo.png" alt="Mobile Logo"></a>
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
					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle font-15 text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->email?><i class="arrow_carrot-down"></i></button>
						<div class="dropdown-menu language-dropdown dropdown-menu-right">
							<a href="<?=base_url().'siswa/logout'?>" class="dropdown-item">Keluar</a>
						</div>
					</li>

				</ul>
			</div>
		</header>

		<?php $this->load->view($content); ?>
	</div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->


<script src="<?=base_url().'assets/mtrl/'?>js/bundle.js"></script>
<!-- Active JS -->
<script src="<?=base_url().'assets/mtrl/'?>js/default-assets/active.js"></script>
<!-- These plugins only need for the run this page -->
<script src="<?=base_url().'assets/mtrl/'?>js/d3.min.js"></script>
<script src="<?=base_url().'assets/mtrl/'?>js/c3.min.js"></script>


</html>
