<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Sejarah Sekolah</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user"></i> Sejarah Sekolah</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/dashboard/school_history') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id "value="<?= $history->id ?>">

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" class="summernote"><?= old('description') ? old('description') : $history->description ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('description') ?></div>
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