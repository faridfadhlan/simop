@extends('layouts.main')

@section('content')
<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">
 <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1">

                    

                    <div class="panel panel-info mt10 br-n pr15">
                        
                        <!-- end .form-header section -->
                        <form method="post" action="{{ URL::to('auth/login') }}" id="contact">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-7 pr30">

                                        
                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                            <label for="username" class="field prepend-icon">
                                                <input type="text" name="username" id="username" class="gui-input" placeholder="Enter username" value="{{ old('username') }}">
                                                <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p15">
                                <button type="submit" class="button btn-primary mr10 pull-right">Sign In</button>
                                <label class="switch block switch-primary pull-left input-align mt10">
                                    <input type="checkbox" name="remember" id="remember" checked>
                                    <label for="remember" data-on="YES" data-off="NO"></label>
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        </div>
        </body>
        <!-- End: Content-Wrapper -->
@endsection

