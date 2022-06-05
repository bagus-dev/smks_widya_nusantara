<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> &mdash; Pendaftaran SMKS Widya Nusantara</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo.png" type="image/x-icon">
    <style>
        body {
            width: 100%;
        }
        .image-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        @media print {
            body {
                width: 21cm;
                height: 29.7cm;
            }
            table.table-list2 { page-break-after:auto }
            tr.tr-list    { page-break-inside:avoid; page-break-after:auto }
            td.table-list    { page-break-inside:avoid; page-break-after:auto }
            thead.thead-list { display:table-header-group }
        }
    </style>
    <script>
        window.onload = function() {
            window.print();
            setTimeout(function() {
                window.close()
            }, 1);
        }
    </script>
</head>
<body>
    <table style="width:100%">
        <thead>
            <tr>
                <td>
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo Sekolah" width="100" style="display:inline;margin-top:15px;margin-left:100px;">

                    <h4 style="text-align:center;margin-top:-105px;">YAYASAN WIDYA NUSANTARA</h4>
                    <h4 style="text-align:center;margin-top:-15px">SMKS WIDYA NUSANTARA</h4>
                    <p style="text-align:center;margin-top:-8px"><?= $contact->address ?></p>
                    <p style="text-align:center;margin-top:-8px">Telepon: <?= $contact->phone ?></p>

                    <hr style="height:5px;background-color:black;">
                    <hr style="height:2px;background-color:black;margin-top:-5px;">
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding-top:0px">
                    <h3 style="text-align:center">FORMULIR PENDAFTARAN PENERIMAAN PESERTA DIDIK BARU (PPDB)</h3>

                    <img src="<?= base_url('assets/img/users/'.$user->image) ?>" alt="Pas Foto" class="image-center" style="margin-top:5%;width:20%;height:auto;">

                    <table style="margin-top:5%;width:100%;">
                        <tbody>
                            <tr>
                                <td width="30"><h4>A.</h4></td>
                                <td><h4>KETERANGAN DIRI SISWA</h4></td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Nama Siswa</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td width="280">a. Nama Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->fullname ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Nama Panggilan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->nickname ?></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->gender === '1' ? 'Laki-laki' : 'Perempuan' ?></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->place_birth.", ".date('d/m/Y',strtotime($user->date_birth)) ?></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Agama</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Kewarganegaraan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->citizenship ?></td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Anak Ke Berapa</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->order_family ?></td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Saudara Kandung</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->siblings ?></td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Jumlah Saudara Tiri</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->stepbrosis ?></td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Jumlah Saudara Angkat</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->step_sibling ?></td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Anak Yatim/Piatu/Yatim Piatu</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->orphans === '1' ? 'Ya' : 'Tidak' ?></td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Bahasa Sehari-hari</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->language ?></td>
                            </tr>
                            <tr>
                                <td><h4>B.</h4></td>
                                <td><h4>KETERANGAN TEMPAT TINGGAL</h4></td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->address ?></td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->tel ?></td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Tinggal Dengan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>Jarak dari Tempat Tinggal ke Sekolah</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->distance." km" ?></td>
                            </tr>
                            <tr>
                                <td><h4>C.</h4></td>
                                <td><h4>KETERANGAN KESEHATAN</h4></td>
                            </tr>
                            <tr>
                                <td>16.</td>
                                <td>Golongan Darah</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Penyakit yang Pernah Diderita</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->disease ?></td>
                            </tr>
                            <tr>
                                <td>18.</td>
                                <td>Kelainan Jasmani</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->physical_disorder ?></td>
                            </tr>
                            <tr>
                                <td>19.</td>
                                <td>Tinggi dan Berat Badan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->height." Cm dan ".$user->weight." Kg" ?></td>
                            </tr>
                            <tr>
                                <td><h4>D.</h4></td>
                                <td><h4>KETERANGAN PENDIDIKAN</h4></td>
                            </tr>
                            <tr>
                                <td>20.</td>
                                <td>Pendidikan Sebelumnya</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Lulusan Dari</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->graduate_from ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Tanggal dan Nomor STTB</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= date('d/m/Y',strtotime($user->sttb_date))." &mdash; ".$user->sttb_number ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Lama Belajar</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->long_study." Tahun" ?></td>
                            </tr>
                            <tr>
                                <td>21.</td>
                                <td>Pindahan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Dari Sekolah</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->from_school ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Alasan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->reason ?></td>
                            </tr>
                            <tr>
                                <td><h4>E.</h4></td>
                                <td><h4>KETERANGAN AYAH KANDUNG</h4></td>
                            </tr>
                            <tr>
                                <td>22.</td>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_name ?></td>
                            </tr>
                            <tr>
                                <td>23.</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_place_birth.", ".date('d/m/Y',strtotime($user->father_date_birth)) ?></td>
                            </tr>
                            <tr>
                                <td>24.</td>
                                <td>Agama</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>25.</td>
                                <td>Kewarganegaraan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_citizenship ?></td>
                            </tr>
                            <tr>
                                <td>26.</td>
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_education ?></td>
                            </tr>
                            <tr>
                                <td>27.</td>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_job ?></td>
                            </tr>
                            <tr>
                                <td>28.</td>
                                <td>Penghasilan per Bulan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>29.</td>
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_address ?></td>
                            </tr>
                            <tr>
                                <td>30.</td>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_tel ?></td>
                            </tr>
                            <tr>
                                <td>31.</td>
                                <td>Masih Hidup / Meninggal Dunia</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->father_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></td>
                            </tr>
                            <tr>
                                <td><h4>F.</h4></td>
                                <td><h4>KETERANGAN IBU KANDUNG</h4></td>
                            </tr>
                            <tr>
                                <td>32.</td>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_name ?></td>
                            </tr>
                            <tr>
                                <td>33.</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_place_birth.", ".date('d/m/Y',strtotime($user->mother_date_birth)) ?></td>
                            </tr>
                            <tr>
                                <td>34.</td>
                                <td>Agama</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>35.</td>
                                <td>Kewarganegaraan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_citizenship ?></td>
                            </tr>
                            <tr>
                                <td>36.</td>
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_education ?></td>
                            </tr>
                            <tr>
                                <td>37.</td>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_job ?></td>
                            </tr>
                            <tr>
                                <td>38.</td>
                                <td>Penghasilan per Bulan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
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
                                </td>
                            </tr>
                            <tr>
                                <td>39.</td>
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_address ?></td>
                            </tr>
                            <tr>
                                <td>40.</td>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_tel ?></td>
                            </tr>
                            <tr>
                                <td>41.</td>
                                <td>Masih Hidup / Meninggal Dunia</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->mother_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia' ?></td>
                            </tr>
                            <tr>
                                <td><h4>G.</h4></td>
                                <td><h4>KETERANGAN WALI</h4></td>
                            </tr>
                            <tr>
                                <td>42.</td>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_name ?></td>
                            </tr>
                            <tr>
                                <td>43.</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_name === '' ? '' : $user->proxy_place_birth.", ".date('d/m/Y',strtotime($user->proxy_date_birth)) ?></td>
                            </tr>
                            <tr>
                                <td>44.</td>
                                <td>Agama</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
                                    <?php
                                        if($user->proxy_name !== '') {
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
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>45.</td>
                                <td>Kewarganegaraan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_citizenship ?></td>
                            </tr>
                            <tr>
                                <td>46.</td>
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_education ?></td>
                            </tr>
                            <tr>
                                <td>47.</td>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_job ?></td>
                            </tr>
                            <tr>
                                <td>48.</td>
                                <td>Penghasilan per Bulan</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
                                    <?php
                                        if($user->proxy_name !== '') {
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
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>49.</td>
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_address ?></td>
                            </tr>
                            <tr>
                                <td>50.</td>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_tel ?></td>
                            </tr>
                            <tr>
                                <td>51.</td>
                                <td>Masih Hidup / Meninggal Dunia</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->proxy_name === '' ? '' : ($user->proxy_status === '1' ? 'Masih Hidup' : 'Meninggal Dunia') ?></td>
                            </tr>
                            <tr>
                                <td><h4>H.</h4></td>
                                <td><h4>KEGEMARAN SISWA</h4></td>
                            </tr>
                            <tr>
                                <td>52.</td>
                                <td>Kesenian</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->art_hobby ?></td>
                            </tr>
                            <tr>
                                <td>53.</td>
                                <td>Olahraga</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->sport_hobby ?></td>
                            </tr>
                            <tr>
                                <td>54.</td>
                                <td>Kemasyarakatan / Organisasi</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->org_hobby ?></td>
                            </tr>
                            <tr>
                                <td>55.</td>
                                <td>Lain-lain</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black"><?= $user->other_hobby ?></td>
                            </tr>
                            <?php if($user->scholarship_year_1 !== '0000') { ?>
                            <tr>
                                <td><h4>I.</h4></td>
                                <td><h4>BEASISWA</h4></td>
                            </tr>
                            <tr>
                                <td>56.</td>
                                <td>Menerima Beasiswa</td>
                                <td>:</td>
                                <td style="border-bottom:1px dashed black">
                                    <?= "Tahun ".$user->scholarship_year_1." Kelas ".$user->scholarship_class_1." Dari ".$user->scholarship_from_1 ?>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php if($user->scholarship_year_2 !== '0000') { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="border-bottom:1px dashed black">
                                    <?= "Tahun ".$user->scholarship_year_2." Kelas ".$user->scholarship_class_2." Dari ".$user->scholarship_from_2 ?>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php if($user->scholarship_year_3 !== '0000') { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="border-bottom:1px dashed black">
                                    <?= "Tahun ".$user->scholarship_year_3." Kelas ".$user->scholarship_class_3." Dari ".$user->scholarship_from_3 ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <table style="margin-top:10%;margin-left:auto;margin-right:auto;border-spacing:10px;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td style="border-bottom:1px dashed black">Pandeglang, <?= date('d-m-Y') ?></td>
                            </tr>
                            <tr>
                                <td style="border-bottom:1px solid black;text-align:center;">
                                    Orang Tua/Wali,
                                    
                                    <br><br><br><br><br><br>
                                </td>
                                <td style="border-bottom:1px solid black;text-align:center;">
                                    Siswa/i

                                    <br><br><br><br><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td width="200"></td>
                                <td width="200" style="text-align:center"><?= $user->fullname ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>