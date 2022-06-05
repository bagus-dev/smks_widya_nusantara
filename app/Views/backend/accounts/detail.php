<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Siswa Baru</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4><i class="fas fa-users"></i> Siswa Baru</h4>
                    <a href="<?= base_url('admin/dashboard/accounts'); ?>" class="btn bg-warning text-white py-1"><i class="fas fa-arrow-left circle-icon text-warning"></i> &nbsp;Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <?php if($user->image === 'avatar-1.png') { ?>
                            <img src="<?= base_url().'/assets/img/users/avatar-1.png'; ?>" alt="Foto <?= $user->fullname; ?>" class="img-fluid img-thumbnail bg-primary rounded-circle">
                            <?php } else { ?>
                            <img src="<?= base_url().'/assets/img/users/'.$user->image; ?>" alt="Foto <?= $user->fullname; ?>" class="img-fluid img-thumbnail bg-primary">
                            <?php } ?>
                        </div>
                        <div class="col-md-9">
                            <h1 class="text-center text-dark"><?= $user->fullname; ?></h1>
                            <h4 class="text-center text-dark">(<?= $user->nickname; ?>)</h4>
                            <p class="text-center">
                                <?php
                                    $tgl = date("d",strtotime($user->created_at));
                                    $bln = date("m",strtotime($user->created_at));
                                    $thn = date("Y",strtotime($user->created_at));
                                    $jam = date("H:i:s",strtotime($user->created_at));

                                    if($bln === '01') {
                                        $bln = 'Januari';
                                    } elseif($bln === '02') {
                                        $bln = 'Februari';
                                    } elseif($bln === '03') {
                                        $bln = 'Maret';
                                    } elseif($bln === '04') {
                                        $bln = 'April';
                                    } elseif($bln === '05') {
                                        $bln = 'Mei';
                                    } elseif($bln === '06') {
                                        $bln = 'Juni';
                                    } elseif($bln === '07') {
                                        $bln = 'Juli';
                                    } elseif($bln === '08') {
                                        $bln = 'Agustus';
                                    } elseif($bln === '09') {
                                        $bln = 'September';
                                    } elseif($bln === '10') {
                                        $bln = 'Oktober';
                                    } elseif($bln === '11') {
                                        $bln = 'November';
                                    } elseif($bln === '12') {
                                        $bln = 'Desember';
                                    }
                                ?>
                                Terdaftar pada: <?= $tgl." ".$bln." ".$thn." - ".$jam." WIB"; ?>
                            </p>

                            <table class="table">
                                <tbody class="text-center">
                                    <tr class="border-bottom">
                                        <td class="font-weight-bold">Username</td>
                                        <td><?= $user->username; ?></td>
                                        <td class="font-weight-bold">Jurusan</td>
                                        <td><?= $user->name; ?></td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <td class="font-weight-bold">Alamat Email</td>
                                        <td><?= $user->email; ?></td>
                                        <td class="font-weight-bold">Nomor HP</td>
                                        <td><?= $user->phone; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#biodata" class="nav-link active" data-toggle="tab"><i class="fab fa-wpforms"></i> Biodata</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#major" class="nav-link" data-toggle="tab"><i class="fas fa-school"></i> Jurusan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#files" class="nav-link" data-toggle="tab"><i class="fas fa-file"></i> Berkas</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane container active" id="biodata">
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <div class="nav flex-column nav-pills">
                                                <a href="#student" class="nav-link active" data-toggle="tab">Data Diri</a>
                                                <a href="#live" class="nav-link" data-toggle="tab">Tempat Tinggal</a>
                                                <a href="#health" class="nav-link" data-toggle="tab">Kesehatan</a>
                                                <a href="#education" class="nav-link" data-toggle="tab">Pendidikan Sebelumnya</a>
                                                <a href="#parents" class="nav-link" data-toggle="tab">Orang Tua / Wali</a>
                                                <a href="#hobby" class="nav-link" data-toggle="tab">Kegemaran / Hobi</a>
                                                <a href="#scholarship" class="nav-link" data-toggle="tab">Beasiswa</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="student" role="tabpanel">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->fullname ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <b>Nama Panggilan</b>
                                                                    <br>
                                                                    <span><?= $user->nickname ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nomor HP</b>
                                                                    <br>
                                                                    <span><?= $user->phone ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <b>Alamat Email</b>
                                                                    <br>
                                                                    <span><?= $user->email ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Jenis Kelamin</b>
                                                                    <br>
                                                                    <span><?= $user->gender === '1' ? 'Laki-laki' : 'Perempuan' ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $user->place_birth ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($user->date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($user->religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($user->religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($user->religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($user->religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($user->religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $user->citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Anak Ke</b>
                                                                    <br>
                                                                    <span><?= $user->order_family ?> dari <?= $user->siblings ?> bersaudara</span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Jumlah Saudara Tiri</b>
                                                                    <br>
                                                                    <span><?= $user->stepbrosis ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Jumlah Saudara Angkat</b>
                                                                    <br>
                                                                    <span><?= $user->step_sibling ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Anak Yatim/Piatu/Yatim Piatu</b>
                                                                    <br>
                                                                    <span><?= $user->orphans === '1' ? 'Ya' : 'Tidak' ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Bahasa Sehari-hari</b>
                                                                    <br>
                                                                    <span><?= $user->language ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="live">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td colspan="2">
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->address ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $user->tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tinggal Dengan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->live_with === '1') {
                                                                                echo 'Orang Tua';
                                                                            } elseif($user->live_with === '2') {
                                                                                echo 'Wali';
                                                                            } elseif($user->live_with === '3') {
                                                                                echo 'Saudara';
                                                                            } elseif($user->live_with === '4') {
                                                                                echo 'Asrama';
                                                                            } elseif($user->live_with === '5') {
                                                                                echo 'Kost';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <b>Jarak dari Tempat Tinggal ke Sekolah</b>
                                                                    <br>
                                                                    <span><?= $user->distance ?> km</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="health">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Golongan Darah</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->blood_group === '1') {
                                                                                echo 'A';
                                                                            } elseif($user->blood_group === '2') {
                                                                                echo 'B';
                                                                            } elseif($user->blood_group === '3') {
                                                                                echo 'AB';
                                                                            } elseif($user->blood_group === '4') {
                                                                                echo 'O';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Penyakit yang Pernah Diderita</b>
                                                                    <br>
                                                                    <span><?= $user->disease ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelainan Jasmani</b>
                                                                    <br>
                                                                    <span><?= $user->physical_disorder ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tinggi Badan</b>
                                                                    <br>
                                                                    <span><?= $user->height ?> Cm</span>
                                                                </td>
                                                                <td>
                                                                    <b>Berat Badan</b>
                                                                    <br>
                                                                    <span><?= $user->weight ?> Kg</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="education">
                                                    <table class="table">
                                                        <tbody>
                                                            <?php if($user->graduate_from !== '') { ?>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Lulusan Dari</b>
                                                                    <br>
                                                                    <span><?= $user->graduate_from ?></span>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tanggal STTB</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($user->sttb_date)) ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Nomor STTB</b>
                                                                    <br>
                                                                    <span><?= $user->sttb_number ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Lama Belajar</b>
                                                                    <br>
                                                                    <span><?= $user->long_study ?> Tahun</span>
                                                                </td>
                                                            </tr>
                                                            <?php } else { ?>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Dari Sekolah</b>
                                                                    <br>
                                                                    <span><?= $user->from_school ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Alasan Pindah</b>
                                                                    <br>
                                                                    <span><?= $user->reason ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="parents">
                                                    <h4>Keterangan Ayah Kandung</h4>

                                                    <table class="table my-3">
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->father_name ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $user->father_place_birth ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($user->father_date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->father_religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($user->father_religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($user->father_religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($user->father_religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($user->father_religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($user->father_religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $user->father_citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Pendidikan Terakhir</b>
                                                                    <br>
                                                                    <span><?= $user->father_education ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Pekerjaan</b>
                                                                    <br>
                                                                    <span><?= $user->father_job ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Penghasilan per Bulan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->father_income === '1') {
                                                                                echo 'Rp. 0 - Rp. 1.000.000';
                                                                            } elseif($user->father_income === '2') {
                                                                                echo 'Rp. 1.000.001 - Rp. 3.000.000';
                                                                            } elseif($user->father_income === '3') {
                                                                                echo 'Rp. 3.000.001 - Rp. 5.000.000';
                                                                            } elseif($user->father_income === '4') {
                                                                                echo 'Rp. 5.000.001 - Rp. 8.000.000';
                                                                            } elseif($user->father_income === '5') {
                                                                                echo 'Lebih dari Rp. 8.000.000';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->father_address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $user->father_tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Status</b>
                                                                    <br>
                                                                    <span><?= $user->father_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <h4 class="mt-5">Keterangan Ibu Kandung</h4>

                                                    <table class="table my-3">
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->mother_name ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $user->mother_place_birth ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($user->mother_date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->mother_religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($user->mother_religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($user->mother_religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($user->mother_religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($user->mother_religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($user->mother_religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $user->mother_citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Pendidikan Terakhir</b>
                                                                    <br>
                                                                    <span><?= $user->mother_education ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Pekerjaan</b>
                                                                    <br>
                                                                    <span><?= $user->mother_job ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Penghasilan per Bulan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->mother_income === '1') {
                                                                                echo 'Rp. 0 - Rp. 1.000.000';
                                                                            } elseif($user->mother_income === '2') {
                                                                                echo 'Rp. 1.000.001 - Rp. 3.000.000';
                                                                            } elseif($user->mother_income === '3') {
                                                                                echo 'Rp. 3.000.001 - Rp. 5.000.000';
                                                                            } elseif($user->mother_income === '4') {
                                                                                echo 'Rp. 5.000.001 - Rp. 8.000.000';
                                                                            } elseif($user->mother_income === '5') {
                                                                                echo 'Lebih dari Rp. 8.000.000';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->mother_address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $user->mother_tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Status</b>
                                                                    <br>
                                                                    <span><?= $user->mother_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    <?php if($user->live_with === '2') { ?>
                                                    <h4 class="mt-5">Keterangan Wali</h4>

                                                    <table class="table my-3">
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nama Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_name ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tempat Lahir</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_place_birth ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Tanggal Lahir</b>
                                                                    <br>
                                                                    <span><?= date('d/m/Y',strtotime($user->proxy_date_birth)) ?></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Agama</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->proxy_religion === '1') {
                                                                                echo 'Islam';
                                                                            } elseif($user->proxy_religion === '2') {
                                                                                echo 'Kristen Protestan';
                                                                            } elseif($user->proxy_religion === '3') {
                                                                                echo 'Kristen Katolik';
                                                                            } elseif($user->proxy_religion === '4') {
                                                                                echo 'Hindu';
                                                                            } elseif($user->proxy_religion === '5') {
                                                                                echo 'Buddha';
                                                                            } elseif($user->proxy_religion === '6') {
                                                                                echo 'Khonghucu';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Kewarganegaraan</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_citizenship ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Pendidikan Terakhir</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_education ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Pekerjaan</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_job ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Penghasilan per Bulan</b>
                                                                    <br>
                                                                    <span>
                                                                        <?php
                                                                            if($user->proxy_income === '1') {
                                                                                echo 'Rp. 0 - Rp. 1.000.000';
                                                                            } elseif($user->proxy_income === '2') {
                                                                                echo 'Rp. 1.000.001 - Rp. 3.000.000';
                                                                            } elseif($user->proxy_income === '3') {
                                                                                echo 'Rp. 3.000.001 - Rp. 5.000.000';
                                                                            } elseif($user->proxy_income === '4') {
                                                                                echo 'Rp. 5.000.001 - Rp. 8.000.000';
                                                                            } elseif($user->proxy_income === '5') {
                                                                                echo 'Lebih dari Rp. 8.000.000';
                                                                            }
                                                                        ?>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Alamat Lengkap</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_address ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Nomor Telepon</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_tel ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Status</b>
                                                                    <br>
                                                                    <span><?= $user->proxy_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></span>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <?php } ?>
                                                </div>
                                                <div class="tab-pane container fade" id="hobby">
                                                    <table class="table">
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <b>Kesenian</b>
                                                                <br>
                                                                <span><?= $user->art_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <b>Olahraga</b>
                                                                <br>
                                                                <span><?= $user->sport_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <b>Kemasyarakatan / Organisasi</b>
                                                                <br>
                                                                <span><?= $user->org_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <b>Lain-lain</b>
                                                                <br>
                                                                <span><?= $user->other_hobby ?></span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="tab-pane container fade" id="scholarship">
                                                    <table class="table">
                                                        <tbody>
                                                            <?php if($user->scholarship_year_1 !== '0000') { ?>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tahun</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_year_1 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelas</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_class_1 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Dari</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_from_1 ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                            <?php if($user->scholarship_year_2 !== '0000') { ?>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tahun</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_year_2 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelas</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_class_2 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Dari</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_from_2 ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                            <?php if($user->scholarship_year_3 !== '0000') { ?>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <b>Tahun</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_year_3 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Kelas</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_class_3 ?></span>
                                                                </td>
                                                                <td>
                                                                    <b>Dari</b>
                                                                    <br>
                                                                    <span><?= $user->scholarship_from_3 ?></span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="major">
                                    <div class="row">
                                        <div class="col">
                                            <table class="table">
                                                <tbody>
                                                    <tr class="border-bottom">
                                                        <td>
                                                            <b>Jurusan</b>
                                                            <br>
                                                            <span><?= $user->name ?></span>
                                                        </td>
                                                        <td>
                                                            <b>Alasan Memilih Jurusan</b>
                                                            <br>
                                                            <span><?= $user->maj_reason ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="files">
                                    <div class="row">
                                        <div class="col">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Berkas</th>
                                                        <th>File</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-bottom">
                                                        <td><b>Ijazah</b></td>
                                                        <td>
                                                            <?php
                                                                if($user->certificate !== '') {
                                                            ?>
                                                            <a href="<?= base_url('assets/files/certificate/'.$user->certificate) ?>" title="Lihat Ijazah" target="_blank"><?= base_url('assets/files/certificate/'.$user->certificate) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-bottom">
                                                        <td><b>Surat Keterangan Hasil Ujian (SKHU)</b></td>
                                                        <td>
                                                            <?php
                                                                if($user->skhu !== '') {
                                                            ?>
                                                            <a href="<?= base_url('assets/files/skhu/'.$user->skhu) ?>" title="Lihat SKHU" target="_blank"><?= base_url('assets/files/skhu/'.$user->skhu) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-bottom">
                                                        <td><b>Kartu Keluarga (KK)</b></td>
                                                        <td>
                                                            <?php
                                                                if($user->family_card !== '') {
                                                            ?>
                                                            <a href="<?= base_url('assets/files/family_card/'.$user->family_card) ?>" title="Lihat Kartu Keluarga" target="_blank"><?= base_url('assets/files/family_card/'.$user->family_card) ?></a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-bottom">
                                                        <td><b>Pas Foto (4x6)</b></td>
                                                        <td>
                                                            <?php
                                                                if($user->image !== 'avatar-1.png') {
                                                            ?>
                                                            <a href="<?= base_url('assets/img/users/'.$user->image) ?>" title="Lihat Pas Foto" target="_blank"><?= base_url('assets/img/users/'.$user->image) ?></a>
                                                            <?php } ?>
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
    </section>
</div>
<?= $this->endSection() ?>