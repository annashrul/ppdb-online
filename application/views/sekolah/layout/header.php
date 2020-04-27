<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/motrila-2/side-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jan 2020 17:22:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Admin Panel</title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url()?>assets/mtrl/images/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/notification.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/c3.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/animate.css">
    
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/jquery.tagsinput.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/color-picker-bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/daterange-picker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/form-picker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/notification.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/new/sweetalert-2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/modal.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/new/ekko-lightbox.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/new/lightbox.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/default-assets/notification.css">

    <!-- <script src="<?=base_url()?>assets/mtrl/vendor/jquery/jquery-3.2.1.min.js"></script> -->
	
    <script src="<?=base_url()?>assets/mtrl/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/mtrl/js/default-assets/moment.js"></script>

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="<?=base_url()?>assets/mtrl/css/main/style.css">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
    <style>
    .rotate45 {
        transform: rotate(45deg);
        /*transform: rotate(180deg);*/
        transition: .3s;
    }
    .rotate90 {
        transform: rotate(90deg);
        /*transform: rotate(180deg);*/
        transition: .3s;
    }
    .rotate135 {
        transform: rotate(135deg);
        /*transform: rotate(180deg);*/
        transition: .3s;
    }
    .rotate180 {
        transform: rotate(90deg);
        /*transform: rotate(180deg);*/
        transition: .3s;
    }
    .rotate180 {
        transform: rotate(90deg);
        /*transform: rotate(180deg);*/
        transition: .3s;
    }
    .rotate0 {
        transform: rotate(0deg);
        transition: .3s;
    }
    </style>

</head>

<body class="sidebar">
    <!-- Preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ont-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="W" class="letters-loading">
                        W
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                       I 
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                       T 
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                       I 
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                       N 
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                       G 
                    </span>
                </div>
                <p class="text-center">Memuat data...</p>
            </div>

            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader -->


    <!-- Setting Panel -->
    <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings font-17"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close zmdi zmdi-close font-18 font-weight-bold"></i>
            <p class="settings-heading font-18">Side Menu Color :</p>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                <div><span class="font-14 font-weight-bold">Default</span></div>
            </div>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
                <div><span class="font-14 font-weight-bold">Light</span></div>
            </div>
            <div class="sidebar-bg-options" id="sidebar-color-theme">
                <div><span class="font-14 font-weight-bold">Colorfull</span></div>
            </div>
        </div>
    </div>
