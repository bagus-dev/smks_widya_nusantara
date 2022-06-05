<?= $this->extend('frontend/registration/layout/template') ?>

<?= $this->section('registration') ?>
<form action="<?= base_url('registration/basic') ?>" class="mt-5" method="post">
    <?= csrf_field() ?>

    <fieldset class="fieldset-border">
        <legend class="legend-border">A. KETERANGAN DIRI SISWA</legend>

        <div class="form-group">
            <label for="nickname">Nama Panggilan</label>
            <input type="text" name="nickname" class="form-control <?= ($validation->hasError('nickname')) ? 'is-invalid' : '' ?>" placeholder="Nama Panggilan" value="<?= old('nickname') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nickname') ?>
            </div>
        </div>
        <div class="form-group">
            <label style="display:block">Jenis Kelamin</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="gender" id="rad1" class="custom-control-input" value="1" <?php if(old('gender') !== NULL){if(old('gender') === '1'){echo 'checked'; }}else{echo 'checked'; } ?>>
                <label for="rad1" class="custom-control-label">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="gender" id="rad2" class="custom-control-input" value="2" <?= old('gender') === '2' ? 'checked' : '' ?>>
                <label for="rad2" class="custom-control-label">Perempuan</label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="place_birth">Tempat Lahir</label>
                <input type="text" name="place_birth" class="form-control <?= ($validation->hasError('place_birth')) ? 'is-invalid' : '' ?>" placeholder="Tempat Lahir" value="<?= old('place_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('place_birth') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="date_birth">Tanggal Lahir</label>
                <input type="text" name="date_birth" id="date_birth" class="form-control datetimepicker-input <?= ($validation->hasError('date_birth')) ? 'is-invalid' : '' ?>" placeholder="Tanggal Lahir" data-toggle="datetimepicker" data-target="#date_birth" value="<?= old('date_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('date_birth') ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="religion">Agama</label>
            <select name="religion" class="custom-select <?= ($validation->hasError('religion')) ? 'is-invalid' : '' ?>">
                <option value="1" <?= old('religion') === '1' ? 'selected' : '' ?>>Islam</option>
                <option value="2" <?= old('religion') === '2' ? 'selected' : '' ?>>Kristen Protestan</option>
                <option value="3" <?= old('religion') === '3' ? 'selected' : '' ?>>Kristen Katolik</option>
                <option value="4" <?= old('religion') === '4' ? 'selected' : '' ?>>Hindu</option>
                <option value="5" <?= old('religion') === '5' ? 'selected' : '' ?>>Buddha</option>
                <option value="6" <?= old('religion') === '6' ? 'selected' : '' ?>>Khonghucu</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('religion') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="citizenship">Kewarganegaraan</label>
            <input type="text" name="citizenship" class="form-control <?= ($validation->hasError('citizenship')) ? 'is-invalid' : '' ?>" placeholder="Kewarganegaraan" value="<?= old('citizenship') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('citizenship') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="order_family">Anak Ke</label>
                <input type="number" name="order_family" class="form-control <?= ($validation->hasError('order_family')) ? 'is-invalid' : '' ?>" min="1" placeholder="Anak Ke" value="<?= old('order_family') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('order_family') ?>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label style="visibility: hidden;">1</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">dari</span>
                    </div>
                    <input type="number" name="siblings" class="form-control <?= ($validation->hasError('siblings')) ? 'is-invalid' : '' ?>" min="1" placeholder="3" value="<?= old('siblings') ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">bersaudara</span>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('siblings') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="stepbrosis">Jumlah Saudara Tiri</label>
                <input type="number" name="stepbrosis" class="form-control <?= ($validation->hasError('stepbrosis')) ? 'is-invalid' : '' ?>" min="0" placeholder="Jumlah Saudara Tiri" value="<?= old('stepbrosis') ? old('stepbrosis') : 0 ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('stepbrosis') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="step_sibling">Jumlah Saudara Angkat</label>
                <input type="number" name="step_sibling" class="form-control <?= ($validation->hasError('step_sibling')) ? 'is-invalid' : '' ?>" min="0" placeholder="Jumlah Saudara Angkat" value="<?= old('step_sibling') ? old('step_sibling') : 0 ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('step_sibling') ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label style="display:block">Anak Yatim/Piatu/Yatim Piatu</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="orphans" id="orp1" class="custom-control-input" value="1" <?= old('orphans') === '1' ? 'checked' : '' ?>>
                <label for="orp1" class="custom-control-label">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="orphans" id="orp2" class="custom-control-input" value="2" <?php if(old('orphans') !== NULL){if(old('orphans') === '2'){echo 'checked'; }}else{echo 'checked'; } ?>>
                <label for="orp2" class="custom-control-label">Tidak</label>
            </div>
            <div class="invalid-feedback">
                <?= $validation->getError('orphans') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="language">Bahasa Sehari-hari</label>
            <input type="text" name="language" class="form-control <?= ($validation->hasError('language')) ? 'is-invalid' : '' ?>" placeholder="Bahasa Sehari-hari" value="<?= old('language') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('language') ?>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">B. KETERANGAN TEMPAT TINGGAL</legend>

        <div class="form-group">
            <label for="address">Alamat Lengkap</label>
            <textarea name="address" rows="3" class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : '' ?>" placeholder="Alamat Lengkap" style="height:auto"><?= old('address') ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('address') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="tel">Nomor Telepon</label>
            <input type="text" name="tel" class="form-control <?= ($validation->hasError('tel')) ? 'is-invalid' : '' ?>" placeholder="Nomor Telepon" value="<?= old('tel') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('tel') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="live_with">Tinggal Dengan</label>
                <select name="live_with" class="custom-select <?= ($validation->hasError('live_with')) ? 'is-invalid' : '' ?>">
                    <option value="1" <?= old('live_with') === '1' ? 'selected' : '' ?>>Orang Tua</option>
                    <option value="2" <?= old('live_with') === '2' ? 'selected' : '' ?>>Wali</option>
                    <option value="3" <?= old('live_with') === '3' ? 'selected' : '' ?>>Saudara</option>
                    <option value="4" <?= old('live_with') === '4' ? 'selected' : '' ?>>Asrama</option>
                    <option value="5" <?= old('live_with') === '5' ? 'selected' : '' ?>>Kost</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="distance">Jarak dari Tempat Tinggal ke Sekolah</label>
                <div class="input-group">
                    <input type="number" name="distance" class="form-control <?= ($validation->hasError('distance')) ? 'is-invalid' : '' ?>" placeholder="0" step=".01" value="<?= old('distance') ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">km</span>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('distance') ?>
                    </div>
                </div>
                <small class="text-muted">simbol koma (,) ganti dengan titik (.)</small>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">C. KETERANGAN KESEHATAN</legend>

        <div class="form-group">
            <label style="display:block">Golongan Darah</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="blood_group" id="bld1" class="custom-control-input" value="1" <?php if(old('blood_group') !== NULL){if(old('blood_group') === '1'){echo 'checked'; }}else{echo 'checked'; } ?>>
                <label for="bld1" class="custom-control-label">A</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="blood_group" id="bld2" class="custom-control-input" value="2" <?= old('blood_group') === '2' ? 'checked' : '' ?>>
                <label for="bld2" class="custom-control-label">B</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="blood_group" id="bld3" class="custom-control-input" value="3" <?= old('blood_group') === '3' ? 'checked' : '' ?>>
                <label for="bld3" class="custom-control-label">AB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="blood_group" id="bld4" class="custom-control-input" value="4" <?= old('blood_group') === '4' ? 'checked' : '' ?>>
                <label for="bld4" class="custom-control-label">O</label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="disease">Penyakit yang Pernah Diderita</label>
                <input type="text" name="disease" class="form-control <?= ($validation->hasError('disease')) ? 'is-invalid' : '' ?>" placeholder="Misal: TBC, cacar, malaria dsb." value="<?= old('disease') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('disease') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="physical_disorder">Kelainan Jasmani</label>
                <input type="text" name="physical_disorder" class="form-control <?= ($validation->hasError('physical_disorder')) ? 'is-invalid' : '' ?>" placeholder="Misal: penderita polio, patah kaki, dsb." value="<?= old('physical_disorder') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('physical_disorder') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="height">Tinggi Badan</label>
                <div class="input-group">
                    <input type="number" name="height" class="form-control <?= ($validation->hasError('height')) ? 'is-invalid' : '' ?>" min="0" placeholder="Tinggi Badan" value="<?= old('height') ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">Cm</span>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('height') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="weight">Berat Badan</label>
                <div class="input-group">
                    <input type="number" name="weight" class="form-control <?= ($validation->hasError('weight')) ? 'is-invalid' : '' ?>" min="0" placeholder="Berat Badan" value="<?= old('weight') ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('weight') ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">D. KETERANGAN PENDIDIKAN SEBELUMNYA</legend>

        <div class="alert alert-info">
            Bagi siswa <b>pindahan</b>, lewati bagian ini.
        </div>
        <div class="form-group">
            <label for="graduate_from">Lulusan Dari</label>
            <input type="text" name="graduate_from" class="form-control <?= ($validation->hasError('graduate_from')) ? 'is-invalid' : '' ?>" placeholder="Lulusan Dari" value="<?= old('graduate_from') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('graduate_from') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="sttb_date">Tanggal STTB</label>
                <input type="text" name="sttb_date" id="sttb_date" class="form-control datetimepicker-input <?= ($validation->hasError('sttb_date')) ? 'is-invalid' : '' ?>" data-toggle="datetimepicker" data-target="#sttb_date" placeholder="Tanggal STTB" value="<?= old('sttb_date') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sttb_date') ?>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="sttb_number">Nomor STTB</label>
                <input type="text" name="sttb_number" class="form-control <?= ($validation->hasError('sttb_number')) ? 'is-invalid' : '' ?>" placeholder="Nomor STTB" value="<?= old('sttb_number') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sttb_number') ?>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="long_study">Lama Belajar</label>
                <div class="input-group">
                    <input type="number" name="long_study" class="form-control <?= ($validation->hasError('long_study')) ? 'is-invalid' : '' ?>" placeholder="Lama Belajar" min="3" value="<?= old('long_study') ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">Tahun</span>
                    </div>
                    <div class="invalid-feedback">
                        <?= $validation->getError('long_study') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-info">
            Bagi siswa yang <b>bukan pindahan</b>, lewati bagian ini.
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from_school">Dari Sekolah</label>
                <input type="text" name="from_school" class="form-control <?= ($validation->hasError('from_school')) ? 'is-invalid' : '' ?>" placeholder="Dari Sekolah" value="<?= old('from_school') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('from_school') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="reason">Alasan Pindah</label>
                <input type="text" name="reason" class="form-control <?= ($validation->hasError('reason')) ? 'is-invalid' : '' ?>" placeholder="Alasan Pindah" value="<?= old('reason') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('reason') ?>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">E. KETERANGAN AYAH KANDUNG</legend>

        <div class="form-group">
            <label for="father_name">Nama Lengkap</label>
            <input type="text" name="father_name" class="form-control <?= ($validation->hasError('father_name')) ? 'is-invalid' : '' ?>" placeholder="Nama Lengkap" value="<?= old('father_name') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('father_name') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="father_place_birth">Tempat Lahir</label>
                <input type="text" name="father_place_birth" class="form-control <?= ($validation->hasError('father_place_birth')) ? 'is-invalid' : '' ?>" placeholder="Tempat Lahir" value="<?= old('father_place_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('father_place_birth') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="father_date_birth">Tanggal Lahir</label>
                <input type="text" name="father_date_birth" id="father_date_birth" class="form-control datetimepicker-input <?= ($validation->hasError('father_date_birth')) ? 'is-invalid' : '' ?>" data-toggle="datetimepicker" data-target="#father_date_birth" placeholder="Tanggal Lahir" value="<?= old('father_date_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('father_date_birth') ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="father_religion">Agama</label>
            <select name="father_religion" class="custom-select <?= ($validation->hasError('father_religion')) ? 'is-invalid' : '' ?>">
                <option value="1" <?= old('father_religion') === '1' ? 'selected' : '' ?>>Islam</option>
                <option value="2" <?= old('father_religion') === '2' ? 'selected' : '' ?>>Kristen Protestan</option>
                <option value="3" <?= old('father_religion') === '3' ? 'selected' : '' ?>>Kristen Katolik</option>
                <option value="4" <?= old('father_religion') === '4' ? 'selected' : '' ?>>Hindu</option>
                <option value="5" <?= old('father_religion') === '5' ? 'selected' : '' ?>>Buddha</option>
                <option value="6" <?= old('father_religion') === '6' ? 'selected' : '' ?>>Khonghucu</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('father_religion') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="father_citizenship">Kewarganegaraan</label>
            <input type="text" name="father_citizenship" class="form-control <?= ($validation->hasError('father_citizenship')) ? 'is-invalid' : '' ?>" placeholder="Kewarganegaraan" value="<?= old('father_citizenship') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('father_citizenship') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="father_education">Pendidikan Terakhir</label>
            <input type="text" name="father_education" class="form-control <?= ($validation->hasError('father_education')) ? 'is-invalid' : '' ?>" placeholder="Pendidikan Terakhir" value="<?= old('father_education') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('father_education') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="father_job">Pekerjaan</label>
                <input type="text" name="father_job" class="form-control <?= ($validation->hasError('father_job')) ? 'is-invalid' : '' ?>" placeholder="Pekerjaan" value="<?= old('father_job') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('father_job') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="father_income">Penghasilan per Bulan</label>
                <select name="father_income" class="custom-select <?= ($validation->hasError('father_income')) ? 'is-invalid' : '' ?>">
                    <option value="1" <?= old('father_income') === '1' ? 'selected' : '' ?>>Rp. 0 - Rp. 1.000.000</option>
                    <option value="2" <?= old('father_income') === '2' ? 'selected' : '' ?>>Rp. 1.000.001 - Rp. 3.000.000</option>
                    <option value="3" <?= old('father_income') === '3' ? 'selected' : '' ?>>Rp. 3.000.001 - Rp. 5.000.000</option>
                    <option value="4" <?= old('father_income') === '4' ? 'selected' : '' ?>>Rp. 5.000.001 - Rp. 8.000.000</option>
                    <option value="5" <?= old('father_income') === '5' ? 'selected' : '' ?>>Lebih dari Rp. 8.000.000</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="father_address">Alamat Lengkap</label>
            <textarea name="father_address" rows="3" class="form-control <?= ($validation->hasError('father_address')) ? 'is-invalid' : '' ?>" placeholder="Alamat Lengkap" style="height:auto"><?= old('father_address') ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('father_address') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="father_tel">Nomor Telepon</label>
            <input type="text" name="father_tel" class="form-control <?= ($validation->hasError('father_tel')) ? 'is-invalid' : '' ?>" placeholder="Nomor Telepon" value="<?= old('father_tel') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('father_tel') ?>
            </div>
        </div>
        <div class="form-group">
            <label style="display:block">Status</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="father_status" id="fth1" class="custom-control-input" value="1" <?php if(old('father_status') !== NULL){if(old('father_status') === '1'){echo 'checked'; }}else{echo 'checked'; } ?>>
                <label for="fth1" class="custom-control-label">Masih Hidup</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="father_status" id="fth2" class="custom-control-input" value="2" <?= old('father_status') === '2' ? 'checked' : '' ?>>
                <label for="fth2" class="custom-control-label">Meninggal Dunia</label>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">F. KETERANGAN IBU KANDUNG</legend>

        <div class="form-group">
            <label for="mother_name">Nama Lengkap</label>
            <input type="text" name="mother_name" class="form-control <?= ($validation->hasError('mother_name')) ? 'is-invalid' : '' ?>" placeholder="Nama Lengkap" value="<?= old('mother_name') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('mother_name') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mother_place_birth">Tempat Lahir</label>
                <input type="text" name="mother_place_birth" class="form-control <?= ($validation->hasError('mother_place_birth')) ? 'is-invalid' : '' ?>" placeholder="Tempat Lahir" value="<?= old('mother_place_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('mother_place_birth') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="mother_date_birth">Tanggal Lahir</label>
                <input type="text" name="mother_date_birth" id="mother_date_birth" class="form-control datetimepicker-input <?= ($validation->hasError('mother_date_birth')) ? 'is-invalid' : '' ?>" data-toggle="datetimepicker" data-target="#mother_date_birth" placeholder="Tanggal Lahir" value="<?= old('mother_date_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('mother_date_birth') ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="mother_religion">Agama</label>
            <select name="mother_religion" class="custom-select <?= ($validation->hasError('mother_religion')) ? 'is-invalid' : '' ?>">
                <option value="1" <?= old('mother_religion') === '1' ? 'selected' : '' ?>>Islam</option>
                <option value="2" <?= old('mother_religion') === '2' ? 'selected' : '' ?>>Kristen Protestan</option>
                <option value="3" <?= old('mother_religion') === '3' ? 'selected' : '' ?>>Kristen Katolik</option>
                <option value="4" <?= old('mother_religion') === '4' ? 'selected' : '' ?>>Hindu</option>
                <option value="5" <?= old('mother_religion') === '5' ? 'selected' : '' ?>>Buddha</option>
                <option value="6" <?= old('mother_religion') === '6' ? 'selected' : '' ?>>Khonghucu</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('mother_religion') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="mother_citizenship">Kewarganegaraan</label>
            <input type="text" name="mother_citizenship" class="form-control <?= ($validation->hasError('mother_citizenship')) ? 'is-invalid' : '' ?>" placeholder="Kewarganegaraan" value="<?= old('mother_citizenship') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('mother_citizenship') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="mother_education">Pendidikan Terakhir</label>
            <input type="text" name="mother_education" class="form-control <?= ($validation->hasError('mother_education')) ? 'is-invalid' : '' ?>" placeholder="Pendidikan Terakhir" value="<?= old('mother_education') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('mother_education') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mother_job">Pekerjaan</label>
                <input type="text" name="mother_job" class="form-control <?= ($validation->hasError('mother_job')) ? 'is-invalid' : '' ?>" placeholder="Pekerjaan" value="<?= old('mother_job') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('mother_job') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="mother_income">Penghasilan per Bulan</label>
                <select name="mother_income" class="custom-select <?= ($validation->hasError('mother_income')) ? 'is-invalid' : '' ?>">
                    <option value="1" <?= old('mother_income') === '1' ? 'selected' : '' ?>>Rp. 0 - Rp. 1.000.000</option>
                    <option value="2" <?= old('mother_income') === '2' ? 'selected' : '' ?>>Rp. 1.000.001 - Rp. 3.000.000</option>
                    <option value="3" <?= old('mother_income') === '3' ? 'selected' : '' ?>>Rp. 3.000.001 - Rp. 5.000.000</option>
                    <option value="4" <?= old('mother_income') === '4' ? 'selected' : '' ?>>Rp. 5.000.001 - Rp. 8.000.000</option>
                    <option value="5" <?= old('mother_income') === '5' ? 'selected' : '' ?>>Lebih dari Rp. 8.000.000</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="mother_address">Alamat Lengkap</label>
            <textarea name="mother_address" rows="3" class="form-control <?= ($validation->hasError('mother_address')) ? 'is-invalid' : '' ?>" placeholder="Alamat Lengkap" style="height:auto"><?= old('mother_address') ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('mother_address') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="mother_tel">Nomor Telepon</label>
            <input type="text" name="mother_tel" class="form-control <?= ($validation->hasError('mother_tel')) ? 'is-invalid' : '' ?>" placeholder="Nomor Telepon" value="<?= old('mother_tel') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('mother_tel') ?>
            </div>
        </div>
        <div class="form-group">
            <label style="display:block">Status</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="mother_status" id="mth1" class="custom-control-input" value="1" <?php if(old('mother_status') !== NULL){if(old('mother_status') === '1'){echo 'checked'; }}else{echo 'checked'; } ?>>
                <label for="mth1" class="custom-control-label">Masih Hidup</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="mother_status" id="mth2" class="custom-control-input" value="2" <?= old('mother_status') === '2' ? 'checked' : '' ?>>
                <label for="mth2" class="custom-control-label">Meninggal Dunia</label>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">G. KETERANGAN WALI</legend>

        <div class="alert alert-info">Bagi siswa yang <b class="text-dark">Tinggal Dengan Wali</b> wajib isi bagian ini.</div>

        <div class="form-group">
            <label for="proxy_name">Nama Lengkap</label>
            <input type="text" name="proxy_name" class="form-control <?= ($validation->hasError('proxy_name')) ? 'is-invalid' : '' ?>" placeholder="Nama Lengkap" value="<?= old('proxy_name') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('proxy_name') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="proxy_place_birth">Tempat Lahir</label>
                <input type="text" name="proxy_place_birth" class="form-control <?= ($validation->hasError('proxy_place_birth')) ? 'is-invalid' : '' ?>" placeholder="Tempat Lahir" value="<?= old('proxy_place_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('proxy_place_birth') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="proxy_date_birth">Tanggal Lahir</label>
                <input type="text" name="proxy_date_birth" id="proxy_date_birth" class="form-control datetimepicker-input <?= ($validation->hasError('proxy_date_birth')) ? 'is-invalid' : '' ?>" data-toggle="datetimepicker" data-target="#proxy_date_birth" placeholder="Tanggal Lahir" value="<?= old('proxy_date_birth') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('proxy_date_birth') ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="proxy_religion">Agama</label>
            <select name="proxy_religion" class="custom-select <?= ($validation->hasError('proxy_religion')) ? 'is-invalid' : '' ?>">
                <option value="1" <?= old('proxy_religion') === '1' ? 'selected' : '' ?>>Islam</option>
                <option value="2" <?= old('proxy_religion') === '2' ? 'selected' : '' ?>>Kristen Protestan</option>
                <option value="3" <?= old('proxy_religion') === '3' ? 'selected' : '' ?>>Kristen Katolik</option>
                <option value="4" <?= old('proxy_religion') === '4' ? 'selected' : '' ?>>Hindu</option>
                <option value="5" <?= old('proxy_religion') === '5' ? 'selected' : '' ?>>Buddha</option>
                <option value="6" <?= old('proxy_religion') === '6' ? 'selected' : '' ?>>Khonghucu</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('proxy_religion') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="proxy_citizenship">Kewarganegaraan</label>
            <input type="text" name="proxy_citizenship" class="form-control <?= ($validation->hasError('proxy_citizenship')) ? 'is-invalid' : '' ?>" placeholder="Kewarganegaraan" value="<?= old('proxy_citizenship') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('proxy_citizenship') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="proxy_education">Pendidikan Terakhir</label>
            <input type="text" name="proxy_education" class="form-control <?= ($validation->hasError('proxy_education')) ? 'is-invalid' : '' ?>" placeholder="Pendidikan Terakhir" value="<?= old('proxy_education') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('proxy_education') ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="proxy_job">Pekerjaan</label>
                <input type="text" name="proxy_job" class="form-control <?= ($validation->hasError('proxy_job')) ? 'is-invalid' : '' ?>" placeholder="Pekerjaan" value="<?= old('proxy_job') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('proxy_job') ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="proxy_income">Penghasilan per Bulan</label>
                <select name="proxy_income" class="custom-select <?= ($validation->hasError('proxy_income')) ? 'is-invalid' : '' ?>">
                    <option value="1" <?= old('proxy_income') === '1' ? 'selected' : '' ?>>Rp. 0 - Rp. 1.000.000</option>
                    <option value="2" <?= old('proxy_income') === '2' ? 'selected' : '' ?>>Rp. 1.000.001 - Rp. 3.000.000</option>
                    <option value="3" <?= old('proxy_income') === '3' ? 'selected' : '' ?>>Rp. 3.000.001 - Rp. 5.000.000</option>
                    <option value="4" <?= old('proxy_income') === '4' ? 'selected' : '' ?>>Rp. 5.000.001 - Rp. 8.000.000</option>
                    <option value="5" <?= old('proxy_income') === '5' ? 'selected' : '' ?>>Lebih dari Rp. 8.000.000</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="proxy_address">Alamat Lengkap</label>
            <textarea name="proxy_address" rows="3" class="form-control <?= ($validation->hasError('proxy_address')) ? 'is-invalid' : '' ?>" placeholder="Alamat Lengkap" style="height:auto"><?= old('proxy_address') ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('proxy_address') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="proxy_tel">Nomor Telepon</label>
            <input type="text" name="proxy_tel" class="form-control <?= ($validation->hasError('proxy_tel')) ? 'is-invalid' : '' ?>" placeholder="Nomor Telepon" value="<?= old('proxy_tel') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('proxy_tel') ?>
            </div>
        </div>
        <div class="form-group">
            <label style="display:block">Status</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="proxy_status" id="prx1" class="custom-control-input" value="1" <?php if(old('proxy_status') !== NULL){if(old('proxy_status') === '1'){echo 'checked'; }}else{echo 'checked'; } ?>>
                <label for="prx1" class="custom-control-label">Masih Hidup</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="proxy_status" id="prx2" class="custom-control-input" value="2" <?= old('proxy_status') === '2' ? 'checked' : '' ?>>
                <label for="prx2" class="custom-control-label">Meninggal Dunia</label>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">H. KEGEMARAN/HOBI SISWA</legend>

        <div class="form-group">
            <label for="art_hobby">Kesenian</label>
            <input type="text" name="art_hobby" class="form-control <?= ($validation->hasError('art_hobby')) ? 'is-invalid' : '' ?>" placeholder="Kesenian" value="<?= old('art_hobby') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('art_hobby') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="sport_hobby">Olahraga</label>
            <input type="text" name="sport_hobby" class="form-control <?= ($validation->hasError('sport_hobby')) ? 'is-invalid' : '' ?>" placeholder="Olahraga" value="<?= old('sport_hobby') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('sport_hobby') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="org_hobby">Kemasyarakatan/Organisasi</label>
            <input type="text" name="org_hobby" class="form-control <?= ($validation->hasError('org_hobby')) ? 'is-invalid' : '' ?>" placeholder="Kemasyarakatan/Organisasi" value="<?= old('org_hobby') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('org_hobby') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="other_hobby">Lain-lain</label>
            <input type="text" name="other_hobby" class="form-control <?= ($validation->hasError('other_hobby')) ? 'is-invalid' : '' ?>" placeholder="Lain-lain" value="<?= old('other_hobby') ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('other_hobby') ?>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-border">
        <legend class="legend-border">I. KETERANGAN PERKEMBANGAN SISWA</legend>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Menerima Beasiswa</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tahun</span>
                    </div>
                    <input type="text" name="scholarship_year_1" id="scholarship_year_1" class="form-control datetimepicker-input <?= ($validation->hasError('scholarship_year_1')) ? 'is-invalid' : '' ?>" placeholder="Tahun" data-toggle="datetimepicker" data-target="#scholarship_year_1" value="<?= old('scholarship_year_1') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_year_1') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label style="visibility: hidden;">1</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Kelas</span>
                    </div>
                    <input type="number" name="scholarship_class_1" class="form-control <?= ($validation->hasError('scholarship_class_1')) ? 'is-invalid' : '' ?>" placeholder="7" min="7" max="9" value="<?= old('scholarship_class_1') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_class_1') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label style="visibility: hidden;">1</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Dari</span>
                    </div>
                    <input type="text" name="scholarship_from_1" class="form-control <?= ($validation->hasError('scholarship_from_1')) ? 'is-invalid' : '' ?>" placeholder="Dari" value="<?= old('scholarship_from_1') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_from_1') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tahun</span>
                    </div>
                    <input type="text" name="scholarship_year_2" id="scholarship_year_2" class="form-control datetimepicker-input <?= ($validation->hasError('scholarship_year_2')) ? 'is-invalid' : '' ?>" placeholder="Tahun" data-toggle="datetimepicker" data-target="#scholarship_year_2" value="<?= old('scholarship_year_2') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_year_2') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Kelas</span>
                    </div>
                    <input type="number" name="scholarship_class_2" class="form-control <?= ($validation->hasError('scholarship_class_2')) ? 'is-invalid' : '' ?>" placeholder="8" min="7" max="9" value="<?= old('scholarship_class_2') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_class_2') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Dari</span>
                    </div>
                    <input type="text" name="scholarship_from_2" class="form-control <?= ($validation->hasError('scholarship_from_2')) ? 'is-invalid' : '' ?>" placeholder="Dari" value="<?= old('scholarship_from_2') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_from_2') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tahun</span>
                    </div>
                    <input type="text" name="scholarship_year_3" id="scholarship_year_3" class="form-control datetimepicker-input <?= ($validation->hasError('scholarship_year_3')) ? 'is-invalid' : '' ?>" placeholder="Tahun" data-toggle="datetimepicker" data-target="#scholarship_year_3" value="<?= old('scholarship_year_3') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_year_3') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Kelas</span>
                    </div>
                    <input type="number" name="scholarship_class_3" class="form-control <?= ($validation->hasError('scholarship_class_3')) ? 'is-invalid' : '' ?>" placeholder="9" min="7" max="9" value="<?= old('scholarship_class_3') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_class_3') ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Dari</span>
                    </div>
                    <input type="text" name="scholarship_from_3" class="form-control <?= ($validation->hasError('scholarship_from_3')) ? 'is-invalid' : '' ?>" placeholder="Dari" value="<?= old('scholarship_from_3') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('scholarship_from_3') ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input <?= ($validation->hasError('agree')) ? 'is-invalid' : '' ?>" id="customCheck" name="agree" value="1" <?= old('agree') == '1' ? 'checked' : '' ?>>
            <label class="custom-control-label" for="customCheck">Saya menyatakan bahwa semua isian di atas adalah <b>benar</b>, dan apabila di kemudian hari terdapat kesalahan informasi dapat menyebabkan <b>diskualifikasi/dikeluarkan</b>.</label>
            <div class="invalid-feedback">
                <?= $validation->getError('agree') ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-save"></i> SIMPAN</button>
    </div>
</form>
<?= $this->endSection() ?>