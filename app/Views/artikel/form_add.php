<?= $this->include('template/admin_header'); ?>
<h2>
    <?= $title; ?>
</h2>
<form action="" method="post" class="form-section">
    <p><input type="text" name="judul" placeholder="Judul Artikelmu"></p>
    <p><textarea name="isi" id="myI" cols="113" rows="10" placeholder=""></textarea></p>
    <p><input type="submit" value="Kirim" class="btn submit-btn"></p>
</form>

<script>
  const placeholders = [
    'Jutaan orang bahkan tak menyadari bahwa mereka bisa menghasilkan US$ 1.000 sehari tanpa meninggalkan rumah. Dan Anda adalah salah satu dari mereka.',
    'Tambahkan isinya di sini.'
  ];

  const randomIndex = Math.floor(Math.random() * placeholders.length);
  document.getElementById('myI').setAttribute('placeholder', placeholders[randomIndex]);
</script>
<?= $this->include('template/admin_footer'); ?>