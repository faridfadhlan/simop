@extends('layouts.main')
@section('title')
SIMMOP - Daftar Kegiatan
@endsection


@section('content')

    
<!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="dashboard.html">Daftar Kegiatan</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link"><a href="#">Home</a></li>
                        <li class="crumb-link"><a href="#">Pekerjaan</a></li>
                        <li class="crumb-trail">Daftar Kegiatan</li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Start: Topbar -->
            <header id="topbar" class="ph10">
                <div class="topbar-left">
                    <ul class="nav nav-list nav-list-topbar pull-left">
                        <li class="active">
                            <a href="ecommerce_dashboard.html">Semua Kegiatan</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <a href="{{ URL::to('kegiatan/tambah') }}" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Kegiatan </a>
                    <a href="{{ URL::to('pekerjaan/tambah') }}" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Pekerjaan </a>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- 
            <section id="content" class="table-layout animated fadeIn">

                
                <div class="tray tray-center p25 va-t posr">
                	
                    <div class="panel">
                        
                        <div class="panel-body pn">
                            <table class="table table-bordered table-striped tc-checkbox-1 fs13">
                                <thead class="tebal">
                                    <tr class="bg-light">
                                        <th class="text-center"><b>No</b></th>
                                        <th class="text-center"><b>Nama Kegiatan</b></th>
                                        <th class="text-center"><b>Progres</b></th>
                                        <th class="text-center" width='20%'><b>Aksi</b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($kegiatans as $kegiatan)
                                    <tr>
                                        <?php $i++; ?>
                                        <td class="w70">{{ $i }}</td>
                                        <td class=""><a href="#">{{ $kegiatan->nama.' '.jenis_waktu_to_kegiatan($kegiatan->jenis_waktu['jenis_waktu'],$kegiatan->nilai_waktu).' Tahun '.$kegiatan->tahun }}</a></td>
                                        <td class="text-center" valign="middle">
                                            <div class="progress mt-10" style="margin:auto;">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#"><span class="glyphicons glyphicons-edit"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                   </div>
                

                   </section>-->
            <section class="table-layout animated fadeIn">
                <div class="tray tray-center p25 va-t posr">
                    <div class="panel">
                    <div id="mygantt" style='width:100%;height:400px'></div>
                    </div>
                </div>
            </section>
                   </section>
                   </body>
@endsection

@section('script_bawah')

    <!-- Theme Javascript -->
    
    <script src="{{ asset('plugins/dhtmlxgantt/dhtmlxgantt.js') }}" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ asset('plugins/dhtmlxgantt/dhtmlxgantt.css') }}" type="text/css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="{{ asset('plugins/dhtmlxgantt/testdata.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/utility/utility.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Core.init();
            gantt.config.columns =  [
                {name:"text",       label:"Kegiatan / Pekerjaan",  tree:true, width: "300"},
                {name:"progress",   label:"Progres",   align: "center" },
                {name:"duration",   label:"Durasi",   align: "center" }
            ];
            gantt.init("mygantt");
            gantt.parse(demo_tasks);
        });
    </script>
    @endsection