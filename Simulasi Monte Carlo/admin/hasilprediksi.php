<script type="text/javascript">
 /*--This JavaScript method for Print command--*/
 function PrintDoc() {
  var toPrint = document.getElementById('printpage');
  var popupWin = window.open('');
  popupWin.document.open();
  popupWin.document.write('<html><title>Print</title><link rel="stylesheet" type="text/css" href="../assets/css/print.css" /></head><body onload="window.print()"><div class="header"><h1>Hasil Prediksi Penjualan</h1></div><div class="content">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</html>');
  popupWin.document.close();
 
 }
</script>

<div class="content">
<h1>
<i class="fa fa-exclamation-triangle"></i> Hasil Prediksi
<button class='btn-batal pull-right' onclick='PrintDoc()'><i class="fa fa-print"></i> Print</button>
</h1>
<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Prediksi hasil simulasi, silahkan pilih produk dan klik simpan.</div>
<div id='printpage'>
<div class='content-post'>

<?php
	$sqlp = mysql_query("select * from produk order by idproduk asc");
	echo "<form method='get'>";
	echo "<input name='p' type='hidden' value='hasilprediksi'>";
	echo "<div class='select-option' style='margin-bottom:10px;'><select name='idproduk' onchange='this.form.submit()'>";
	echo "<option value='0'>Lihat Prediksi Produk</option>";
	while($rp=mysql_fetch_array($sqlp)){
		if($rp["idproduk"]==$_GET["idproduk"]){
			$sel = "selected";
		}else{
			$sel = "";
		}
		echo "<option value='$rp[idproduk]' $sel>$rp[namaproduk]</option>";
	}
	echo "</select></div>";
	echo "</form>";
	echo "</div>";
	echo "<div><form name='form1' action='?p=hasilprediksiaksi' method='post'>";
	
	
	$sqlp = mysql_query("select * from produk order by idproduk asc");
	
	echo "<select name='idproduk' onchange='this.form.submit()' style='display:none;'>";
	echo "<option value='0'>Lihat Prediksi Produk</option>";
	while($rp=mysql_fetch_array($sqlp)){
		if($rp["idproduk"]==$_GET["idproduk"]){
			$sel = "selected";
		}else{
			$sel = "";
		}
		echo "<option value='$rp[idproduk]' $sel>$rp[namaproduk]</option>";
	}
	echo "</select>";

	
	
	
	
	
	echo "<table border='0' cellpadding='0' cellspacing='0' class='tabel-produk' style='width:100%'>";
	echo "<tr>";
	echo "<thead>";
	echo "<th class='th-tabel-produk'>No</th>";
	echo "<th class='th-tabel-produk'>Bulan</th>";
	echo "<th class='th-tabel-produk'>Angka Acak</th>";
	echo "<th class='th-tabel-produk' style='width:100px;'>Hasil</th>";
	echo "</tr></thead><tbody>";
		
		
	$sqlrandom= mysql_query("select * from nilairandom order by id asc");
	$bln=array(1=>"Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
	$no=1;
	while($rp = mysql_fetch_array($sqlrandom)){
		
		
			$nr = $rp["angkarandom"];
				
				echo "
				<tr>
				<td class='td-tabel-produk' style='text-align:center;border-left:1px solid #f9f9f9;'>$no</td>";
				
				echo "<td class='td-tabel-produk'><input style='display:none;' name='bulan[]' value='$no'>$bln[$no]</td>";
				
				echo "<td class='td-tabel-produk' style='text-align:center;'>$nr</td>";
	
			$sqlinterval1 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='1' and idproduk='$_GET[idproduk]'"));
			$sqlinterval2 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='2' and idproduk='$_GET[idproduk]'"));
			$sqlinterval3 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='3' and idproduk='$_GET[idproduk]'"));
			$sqlinterval4 = mysql_fetch_array( mysql_query("select * from intervalinterval where permintaan ='4' and idproduk='$_GET[idproduk]'"));
			$sqlinterval5 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='5' and idproduk='$_GET[idproduk]'"));
			$sqlinterval6 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='6' and idproduk='$_GET[idproduk]'"));
			$sqlinterval7 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='7' and idproduk='$_GET[idproduk]'"));
			$sqlinterval8 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='8' and idproduk='$_GET[idproduk]'"));
			$sqlinterval9 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='9' and idproduk='$_GET[idproduk]'"));
			$sqlinterval10 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='10' and idproduk='$_GET[idproduk]'"));
			$sqlinterval11 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='11' and idproduk='$_GET[idproduk]'"));
			$sqlinterval12 = mysql_fetch_array(mysql_query("select * from intervalinterval where permintaan ='12' and idproduk='$_GET[idproduk]'"));
			$nin1 = $sqlinterval1["distribusikumulatif"];
			$nin2 = $sqlinterval2["distribusikumulatif"];
			$nin3 = $sqlinterval3["distribusikumulatif"];
			$nin4 = $sqlinterval4["distribusikumulatif"];
			$nin5 = $sqlinterval5["distribusikumulatif"];
			$nin6 = $sqlinterval6["distribusikumulatif"];
			$nin7 = $sqlinterval7["distribusikumulatif"];
			$nin8 = $sqlinterval8["distribusikumulatif"];
			$nin9 = $sqlinterval9["distribusikumulatif"];
			$nin10 = $sqlinterval10["distribusikumulatif"];
			$nin11 = $sqlinterval11["distribusikumulatif"];
			$nin12 = $sqlinterval12["distribusikumulatif"];
			$nfre1 = $sqlinterval1["frekuensi"];
			$nfre2 = $sqlinterval2["frekuensi"];
			$nfre3 = $sqlinterval3["frekuensi"];
			$nfre4 = $sqlinterval4["frekuensi"];
			$nfre5 = $sqlinterval5["frekuensi"];
			$nfre6 = $sqlinterval6["frekuensi"];
			$nfre7 = $sqlinterval7["frekuensi"];
			$nfre8 = $sqlinterval8["frekuensi"];
			$nfre9 = $sqlinterval9["frekuensi"];
			$nfre10 = $sqlinterval10["frekuensi"];
			$nfre11 = $sqlinterval11["frekuensi"];
			$nfre12 = $sqlinterval12["frekuensi"];
			if($nr>0 and $nr<= $nin1){
				$dapath = $nfre1;
			
			}else if($nr>$nin1 and $nr<= $nin2){
				$dapath = $nfre2;			
			}else if($nr>$nin2 and $nr<= $nin3){
				$dapath = $nfre3;			
			}else if($nr>$nin3 and $nr<= $nin4){
				$dapath = $nfre4;			
			}else if($nr>$nin4 and $nr<= $nin5){
				$dapath = $nfre5;			
			}else if($nr>$nin5 and $nr<= $nin6){
				$dapath = $nfre6;			
			}else if($nr>$nin6 and $nr<= $nin7){
				$dapath = $nfre7;			
			}else if($nr>$nin7 and $nr<= $nin8){
				$dapath = $nfre8;			
			}else if($nr>$nin8 and $nr<= $nin9){
				$dapath = $nfre9;			
			}else if($nr>$nin9 and $nr<= $nin10){
				$dapath = $nfre10;			
			}else if($nr>$nin10 and $nr<= $nin11){
				$dapath = $nfre11;			
			}else if($nr>$nin11 and $nr<= $nin12){
				$dapath = $nfre12;			
			}
			
			
			echo "<td class='td-tabel-produk'><input class='td-nilai' style='text-align:center;' type='text' name='nilaihasilprediksi[]' value='$dapath'></td></td>";
			echo "</tr>";
			$jn[] = $dapath;
			$x  = array_sum($jn);
			$jumlahdata = count($jn);
			$hasilprediksi = number_format($x/$jumlahdata,2);
			$bulatkanhasilprediksi = floor($hasilprediksi);
			$no++;
			
			}
			
	echo "</tbody><tr><td colspan='3' align='center' class='td-tabel-produk' style='border-left:1px solid #f9f9f9;'><b>Jumlah Penjualan</b></td><td class='td-tabel-produk' style='text-align:center;' colspan='2'><b>$x</b></td></tr>";
	echo "</table>";
	echo "<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Prediksi permintaan dalam 12 bulan berikutnya adalah $hasilprediksi dibulatkan menjadi $bulatkanhasilprediksi </div>";
	

	
	
	
	?>
		

	<table id='noprint' border='0' cellpadding='0' cellspacing='0'><tr><td><button class='btn-simpan' type='submit' name='save'><i class='fa fa-check'></i> Simpan</button></td></tr></table>	
	</form>
	

	<script>
function myFunction() {
    window.print();
} 

</script>

	

	
	</div>
	</div>

