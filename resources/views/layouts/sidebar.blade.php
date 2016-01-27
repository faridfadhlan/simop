        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">
                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">                    
                    <li class="sidebar-label pt15">Menu Utama</li>
                    <li>
                        <a class="accordion-toggle{{ Request::is('dashboard*')?' menu-open':'' }}" href="#">
                            <span class="glyphicons-dashboard"></span>
                            <span class="sidebar-title">Dashboard</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li{!! Request::is('dashboard')?'  class="active"':'' !!}>
                                <a href="{{ URL::to('dashboard') }}">
                                    <span class="glyphicons glyphicons-book"></span> Dashboard Kegiatan </a>
                            </li>
                            <li>
                                <a href="admin_plugins-modals.html">
                                    <span class="glyphicons glyphicons-show_big_thumbnails"></span> Dashboard Pelaksana </a>
                            </li>
                            <li>
                                <a href="admin_plugins-dock.html">
                                    <span class="glyphicons glyphicons-sampler"></span> Dashboard Catatan </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle{{(
                                Request::is('pekerjaan*')||
                                Request::is('kegiatan*')
                                ?' menu-open':'' 
                            )
                        }}" href="#">
                            <span class="glyphicons glyphicons-fire"></span>
                            <span class="sidebar-title">Pekerjaan</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li{!! Request::is('pekerjaan')?'  class="active"':'' !!}>
                                <a href="{{ URL::to('pekerjaan') }}">
                                    <span class="glyphicons glyphicons-book"></span> Daftar Pekerjaan </a>
                            </li>

                            <li>
                                <a href="admin_plugins-modals.html">
                                    <span class="glyphicons glyphicons-show_big_thumbnails"></span> Master Pekerjaan </a>
                            </li>
                            <li{!! Request::is('kegiatan*')?'  class="active"':'' !!}>
                                <a href="{{ URL::to('kegiatan') }}">
                                    <span class="glyphicons glyphicons-sampler"></span> Master Kegiatan </a>
                            </li>
                            <li>
                                <a href="admin_plugins-dock.html">
                                    <span class="glyphicons glyphicons-sampler"></span> Master Jenis Waktu </a>
                            </li>
                            <li>
                                <a href="admin_plugins-dock.html">
                                    <span class="glyphicons glyphicons-sampler"></span> Master Unit Target </a>
                            </li>
                            <li>
                                <a href="admin_plugins-dock.html">
                                    <span class="glyphicons glyphicons-sampler"></span> Pelaksana Pekerjaan </a>
                            </li>
                        </ul>
                    </li>
                   

                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-shopping_cart"></span>
                            <span class="sidebar-title">Laporan</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ecommerce_dashboard.html">
                                    <span class="glyphicons glyphicons-shopping_cart"></span> Progres Provinsi</a>
                            </li>
                            <li>
                                <a href="ecommerce_products.html">
                                    <span class="glyphicons glyphicons-tags"></span> Progres Per Bidang </a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html">
                                    <span class="glyphicons glyphicons-coins"></span> Progres Per Kegiatan </a>
                            </li>
                            <li>
                                <a href="ecommerce_customers.html">
                                    <span class="glyphicons glyphicons-user_add"></span> Progres Per Pekerjaan </a>
                            </li>
                            <li>
                                <a href="ecommerce_settings.html">
                                    <span class="glyphicons glyphicons-keys"></span> Progres Per Orang </a>
                            </li>
                        </ul>
                    </li>
                        

                    <!-- sidebar resources -->
                    <li class="sidebar-label pt20">Setting</li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-bell"></span>
                            <span class="sidebar-title">User</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ui_tour.html">
                                    <span class="glyphicons glyphicons-lightbulb"></span> Profil </a>
                            </li>
                            <li>
                                <a href="ui_alerts.html">
                                    <span class="glyphicons glyphicons-warning_sign"></span> Ganti Password </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-bell"></span>
                            <span class="sidebar-title">Layout</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ui_tour.html">
                                    <span class="glyphicons glyphicons-lightbulb"></span> Halaman Dashboard </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>