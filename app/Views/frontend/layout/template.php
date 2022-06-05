<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> &mdash; Pendaftaran SMKS Widya Nusantara</title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fullcalendar/main.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/tempusdominus-bootstrap-4.css'); ?>">
</head>
<body>
    <a id="button"></a>

    <header class="main_menu <?= ($title == 'Beranda') ? 'home_menu' : 'single_page_menu' ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="<?= base_url('/') ?>" class="navbar-brand logo_1" title="Beranda"><img src="<?= base_url('assets/img/logo.png') ?>" alt="logo"></a>
                        <a href="<?= base_url('/') ?>" class="navbar-brand logo_2" title="Beranda">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo">
                            <h3 class="ml-3">SMKS Widya Nusantara</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end mt-2" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a href="<?= base_url('/') ?>" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">Profil</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a href="<?= base_url('profile/headmaster_welcome') ?>" class="dropdown-item">Sambutan Kepala Sekolah</a>
                                        <a href="<?= base_url('profile/school_history') ?>" class="dropdown-item">Sejarah Sekolah</a>
                                        <a href="<?= base_url('profile/vision_mission_objective') ?>" class="dropdown-item">Visi, Misi dan Tujuan</a>
                                        <a href="<?= base_url('profile/teachers') ?>" class="dropdown-item">Daftar Guru</a>
                                        <a href="<?= base_url('profile/homeroom_teacher') ?>" class="dropdown-item">Wali Kelas</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">Jurusan</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach($majors as $m) { ?>
                                            <a href="<?= base_url('major/'.$m->slug) ?>" class="dropdown-item"><?= $m->name ?></a>
                                        <?php } ?>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">Pendaftaran Siswa Baru</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a href="<?= base_url('registration/schedule') ?>" class="dropdown-item">Jadwal Pendaftaran</a>
                                        <a href="<?= base_url('registration/requirement') ?>" class="dropdown-item">Syarat Pendaftaran</a>
                                        <a href="<?= base_url('registration/procedure') ?>" class="dropdown-item">Prosedur Pendaftaran</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('contact_us') ?>" class="nav-link">Kontak Kami</a>
                                </li>
                                <?php if(logged_in()) { ?>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">Akun</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php if(in_groups('admin')) { ?>
                                        <a href="<?= base_url('admin/dashboard') ?>" class="dropdown-item">Dasbor</a>
                                        <?php
                                            } else {
                                                if(isset($biodata) AND isset($file) AND isset($major)) {
                                                    if($file->certificate !== "" AND $file->skhu !== "" AND $file->family_card !== "" AND $profile->image !== "avatar-1.png") {
                                        ?>
                                        <a href="<?= base_url('student/'.url_title($profile->fullname, '-', true)) ?>" class="dropdown-item">Profil</a>
                                        <?php
                                                    } else {
                                        ?>
                                        <a href="<?= base_url('registration/file') ?>" class="dropdown-item">Upload File</a>
                                        <?php
                                                    }
                                                } else {
                                                    if(!$biodata) {
                                        ?>
                                        <a href="<?= base_url('registration/basic') ?>" class="dropdown-item">Isi Biodata</a>
                                        <?php
                                                    } else {
                                                        if($major) {
                                                            if(isset($file)) {
                                                                if($file->certificate === "" OR $file->skhu === "" OR $file->family_card === "" OR $profile->image === "avatar-1.png") {
                                        ?>
                                        <a href="<?= base_url('registration/file') ?>" class="dropdown-item">Upload File</a>
                                        <?php
                                                                }
                                                            } else {
                                        ?>
                                        <a href="<?= base_url('registration/file') ?>" class="dropdown-item">Upload File</a>
                                        <?php
                                                            }
                                                        } else {
                                        ?>
                                        <a href="<?= base_url('registration/major') ?>" class="dropdown-item">Pilih Jurusan</a>
                                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        ?>
                                        
                                        <a href="<?= base_url('logout') ?>" class="dropdown-item">Keluar</a>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php if($title !== 'Beranda') { ?>
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2><?= $sub_title ?></h2>
                            <p><a href="<?= base_url('/') ?>">Beranda</a><span>/</span><a href="#"><?= $title ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?= $this->renderSection('content'); ?>

    <?php if($title !== 'Register' AND $title !== 'Beranda' AND $title !== 'Pendaftaran Siswa Baru' AND $title !== 'Profil') { ?>
    <div class="bg-info py-4">
        <h1 class="text-center text-white">Mendaftar jadi Siswa Baru?</h1>
        <div class="d-flex justify-content-center">
            <a href="<?= base_url('register') ?>" class="genric-btn primary btn-see mt-4">Daftar Sekarang</a>
        </div>
    </div>
    <?php } ?>

    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo"></a>
                        <p><?= $about->about ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> <?= $contact->address ?></p>
                            <p><span> Phone :</span> <?= $contact->phone ?></p>
                            <p><span> Email :</span> <a href="<?= 'mailto:'.$contact->email ?>"><?= $contact->email ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    Copyright &copy; 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/js/jquery-1.12.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/masonry.pkgd.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
    <script src="<?= base_url('assets/js/moment-with-locales.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/tempusdominus-bootstrap-4.js'); ?>"></script>
    <script src="<?= base_url(); ?>/assets/js/fullcalendar/main.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/fullcalendar/locales-all.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>
    <?php if($title == 'Jadwal Pendaftaran'){echo view('scripts/schedule.php'); } ?>
    <?php if($sub_title == 'Informasi Utama'){echo view('scripts/basic.php'); } ?>
    <?php if($sub_title == 'Unggah Berkas'){echo view('scripts/file.php'); } ?>
    <?php if($title == 'Profil'){echo view('scripts/profile.php'); } ?>
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });
    </script>
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