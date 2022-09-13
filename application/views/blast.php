
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

		<!-- TITLE -->
		<title>WA Dashboard</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/dark-style.css" rel="stylesheet" />
		<link href="assets/css/transparent-style.css" rel="stylesheet">
		<link href="assets/css/skin-modes.css" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="assets/css/icons.css" rel="stylesheet" />

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

		<!-- INTERNAL SWITCHER CSS -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet" />
		<link href="assets/switcher/demo.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/toastr.css">
    </head>

    <body class="app sidebar-mini ltr light-mode">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- APP-HEADER -->
                
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
            </div>                <!-- /APP-HEADER -->

                <!--APP-SIDEBAR-->
                
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
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="blast?status=Uncontacted"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Uncontacted</span></a>
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="blast?status=Document"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Uncompleted Document</span></a>
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
            </div>                <!--/APP-SIDEBAR-->

                <div class="main-content app-content mt-0">
                  <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                      <div class="container">
                        <!-- ROW-1 OPEN-->
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Insert <?= $_GET['status'] ?> (via JSON)</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="example"><code><?= $sample ?></code></div>
                                        <br><br>
                                        <form method="post" action="blast/insert/?status=<?php echo $_GET['status'] ?>">
                                            <textarea class="form-control mb-4" placeholder="Masukkan data JSON disini ..." rows="5"></textarea>
                                            <input type="submit" class="btn btn-primary btn-md mb-3 pull-right" value="Save" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Blast <?= $_GET['status'] ?></h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <?php if($_GET['status']=="Uncontacted"){ ?>
                                            <div class="col-lg-4">
                                                <input class="form-control mb-4" placeholder="No WA (62.....)" type="text">
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control mb-4" placeholder="Nama Customer {{1}}" type="text">
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control mb-4" placeholder="Nama Channel {{2}}" type="text">
                                            </div>
                                            <?php } ?>
                                            <?php if($_GET['status']=="Document"){ ?>
                                            <div class="col-lg-3">
                                                <input class="form-control mb-4" placeholder="No WA (62.....)" type="text">
                                            </div>
                                            <div class="col-lg-3">
                                                <input class="form-control mb-4" placeholder="Nama Customer {{1}}" type="text">
                                            </div>
                                            <div class="col-lg-3">
                                                <input class="form-control mb-4" placeholder="Portofolio / Channel {{2}}" type="text">
                                            </div>
                                            <div class="col-lg-3">
                                                <input class="form-control mb-4" placeholder="Dokumen yang kurang {{3}}" type="text">
                                            </div>
                                            <?php } ?>
                                            <?php if($_GET['status']=="Promo"){ ?>
                                            <div class="col-lg-4">
                                                <input class="form-control mb-4" placeholder="No WA (62.....)" type="text">
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control mb-4" placeholder="Nama Customer {{1}}" type="text">
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control mb-4" placeholder="Nama promo {{2}}" type="text">
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button id="btnSaveBlast" type="button" class="btn btn-primary mb-3 pull-right">Save</button>
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <div class="row">
                                            <div class="table-responsive">
                                              <table id="tblBlast" class="table border text-nowrap text-md-nowrap table-bordered mb-0">
                                                <thead>
                                                  <tr>
                                                    <th>No</th>
                                                    <th>Customer</th>
                                                    <th>Channel</th>
                                                    <th>Dokumen</th>
                                                    <th>Status</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                  
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		                    </div>
                			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                			</div>
        </div>
      </div>
    </div>
    <!-- CONTAINER CLOSED-->
  </div>
</div>
</div>
    

            <!--SIDEBAR-RIGHT-->
            
                   
        <!--/SIDEBAR-RIGHT-->

            <!-- COUNTRY-SELECTOR MODAL-->
            
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

        
		<!-- BACK-TO-TOP -->
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
		<script src="assets/js/themeColors.js"></script>
		<script src="assets/js/custom.js"></script>
        <script src="assets/switcher/js/switcher.js"></script>
        <script src="assets/js/datatables.min.js" type="text/javascript"></script>
        <script src="assets/js/dataTables.altEditor.free.js" ></script>
        <script src="assets/js/dataTables.cellEdit.js" ></script>
        <script src="assets/socketio/socket.io.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/toastr.min.js"></script>
    </body>

</html>
<script>
    console.log('ssss')
    $('#btnSaveBlast').click(function(ele) {
        $(ele.target).prop('disabled', true);
        
        var inputs=$(ele.target).closest('.card-body').find('input');
        if((inputs.eq(0).val()==''||inputs.eq(1).val()==''||inputs.eq(2).val()=='')&& '<?php echo $_GET['status'] ?>'!='Document'){
            toastr.error('Please fill all field');
        }else if(! inputs.eq(0).val().startsWith("62")){
            toastr.error('Nomor telp harus berawal dengan "62"');
        }
        else{
            var data;
            if('<?php echo $_GET['status'] ?>'=='Uncontacted'){
                data={"no":inputs.eq(0).val(),"name":inputs.eq(1).val(),"type":'<?php echo $_GET['status'] ?>',"channel":inputs.eq(2).val()}
            }else if('<?php echo $_GET['status'] ?>'=='Document'){
                data={"no":inputs.eq(0).val(),"name":inputs.eq(1).val(),"type":'<?php echo $_GET['status'] ?>',"channel":inputs.eq(2).val(),"dokumen":inputs.eq(3).val()}
            }else{
                data={"no":inputs.eq(0).val(),"name":inputs.eq(1).val(),"type":'<?php echo $_GET['status'] ?>',"channel":inputs.eq(2).val()}
            }
            $.ajax({
                url: 'blast/insert',
                method: "POST",
                data:data,
                dataType:"JSON",
                success: function(res){
                    tblBlast.ajax.reload();
                    console.log(res,"gambar")
                    $(ele.target).prop('disabled', false);
                }
            });
        }
        // 
    })
    var socket = io("<?php echo $_ENV['BASEURL_SOCKETIO'] ?>");
    socket.on("connect_error", (err) => {
        console.log(`connect_error due to ${err.message}`);
        toastr.error("Fail to connect socketio, check your connection",'Offline');
    });
    socket.on('connect', ()=>{
        toastr.success("Successfully connect",'Online');
    });
    var tblBlast=$('#tblBlast').DataTable({
            processing: true,
            serverSide: true,
            ordering: false,
            ajax:'blast/getblast?status=<?php echo $_GET['status'] ?>'
        });;

</script>
