
<?php $this->load->view('partials/header'); ?>


        <!-- Navigation Bar-->
        <!-- belajar dr sini cara pake templatenya
        http://jeromejaglale.com/doc/php/codeigniter_template -->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<span class="logo-small"><i class="mdi mdi-radar"></i></span>-->
                            <!--<span class="logo-large"><i class="mdi mdi-radar"></i> Aldy Tamara</span>-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="<?php echo site_url()?>" class="logo">
                            <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="26" class="logo-small">
                            <img src="<?php echo base_url();?>assets/images/logosan.png" alt="" height="24" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="hide-phone">
                                <form class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-user m-r-5"></i> Profile
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-settings m-r-5"></i> Settings
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-lock m-r-5"></i> Lock screen
                                    </a>

                                    <!-- item-->
                                    <a href="<?php echo site_url('siswa/logout/'); ?>" class="dropdown-item notify-item">
                                        <i class="ti-power-off m-r-5"></i> Logout
                                    </a>

                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            
                            <!-- ini area menu dinamis -->

                            <?php  
                            $main_menu = $this->db->get_where('menu',array('is_main_menu'=>0))->result();
                            foreach($main_menu as $main) {
                                // check apakah ada sub menu ?
                                $sub_menu = $this->db->get_where('menu',array('is_main_menu'=>$main->id));
                                if($sub_menu->num_rows()>0){
                                    // tampilkan sub menu disini
                                    echo "<li class='has-submenu'>
                                    <table> 
                                        <td style='width:30px;'><a href='#'><i class='".$main->icon."'></td>
                                        <td></i> <span> ".$main->judul_menu." </span> </a></td>
                                    </table>
                                            <ul class='submenu megamenu'>
                                                <li>
                                                    <ul>";
                                                        foreach ($sub_menu->result() as $sub ) {

                                                            // batas atas sub submenu

                                                            
                                                            // batas bawah sub submenu
                                                            // echo "<li>".anchor($sub->link, "<i class='".$sub->icon."'></i>"." ".$sub->judul_menu)."</li>";
                                                            echo "<li>".anchor($sub->link, "<table>
                                                                                                <tr>
                                                                                                    <td style='width:30px;'><center><i class='".$sub->icon."'></i></center></td>
                                                                                                    <td>".$sub->judul_menu."</td>
                                                                                                </tr>
                                                                                            </table>")."</li>";
                                                        }

                                                echo "</ul>
                                                </li>
                                            </ul>
                                        </li>";
                                } else {
                                    // tampilkan main menu
                                    echo "<li>".anchor($main->link, "<i class='".$main->icon."'></i>"." ".$main->judul_menu)."</li>";
                                }
                                
                            }
                            
                            ?>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
        


        <div class="wrapper">
            
            <?php echo $contents;  ?>
            

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

        </div>
        <!-- end wrapper -->

<?php $this->load->view('partials/footer'); ?>
