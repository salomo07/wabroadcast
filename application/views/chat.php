
<!doctype html>
<html lang="en" dir="ltr">

    <head>
                
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />
        <title>Sash – PHP Bootstrap 5 Admin & Dashboard Template</title>
        <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/dark-style.css" rel="stylesheet" />
        <link href="assets/css/transparent-style.css" rel="stylesheet">
        <link href="assets/css/skin-modes.css" rel="stylesheet" />
        <link href="assets/css/icons.css" rel="stylesheet" />
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/toastr.css">
    </head>

    <body class="app sidebar-mini ltr light-mode">
        <div id="global-loader">
            <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <div class="page">
            <div class="page-main">
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="/">
                            <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="notify-list.php">
                                                        <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">New Application received
                                                            </h5>
                                                            <span class="notification-subtext">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.php">
                                                        <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                            <i class="fe fe-check-circle"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Project has been
                                                                approved</h5>
                                                            <span class="notification-subtext">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.php">
                                                        <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                            <i class="fe fe-shopping-cart"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Your Product Delivered
                                                            </h5>
                                                            <span class="notification-subtext">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="notify-list.php">
                                                        <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                            <i class="fe fe-user-plus"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Friend Requests</h5>
                                                            <span class="notification-subtext">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="notify-list.php"
                                                    class="dropdown-item text-center p-3 text-muted">View all
                                                    Notification</a>
                                            </div>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="assets/images/users/21.jpg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo($data->username) ?></h5>
                                                        <small class="text-muted">Senior Admin</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                
                                                <a class="dropdown-item" href="auth/signout">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
                
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="dashboard">
                            <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Blast</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="blast?status=uncontacted"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Uncontacted</span></a>
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="blast?status=document"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Uncompleted Document</span></a>
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="blast?status=Promo"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Penawaran Promo</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Chat</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="chat"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">All Chats</span></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <div class="main-content app-content mt-0">
                <div class="side-app">
                <div class="main-container container-fluid">
                  <div class="container">
                    <!-- ROW-1 OPEN-->
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4" >
                            <div class="card overflow-hidden" >
                                <div class="main-content-app pt-0 main-chat-2" style="height:500px;">
                                    <div class="main-content-left main-content-left-chat">
                                        <div class="card-body d-flex">
                                            <div class="main-img-user online"><img alt="avatar" src="assets/images/users/21.jpg"></div>
                                            <div class="main-chat-msg-name">
                                                <h6>Adira Whatsapp</h6>
                                                <span class="dot-label bg-success"></span><small class="me-3">Available</small>
                                            </div>
                                            <nav class="nav ms-auto">
                                                <div class="dropdown">
                                                    <a class="nav-link text-muted fs-20" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-user me-1"></i> Profile</a>
                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-users me-1"></i> New Group</a>
                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-settings me-1"></i> Settings</a>
                                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>

                                        <!-- main-chat-header -->
                                        <div class="card-body ">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                            </div>
                                            <div class="main-chat-contacts-wrapper d-none d-sm-block">
                                                
                                                <!-- main-active-contacts -->
                                            </div>
                                        </div>
                                        <div class="tab-content main-chat-list flex-2 ">
                                            <div class="tab-pane active" id="ChatList">
                                                <div id="chatList" class="main-chat-list tab-pane">
                                                    <div class="media new" value="6281288643757">
                                                        <div class="main-img-user">
                                                            <img alt="" src="assets/images/users/6.jpg"> <span>3</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-contact-name">
                                                                <span>Ariana Monino</span> <span>30 min</span>
                                                            </div>
                                                            <p>Good Morning</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- main-chat-list -->
                                            </div>
                                        </div>
                                        <!-- main-chat-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                        <div class="card">
                            <div id="box" class="main-content-app pt-0" style="height:500px;">
                                <div id="chatarea" class="main-content-body main-content-body-chat h-100">
                                    <div class="main-chat-header pt-3 d-block d-sm-flex" >
                                        <div class="main-img-user online"><img alt="avatar" src="assets/images/users/1.png"></div>
                                        <input type="hidden" id="notelp">
                                        <input type="hidden" id="nonik" value="<?php echo $data->nik ?>">
                                        <div class="main-chat-msg-name mt-2">
                                            <h6>Sahabat Adira</h6>
                                        </div>
                                        <nav class="nav">
                                            <div class="">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ...">
                                                    <span class="input-group-text btn bg-white text-muted border-start-0"><i class="fe fe-search"></i></span>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 me-1"></i> Close Conversation</a>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="main-chat-body flex-2" id="ChatBody" style="height: 60%;">
                                        <div class="content-inner">
                                        </div>
                                    </div>
                                    <div class="main-chat-footer" style="height: 20%;">
                                        <textarea id="txtMsg" class="form-control" rows="5" placeholder="Type your message here..." type="text" style="height: 80px; margin-bottom: 5px;margin-top: 5px;"></textarea>
                                        <button id="btnSend" onclick="sendChat()" type="button" class="btn btn-icon  btn-primary brround"><i class="fa fa-paper-plane-o"></i></button>
                                        <nav class="nav">
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            </div>
    
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <div class="tab-menu-heading border-0 d-flex p-3">
                    <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i>Feeds</a></li>
                            <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a></li>
                            <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="p-3 fw-semibold ps-5">Feeds</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New user registered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New order delivered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">You have pending tasks</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New version arrived</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Server #1 overloaded</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New project launched</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 fw-semibold ps-5">Settings</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">General Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Map Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Support Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Payment Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Notification Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side2">
                            <div class="list-group list-group-flush">
                                <div class="pt-3 fw-semibold ps-5">Today</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/2.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/11.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Rose Bush</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/10.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Claude Strophobia</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/13.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Eileen Dover</div>
                                            <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/12.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Willie Findit</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/15.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Manny Jah</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/4.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/7.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Simon Sais</div>
                                            <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Laura Biding</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/2.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Ivan Notheridiya</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/14.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Dulcie Veeta</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/11.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Florinda Carasco</div>
                                            <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="assets/images/users/4.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.php">
                                            <div class="fw-semibold text-dark" >Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side3">
                            <ul class="task-list timeline-task">
                                <li class="d-sm-flex mt-4">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        </div>

        
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/sidemenu/sidemenu.js"></script>
        <script src="assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
        <script src="assets/js/typehead.js"></script>
        <script src="assets/plugins/sidebar/sidebar.js"></script>
        <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="assets/plugins/p-scroll/pscroll-1.js"></script>
        <script src="assets/js/sticky.js"></script>
        <script src="assets/plugins/gallery/picturefill.js"></script>
        <script src="assets/plugins/gallery/lightgallery.js"></script>
        <script src="assets/plugins/gallery/lightgallery-1.js"></script>
        <script src="assets/plugins/gallery/lg-pager.js"></script>
        <script src="assets/plugins/gallery/lg-autoplay.js"></script>
        <script src="assets/plugins/gallery/lg-fullscreen.js"></script>
        <script src="assets/plugins/gallery/lg-zoom.js"></script>
        <script src="assets/plugins/gallery/lg-hash.js"></script>
        <script src="assets/plugins/gallery/lg-share.js"></script>
        <script src="assets/js/chat.js"></script>
        <script src="assets/js/themeColors.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/switcher/js/switcher.js"></script>
        <script src="assets/socketio/socket.io.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha512-HaoDYc3PGduguBWOSToNc0AWGHBi2Y432Ssp3wNIdlOzrunCtB2qq6FrhtPbo+PlbvRbyi86dr5VQx61eg/daQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="assets/js/toastr.min.js"></script>
    </body>
    <div id="msgright" style="display: none;" class="media flex-row-reverse chat-right">
      <div class="main-img-user online">
        <img alt="avatar" src="assets/images/users/6.jpg">
      </div>
      <div class="media-body">
        <div class="main-msg-wrapper" style="background-color: aliceblue;"> Nulla consequat massa quis enim. Donec pede justo, fringilla vel... </div>
        <div>
          <span>9:48 am</span>
          <a href="javascript:void(0)">
            <i class="icon ion-android-more-horizontal"></i>
          </a>
        </div>
      </div>
    </div>
    <div id="msgleft" style="display: none;" class="media chat-left">
        <div class="main-img-user online">
            <img alt="avatar" src="assets/images/users/1.png">
        </div>
        <div class="media-body">
            <div class="main-msg-wrapper" style="background-color: gray"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </div>
            <div>
              <span>9:32 am</span>
              <a href="javascript:void(0)">
                <i class="icon ion-android-more-horizontal"></i>
              </a>
            </div>
        </div>
    </div>
</html>

<script type="text/javascript">
    var socket = io("ws://<?php echo $_ENV['BASEURL_SOCKETIO'] ?>");
    socket.on("connect_error", (err) => {
        console.log(`connect_error due to ${err.message}`);
        toastr.error("Fail to connect socketio, check your connection",'Offline');
    });
    socket.on('reconnect', ()=>{
        toastr.success("Successfully reconnect",'Online');
    });

    var cleanChat=(ele)=>{
        $('#notelp').val($(ele).attr('value'));
        $('#chatarea').find('.main-chat-msg-name').find('h6').text($(ele).find('.media-contact-name').find('span').eq(0).text())
        $('#chatarea').find('.content-inner').html('<center>Loading...<center>');
        $('.main-content-body').show();   
        getDetailChat($(ele).attr('value'));
        $(".media.new").css('background-color','white');
        $(ele).css('background-color','aliceblue');
        $(ele).find('.main-img-user > span').text(0);
        $(ele).find('.main-img-user > span').hide();
    }
    var sendChat=()=>{
        console.log('sending')
        var msgLeft=$('#msgleft').clone();
        $(msgLeft).find('.main-msg-wrapper').text($('#txtMsg').val());
        $(msgLeft).find('.main-msg-wrapper').next().find('span').text('sending...');
        $(msgLeft).removeAttr('id');msgLeft.show();
        $('.content-inner').append($(msgLeft).clone())
        $.ajax({
            url: "chat/saveOutboundMsg",
            dataType:"json",
            method:"POST",
            "data": JSON.stringify({"from":$('#notelp').val(),"nik":$('#nonik').val(),"text":$('#txtMsg').val()}), 
            success: function(res){
               console.log(res);
               $('.content-inner').find('.media.chat-left').last().find('.main-msg-wrapper').next().find('span').text(res.time);
               $('#txtMsg').val('');
            }
        });
    }
    var getDetailChat=(no)=>{
        var xxx=[];
        var msgRight=$('#msgright').clone();
        var msgLeft=$('#msgleft').clone();
        
        msgRight.show();
        msgLeft.show();
        $('#ChatBody').find('.content-inner').html('<center>Loading...</center>')
        $.ajax({
            url: "chat/detail?from="+no+"&nik="+<?php echo $data->nik ?>,
            dataType:"json", 
            success: function(res){
               ;
                if(res.length==0){
                    $('#chatarea').find('.content-inner').html('<center><h2>No Conversation</h2></center>');
                }
                else{
                    
                    $('#ChatBody').find('.content-inner').html('');
                    res.map((val,i)=>{

                        if(val.statusio=='Out'){
                            $(msgLeft).find('.main-msg-wrapper').text(val.text);
                            $(msgLeft).find('.main-msg-wrapper').next().find('span').text(val.time);
                            $(msgLeft).removeAttr('id');
                            xxx.push(msgLeft.clone());
                        }else if (val.statusio=='In'){
                            console.log("Data :",val);
                            $(msgRight).find('.main-msg-wrapper').text(val.text);
                            $(msgRight).find('.main-msg-wrapper').next().find('span').text(val.time);
                            $(msgRight).removeAttr('id');
                            xxx.push(msgRight.clone());
                        }
                    });
                    $('#ChatBody').find('.content-inner').html(xxx)
                }
            }
        });
    }
    const usrx=$('#chatList').find('.media.new').eq(0);
    var initChatlist=()=>{
        var list=<?= json_encode($listuser); ?>;
        $('#chatList').html('');

        var xxx=[];
        list.forEach((val,i)=>{
            console.log(val)
            var usr=usrx;
            $(usr).attr('value',val.fromnumber);
            $(usr).find('.media-contact-name').find('span').eq(0).text(val.contactname==''?'Sahabat Adira':val.contactname);
            $(usr).find('.media-contact-name').find('span').eq(1).text(val.time);
            $(usr).find('.main-img-user > span').text(val.unread);
            if(val.unread==0){
                $(usr).find('.main-img-user > span').hide();
            }
            $(usr).find('.media-body').find('p').text(val.text);
            xxx.push($(usr).clone());console.log(val)
            
            socket.on(<?= $data->nik; ?>+' - '+val.fromnumber,(msg)=>{
                console.log('Pesan masuk :',msg)
                incomingMsg(msg)
            })
        });
        $('#chatList').html(xxx);
        $('.main-content-body').hide();
    }
    var incomingMsg=(xxx)=>{
        var msgHTML=$('#msgright').show();
        $(msgHTML).find('.main-msg-wrapper').text(xxx.text);
        $(msgHTML).find('.media-body').find('span').text(xxx.time);
        $('.content-inner').append($(msgHTML).clone());
        smoothScroll.scrollTo($(''), 500);
    }
    
    $(function () {
        $(".media.new").on('click',function (){
            console.log("Loading detail chat");
            cleanChat(this)
        })
    });
    var receivingBroadcast=()=>{
        socket.on("broadcast",(msg)=>{

            if($('#chatList').find('.media.new').length==0){
                addList(msg,0);
            }else{
                var exist=$("div[value='" + msg.from + "']");
                console.log(msg,$("div[value='" + msg.from + "']").length)
                if($("div[value='" + msg.from + "']").length==1){
                    $(exist).find('.main-img-user>span').text(parseInt($(exist).find('.main-img-user>span').text())+1)
                    $(exist).find('.media-contact-name').find('span').eq(1).text(msg.time);console.log("sama : ",msg.from);
                    $(exist).find('.main-img-user > span').show();
                }
                else{
                    addList(msg,0);
                }
            }
        })
    }
    var addList=(msg,count)=>{
        var usr=usrx;
        var newMsg=count+1;
        console.log('Pesan broadcast masuk :',msg);
        $(usr).attr('value',msg.from);
        $(usr).find('.main-img-user>span').text(count+1)
        $(usr).find('.media-contact-name').find('span').eq(0).text(msg.contactname==''?'Sahabat Adira':msg.contactname);
        $(usr).find('.media-contact-name').find('span').eq(1).text(msg.time);
        $(usr).find('.media-body').find('p').text(msg.text);
        console.log('add');
        $('#chatList').append($(usr).clone());
        $('#chatList').on('click','.media.new',function(){
            cleanChat(this)
        })
    }
    initChatlist();
    receivingBroadcast();
</script>