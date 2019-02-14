<?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'dashboard/login';
		redirect($url);
	}
?>
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-20">
                            <button type="button" class="btn btn-custom btn-rounded dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 m-b-30">Total Ruang Kelas</h4>

                            <div class="widget-chart-1">
                                <div class ="widget-chart-box-1">
                                    <i style="font-size: 6em;  color:#f05050;"class="fa fa-university"></i>
                                </div>

                                <div class="widget-detail-1">
                                    <h2 class="p-t-10 mb-0"><?= $jmlruang; ?> </h2>
                                    <p class="text-muted m-b-10">Ruang Kelas</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 m-b-30">Total Siswa</h4>

                            <div class="widget-chart-1">
                                <div class ="widget-chart-box-1">
                                    <i style="font-size: 6em;  color:#10c469;"class="fa fa-users"></i>
                                </div>

                                <div class="widget-detail-1">
                                    <h2 class="p-t-10 mb-0"><?= $jmlsiswa; ?> </h2>
                                    <p class="text-muted m-b-10">Siswa</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 m-b-30">Total Mata Pelajaran</h4>

                            <div class="widget-chart-1">
                                <div class ="widget-chart-box-1">
                                    <i style="font-size: 6em;  color:#FFBD4A;"class="fa fa-book"></i>
                                </div>

                                <div class="widget-detail-1">
                                    <h2 class="p-t-10 mb-0"><?= $jmlmapel; ?> </h2>
                                    <p class="text-muted m-b-10">Mata Pelajaran</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 m-b-30">Total Guru</h4>

                            <div class="widget-chart-1">
                                <div class ="widget-chart-box-1">
                                    <i style="font-size: 6em;  color:#ff8acc;"class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="widget-detail-1">
                                    <h2 class="p-t-10 mb-0">164</h2>
                                    <p class="text-muted m-b-10">Guru</p>
                                </div>
                            </div>

                            <!-- <h4 class="header-title mt-0 m-b-30">Daily Sales</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2">
                                    <span class="badge badge-pink badge-pill pull-left m-t-20">32% <i class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="mb-0"> 158 </h2>
                                    <p class="text-muted m-b-25">Revenue today</p>
                                </div>
                                <div class="progress progress-bar-pink-alt progress-sm mb-0">
                                    <div class="progress-bar progress-bar-pink" role="progressbar"
                                         aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                         style="width: 77%;">
                                        <span class="sr-only">77% Complete</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0">Total Siswa Per-Jurusan</h4>

                            <div class="widget-chart text-center">
                                <div id="morris-donut-example" style="height: 245px;"></div>
                                <ul class="list-inline chart-detail-list mb-0">
                                    <li class="list-inline-item">
                                        <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="header-title mt-0">Statistics Total Siswa Per-angkatan</h4>
                            <div id="morris-bar-example" style="height: 280px;"></div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="header-title mt-0">Nilai Ujian Nasional</h4>
                            <div id="morris-line-example" style="height: 280px;"></div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-3.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5">Chadengle</h5>
                                    <p class="text-muted m-b-5 font-13">aldytamara@gmail.com</p>
                                    <small class="text-warning"><b>Admin</b></small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-2.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5"> Michael Zenaty</h5>
                                    <p class="text-muted m-b-5 font-13">aldytamara@gmail.com</p>
                                    <small class="text-custom"><b>Support Lead</b></small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-1.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5">Stillnotdavid</h5>
                                    <p class="text-muted m-b-5 font-13">aldytamara@gmail.com</p>
                                    <small class="text-success"><b>Designer</b></small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box widget-user">
                            <div>
                                <img src="assets/images/users/avatar-10.jpg" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5">Tomaslau</h5>
                                    <p class="text-muted m-b-5 font-13">aldytamara@gmail.com</p>
                                    <small class="text-info"><b>Developer</b></small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 m-b-30">Inbox</h4>

                            <div class="inbox-widget nicescroll" style="height: 315px;">
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Chadengle</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">13:40 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-8">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 m-b-30">Daftar Siswa</h4>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>FOTO</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>GENDER</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($siswa as $u){ ?>
                                    <tr>
                                        <td><img class="rounded" width="50px" height="50px" src="<?php echo base_url('uploads/'. $u->foto); ?>"></td>
                                        <td><?php echo $u->nim ?></td>
                                        <td><?php echo $u->nama ?></td>
                                        <td><?php echo $u->gender ?></td>
                                        <td><?php echo $u->tanggal_lahir ?></td>
                                        <td><?php echo $u->tempat_lahir ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- end container -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->
