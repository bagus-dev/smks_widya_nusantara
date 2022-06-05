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
                    <form action="<?= base_url('admin/dashboard/teacher_list/save') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="name">Nama Guru</label>
                            <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" placeholder="Nama Guru" value="<?= old('name') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position">Posisi</label>
                            <input type="text" name="position" class="form-control <?= ($validation->hasError('position')) ? 'is-invalid' : '' ?>" placeholder="Posisi" value="<?= old('position') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('position') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="homeroom">Wali Kelas</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="homeroom_status" id="homeroomStatus" class="custom-control-input" <?= old('homeroom_status') ? 'checked' : '' ?>>
                                    <label for="homeroomStatus" class="custom-control-label">Check</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="formHomeroom" <?= old('homeroom_status') ? "style='display:block'" : "style='display:none'" ?>>
                                <label for="homeroom">Wali Kelas di</label>
                                <input type="text" name="homeroom" class="form-control <?= ($validation->hasError('homeroom')) ? 'is-invalid' : '' ?>" placeholder="Wali Kelas di" value="<?= old('homeroom') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('homeroom') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor HP</label>
                            <input type="text" name="phone" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : '' ?>" placeholder="Nomor HP" value="<?= old('phone') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('phone') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="short_desc">Deskripsi Singkat</label>
                            <textarea name="short_desc" rows="3" class="form-control <?= ($validation->hasError('short_desc')) ? 'is-invalid' : '' ?>" placeholder="Deskripsi Singkat" style="height:auto"><?= old('short_desc') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('short_desc') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="front_status">Tampilkan di Halaman Depan</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="front_status" id="frontStatus" class="custom-control-input" <?= old('front_status') ? 'checked' : '' ?>>
                                    <label for="frontStatus" class="custom-control-label">Ya</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="formFront" <?= old('front_status') ? "style='display:block'" : "style='display:none'" ?>>
                                <label for="front_seq">Urutan Ke</label>
                                <select name="front_seq" class="custom-select <?= ($validation->hasError('front_seq')) ? 'is-invalid' : '' ?>">
                                    <?php if(count($sequences) === 0) { ?>
                                        <option value="1" <?= old('front_seq') == '1' ? 'selected' : '' ?>>1</option>
                                        <option value="2" <?= old('front_seq') == '2' ? 'selected' : '' ?>>2</option>
                                        <option value="3" <?= old('front_seq') == '3' ? 'selected' : '' ?>>3</option>
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
                            <label for="image">Foto Guru</label>
                            <br>
                            <small class="text-muted">Maksimal Ukuran File adalah <b>512KB</b>. Format file yang didukung: <b>JPG, JPEG, dan PNG</b>.</small>
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" accept=".jpg,.jpeg,.png" <?= old('image_status') ? "value='".old('image')."'" : 'disabled' ?>>
                                <label for="image" class="custom-file-label">Pilih File</label>
                                <div class="invalid-feedback mt-2">
                                    <?= $validation->getError('image'); ?>
                                </div>
                                <div class="custom-control custom-checkbox mt-3">
                                    <input type="checkbox" name="image_status" id="imageStatus" class="custom-control-input" <?= old('image_status') ? 'checked' : '' ?>>
                                    <label for="imageStatus" class="custom-control-label">Ceklis jika Foto Guru ikut serta diupload</label>
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
    </section>
</div>
<?= $this->endSection() ?>