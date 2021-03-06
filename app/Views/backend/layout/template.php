<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> &mdash; Pendaftaran SMKS Widya Nusantara</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo.png" type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/select2-bootstrap4.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/buttons.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/tempusdominus-bootstrap-4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fullcalendar/main.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/summernote-bs4.min.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components2.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
</head>
<body style="background: #e2e8f0">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg bg-primary"></div>
            <nav class="navbar navbar-expand-lg main-navbar bg-primary">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                    <img src="/assets/img/logo.png" alt="logo" width="50" style="height:auto">
                    <span class="text-white ml-3 font-weight-bold d-none d-md-block">SMKS Widya Nusantara</span>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('assets/img/admin/'.$profile->image) ?>" class="rounded-circle mr-1" id="pp-top">
                            <div class="d-sm-none d-lg-inline-block">Hai, <span id="top-fullname"><?= ucwords($profile->fullname); ?></span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= base_url('logout'); ?>" style="cursor: pointer" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= base_url('admin/dashboard') ?>">Pendaftaran</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin/dashboard') ?>" class="bg-warning text-white" style="font-size:10pt;padding:5px;border-radius:3px;">SMK</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="<?= ($title == 'Dasbor') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i> <span>Dasbor</span>
                            </a>
                        </li>
                        <li class="<?= ($title == 'Tahun Ajaran') ? 'active' : ''; ?>">
                            <a href="<?= base_url('admin/dashboard/school_year') ?>" class="nav-link">
                                <i class="fas fa-calendar"></i> <span>Tahun Ajaran</span>
                            </a>
                        </li>
                        <li class="dropdown <?= ($title == 'Sambutan Kepsek' || $title == 'Sejarah Sekolah' || $title == 'Visi, Misi dan Tujuan' || $title == 'Daftar Guru') ? 'active' : '' ?>">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-list"></i> <span>Profil</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="<?= ($title == 'Sambutan Kepsek') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/headmaster_welcome') ?>" class="nav-link"><i class="fa fa-user"></i> <span>Sambutan Kepsek</span></a>
                                </li>
                                <li class="<?= ($title == 'Sejarah Sekolah') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/school_history') ?>" class="nav-link"><i class="fa fa-school"></i> <span>Sejarah Sekolah</span></a>
                                </li>
                                <li class="<?= ($title == 'Visi, Misi dan Tujuan') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/vision_mission') ?>" class="nav-link"><i class="fa fa-chart-line"></i> <span>Visi, Misi dan Tujuan</span></a>
                                </li>
                                <li class="<?= ($title == 'Daftar Guru') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/teacher_list') ?>" class="nav-link"><i class="fa fa-users"></i> <span>Daftar Guru</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= ($title == 'Jurusan') ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/dashboard/major') ?>" class="nav-link">
                                <i class="fas fa-chalkboard"></i> <span>Jurusan <span class="badge-side bg-primary text-white"><?= count($majors) ?></span></span>
                            </a>
                        </li>
                        <li class="<?= ($title == 'Tentang Situs') ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/dashboard/about_site') ?>" class="nav-link">
                                <i class="fa fa-globe"></i> <span>Tentang Situs</span>
                            </a>
                        </li>
                        <li class="<?= ($title == 'Kontak Kami') ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/dashboard/contact') ?>" class="nav-link">
                                <i class="fa fa-phone"></i> <span>Kontak Kami</span>
                            </a>
                        </li>

                        <li class="menu-header">PENDAFTARAN</li>
                        <li class="dropdown <?= ($title == 'Jadwal Pendaftaran' || $title == 'Syarat Pendaftaran' || $title == 'Prosedur Pendaftaran') ? 'active' : '' ?>">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-info"></i> <span>Informasi Pendaftaran</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="<?= ($title == 'Jadwal Pendaftaran') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/regist_schedule') ?>" class="nav-link"><i class="fa fa-calendar"></i> <span>Jadwal Pendaftaran</span></a>
                                </li>
                                <li class="<?= ($title == 'Syarat Pendaftaran') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/regist_req') ?>" class="nav-link"><i class="fa fa-list"></i> <span>Syarat Pendaftaran</span></a>
                                </li>
                                <li class="<?= ($title == 'Prosedur Pendaftaran') ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/dashboard/regist_procedure') ?>" class="nav-link"><i class="fa fa-sort-numeric-up"></i> <span>Prosedur Pendaftaran</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $title == 'Siswa Baru' ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/dashboard/accounts') ?>" class="nav-link">
                                <i class="fa fa-users"></i> <span>Siswa Baru <span class="badge-side bg-primary text-white"><?= count($users) ?></span></span>
                            </a>
                        </li>

                        <li class="menu-header">PENGATURAN</li>
                        <li class="<?= ($title == 'Akun') ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/dashboard/account') ?>" class="nav-link">
                                <i class="fas fa-user"></i> <span>Akun</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <?= $this->renderSection('content'); ?>

            <footer class="main-footer bg-primary text-white">
                <div class="footer-left">
                    Hak Cipta &copy; 2022 <div class="bullet"></div> SMKS WIDYA NUSANTARA
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>/assets/js/popper.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>
    <script src="<?= base_url(); ?>/assets/css/select2/dist/js/select2.full.min.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url(); ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jszip.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap-switch.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/moment-with-locales.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/tempusdominus-bootstrap-4.js"></script>
    <script src="<?= base_url(); ?>/assets/js/fullcalendar/main.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/fullcalendar/locales-all.min.js"></script>
    <script src="<?= base_url('assets/js/summernote-bs4.min.js') ?>"></script>

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom2.js"></script>

    <!-- Page Specific JS File -->
    <?php if($title !== "Dasbor") { ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            
            var base_url = "<?= base_url() ?>";
            
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: [
                    {extend: 'excel', className: 'btn btn-success', text: '<i class="fas fa-file-excel"></i> Excel'}
                ]
            });
            
            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <?php } else { ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": false,
                "ordering": false,
                "info": false,
                "searching": false
            });
        });
    </script>
    <?php } ?>
    <?php if($title == 'Akun'){ ?>
    <script>
        $(".custom-file-input").on("change", function() {
            var image = document.getElementById("user_image");
            
            if(image.value.trim() !== "") {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                $("#btn-image").removeAttr("disabled");
            } else {
                $("#user_image").val("");
                $(".custom-file-label").text("Pilih File");
                $("#btn-image").attr("disabled","disabled");
            }
        });
    </script>
    <?php } ?>
    <?php if($title == 'Sambutan Kepsek' OR $title == 'Sejarah Sekolah' OR $title == 'Visi, Misi dan Tujuan' OR $title == 'Jurusan'){echo view('scripts/summernote.php'); } ?>
    <?php if($title == 'Daftar Guru'){echo view('scripts/teacher.php'); } ?>
    <?php if($title == 'Jurusan'){echo view('scripts/major.php'); } ?>
    <?php if($title == 'Jadwal Pendaftaran'){echo view('scripts/schedule_backend.php'); } ?>
    <?php if (session()->getFlashdata('success')) { ?>
    <script>
        var message = "<?= session()->getFlashdata('success'); ?>";

        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        })

        Toast.fire({
            icon: "success",
            title: message
        })
    </script>
    <?php } elseif(session()->getFlashdata('failed')) { ?>
    <script>
        var title = "<?= session()->getFlashdata('failed'); ?>";

        Swal.fire({
            icon: 'error',
            title: title,
            text: 'Cek kembali isian form...'
        });
    </script>
    <?php } ?>
</body>

</html>