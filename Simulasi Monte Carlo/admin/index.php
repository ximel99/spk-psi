<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Simulasi Penjualan</title>
<link href="../assets/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<header class="main-header">
        <span class="logo" style="font-size:18px"><i class="fa fa-windows"></i> Aplikasi Simulasi Penjualan</span>
<div class="navbar-custom-menu">
<ul>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()"><i class="fa fa-user"></i> Admin</a>
    <div class="dropdown-content" id="myDropdown">
      <a  onclick="return confirm('Yakin ingin logout ?')" style="border-top:none;" href="<?php echo"?p=logout";?>""><i class="fa fa-power-off"></i> Logout</a>
    </div>
  </li>
</ul>
</div>
</header>

    <?php
	include "koneksi.php";
	session_start();
	if(!empty($_SESSION["namauser"]) && !empty($_SESSION["passuser"])){
	?>
	<div style="clear:both">
	
	
<aside class="main-sidebar">
<section class="sidebar">
<ul class="sidebar-menu">
<?php
if ($_GET["p"]=="home") { ?>
<li class="active"><a href="<?php echo"?p=home";?>"><i class="fa fa-home"></i> Dashboard</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=home";?>"><i class="fa fa-home"></i> Dashboard</a></li>

<?php
}
if ($_GET["p"]=="dataproduk") { ?>
<li class="active"><a href="<?php echo"?p=dataproduk";?>"><i class="fa fa-folder"></i> Data Produk</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=dataproduk";?>"><i class="fa fa-folder"></i> Data Produk</a></li>

<?php
}
if ($_GET["p"]=="datapermintaan") { ?>
<li class="active"><a href="<?php echo"?p=datapermintaan";?>"><i class="fa fa-tasks"></i> Data Permintaan Produk</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=datapermintaan";?>"><i class="fa fa-tasks"></i> Data Permintaan Produk</a></li>
<?php
}
if ($_GET["p"]=="angkarandom") { ?>
<li class="active"><a href="<?php echo"?p=angkarandom";?>"><i class="fa fa-database"></i> Angka Random</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=angkarandom";?>"><i class="fa fa-database"></i> Angka Random</a></li>
<?php
}
if ($_GET["p"]=="hasilprediksi") { ?>
<li class="active"><a href="<?php echo"?p=hasilprediksi";?>"><i class="fa fa-exclamation-triangle"></i> Hasil Prediksi</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=hasilprediksi";?>"><i class="fa fa-exclamation-triangle"></i> Hasil Prediksi</a></li>
<?php
}
if ($_GET["p"]=="grafik") { ?>
<li class="active"><a href="<?php echo"?p=grafik";?>"><i class="fa fa-bar-chart"></i> Grafik</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=grafik";?>"><i class="fa fa-bar-chart"></i> Grafik</a></li>


<?php
}
if ($_GET["p"]=="bantuan") {?>
<li class="active"><a href="<?php echo"?p=bantuan";?>"><i class="fa fa-info-circle"></i> Bantuan</a></li>
<?php
}
else { ?>
<li><a href="<?php echo"?p=bantuan";?>"><i class="fa fa-info-circle"></i> Bantuan</a></li>
<?php
}
?>
</ul>
</section>
</aside>

<div class="content-wrapper">

<?php 
					
				if($_GET["p"]=="home"){
					include "home.php";
				}else if($_GET["p"]=="dataproduk"){
					include "dataproduk.php";
				}else if($_GET["p"]=="dataprodukadd"){
					include "dataprodukadd.php";
				}else if($_GET["p"]=="dataprodukaddaksi"){
					include "dataprodukaddaksi.php";
				}else if($_GET["p"]=="penjualanaddaksi"){
					include "penjualanaddaksi.php";
				}else if($_GET["p"]=="datapermintaan"){
					include "datapermintaan.php";
				}else if($_GET["p"]=="datapermintaanadd"){
					include "datapermintaanadd.php";
				}else if($_GET["p"]=="datapermintaanhitung"){
					include "datapermintaanhitung.php";
				}else if($_GET["p"]=="datapermintaanaddaksi"){
					include "datapermintaanaddaksi.php";
				}else if($_GET["p"]=="permintaandel"){
					include "permintaandel.php";
				}else if($_GET["p"]=="angkarandom"){
					include "angkarandom.php";
				}else if($_GET["p"]=="angkarandomdel"){
					include "angkarandomdel.php";
				}else if($_GET["p"]=="simpanangkarandom"){
					include "simpanangkarandom.php";
				}else if($_GET["p"]=="hasilprediksi"){
					include "hasilprediksi.php";
					}else if($_GET["p"]=="hasilprediksiaksi"){
					include "hasilprediksiaksi.php";	
				}else if($_GET["p"]=="simpandistribusi"){
					include "simpandistribusi.php";
				}else if($_GET["p"]=="grafik"){
					include "grafik.php";
				}else if($_GET["p"]=="editproduk"){
					include "editproduk.php";
				}else if($_GET["p"]=="editprodukaksi"){
					include "editprodukaksi.php";
				}else if($_GET["p"]=="produkdel"){
					include "produkdel.php";
				}else if($_GET["p"]=="petunjuk"){
					include "petunjuk.php";	
				}else if($_GET["p"]=="logout"){
					include "logout.php";
				}else if($_GET["p"]=="bantuan"){
					include "bantuan.php";
				}else{
					include "home.php";
				}
				?>

</div>
	
	
	
				<?php 
                }else{
                header("Location:../index.php"); 
				}
				?>
				

<script src="../assets/js/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>	
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
