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
                    <form action="<?= base_url('admin/dashboard/major/save') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="name">Nama Jurusan</label>
                            <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" placeholder="Nama Jurusan" value="<?= old('name') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" class="summernote"><?= old('description') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('description') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Foto Jurusan</label>
                            <br>
                            <small class="text-muted">Maksimal Ukuran File adalah <b>512KB</b>. Format file yang didukung: <b>JPG, JPEG, dan PNG</b>.</small>
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" accept=".jpg,.jpeg,.png">
                                <label for="image" class="custom-file-label">Pilih File</label>
                                <div class="invalid-feedback mt-2">
                                    <?= $validation->getError('image'); ?>
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