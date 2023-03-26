<?php
	include "koneksi.php";
	$sqlkat = mysql_query("select * from produk where idproduk='$_GET[idk]'");
	$rkat = mysql_fetch_array($sqlkat);
?>



<div class="content">
<h1>
<i class="fa fa-pencil"></i> Edit Data Produk</h1>
<div class="content-post">
<form class="form-add" name="form1" method="post" action="<?php echo "?p=editprodukaksi"; ?>" enctype="multipart/form-data">
  <table style="" border="0" cellpadding="0">
<input type="hidden" name="idproduk" value="<?php echo "$rkat[idproduk]"; ?>" />
  <tr><td>Nama Produk</td><th><input class="form-input" name="namaproduk" type="text" id="namaproduk" placeholder="Nama Produk" value="<?php echo "$rkat[namaproduk]"; ?>"></th><tr>
    <tr><td>Satuan</td><th><input class="form-input" type="text" name="satuan" id="satuan" value="<?php echo "$rkat[satuan]"; ?>"></th><tr>
        <tr><td>Harga</td><th><input class="form-input" type="text" name="harga_jual" id="harga_jual" value="<?php echo "$rkat[harga_jual]"; ?>"></th><tr>
  <tr><th></th><th><button class="btn-simpan" type="submit" name="Submit"><i class="fa fa-check"></i> Simpan</button> <a class="btn-batal" href="?p=dataproduk"><i class="fa fa-times"></i> Batal</a></th></tr></table>
</form>

</div>
</div>
