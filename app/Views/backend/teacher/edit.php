<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Guru</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4><i class="fas fa-users"></i> Daftar Guru</h4>
                    <a href="<?= base_url('admin/dashboard/teacher_list'); ?>" class="btn bg-warning text-white py-1"><i class="fas fa-arrow-left circle-icon text-warning"></i> &nbsp;Kembali</a>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#basicTab" class="nav-link active" data-toggle="tab"><i class="fas fa-info-circle"></i> Informasi Utama</a>
                        </li>
                        <li class="nav-item">
                            <a href="#imageTab" class="nav-link" data-toggle="tab"><i class="fas fa-image"></i> Foto Guru</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane container active" id="basicTab">
                            <div class="row">
                                <div class="col">
                                    <form action="<?= base_url('admin/dashboard/teacher_list/update/basic') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" value="<?= $teacher->id ?>">

                                        <div class="form-group">
                                            <label for="name">Nama Guru</label>
                                            <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" placeholder="Nama Guru" value="<?= old('name') ? old('name') : $teacher->name ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('name') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Posisi</label>
                                            <input type="text" name="position" class="form-control <?= ($validation->hasError('position')) ? 'is-invalid' : '' ?>" placeholder="Posisi" value="<?= old('position') ? old('position') : $teacher->position ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('position') ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="homeroom">Wali Kelas</label>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="homeroom_status" id="homeroomStatus" class="custom-control-input" <?php if(old('homeroom_status') !== null){echo 'checked'; }else{if($teacher->homeroom_status == 1){echo 'checked'; }} ?>>
                                                    <label for="homeroomStatus" class="custom-control-label">Check</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6" id="formHomeroom" <?php if(old('homeroom_status') !== null){echo "style='display:block'"; }else{if($teacher->homeroom_status == 1){echo "style='display:block'"; }else{echo "style='display:none'"; }} ?>>
                                                <label for="homeroom">Wali Kelas di</label>
                                                <input type="text" name="homeroom" class="form-control <?= ($validation->hasError('homeroom')) ? 'is-invalid' : '' ?>" placeholder="Wali Kelas di" value="<?= old('homeroom') ? old('homeroom') : $teacher->homeroom ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('homeroom') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Nomor HP</label>
                                            <input type="text" name="phone" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : '' ?>" placeholder="Nomor HP" value="<?= old('phone') ? old('phone') : $teacher->phone ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('phone') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_desc">Deskripsi Singkat</label>
                                            <textarea name="short_desc" rows="3" class="form-control <?= ($validation->hasError('short_desc')) ? 'is-invalid' : '' ?>" placeholder="Deskripsi Singkat" style="height:auto"><?= old('short_desc') ? old('short_desc') : $teacher->short_desc ?></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('short_desc') ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="front_status">Tampilkan di Halaman Depan</label>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="front_status" id="frontStatus" class="custom-control-input" <?php if(old('front_status') !== null){echo 'checked'; }else{if($teacher->front_status == 1){echo 'checked'; }} ?>>
                                                    <label for="frontStatus" class="custom-control-label">Ya</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6" id="formFront" <?php if(old('front_status') !== null){echo "style='display:block'"; }else{if($teacher->front_status == 1){echo "style='display:block'"; }else{echo "style='display:none'"; }} ?>>
                                                <label for="front_seq">Urutan Ke</label>
                                                <select name="front_seq" class="custom-select <?= ($validation->hasError('front_seq')) ? 'is-invalid' : '' ?>">
                                                    <?php if(count($sequences) === 0) { ?>
                                                        <option value="1" <?php if(old('front_seq') !== null){if(old('front_seq') == '1'){echo 'selected'; }}else{if($teacher->front_status == 1){if($teacher->front_seq == 1){echo 'selected'; }}} ?>>1</option>
                                                        <option value="2" <?php if(old('front_seq') !== null){if(old('front_seq') == '2'){echo 'selected'; }}else{if($teacher->front_status == 1){if($teacher->front_seq == 2){echo 'selected'; }}} ?>>2</option>
                                                        <option value="3" <?php if(old('front_seq') !== null){if(old('front_seq') == '3'){echo 'selected'; }}else{if($teacher->front_status == 1){if($teacher->front_seq == 3){echo 'selected'; }}} ?>>3</option>
                                                    <?php
                                                        } else {
                                                            $db = \Config\Database::connect();
                                                            $builder = $db->table('teacher_list');

                                                            for($i=1; $i <= 3; $i++) {
                                                                $query = $builder->where(['front_status' => 1, 'front_seq' => $i])->get();
                                                                $row = $query->getNumRows();

                                                                if($row === 0) {
                                                    ?>
                                                        <option value="<?= $i ?>" <?= old('front_seq') == $i ? 'selected' : '' ?>><?= $i ?></option>
                                                    <?php
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('front_seq'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="imageTab">
                            <div class="row">
                                <div class="col-md-5 pt-2">
                                    <h5>Foto Sekarang:</h5>
                                    <img src="<?= base_url().'/assets/img/teachers/'.$teacher->image; ?>" alt="Foto Profil" class="img-fluid">
                                </div>
                                <div class="col-md-7 pt-2">
                                    <h5>Ganti Foto:</h5>
                                    <form action="<?= base_url('admin/dashboard/teacher_list/update/image') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" value="<?= $teacher->id ?>">
                                        <input type="hidden" name="image_old" value="<?= $teacher->image ?>">

                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" accept=".jpg,.jpeg,.png" value="<?= old('image') ?>">
                                            <label for="image" class="custom-file-label">Pilih File</label>
                                            <div class="invalid-feedback mt-2">
                                                <?= $validation->getError('image'); ?>
                                            </div>
                                        </div>
                                        <small class="text-muted">Maksimal Ukuran File adalah <b>512KB</b>. Format file yang didukung: <b>JPG, JPEG, dan PNG</b>.</small>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mt-1" id="btn-image" disabled><i class="fas fa-save"></i> Simpan</button>
                                        </div>
                                    </form>
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