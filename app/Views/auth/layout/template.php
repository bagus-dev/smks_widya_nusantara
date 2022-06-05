<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> &mdash; Pendaftaran SMK Bla bla bla</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo.png" type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components2.css">
</head>

<body style="background: #e2e8f0">

    <?= $this->renderSection('content'); ?>

    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>/assets/js/jquery-1.12.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/tooltip.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom2.js"></script>
    <?php if($title == "Login") { ?>
    <script>
        $("#btn-login").click(function() {
            var login = document.getElementById("login");
            var password = document.getElementById("password");

            if(login.value.length >= 1 && password.value.length >= 1) {
                $("#btn-login").html('<i class="fas fa-spinner fa-spin" id="btnload"></i> Loading...');
                $("#btn-login").attr("disabled","disabled");
                $("#form-login").submit();
            }
        });
    </script>
    <?php } ?>
</body>
</html>