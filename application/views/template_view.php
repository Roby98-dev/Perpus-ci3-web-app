<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | Perpustakaan</title>
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Boxicons -->
    <link href="<?= base_url() ?>assets/vendors/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href=".<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url() ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?= base_url() ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <script src="<?= base_url() ?>assets/vendors/swal/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/swal/sweetalert.css">
    <!-- Select 2 -->
    <link href="<?= base_url() ?>assets/vendors/select2/select2.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/vendors/select2/select2.min.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="bx bx-book"></i> <span>Perpustakaan</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url() ?>assets/images/upload/profile/<?= $this->db->where('USERNAME', $this->session->userdata('username'))->get('admin')->row('PHOTO') ?>" style="height: 56px; widht: 50px" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $this->db->where('USERNAME', $this->session->userdata('username'))->get('admin')->row('FULLNAME'); ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Data Master</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="<?= base_url() ?>dashboard"><i class="bx bxs-dashboard"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>anggota"><i class="bx bx-group"></i> Anggota</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>buku"><i class="bx bx-book"></i> Buku</a>
                                </li>
                                <?php if ($this->session->userdata('role') == 'superadmin') : ?>
                                    <li>
                                        <a href="<?= base_url() ?>petugas"><i class="bx bx-user"></i> Petugas</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                            <div class="menu_section">
                                <h3>Petugas</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="<?= base_url() ?>peminjaman"><i class="fa fa-arrow-up"></i> Peminjaman</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>pengembalian"><i class="fa fa-arrow-down"></i> Pengembalian</a>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('role') == 'superadmin') : ?>
                            <div class="menu_section">
                                <h3>Admin</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a href="<?= base_url() ?>transaksi"><i class="fa fa-area-chart"></i> Transaksi</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>notification"><i class="fa fa-bell"></i>Notifikasi</a>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <!-- <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div> -->
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url() ?>assets/images/upload/profile/<?= $this->db->where('USERNAME', $this->session->userdata('username'))->get('admin')->row('PHOTO') ?>" alt=""><?= $this->session->userdata('username'); ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a class="prof" id="<?= $this->db->where('USERNAME', $this->session->userdata('username'))->get('admin')->row('ID_ADMIN') ?>"><i class="bx bx-user pull-right"></i> Profile</a></li>
                                    <li><a href="<?= base_url() ?>dashboard/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                            <?php if ($this->session->userdata('role') == 'admin') : ?>
                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bell-o"></i>
                                        <?php $notifCount = $this->db->count_all('notif'); ?>
                                        <?php //if($notifCount > 0): 
                                        ?>
                                        <span class="badge bg-green"><?= $notifCount ?></span>
                                        <?php //endif; 
                                        ?>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <?php if ($notifCount > 0) : ?>
                                            <?php
                                            $getNotifList = $this->db
                                                ->join('admin', 'admin.ID_ADMIN = notif.ID_ADMIN', 'left')
                                                ->order_by('ID_NOTIF', 'DESC')->limit(3)->get('notif')->result();
                                            ?>
                                            <?php foreach ($getNotifList as $ntf) : ?>
                                                <li>
                                                    <a>
                                                        <span class="image"><img src="<?= base_url() ?>assets/images/upload/profile/<?= $ntf['PHOTO'] ?>" alt="Profile Image" /></span>
                                                        <span>
                                                            <span><?= $ntf['FULLNAME'] ?></span>
                                                            <span class="time"><?php $tgl = date_create($ntf->DT);
                                                                                echo date_format($tgl, "D, d M Y"); ?></span>
                                                        </span>
                                                        <span class="message">
                                                            <b><?= $ntf['JUDUL'] ?>.</b> <?= $ntf['ISI'] ?>
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                            <li>
                                                <div class="text-center">
                                                    <a href="<?= base_url() ?>notification/">
                                                        <strong>Lihat semua notifikasi</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php else : ?>
                                            <li>
                                                <div class="text-center">
                                                    <a>
                                                        <strong>Tidak Ada Notifkasi</strong>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                <?php
                $this->load->view($primary_view);
                ?>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Perpustakaan v0.1 | Copyright <?= date('Y'); ?> Poinsla Software
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url() ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url() ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url() ?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url() ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url() ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url() ?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url() ?>assets/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
</body>

</html>

<div id="profileModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-list-alt"></i> Profil Petugas</h4>
            </div>
            <div class="modal-body">
                <div id="contents" class="container"></div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".prof").click(function() {
            var user_id = $(this).attr("id");
            $("#profileModal").modal("show");
            $.ajax({
                url: "<?= base_url() ?>profile/detail",
                type: "POST",
                data: "id=" + user_id,
                cache: false,
                success: function(data) {
                    $('#contents').html(data);
                    $("#detailModal").modal("show");
                }
            })
        });
    });
</script>