<body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="index.php">Seaworth</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item">
                                <div id="custom-search" class="top-search-bar">
                                    <input class="form-control" type="text" placeholder="Search..">
                                </div>
                            </li>
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/icon.png"  alt="Seaworth-Img" height="100" width="100"  class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['user_name'];?></h5>
                                    </div>
                                    <a class="dropdown-item" href="../admin/pages/login.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>
<!--                                <li class="nav-item ">-->
<!--                                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>-->
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="index.php?req=dashboard" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Dash</a>-->
<!--                                                <div id="submenu-1-2" class="collapse submenu" style="">-->
<!--                                                    <ul class="nav flex-column">-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="index.html">E Commerce Dashboard</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="ecommerce-product.html">Product List</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="index.php?req=dashboard">Dashboard</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="dashboard-sales.html">Sales</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>-->
<!--                                                <div id="submenu-1-1" class="collapse submenu" style="">-->
<!--                                                    <ul class="nav flex-column">-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="dashboard-influencer.html">Influencer</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>-->
<!--                                                        </li>-->
<!--                                                        <li class="nav-item">-->
<!--                                                            <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </li>-->
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>ADD Products</a>
                                    <div id="submenu-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php?req=addProduct">ADD Product Page <span class="badge badge-secondary">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php?req=addcategories">Add Categories</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php?req=view">viewProducts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/typography.html">Typography</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                    <div id="submenu-3" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="index.php?req=viewProducts">ViewProducts</a>-->
<!--                                            </li>-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- <li class="nav-item ">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                    <div id="submenu-4" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                    <div id="submenu-5" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
<!--                                <li class="nav-divider">-->
<!--                                    Features-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>-->
<!--                                    <div id="submenu-6" class="collapse submenu" style="">-->
<!--                                        <ul class="nav flex-column">-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/blank-page.html">Blank Page</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/login.html">Login</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/404-page.html">404 page</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/timeline.html">Timeline</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/calendar.html">Calendar</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/widgets.html">Widgets</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/media-object.html">Media Objects</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/cropper-image.html">Cropper</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="pages/color-picker.html">Color Picker</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>MailBox <span class="badge badge-secondary">New</span></a>
                                    <div id="submenu-7" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                               
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
           