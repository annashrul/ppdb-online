<?php $url = base_url() .'assets'?>
<!-- Main Content Area -->
<div class="main-content">
    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="dashboard-header-title mb-3">
                        <h5 class="mb-0 font-weight-bold">Beranda</h5>
                        <p class="mb-0 font-weight-bold">Selamat Datang.</p>
                    </div>
                </div>
                <!-- Dashboard Info Area -->
                <div class="col-6">
                    <div class="dashboard-infor-mation d-flex flex-wrap align-items-center mb-3">
                        <div class="dashboard-clock">
                            <div id="dashboardDate">Monday, 21 October</div>
                            <ul class="d-flex align-items-center justify-content-end">
                                <li id="hours">12</li>
                                <li>:</li>
                                <li id="min">10</li>
                                <li>:</li>
                                <li id="sec">14</li>
                            </ul>
                        </div>
                        <div class="dashboard-btn-group d-flex align-items-center" style="display:none!important;">
                            <a href="#" class="btn btn-primary ml-1"><i class="ti-settings"></i></a>
                            <a href="#" class="btn btn-primary ml-1"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Time Date Area -->
                <div class="col-12 box-margin">
                    <div class="card bg-boxshadow">
                        <div class="card-body px-3 py-2">
                            <div
                                class="user-important-data-info d-sm-flex align-items-center justify-content-between">
                                <ul
                                    class="downloads--data-btn d-flex align-items-center justify-content-between mb-3 mb-sm-0">
                                    <li><a href="#" class="btn"><i class="ti-arrow-down"></i> Downloads</a>
                                    </li>
                                    <li><a href="#" class="btn"><i class="ti-reload"></i> Updates</a></li>
                                    <li><a href="#" class="btn"><i class="ti-import"></i> Import</a></li>
                                </ul>
                                <ul class="sales-reports d-flex align-items-center justify-content-between">
                                    <li><span>Last Week</span> <span class="counter">500.68</span></li>
                                    <li><span>This Week</span> <span class="counter">438.12</span></li>
                                    <li><span>Balance</span> <span class="counter">693.87</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 box-margin">
                    <div class="card  bg-c-blue">
                        <div class="card-body">
                            <h5 class="card-title">Total Pendaftar</h5>
                            <div class="earning-text mb-4">
                                <h3 class="mb-3">xxx <i
                                        class="feather icon-arrow-up teal accent-3"></i></h3>
                                <span class="text-uppercase d-block">Siswa</span>
                            </div>
                            <div id="Widget-line-chart1" class="height-200"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jenis </h5>
                            <div id="chart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Siswa Terbaru</h4>
                            <ul class="dashboard-active-timeline list-unstyled" id="dashboardTimeline">
                                <li class="d-flex align-items-center mb-15">
                                    <div class="timeline-icon bg-primary mr-3">
                                        <i class="icon_plus"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Client Meeting</p>
                                        <span>Bonbon macaroon jelly beans gummi bears jelly lollipop
                                            apple</span>
                                        <p class="mb-0">25 mins ago</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mb-15">
                                    <div class="timeline-icon bg-warning mr-3">
                                        <i class="icon_mic_alt"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Email Newsletter</p>
                                        <span>Cupcake gummi bears soufflé caramels candy</span>
                                        <p class="mb-0">29 mins ago</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mb-15">
                                    <div class="timeline-icon bg-danger mr-3">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Plan Webinar</p>
                                        <span>Candy ice cream cake.</span>
                                        <p class="mb-0">28 mins ago</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mb-15">
                                    <div class="timeline-icon bg-success mr-3">
                                        <i class="icon_check"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Launch Website</p>
                                        <span>Candy ice cream cake. </span>
                                        <p class="mb-0">45 mins ago</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center mb-15">
                                    <div class="timeline-icon bg-danger mr-3">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Plan Webinar</p>
                                        <span>Candy ice cream cake.</span>
                                        <p class="mb-0">50 mins ago</p>
                                    </div>
                                </li>

                                <li class="d-flex align-items-center">
                                    <div class="timeline-icon bg-primary mr-3">
                                        <i class="icon_check"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Marketing</p>
                                        <span>Halvah bears Cupcake gummi bears.</span>
                                        <p class="mb-0">57 mins ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jurusan Terpopuler</h5>
                            <div class="product-table-area">
                                <div class="table-responsive" id="dashboardTable">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Code</th>
                                                <th>Sales</th>
                                                <th>Earning</th>
                                                <th style="max-width: 70px">Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Head Phone</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2864</td>
                                                <td>81</td>
                                                <td>$1,912.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success"
                                                                style="width: 82%"></div>
                                                        </div>
                                                        <div>
                                                            824
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Hand Watch</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3664</td>
                                                <td>26</td>
                                                <td>$1,377.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success"
                                                                style="width: 61%"></div>
                                                        </div>
                                                        <div>
                                                            161
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Sun Glass</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2364</td>
                                                <td>71</td>
                                                <td>$9,212.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger"
                                                                style="width: 23%"></div>
                                                        </div>
                                                        <div>
                                                            123
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Hand Watch</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>25664</td>
                                                <td>79</td>
                                                <td>$1,298.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning"
                                                                style="width: 54%"></div>
                                                        </div>
                                                        <div>
                                                            254
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Head Phone</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>9564</td>
                                                <td>26</td>
                                                <td>$1,377.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success"
                                                                style="width: 61%"></div>
                                                        </div>
                                                        <div>
                                                            61
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Hand Watch</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7864</td>
                                                <td>71</td>
                                                <td>$9,212.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger"
                                                                style="width: 23%"></div>
                                                        </div>
                                                        <div>
                                                            145
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="<?=base_url()?>assets/img/shop-img/best-2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>Sun Glass</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1564</td>
                                                <td>60</td>
                                                <td>$7,376.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success"
                                                                style="width: 76%"></div>
                                                        </div>
                                                        <div>
                                                            176
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
