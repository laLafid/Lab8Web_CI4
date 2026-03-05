<?= $this->include('template/admin_header'); ?>
<h2>
    <?= $title; ?>
</h2>
<form action="" method="post" class="form-section">
    <p><input type="text" name="judul" value="<?= $data['judul']; ?>"></p>
    <p><textarea name="isi" cols="113" rows="10"><?=$data['isi']; ?></textarea></p>
    <p><input type="submit" value="Kirim" class="btn submit-btn"></p>
</form>
<?= $this->include('template/admin_footer'); ?>