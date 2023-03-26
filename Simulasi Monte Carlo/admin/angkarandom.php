<div class="content">
<h1>
<i class="fa fa-database"></i> Nilai Random
</h1>
<div class='content-post'>

<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Menentukan angka random yang digunakan untuk mendapatkan nilai persediaan dilakukan dengan rumus LCM (Linear Congruent Method).</div>
<div style="float:left;width:32%;margin-right:15px;">

<div class='alert-danger'>Masukkan nilai pada kolom dibawah ini kemudian klik tombol hitung !</div>

<form class="form-add-random" method="post" name="form" action="">
    	<table border="0" cellpadding="0" cellspacing="0">
        <tr><td>Nilai A</td><td><input class="form-input-random" name="nilaia" type="text"></input></td></tr>
        	<tr><td>Nilai C </td><td><input class="form-input-random" name="nilaic" type="text"></input></td></tr>
        	<tr><td>Nilai M </td><td><input class="form-input-random" name="nilaim" type="text"></input></td></tr>
        	<tr><td>Nilai Z </td><td><input class="form-input-random" name="nilaiz" type="text"></input></td></tr>
       	 	<tr><td></td><td style="text-align:left;padding: 6px 10px;"><button class='btn-batal' type="submit" name="btnJumlah"><i class='fa fa-check'></i> Hitung</button></td>
       </tr>
        </table>
    </form>
</div>
	
    
<div style="float:left;width:32%;margin-right:15px;">
<div class='alert-danger'>Menampilkan hasil hitung, kemudian klik tombol simpan !</div>

    <form class="form-add-random" name="form1" method="post" action="<?php echo "?p=simpanangkarandom"; ?>" enctype="multipart/form-data">
    	<?php 
		
			if(isset($_POST['nilaia']) && isset($_POST['nilaiz']) && isset($_POST['nilaic']) && isset($_POST['nilaim']) ){
				$a=  $_POST['nilaia'];
				$z = $_POST['nilaiz'];
				$c = $_POST['nilaic'];
				$m = $_POST['nilaim']; 
			}else{
				$a=  0;
				$z = 0;
				$c = 0;
				$m = 0; $x=0;$y=0;$z=0;$r=0;
			
			
			}
			
			
			echo "<table border='0' cellpadding='0' cellspacing='0'>";
			for($i=1;$i<=12;$i++){
			$hasilkurung = (($a*$z)+$c);
			$x = @($hasilkurung/$m);
			$y = @(floor($x)*$m);
			$z = @($hasilkurung-$y);
			$r = @($z/$m);
			echo "<tr>
            	<td>Nilai $i</td>
                <td><input class='form-input-random' name='angkarandom[]' type='text' value='$r'/></td>
            	</tr>";
			}
					
					echo "<tr><td></td>
					<td style='text-align:left !important;padding: 6px 10px;'><button class='btn-simpan' name='submit' type='submit'><i class='fa fa-check'></i> Simpan</button></td></tr></table>";
			$z++;
			?>
            
	</form>
</div>
	

<div style="float:left;width:32%;">
<div class='alert-danger'>Menampilkan angka random yang telah disimpan !</div>
	<?php
	
	
	echo "<table border='0' cellpadding='0' cellspacing='0'>";
	$sqlp = mysql_query("select * from nilairandom order by id asc");
	$row = mysql_num_rows($sqlp);
	$no=1;
	if($row == 0){
			echo "<tr><td colspan='2'>Angka Random Masih Kosong</td></tr>";
	}else{
			while($rp = mysql_fetch_array($sqlp)){
			echo "<tr>
				<td>Nilai $no</td>
				<td><input class='form-input-random' name='angkarandom[]' type='text' disabled value='$rp[angkarandom]'/></td>";
			echo "</tr>";
			$no++;
			
			
		}
		echo "<tr><td></td><td style='text-align:left !important;padding: 10px;'><a style='padding:6px 12px;' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini ?')\" href='?p=angkarandomdel&idk=1' class='hapus'><i class='fa fa-trash'></i> Hapus</a></td></tr>";
	}
	echo "</table>";
	echo "</div>"
	?>
</div>

</div>
</div>