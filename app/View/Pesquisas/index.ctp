<?php 
echo $this->Html->script('jquery-2.1.4.js');
echo $this->Html->script('exporting.js');
echo $this->Html->script('highcharts.js');

?>
	
</script> <script> $(function () 
{ 
	$('#genero').highcharts({ 
		chart: { 
		plotBackgroundColor: null, 
		plotBorderWidth: 1,//null, 
		plotShadow: false }, 
		title: { 
			text: 'Gênero sexual dos entrevistados' 
			}, 
			tooltip: { 
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' 
					}, 
					plotOptions: { 
						pie: { 
							allowPointSelect: true, 
							cursor: 'pointer', 
							dataLabels: { 
								enabled: true, 
								format: '<b>{point.name}</b>: {point.percentage:.1f} %', 
								style: { 
									color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black' 
									} 
								} 
							}
						}, 
						series: [ 
						{ type: 'pie', 
						name: 'Sexo', 
						data: [ 
						<?php 
						foreach ($genero AS $key => $value) {
							 echo "['" . $key . "'," . $value . "],"; 
						} 
						?> 
						]
					} 
				] 
			}); 
				$('#faixa_etaria').highcharts({ 
					chart: { 
						type: 'column' 
						}, 
						title: { 
							text: 'Faixa etária dos entrevistados' 
							}, 
							xAxis: { 
								categories: [ 
								<?php foreach ($faixa_etaria AS $key => $value) {
									echo "'" . $key . "',"; 
								} 
								?> 
								]}, 
								yAxis: { 
									min: 0, 
									title: { 
										text: 'Total de pessoas' 
										} 
									}, 
									plotOptions: { 
										column: { 
										pointPadding: 0.2, 
										borderWidth: 0 
										} 
									}, 
									series: [ 
									{ 
										name: 'Faixa etária dos entrevistados', 
										data: [<?php 
										foreach ($faixa_etaria AS $key => $value) {
											echo "['" . $key . "'," . $value . "],"; 
										} 
										?>], 
										dataLabels: { 
											enabled: false, 
											rotation: -90, 
											color: '#333', 
											align: 'right', 
											x: 4, 
											y: 10, 
											style: { 
												fontSize: '13px', 
												fontFamily: 'Verdana, sans-serif' 
												}
											} 
										} 
									] 
								}); 
								$('#localidade').highcharts({ 
									chart: { type: 'column' 
									}, 
									title: { 
										text: 'Local de origem dos entrevistados' 
										}, 
										xAxis: { 
											categories: [ 
											<?php 
											foreach ($localidade AS $key => $value) {
												$value = utf8_encode($value); 
												$key = utf8_encode($key); 
												echo "'" . $key . "',"; 
											} 
											?> 
											]}, 
										yAxis: { 
											min: 0, 
											title: { 
											text: 'Total de pessoas' 
											} 
										}, 
									plotOptions: { 
										column: { 
											pointPadding: 0.2, 
											borderWidth: 0 
											} 
										}, 
									series: [ 
									{ 
										name: 'Localidade', 
										data: [<?php 
										foreach ($localidade AS $key => $value) {
											$key = utf8_encode($key); 
											$value = utf8_encode($value); 
											echo "['" . $key . "'," . $value . "],"; 
										} ?>], 
										dataLabels: { 
											enabled: false, 
											rotation: -90, 
											color: '#333', 
											align: 'right', 
											x: 4, 
											y: 10, 
											style: { 
												fontSize: '13px', 
												fontFamily: 'Verdana, sans-serif' 
												} 
											} 
										} 
									] 
								}); 
							}); 
						</script> 
						<div> 
							<?php echo $this->Html->link('Inserir novo formulário', array('controller' => 'pesquisas', 'action' => 'inserir', 'full_base' => true)); 
							?> 
						</div> 
						<div id="genero" style="min-width: 310px; height: 400px; margin: 0"></div> 
						<div id="faixa_etaria" style="min-width: 310px; height: 400px; margin: 0 auto">
						</div> <div id="localidade" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

