<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4><i class="fas fa-chalkboard"></i> Jurusan</h4>
                    <a href="<?= base_url('admin/dashboard/major'); ?>" class="btn bg-warning text-white py-1"><i class="fas fa-arrow-left circle-icon text-warning"></i> &nbsp;Kembali</a>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#basic" class="nav-link active" data-toggle="tab"><i class="fas fa-info-circle"></i> Informasi Utama</a>
                        </li>
                        <li class="nav-item">
                            <a href="#imageTab" class="nav-link" data-toggle="tab"><i class="fas fa-image"></i> Foto Jurusan</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane container active" id="basic">
                            <div class="row">
                                <div class="col">
                                    <form action="<?= base_url('admin/dashboard/major/basic/update') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" value="<?= $major->id ?>">

                                        <div class="form-group">
                                            <label for="name">Nama Jurusan</label>
                                            <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" placeholder="Nama Jurusan" value="<?= old('name') ? old('name') : $major->name ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('name') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea name="description" class="summernote"><?= old('description') ? old('description') : $major->description ?></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('description') ?>
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
                                    <h5>Foto Jurusan Sekarang:</h5>
                                    <img src="<?= base_url().'/assets/img/majors/'.$major->image; ?>" alt="Foto Jurusan" class="img-fluid">
                                </div>
                                <div class="col-md-7 pt-2">
                                    <h5>Ganti Foto Jurusan:</h5>
                                    <form action="/admin/dashboard/major/image/update" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" value="<?= $major->id ?>">
                                        <input type="hidden" name="image_old" value="<?= $major->image; ?>">

                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" accept=".jpg,.jpeg,.png">
                                            <label for="image" class="custom-file-label">Pilih File</label>
                                            <div class="invalid-feedback">
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