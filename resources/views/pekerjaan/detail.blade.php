@extends('layouts.main')
@section('title')
SIMMOP - Detail Pekerjaan
@endsection

@section('content')
<!-- Start: Content -->
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
                <li class="crumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="crumb-trail">Dashboard</li>
            </ol>
        </div>
        <div class="topbar-right">

            <div class="topbar-right">
                    <a href="{{ URL::to('pekerjaan/edit/'.$pekerjaan->id) }}" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-pencil pr5"></span> Edit Pekerjaan </a>
                </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">
        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-info">
                                <div class="panel-heading">
                                    <span class="panel-icon"><i class="fa fa-pencil"></i>
                                    </span>
                                    <span class="panel-title">{{ strtoupper($pekerjaan->nama) }}</span>
                                </div>
                                <div class="panel-body pb5">
                                    <h4>Nama Pekerjaan</h4>
                                    <p class="text-muted"> {{ $pekerjaan->nama }}
                                    </p>

                                    <hr class="short br-lighter">
                                    
                                    <h4>Satuan Target</h4>
                                    <p class="text-muted"> {{ $pekerjaan->satuan->nama }}
                                    </p>

                                    <hr class="short br-lighter">
                                    
                                    <h4>Durasi Pekerjaan</h4>
                                    <p class="text-muted"> {{ date_format(date_create($pekerjaan->tgl_mulai), 'j F Y') }} - {{ date_format(date_create($pekerjaan->tgl_selesai), 'j F Y') }}
                                    </p>

                                    <hr class="short br-lighter">
                                    

                                    <h4>Daftar Petugas Pekerjaan</h4>
                                    <table class="table">
                                        <thead>
                                            <tr class="primary">
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Petugas</th>
                                                <th class="text-center">Satuan</th>
                                                <th class="text-center">Target</th>
                                                <th class="text-center">Realisasi</th>
                                                <th class="text-center">Progres</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td><a href="#">Sigit Nugroho</a></td>
                                                <td class="text-center">{{ $pekerjaan->satuan->nama }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">50%</td>
                                                <td class="text-center">
                                                    <a href="#"><span class="glyphicons glyphicons-edit"></span></a>
                                                    <a href="#"><span class="fa fa-comment-o"></span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td><a href="#">Muhammad Farid Fadhlan</a></td>
                                                <td class="text-center">{{ $pekerjaan->satuan->nama }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">50%</td>
                                                <td class="text-center">
                                                    <a href="#"><span class="glyphicons glyphicons-edit"></span></a>
                                                    <a href="#"><span class="fa fa-comment-o"></span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td><a href="#">Syarif Busri</a></td>
                                                <td class="text-center">{{ $pekerjaan->satuan->nama }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">50%</td>
                                                <td class="text-center">
                                                    <a href="#"><span class="glyphicons glyphicons-edit"></span></a>
                                                    <a href="#"><span class="fa fa-comment-o"></span></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td><a href="#">Avi R</a></td>
                                                <td class="text-center">{{ $pekerjaan->satuan->nama }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">{{ $pekerjaan->jumlah_target }}</td>
                                                <td class="text-center">50%</td>
                                                <td class="text-center">
                                                    <a href="#"><span class="glyphicons glyphicons-edit"></span></a>
                                                    <a href="#"><span class="fa fa-comment-o"></span></a>
                                                
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <hr class="short br-lighter">

                                    <h4>Pelaku Kegiatan</h4>
                                    <p class="text-muted pb10"> Bidang Distribusi, Bidang IPDS
                                    </p>

                                </div>
                            </div>


            </div>


        </div>

    </div>
</section>
@endsection