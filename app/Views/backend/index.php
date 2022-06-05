<?= $this->extend('backend/layout/template') ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dasbor</h1>
        </div>

        <div class="row mb-2">
            <div class="col-md-2 col-3">
                Data Inti Website
            </div>
            <div class="col-md-10 col-9 pl-0">
                <hr style="margin-top:10px;">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-calendar text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Tahun Ajaran</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="mt-2"><?= $year->school_year ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fa fa-users text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Akun Terdaftar</h4>
                        </div>
                        <div class="card-body">
                            <?= count($users) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fa fa-network-wired text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Teknik Komputer Jaringan</h4>
                        </div>
                        <div class="card-body">
                            <?= count($tkj) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fa fa-file text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Administrasi Perkantoran</h4>
                        </div>
                        <div class="card-body">
                        <?= count($ap) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fa fa-shopping-cart text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Marketing Penjualan</h4>
                        </div>
                        <div class="card-body">
                        <?= count($mp) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters mb-2 mt-3">
            <div class="col-md-2 d-none d-md-block">
                Daftar Akun Terbaru
            </div>
            <div class="col-md-10 pl-0 d-none d-md-block">
                <hr style="margin-top:11px;">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 id="users_latest"><i class="fas fa-users"></i> Akun Terbaru</h4>
                        <a href="<?= base_url('admin/dashboard/accounts') ?>" class="btn bg-primary text-white py-1" id="btn_more"><i class="fas fa-arrow-right circle-icon"></i> &nbsp;Selengkapnya</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="border p-2 p-md-3" style="border-radius:5px">
                            <table id="example" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Lulusan Dari / Asal Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($latest as $l) { ?>
                                    <tr>
                                        <td><?= $l->fullname ?></td>
                                        <td><?= $l->place_birth.", ".date('d/m/Y',strtotime($l->date_birth)) ?></td>
                                        <td><?= $l->graduate_from !== '' ? $l->graduate_from : $l->from_school ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>