<?php $this->load->view('layout/header')?>
<body>
<center>
<h1>Kalkulator CI</h1>
<div class="card o mt-3" id="card1">
    
    <form action="<?php echo site_url('calculator/hasil_hitung');?>" method="POST">
    <label>Angka 1</label>
    <input type="text" name="angka1" class="form-control"/> <br /><br/>
    <label>Angka 2</label>
    <input type="text" name="angka2" class="form-control"/> <br /><br/>
    <div class="container">
    <select name="pilih-hitung" class="form-control">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select><br/><br/>
    </div>
</div>
<div class="card o mt-3" id="card2">
<div class="container2">
    <input type="submit" value="Hitung" class="form-control" id="sub"/>
</div>
</div>
</form>
</center>
</body>
</html>