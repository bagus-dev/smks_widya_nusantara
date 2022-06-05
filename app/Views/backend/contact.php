<?= $this->extend('backend/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kontak Kami</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-phone"></i> Kontak Kami</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/dashboard/contact/update') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="<?= $contact->id ?>">

                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input type="text" name="phone" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : '' ?>" placeholder="Telepon" value="<?= old('phone') ? old('phone') : $contact->phone ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('phone') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="Alamat Email" value="<?= old('email') ? old('email') : $contact->email ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Sekolah</label>
                            <textarea name="address" rows="3" class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : '' ?>" placeholder="Alamat Sekolah" style="height:auto"><?= old('address') ? old('address') : $contact->address ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('address') ?>
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