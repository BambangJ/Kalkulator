<html>
<head>
<title>Kalkulator CI</title>
</head>
<body>
<h1>Kalkulator CI</h1>
<form action="<?php echo site_url('calculator/hasil_hitung');?>" method="POST">
<input type="text" name="angka1"/> <br /><br/>
<input type="text" name="angka2"/> <br /><br/>
<select name="pilih-hitung">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select><br/><br/>
<input type="submit" value="Hitung" />
</form>
</body>
</html>