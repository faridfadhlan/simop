@extends('layouts.main')
@section('title')
SIMMOP - Sistem Informasi Manajemen Monitoring Pekerjaan BPS Provinsi Kalimantan Barat
@endsection


@section('content')
<body>
<!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link"><a href="#">Home</a></li>
                        <li class="crumb-link"><a href="#">Dashboard</a></li>
                        <li class="crumb-trail">Dashboard Kegiatan</li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Start: Topbar -->
            <header id="topbar" class="ph10">
                <div class="topbar-left">
                    <ul class="nav nav-list nav-list-topbar pull-left">
                        <li class="active">
                            <a href="ecommerce_dashboard.html">Pekerjaan</a>
                        </li>
                        <li>
                            <a href="ecommerce_products.html">Kegiatan</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <a href="ecommerce_orders.html" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Pekerjaan </a>
                    <a href="ecommerce_products.html" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Kegiatan </a>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p25 va-t posr">

                    <!-- dashboard tiles -->
                    <div class="row">
                        <div class="col-sm-4 col-xl-3">
                            <div class="panel panel-tile text-center">
                                <div class="panel-heading hidden">
                                    <span class="panel-title"><i class="fa fa-pencil"></i> Title</span>
                                </div>
                                <div class="panel-body bg-primary">
                                    <h1 class="fs35 mbn">18,020</h1>
                                    <h6 class="text-white">NB CONVERSIONS</h6>
                                </div>
                                <div class="panel-footer br-n p12">
                                    <span class="fs11"><i class="fa fa-arrow-up text-primary pr5"></i><b> 3% UNIQUES 1D AGO</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xl-3">
                            <div class="panel panel-tile text-center">
                                <div class="panel-heading hidden">
                                    <span class="panel-title"><i class="fa fa-pencil"></i> Title</span>
                                </div>
                                <div class="panel-body bg-warning">
                                    <h1 class="fs35 mbn">10.265</h1>
                                    <h6 class="text-white">USAHA SELESAI LISTING</h6>
                                </div>
                                <div class="panel-footer br-n p12">
                                    <span class="fs11"><i class="fa fa-arrow-up text-primary pr5"></i><b> 3% UNIQUES 1D AGO</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xl-3">
                            <div class="panel panel-tile text-center br-a br-grey">
                                <div class="panel-body bg-danger">
                                    <h1 class="fs35 mbn">248</h1>
                                    <h6 class="text-white">PEKERJAAN BELUM SELESAI</h6>
                                </div>
                                <div class="panel-footer br-n p12">
                                    <span class="fs11"><i class="fa fa-arrow-up pr5 text-primary"></i> 1% INCREASE <b>1W AGO</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xl-3 visible-xl">
                            <div class="panel panel-tile text-center br-a br-grey">
                                <div class="panel-body">
                                    <h1 class="fs30 mt5 mbn">5</h1>
                                    <h6 class="text-danger">PEKERJAAN BELUM DIALOKASIKAN</h6>
                                </div>
                                <div class="panel-footer br-t p12">
                                    <span class="fs11"><i class="fa fa-arrow-down pr5 text-danger"></i> 6% DECREASE <b>1W AGO</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- dashboard metric chart -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"> Progres</span>
                        </div>
                        <div class="panel-body pn">
                            <div id="ecommerce_chart1" style="height: 300px;"></div>
                        </div>
                    </div>

                    <!-- recent activity table -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"> Daftar Pekerjaan</span>
                            <ul class="nav panel-tabs panel-tabs-light">
                                <li class="active">
                                    <a href="#tab1_1" data-toggle="tab"> Pekerjaan</a>
                                </li>
                                <li>
                                    <a href="#tab1_2" data-toggle="tab"> Kegiatan</a>
                                </li>
                                <li>
                                    <a href="#tab1_3" data-toggle="tab"> Catatan</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body pn">
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                <thead class="tebal">
                                    <tr class="bg-light">
                                        <th class="text-center"><b>No</b></th>
                                        <th class="text-center"><b>Nama Pekerjaan</b></th>
                                        <th class="text-center"><b>Progres</b></th>
                                        <th class="text-center"><b>Nama Kegiatan</b></th>
                                        <th class="text-center"><b>Target</b></th>
                                        <th class="text-center"><b>Aksi</b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w100">1</td>
                                        <td class="">Mengentri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="">30 BS</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Update</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">2</td>
                                        <td class="">Mengentri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="">30 BS</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Update</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">3</td>
                                        <td class="">Mengentri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="">30 BS</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Update</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">4</td>
                                        <td class="">Mengentri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="">30 BS</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Update</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">5</td>
                                        <td class="">Mengentri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="">30 BS</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Pelaksana</a></li>
                                                    <li><a href="#">Update</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>     
                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray290 va-t pn" data-tray-height="match">

                    <!-- menu quick links -->
                    <div class="p20 admin-form">

                        <h4 class="mt5 text-muted fw500"> Filter Pekerjaan </h4>

                        <hr class="short">

                        <div class="section mb15">
                            <label for="order-id" class="field prepend-icon">
                                <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="Nama Pekerjaan...">
                                <label for="order-id" class="field-icon"><i class="fa fa-tag"></i>
                                </label>
                            </label>
                        </div>

                        
                        <h6 class="fw400">Range Tanggal</h6>
                        <div class="section row">
                            <div class="col-md-6">
                                <label for="date1" class="field prepend-icon">
                                    <input type="text" name="date1" id="date1" class="gui-input" placeholder="01/01/15">
                                    <label for="date1" class="field-icon"><i class="fa fa-calendar"></i>
                                    </label>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="date2" class="field prepend-icon">
                                    <input type="text" name="date2" id="date2" class="gui-input" placeholder="01/31/15">
                                    <label for="date2" class="field-icon"><i class="fa fa-calendar"></i>
                                    </label>
                                </label>
                            </div>
                        </div>

                        <h6 class="fw400">Pilih Kegiatan</h6>
                        <div class="section mb15">
                            <label class="field select">
                                <select id="filter-categories" name="filter-categories">
                                    <option value="0" selected="selected">Filter Kegiatan...</option>
                                    <option value="1">Sensus Ekonomi 2016</option>
                                    <option value="2">Susenas Semester 1 Tahun 2016</option>
                                </select>
                                <i class="arrow double"></i>
                            </label>
                        </div>

                        <h6 class="fw400">Pilih Bidang</h6>
                        <div class="section mb15">
                            <label class="field select">
                                <select id="filter-customers" name="filter-customers">
                                    <option value="0" selected="selected">Filter Bidang...</option>
                                    <option value="1">Distribusi</option>
                                    <option value="2">Sosial</option>
                                    <option value="3">NWAS</option>
                                    <option value="4">Produksi</option>
                                    <option value="5">IPDS</option>
                                </select>
                                <i class="arrow double"></i>
                            </label>
                        </div>

                        <hr class="short">

                        <div class="section row">
                            <div class="col-sm-12">
                                <button class="btn btn-default btn-sm ph25" type="button">Search</button>
                            </div>
                        </div>

                    </div>

                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->

        </section>
        </body>
@endsection


@section('script_bawah')
<!-- Charts JS -->
    <script type="text/javascript" src="{{ asset('vendor/plugins/highcharts/highcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/plugins/raphael/raphael.js') }}"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/utility/utility.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Chart colors
            var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
                bgDanger, bgSuccess, bgSystem, bgDark
            ];

            // Chart color groups
            var sparkColors = {
                "primary": [bgPrimary, bgPrimaryLr, bgPrimaryDr],
                "info": [bgInfo, bgInfoLr, bgInfoDr],
                "warning": [bgWarning, bgWarningLr, bgWarningDr],
                "success": [bgSuccess, bgSuccessLr, bgSuccessDr],
                "alert": [bgAlert, bgAlertLr, bgAlertDr]
            };

            // Chart data
            var seriesData = [{
                name: 'Sensus Ekonomi 2016',
                data: [5.0, 9, 17, 22, 19]
            }, {
                name: 'Susenas Semester 1 Tahun 2016',
                data: [2.9, 3.2, 4.7, 5.5]
            }, {
                name: 'Ubinan Subround I Tahun 2016',
                data: [15, 19, 22.7, 29.3]
            }, {
                name: 'Sakernas Semester 1 Tahun 2016',
                data: [11, 6, 5, 15, 17.0]
            }
            ];

            var ecomChart = $('#ecommerce_chart1');

            if (ecomChart.length) {
                ecomChart.highcharts({
                    credits: false,
                    colors: highColors,
                    chart: {
                        backgroundColor: 'transparent',
                        className: 'br-r',
                        type: 'line',
                        zoomType: 'x',
                        panning: true,
                        panKey: 'shift',
                        marginTop: 45,
                        marginRight: 1,
                    },
                    title: {
                        text: null
                    },
                    xAxis: {
                        gridLineColor: '#EEE',
                        lineColor: '#EEE',
                        tickColor: '#EEE',
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
                    },
                    yAxis: {
                        min: 0,
                        tickInterval: 5,
                        gridLineColor: '#EEE',
                        title: {
                            text: null,
                        }
                    },
                    plotOptions: {
                        spline: {
                            lineWidth: 3,
                        },
                        area: {
                            fillOpacity: 0.2
                        }
                    },
                    legend: {
                        enabled: true,
                        floating: false,
                        align: 'right',
                        verticalAlign: 'top',
                        // y: '-160px'
                    },
                    series: seriesData
                });
            }


        });
    </script>
    @endsection