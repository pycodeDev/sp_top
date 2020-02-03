<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$title?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?=base_url();?>assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icon/themify-icons/themify-icons.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icon/feather/css/feather.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/datatables/datatables.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/morris.js/css/morris.css">
    
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="<?=base_url()?>assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="<?=base_url()?>assets/images/man.svg" class="img-radius" style="border:1px solid" alt="User-Profile-Image">
                                    <span><?=$this->session->userdata('nama')?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="<?=base_url();?>login/logout">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="<?=base_url()?>assets/images/man.svg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?= $this->session->userdata("nama") ?>
                                        <!-- <i class="fa fa-caret-down"></i> -->
                                        </span>
                                    </div>
                                </div>
                                <!-- <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="<?=base_url();?>login/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="p-15 p-b-0"><!-- Tidak ada isi --></div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?=$this->uri->segments[2] == 'home' ? "active" : ""?>" >
                                    <a href="<?=base_url()?>admin/home" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Kelola</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?=$this->uri->segments[2] == 'kriteria' || $this->uri->segments[1] == 'kriteria' ? "active" : ""?>">
                                    <a href="<?=base_url()?>admin/kriteria" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-tasks"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Kriteria</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?=$this->uri->segments[2] == 'sub_kriteria' || $this->uri->segments[1] == 'sub_kriteria' ? "active" : ""?>">
                                    <a href="<?=base_url()?>admin/sub_kriteria" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-clipboard"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Sub Kriteria</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?=$this->uri->segments[2] == 'alternatif' || $this->uri->segments[1] == 'alternatif' ? "active" : ""?>">
                                    <a href="<?=base_url()?>admin/alternatif" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-list-alt"></i><b>D</b></span>
                                        <span class="pcoded-mtext">alternatif</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Perangkingan</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?=$this->uri->segments[2] == 'eksekusi' || $this->uri->segments[1] == 'eksekusi' ? "active" : ""?>">
                                    <a href="<?=base_url()?>admin/eksekusi" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-play"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Eksekusi</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Laporan</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-file"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Lap. Kriteria</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-file"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Lap. Sub Krit</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-file"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Lap. Hasil</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard Admin</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Sample page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <?php
                                            if (isset($content)) {
                                                echo $content;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (9 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="<?=base_url();?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url();?>assets/js/pcoded.min.js"></script>
    <script src="<?=base_url();?>assets/js/vertical/vertical-layout.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?=base_url();?>assets/js/script.min.js"></script>
    <!-- Datatables js -->
    <script type="text/javascript" src="<?=base_url();?>assets/datatables/datatables.min.js"></script>
    <script src="<?=base_url();?>assets/js/raphael/raphael.min.js"></script>
    <script src="<?=base_url();?>assets/js/morris.js/morris.js"></script>
    <!-- <script src="<?=base_url();?>assets/pages/chart/morris/morris-custom-chart.js"></script> -->
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();

            $(window).on("resize", function() {
                window.areaChart.redraw();
            });
            
            $("#sub_krit").click(function(){
			    var id = $("#sub").val();
                get_data(id);
                // console.log(id);
		    });
            areaChart();
        } );

        function areaChart() {
            window.areaChart = Morris.Area({
                element: 'area-example',
                data: [
                    { y: '2006', a: 100, b: 90 },
                    { y: '2007', a: 75, b: 65 },
                    { y: '2008', a: 50, b: 40 },
                    { y: '2009', a: 75, b: 65 },
                    { y: '2010', a: 50, b: 40 },
                    { y: '2011', a: 75, b: 65 },
                    { y: '2012', a: 100, b: 90 }
                ],
                xkey: 'y',
                resize: true,
                redraw: true,
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                lineColors: ['#93EBDD', '#64DDBB']
            });
            console.log(data);
        }

        function get_data(id){
            console.log(id);
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>sub_kriteria/data_sub",
            data: {id:id},
            dataType: 'json',
            success: function(data){
                    var len = data.length;
                    var no = 1;
                    var hasil =[];
                    if (len > 0) {
                        for (var i= 0; i < len; i++) {
                        
                        var row = $('<tr>' +
                                    '<td>' + no + '</td>' +
                                    '<td>' + data[i].nama_sub_kriteria + '</td>' +
                                    '<td>' + data[i].nama_kriteria + '</td>' + 
                                    '<td>' + data[i].jenis_kriteria + '</td>');
                        
                        hasil.push(row);
                        no=no+1;
                        console.log(data)
                    }
                    $('#subkrit tbody').html(hasil);

                    var id_krit = data[0].id_kriteria;
                    var a = '<a href="<?=base_url()?>sub_kriteria/act_d/'+ id +'" id="btn_tambah" class="btn btn-sm btn-danger text-white">Hapus Data</a>';
                    $('#btn_hapus').html(a);
                    $("#btn_tambah").hide();
                    $("#btn_hapus").show();
                    console.log(id_krit)
                    }else{
                        var b = '<a href="<?=base_url()?>sub_kriteria/tambah_sub_kriteria/'+ id +'" class="btn btn-sm btn-success" style="color:#fff;">Tambah Data</a>';
                        $('#subkrit tbody').html('<td colspan="5" align="center">Data Tidak Ada</td>');
                        $("#btn_hapus").hide();
                        $('#btn_tambah').html(b);
                        $("#btn_tambah").show();
                    }
            },
            error: function() {
                $('#dt tbody').html('<td colspan="5" align="center">Error</td>');
            }
            });
        }
        
    </script>
</body>

</html>
