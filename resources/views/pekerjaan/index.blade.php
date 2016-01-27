@extends('layouts.main')
@section('title')
SIMMOP - Daftar Pekerjaan
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
                            <a href="dashboard.html">Daftar Pekerjaan</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link"><a href="#">Home</a></li>
                        <li class="crumb-link"><a href="#">Pekerjaan</a></li>
                        <li class="crumb-trail">Daftar Pekerjaan</li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Start: Topbar -->
            <header id="topbar" class="ph10">
                
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
                	<!-- recent activity table -->
                    <div class="panel">
                        
                        <div class="panel-body pn">
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                <thead class="tebal">
                                    <tr class="bg-light">
                                        <th class="text-center"><b>No</b></th>
                                        <th class="text-center"><b>Nama Pekerjaan</b></th>
                                        <th class="text-center"><b>Progres</b></th>
                                        <th class="text-center"><b>Nama Kegiatan</b></th>
                                        <th class="text-center"><b>Target</b></th>
                                        <th class="text-center"><b>Realisasi</b></th>
                                        <th class="text-center"><b>Jumlah Pelaksana</b></th>
                                        <th class="text-center"><b>Aksi</b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w100">1</td>
                                        <td class="">Monitoring Entri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="text-center">30 BS</td>
                                        <td class="text-center">18 BS</td>
                                        <td class="text-center">3</td>
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
                                        <td class="">Monitoring Entri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="text-center">30 BS</td>
                                        <td class="text-center">18 BS</td>
                                        <td class="text-center">3</td>
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
                                        <td class="">Monitoring Entri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="text-center">30 BS</td>
                                        <td class="text-center">18 BS</td>
                                        <td class="text-center">3</td>
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
                                        <td class="">Monitoring Entri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="text-center">30 BS</td>
                                        <td class="text-center">18 BS</td>
                                        <td class="text-center">3</td>
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
                                        <td class="">Monitoring Entri Dokumen Listing Sensus Ekonomi 2016</td>
                                        <td class="text-center">60%</td>
                                        <td class="">Sensus Ekonomi 2016</td>
                                        <td class="text-center">30 BS</td>
                                        <td class="text-center">18 BS</td>
                                        <td class="text-center">3</td>
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
                   </section>
                   </section>
                   </body>
@endsection

@section('script_bawah')

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/utility/utility.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Core.init();
        });
    </script>
    @endsection