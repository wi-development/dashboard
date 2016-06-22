<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="{{config('wi.dashboard.theme_path')}}/img/logo.png" alt="Nifty Logo" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text">Nifty</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="pli-view-list"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->



                <!--Notification dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="pli-bell"></i>
                        <span class="badge badge-header badge-danger"></span>
                    </a>

                    <!--Notification dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-md">
                        <div class="pad-all bord-btm">
                            <p class="text-lg text-semibold mar-no">You have 9 notifications.</p>
                        </div>
                        <div class="nano scrollable">
                            <div class="nano-content">
                                <ul class="head-list">

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <p class="pull-left">Database Repair</p>
                                                <p class="pull-right">70%</p>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div style="width: 70%;" class="progress-bar">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <p class="pull-left">Upgrade Progress</p>
                                                <p class="pull-right">10%</p>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                    <span class="sr-only">10% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a class="media" href="#">
                                            <span class="badge badge-success pull-right">90%</span>
                                            <div class="media-left">
                                                <i class="pli-data-settings icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">HDD is full</div>
                                                <small class="text-muted">50 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <i class="pli-file-edit icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Write a news article</div>
                                                <small class="text-muted">Last Update 8 hours ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a class="media" href="#">
                                            <span class="label label-danger pull-right">New</span>
                                            <div class="media-left">
                                                <i class="pli-speech-bubble-7 icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Comment Sorting</div>
                                                <small class="text-muted">Last Update 8 hours ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <i class="pli-add-user-plus-star icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">New User Registered</div>
                                                <small class="text-muted">4 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <?php/*
                                                print message_dropdown("av4.png", "Lucy", "30 minutes ago");
                                                print message_dropdown("av3.png", "Jackson", "40 minutes ago");
                                                print notification_dropdown('icon-circle bg-danger', 'fa-hdd-o', 'HDD is full', '50 minutes ago', 'badge badge-success', '90%');
                                                print notification_dropdown('bg-info', 'fa-file-word-o', 'Write a news article', 'Last Update 8 hours ago');
                                                print notification_dropdown('bg-purple', 'fa-comment', 'Comment Sorting', 'Last Update 8 hours ago', 'label label-danger', 'New');
                                                print notification_dropdown('bg-success', 'fa-user', 'New User Registered', '4 minutes ago');
                                                print message_dropdown("av3.png", "Jackson", "Yesterday");
                                            */?>
                                            <!-- Dropdown list-->
                                    <li class="bg-gray">
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <img class="img-circle img-sm" alt="Profile Picture" src="{{config('wi.dashboard.theme_path')}}/img/av4.png">
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Lucy sent you a message</div>
                                                <small class="text-muted">30 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Dropdown list-->
                                    <li class="bg-gray">
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <img class="img-circle img-sm" alt="Profile Picture" src="{{config('wi.dashboard.theme_path')}}/img/av3.png">
                                            </div>
                                            <div class="media-body">
                                                <div class="text-nowrap">Jackson sent you a message</div>
                                                <small class="text-muted">40 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Dropdown footer-->
                        <div class="pad-all bord-top">
                            <a href="#" class="btn-link text-dark box-block">
                                <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End notifications dropdown-->



                <!--Mega dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="mega-dropdown">
                    <a href="#" class="mega-dropdown-toggle">
                        <i class="pli-layout-grid"></i>
                    </a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="clearfix">
                            <div class="col-sm-12 col-md-3">

                                <!--Mega menu widget-->
                                <div class="text-center bg-purple pad-all">
                                    <h3 class="text-thin mar-no">Weekend shopping</h3>
                                    <div class="pad-ver box-inline">
                                                <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                                                    <i class="psi-car-coins fa-4x"></i>
                                                </span>
                                    </div>
                                    <p class="pad-btm">
                                        Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                    </p>
                                    <a href="#" class="btn btn-purple">Learn More...</a>
                                </div>

                            </div>
                            <div class="col-sm-4 col-md-3">

                                <!--Mega menu list-->
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Pages</li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Search Result</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Sreen Lock</a></li>
                                    <li><a href="#" class="disabled">Disabled</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Icons</li>
                                    <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
                                    <li><a href="#">Skycons</a></li>
                                </ul>

                            </div>
                            <div class="col-sm-4 col-md-3">

                                <!--Mega menu list-->
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Mailbox</li>
                                    <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                    <li><a href="#">Read Message</a></li>
                                    <li><a href="#">Compose</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Featured</li>
                                    <li><a href="#">Smart navigation</a></li>
                                    <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
                                    <li><a href="#">Lot of themes</a></li>
                                    <li><a href="#">Transition effects</a></li>
                                </ul>

                            </div>
                            <div class="col-sm-4 col-md-3">

                                <!--Mega menu list-->
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Components</li>
                                    <li><a href="#">Tables</a></li>
                                    <li><a href="#">Charts</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <form role="form" class="form">
                                            <div class="form-group">
                                                <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                            </div>
                                            <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End mega dropdown-->

            </ul>
            <ul class="nav navbar-top-links pull-right">

                <!--Language selector-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">
                    <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="{{config('wi.dashboard.theme_path')}}/img/flags/united-kingdom.png" alt="English">
                                </span>
                    </a>

                    <!--Language selector menu-->
                    <ul class="head-list dropdown-menu">
                        <li>
                            <!--English-->
                            <a href="#" class="active">
                                <img class="lang-flag" src="{{config('wi.dashboard.theme_path')}}/img/flags/united-kingdom.png" alt="English">
                                <span class="lang-id">EN</span>
                                <span class="lang-name">English</span>
                            </a>
                        </li>
                        <li>
                            <!--France-->
                            <a href="#">
                                <img class="lang-flag" src="{{config('wi.dashboard.theme_path')}}/img/flags/france.png" alt="France">
                                <span class="lang-id">FR</span>
                                <span class="lang-name">Fran&ccedil;ais</span>
                            </a>
                        </li>
                        <li>
                            <!--Germany-->
                            <a href="#">
                                <img class="lang-flag" src="{{config('wi.dashboard.theme_path')}}/img/flags/germany.png" alt="Germany">
                                <span class="lang-id">DE</span>
                                <span class="lang-name">Deutsch</span>
                            </a>
                        </li>
                        <li>
                            <!--Italy-->
                            <a href="#">
                                <img class="lang-flag" src="{{config('wi.dashboard.theme_path')}}/img/flags/italy.png" alt="Italy">
                                <span class="lang-id">IT</span>
                                <span class="lang-name">Italiano</span>
                            </a>
                        </li>
                        <li>
                            <!--Spain-->
                            <a href="#">
                                <img class="lang-flag" src="{{config('wi.dashboard.theme_path')}}/img/flags/spain.png" alt="Spain">
                                <span class="lang-id">ES</span>
                                <span class="lang-name">Espa&ntilde;ol</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End language selector-->



                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <img class="img-circle img-user media-object" src="{{config('wi.dashboard.theme_path')}}/img/av1.png" alt="Profile Picture">
                                </span>
                        <div class="username hidden-xs">{{ Auth::user()->name }}</div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                        <!-- Dropdown heading  -->
                        <div class="pad-all bord-btm">
                            <p class="text-lg text-semibold mar-btm">750Gb of 1,000Gb Used</p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" style="width: 70%;">
                                    <span class="sr-only">70%</span>
                                </div>
                            </div>
                        </div>


                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="#">
                                    <i class="pli-male icon-lg icon-fw"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="badge badge-danger pull-right">9</span>
                                    <i class="pli-mail icon-lg icon-fw"></i> Messages
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success pull-right">New</span>
                                    <i class="pli-gear icon-lg icon-fw"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="pli-information icon-lg icon-fw"></i> Help
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="pli-computer-secure icon-lg icon-fw"></i> Lock screen
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdown footer -->
                        <div class="pad-all text-right">
                            <a href="{{route('logout')}}" class="btn btn-primary">
                                <i class="pli-unlock"></i> Logout
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->

            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>