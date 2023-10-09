<?php $this->load->view('layout/header')?>
<center>
<h1> Hasil perhitungan </h1>
<div class="card o mt-3" id="card3">

<h3>
<?php echo $angka1." $pilih_hitung ".$angka2." = ".$hasil_hitung?>
</h3>
<div class="container">
<a href="<?php echo site_url('calculator/');?>"><< Kembali menghitung</a>
</div>
</div>
</center>
</html>
