<?php
include "koneksi.php";
$produk1 = mysql_query("SELECT hasilprediksi FROM hasil WHERE idproduk='1' order by bulan asc");
$produk2 = mysql_query("SELECT hasilprediksi FROM hasil WHERE idproduk='2' order by bulan asc");
$produk3 = mysql_query("SELECT hasilprediksi FROM hasil WHERE idproduk='3' order by bulan asc");
$produk4 = mysql_query("SELECT hasilprediksi FROM hasil WHERE idproduk='4' order by bulan asc");
?>

<div class="content">
<h1>
<i class="fa fa-bar-chart"></i> Grafik Hasil Prediksi
</h1>
<div class='content-post' id='printpage'>
	<script src="../assets/js/Chart.bundle.js"></script>
		
		<div style="margin:0 auto;width:860px;">
        <div class="container">
            <canvas id="produk1" width="100" height="100"></canvas>
        </div>
		<div class="container" style="margin-left:30px;">
			<canvas id="produk2" width="100" height="100"></canvas>
        </div>
		<div class="container">
			<canvas id="produk3" width="100" height="100"></canvas>
        </div>
		<div class="container" style="margin-left:30px;">
			<canvas id="produk4" width="100" height="100"></canvas>
        </div>
		</div>
		
		
		
		
		
		
		
		
		
        <script>
            var ctx = document.getElementById("produk1");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                            label: 'Air Mineral',
                            data: [<?php while ($p = mysql_fetch_array($produk1)) { echo '"' . $p['hasilprediksi'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255,0,193,1)',
                                'rgba(54, 162, 235,1)',
                                'rgba(255, 244, 0,1)',
                                'rgba(91, 121, 229,1)',
                                'rgba(153, 102, 255,1)',
                                'rgba(244,	83,	30, 1)',
                                'rgba(61,249,234, 1)',
                                'rgba(114,242,33, 1)',
                                'rgba(109,111,107, 1)',
                                'rgba(169,	38,	97, 1)',
                                'rgba(150,	145, 28, 1)',
                                'rgba(91, 121, 229, 1)'
                            ],
                            borderColor: [
                                'rgba(240,21,21,1)',
                                'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
								  'rgba(240,21,21,1)',
								   'rgba(240,21,21,1)',
								    'rgba(240,21,21,1)',
									'rgba(240,21,21,1)',
									 'rgba(240,21,21,1)',
									  'rgba(240,21,21,1)',
									   'rgba(240,21,21,1)',
									    'rgba(240,21,21,1)',
										 'rgba(240,21,21,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
		
		<script>
            var ctx = document.getElementById("produk2");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                            label: 'Beras Anak Daro',
                            data: [<?php while ($p = mysql_fetch_array($produk2)) { echo '"' . $p['hasilprediksi'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255,0,193,1)',
                                'rgba(54, 162, 235,1)',
                                'rgba(255, 244, 0,1)',
                                'rgba(91, 121, 229,1)',
                                'rgba(153, 102, 255,1)',
                                'rgba(244,	83,	30, 1)',
                                'rgba(61,249,234, 1)',
                                'rgba(114,242,33, 1)',
                                'rgba(109,111,107, 1)',
                                'rgba(169,	38,	97, 1)',
                                'rgba(150,	145, 28, 1)',
                                'rgba(91, 121, 229, 1)'
                            ],
                            borderColor: [
                                'rgba(240,21,21,1)',
                                'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
								  'rgba(240,21,21,1)',
								   'rgba(240,21,21,1)',
								    'rgba(240,21,21,1)',
									'rgba(240,21,21,1)',
									 'rgba(240,21,21,1)',
									  'rgba(240,21,21,1)',
									   'rgba(240,21,21,1)',
									    'rgba(240,21,21,1)',
										 'rgba(240,21,21,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
		
		
		
        <script>
            var ctx = document.getElementById("produk3");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                            label: 'Tepung Terigu',
                            data: [<?php while ($p = mysql_fetch_array($produk3)) { echo '"' . $p['hasilprediksi'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255,0,193,1)',
                                'rgba(54, 162, 235,1)',
                                'rgba(255, 244, 0,1)',
                                'rgba(91, 121, 229,1)',
                                'rgba(153, 102, 255,1)',
                                'rgba(244,	83,	30, 1)',
                                'rgba(61,249,234, 1)',
                                'rgba(114,242,33, 1)',
                                'rgba(109,111,107, 1)',
                                'rgba(169,	38,	97, 1)',
                                'rgba(150,	145, 28, 1)',
                                'rgba(91, 121, 229, 1)'
                            ],
                            borderColor: [
                                'rgba(240,21,21,1)',
                                'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
								  'rgba(240,21,21,1)',
								   'rgba(240,21,21,1)',
								    'rgba(240,21,21,1)',
									'rgba(240,21,21,1)',
									 'rgba(240,21,21,1)',
									  'rgba(240,21,21,1)',
									   'rgba(240,21,21,1)',
									    'rgba(240,21,21,1)',
										 'rgba(240,21,21,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
		     <script>
            var ctx = document.getElementById("produk4");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                            label: 'Gas LPG 12 Kg',
                            data: [<?php while ($p = mysql_fetch_array($produk4)) { echo '"' . $p['hasilprediksi'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255,0,193,1)',
                                'rgba(54, 162, 235,1)',
                                'rgba(255, 244, 0,1)',
                                'rgba(91, 121, 229,1)',
                                'rgba(153, 102, 255,1)',
                                'rgba(244,	83,	30, 1)',
                                'rgba(61,249,234, 1)',
                                'rgba(114,242,33, 1)',
                                'rgba(109,111,107, 1)',
                                'rgba(169,	38,	97, 1)',
                                'rgba(150,	145, 28, 1)',
                                'rgba(91, 121, 229, 1)'
                            ],
                            borderColor: [
                                'rgba(240,21,21,1)',
                                'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
                                 'rgba(240,21,21,1)',
								  'rgba(240,21,21,1)',
								   'rgba(240,21,21,1)',
								    'rgba(240,21,21,1)',
									'rgba(240,21,21,1)',
									 'rgba(240,21,21,1)',
									  'rgba(240,21,21,1)',
									   'rgba(240,21,21,1)',
									    'rgba(240,21,21,1)',
										 'rgba(240,21,21,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
		
</div>
</div>