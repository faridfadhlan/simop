@extends('layouts.main')
@section('title')
SIMMOP - Tambah Pekerjaan
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

            <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>
                    <span class="badge badge-hero badge-danger">3</span>
                </a>
            </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">
        <div class="row">

            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Tambah Pekerjaan</span>
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
                        <form class="form-horizontal" role="form" action="{{ URL::to('pekerjaan/simpan') }}" method="POST">
                            
                        @include('pekerjaan.form')
                        </form>
                    </div>
                </div>


            </div>


        </div>

    </div>
</section>
<!-- End: Content -->
@endsection