@extends('layouts.main')
@section('title')
SIMMOP - Tambah Pekerjaan
@endsection

@section('script_atas')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}"
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
                    <a href="{{ URL::to('kegiatan/tambah') }}" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Kegiatan </a>
                    
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

@section('script_bawah')
<script type="text/javascript" src="{{ asset('vendor/plugins/datepicker/js/globalize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/plugins/datepicker/js/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/utility/utility.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
            // Init datetimepicker - fields
            Core.init();
            $('.datetimepicker').datetimepicker({
                format:'YYYY-MM-DD'
            });
        }); 
</script>
@endsection