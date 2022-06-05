<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col">
                    <h3 class="mb-30 text-center"><?= $sub_title ?></h3>
                    <hr class="w-25">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?= base_url('assets/img/users/'.$profile->image) ?>" alt="Pas Foto" class="card-img-top" id="imgProfile">
                                <div class="card-body">
                                    <h4 class="card-title text-center"><?= $profile->fullname ?></h4>
                                    <div class="nav flex-column nav-pills mt-3">
                                        <a href="#main" class="nav-link active" data-toggle="pill" role="tab">Informasi Utama</a>
                                        <a href="#major" class="nav-link" data-toggle="pill" role="tab">Jurusan</a>
                                        <a href="#files" class="nav-link" data-toggle="pill" role="tab">Berkas</a>
                                        <a href="<?= base_url('logout') ?>" class="nav-link">Keluar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card mt-3 mt-md-0">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="main" role="tabpanel">
                                            <h3 class="text-center">Informasi Utama</h3>
                                            <hr class="w-25">

                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a href="#student" class="nav-link active" data-toggle="tab">Data Diri</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#live" class="nav-link" data-toggle="tab">Tempat Tinggal</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#health" class="nav-link" data-toggle="tab">Kesehatan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#education" class="nav-link" data-toggle="tab">Pendidikan Sebelumnya</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#parents" class="nav-link" data-toggle="tab">Orang Tua / Wali</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#hobby" class="nav-link" data-toggle="tab">Kegemaran / Hobi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#scholarship" class="nav-link" data-toggle="tab">Beasiswa</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane container active" id="student">
                                                    <table class="table my-5">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $profile->fullname ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <b>Nama Panggilan</b>
                                                                    <br>
                                                                    <span><?= $biodata->nickname ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Nomor HP</b>
                                                                    <br>
                                                                    <span><?= $profile->phone ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <b>Alamat Email</b>
                                                                    <br>
                                                                    <span><?= $profile->email ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Jenis Kelamin</b>
                                                                    <br>
                                                                    <span><?= $biodata->gender === '1' ? 'Laki-laki' : 'Perempuan' ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $biodata->place_birth ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($biodata->date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($biodata->religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($biodata->religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($biodata->religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($biodata->religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($biodata->religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $biodata->citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Anak Ke</b>
                                                                    <br>
                                                                    <span><?= $biodata->order_family ?> dari <?= $biodata->siblings ?> bersaudara</span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Jumlah Saudara Tiri</b>
                                                                    <br>
                                                                    <span><?= $biodata->stepbrosis ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Jumlah Saudara Angkat</b>
                                                                    <br>
                                                                    <span><?= $biodata->step_sibling ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Anak Yatim/Piatu/Yatim Piatu</b>
                                                                    <br>
                                                                    <span><?= $biodata->orphans === '1' ? 'Ya' : 'Tidak' ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Bahasa Sehari-hari</b>
                                                                    <br>
                                                                    <span><?= $biodata->language ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="live">
                                                    <table class="table my-5">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $biodata->tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tinggal Dengan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->live_with === '1') {
                                                                                echo 'Orang Tua';
                                                                            } elseif($biodata->live_with === '2') {
                                                                                echo 'Wali';
                                                                            } elseif($biodata->live_with === '3') {
                                                                                echo 'Saudara';
                                                                            } elseif($biodata->live_with === '4') {
                                                                                echo 'Asrama';
                                                                            } elseif($biodata->live_with === '5') {
                                                                                echo 'Kost';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <b>Jarak dari Tempat Tinggal ke Sekolah</b>
                                                                    <br>
                                                                    <span><?= $biodata->distance ?> km</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="health">
                                                    <table class="table my-5">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <b>Golongan Darah</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->blood_group === '1') {
                                                                                echo 'A';
                                                                            } elseif($biodata->blood_group === '2') {
                                                                                echo 'B';
                                                                            } elseif($biodata->blood_group === '3') {
                                                                                echo 'AB';
                                                                            } elseif($biodata->blood_group === '4') {
                                                                                echo 'O';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Penyakit yang Pernah Diderita</b>
                                                                    <br>
                                                                    <span><?= $biodata->disease ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelainan Jasmani</b>
                                                                    <br>
                                                                    <span><?= $biodata->physical_disorder ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tinggi Badan</b>
                                                                    <br>
                                                                    <span><?= $biodata->height ?> Cm</span>
                                                                </td>
                                                                <td>
                                                                    <b>Berat Badan</b>
                                                                    <br>
                                                                    <span><?= $biodata->weight ?> Kg</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="education">
                                                    <table class="table my-5">
                                                        <tbody>
                                                            <?php if($biodata->graduate_from !== '') { ?>
                                                            <tr>
                                                                <td>
                                                                    <b>Lulusan Dari</b>
                                                                    <br>
                                                                    <span><?= $biodata->graduate_from ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tanggal STTB</b>
                                                                    <br>
                                                                    <span><?= $biodata->sttb_date ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Nomor STTB</b>
                                                                    <br>
                                                                    <span><?= $biodata->sttb_number ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Lama Belajar</b>
                                                                    <br>
                                                                    <span><?= $biodata->long_study ?> Tahun</span>
                                                                </td>
                                                            </tr>
                                                            <?php } else { ?>
                                                            <tr>
                                                                <td>
                                                                    <b>Dari Sekolah</b>
                                                                    <br>
                                                                    <span><?= $biodata->from_school ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Alasan Pindah</b>
                                                                    <br>
                                                                    <span><?= $biodata->reason ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="parents">
                                                    <h4 class="text-center mt-5">Keterangan Ayah Kandung</h4>

                                                    <table class="table my-5">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_name ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_place_birth ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($biodata->father_date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->father_religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($biodata->father_religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($biodata->father_religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($biodata->father_religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($biodata->father_religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($biodata->father_religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Pendidikan Terakhir</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_education ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Pekerjaan</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_job ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Penghasilan per Bulan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->father_income === '1') {
                                                                                echo 'Rp. 0 - Rp. 1.000.000';
                                                                            } elseif($biodata->father_income === '2') {
                                                                                echo 'Rp. 1.000.001 - Rp. 3.000.000';
                                                                            } elseif($biodata->father_income === '3') {
                                                                                echo 'Rp. 3.000.001 - Rp. 5.000.000';
                                                                            } elseif($biodata->father_income === '4') {
                                                                                echo 'Rp. 5.000.001 - Rp. 8.000.000';
                                                                            } elseif($biodata->father_income === '5') {
                                                                                echo 'Lebih dari Rp. 8.000.000';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Status</b>
                                                                    <br>
                                                                    <span><?= $biodata->father_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h4 class="text-center mt-5">Keterangan Ibu Kandung</h4>

                                                    <table class="table my-5">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_name ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_place_birth ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($biodata->mother_date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->mother_religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($biodata->mother_religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($biodata->mother_religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($biodata->mother_religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($biodata->mother_religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($biodata->mother_religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Pendidikan Terakhir</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_education ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Pekerjaan</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_job ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Penghasilan per Bulan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->mother_income === '1') {
                                                                                echo 'Rp. 0 - Rp. 1.000.000';
                                                                            } elseif($biodata->mother_income === '2') {
                                                                                echo 'Rp. 1.000.001 - Rp. 3.000.000';
                                                                            } elseif($biodata->mother_income === '3') {
                                                                                echo 'Rp. 3.000.001 - Rp. 5.000.000';
                                                                            } elseif($biodata->mother_income === '4') {
                                                                                echo 'Rp. 5.000.001 - Rp. 8.000.000';
                                                                            } elseif($biodata->mother_income === '5') {
                                                                                echo 'Lebih dari Rp. 8.000.000';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Status</b>
                                                                    <br>
                                                                    <span><?= $biodata->mother_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    <?php if($biodata->live_with === '2') { ?>
                                                    <h4 class="text-center mt-5">Keterangan Wali</h4>

                                                    <table class="table my-5">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_name ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_place_birth ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($biodata->proxy_date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->proxy_religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($biodata->proxy_religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($biodata->proxy_religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($biodata->proxy_religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($biodata->proxy_religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($biodata->proxy_religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Pendidikan Terakhir</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_education ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Pekerjaan</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_job ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Penghasilan per Bulan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($biodata->proxy_income === '1') {
                                                                                echo 'Rp. 0 - Rp. 1.000.000';
                                                                            } elseif($biodata->proxy_income === '2') {
                                                                                echo 'Rp. 1.000.001 - Rp. 3.000.000';
                                                                            } elseif($biodata->proxy_income === '3') {
                                                                                echo 'Rp. 3.000.001 - Rp. 5.000.000';
                                                                            } elseif($biodata->proxy_income === '4') {
                                                                                echo 'Rp. 5.000.001 - Rp. 8.000.000';
                                                                            } elseif($biodata->proxy_income === '5') {
                                                                                echo 'Lebih dari Rp. 8.000.000';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>Status</b>
                                                                    <br>
                                                                    <span><?= $biodata->proxy_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <?php } ?>
                                                </div>
                                                <div class="tab-pane container fade" id="hobby">
                                                    <table class="table my-5">
                                                        <tr>
                                                            <td>
                                                                <b>Kesenian</b>
                                                                <br>
                                                                <span><?= $biodata->art_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Olahraga</b>
                                                                <br>
                                                                <span><?= $biodata->sport_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Kemasyarakatan / Organisasi</b>
                                                                <br>
                                                                <span><?= $biodata->org_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Lain-lain</b>
                                                                <br>
                                                                <span><?= $biodata->other_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="scholarship">
                                                    <table class="table my-5">
                                                        <tbody>
                                                            <?php if($biodata->scholarship_year_1 !== '0000') { ?>
                                                            <tr>
                                                                <td>
                                                                    <b>Tahun</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_year_1 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelas</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_class_1 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Dari</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_from_1 ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                            <?php if($biodata->scholarship_year_2 !== '0000') { ?>
                                                            <tr>
                                                                <td>
                                                                    <b>Tahun</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_year_2 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelas</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_class_2 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Dari</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_from_2 ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                            <?php if($biodata->scholarship_year_3 !== '0000') { ?>
                                                            <tr>
                                                                <td>
                                                                    <b>Tahun</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_year_3 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelas</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_class_3 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Dari</b>
                                                                    <br>
                                                                    <span><?= $biodata->scholarship_from_3 ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <span>
                                                Saya menyatakan bahwa semua isian di atas adalah <b>benar</b>, dan apabila di kemudian hari terdapat kesalahan informasi dapat menyebabkan <b>diskualifikasi/dikeluarkan</b>.
                                            </span>
                                        </div>
                                        <div class="tab-pane fade" id="major">
                                            <h3 class="text-center">Jurusan</h3>
                                            <hr class="w-25">

                                            <table class="table my-5">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <b>Jurusan</b>
                                                            <br>
                                                            <span><?= $major->name ?></span>
                                                        </td>
                                                        <td>
                                                            <b>Alasan Memilih Jurusan</b>
                                                            <br>
                                                            <span><?= $major->reason ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="files">
                                            <h3 class="text-center">Berkas</h3>
                                            <hr class="w-25">

                                            <div class="alert alert-info">
                                                <h3><i class="fas fa-info-circle"></i> Informasi</h3>

                                                <ol>
                                                    <li>Semua berkas kecuali <b>Pas Foto</b> diunggah dalam format <b>PDF</b>.</li>
                                                    <li>Maksimal ukuran masing-masing file adalah <b>500 KB</b>.</li>
                                                    <li><b>Pas Foto</b> diunggah dengan ukuran <b>4x6</b> (472 x 709 px) dalam format <b>PNG</b>/<b>JPG</b>/<b>JPEG</b> dengan background <b>berwarna merah</b>.</li>
                                                    <li>Pastikan file yang diunggah dapat <b>dibaca dengan jelas</b> dan <b>tidak ada bagian yang tertutup</b>.</li>
                                                </ol>
                                            </div>

                                            <table class="table mt-5">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Berkas</th>
                                                        <th>File</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>Ijazah</b></td>
                                                        <td id="td-certif">
                                                            <?php
                                                                if($file->certificate !== '') {
                                                            ?>
                                                            <a href="<?= base_url('assets/files/certificate/'.$file->certificate) ?>" title="Lihat Ijazah" target="_blank"><?= base_url('assets/files/certificate/'.$file->certificate) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <form method="post" id="form_certif" enctype="multipart/form-data" style="display:none">
                                                                <?= csrf_field() ?>

                                                                <input type="file" name="certificate" id="certificate" accept=".pdf">
                                                            </form>
                                                            <div class="text-danger small font-weight-bold" id="invalidCertif"></div>
                                                            <button class="btn btn-warning w-100 text-white" id="btnCertif" type="button"><i class="fas fa-edit"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Surat Keterangan Hasil Ujian (SKHU)</b></td>
                                                        <td id="td-skhu">
                                                            <?php
                                                                if($file->skhu !== '') {
                                                            ?>
                                                            <a href="<?= base_url('assets/files/skhu/'.$file->skhu) ?>" title="Lihat SKHU" target="_blank"><?= base_url('assets/files/skhu/'.$file->skhu) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <form method="post" id="form_skhu" enctype="multipart/form-data" style="display:none">
                                                                <?= csrf_field() ?>

                                                                <input type="file" name="skhu" id="skhu" accept=".pdf">
                                                            </form>
                                                            <div class="text-danger small font-weight-bold" id="invalidSkhu"></div>
                                                            <button class="btn btn-warning w-100 text-white" id="btnSkhu" type="button"><i class="fas fa-edit"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Kartu Keluarga (KK)</b></td>
                                                        <td id="td-kk">
                                                            <?php
                                                                if($file->family_card !== '') {
                                                            ?>
                                                            <a href="<?= base_url('assets/files/family_card/'.$file->family_card) ?>" title="Lihat Kartu Keluarga" target="_blank"><?= base_url('assets/files/family_card/'.$file->family_card) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <form method="post" id="form_family_card" enctype="multipart/form-data" style="display:none">
                                                                <?= csrf_field() ?>

                                                                <input type="file" name="family_card" id="family_card" accept=".pdf">
                                                            </form>
                                                            <div class="text-danger small font-weight-bold" id="invalidFamily"></div>
                                                            <button class="btn btn-warning w-100 text-white" id="btnFamily" type="button"><i class="fas fa-edit"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Pas Foto (4x6)</b></td>
                                                        <td id="td-image">
                                                            <?php
                                                                if($profile->image !== 'avatar-1.png') {
                                                            ?>
                                                            <a href="<?= base_url('assets/img/users/'.$profile->image) ?>" title="Lihat Pas Foto" target="_blank"><?= base_url('assets/img/users/'.$profile->image) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <form method="post" id="form_image" enctype="multipart/form-data" style="display:none">
                                                                <?= csrf_field() ?>

                                                                <input type="file" name="image" id="image" accept=".png,.jpeg,.jpg">
                                                            </form>
                                                            <div class="text-danger small font-weight-bold" id="invalidImage"></div>
                                                            <button class="btn btn-warning w-100 text-white" id="btnImage" type="button"><i class="fas fa-edit"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
<?= $this->endSection() ?>