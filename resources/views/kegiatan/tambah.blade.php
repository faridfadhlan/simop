@extends('layouts.main')
@section('title')
SIMMOP - Tambah Kegiatan
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
                    <a href="{{ URL::to('pekerjaan/tambah') }}" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Pekerjaan </a>
                </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">
        <div class="row">

            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Tambah Kegiatan</span>
                    </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" role="form" action="{{ URL::to('kegiatan/simpan') }}" method="POST">
                            
                        @include('kegiatan.form')
                        </form>
                    </div>
                </div>


            </div>


        </div>

    </div>
</section>
<!-- End: Content -->
@endsection