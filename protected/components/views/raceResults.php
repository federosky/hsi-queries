<?php
$results_data = array();
$race_data    = array();
foreach ($raceEntries as $key => $entry) {
	// echo('<pre>Pos:'.$key.' >> Attrs:'.print_r($entry->getAttributes(null),1).'</pre>');
	array_push($results_data,$entry->getAttributes(null));
	$race_data[$entry->orden] = $entry->getAttributes(null);
}

foreach ($results as $key => $result) {
	$bet_name = strtolower($result->nombre);
	$bets2chop = array('ganador','segundo','tercero');
	if (in_array($bet_name, $bets2chop)) {
		$race_data[$result->ordenes]['apuestas'][strtolower($result->nombre)] = $result->importe;
		unset($results[$key]);
	}
}

$other_bets = array();
foreach( $results as $key => $result ){
	$new_key = str_replace(' ','_',$result->nombre);
	$other_bets[$new_key] = $result;
}
?>
<div class="race-results">
	<table>
		<thead>
			<tr>
				<th colspan="2">Marcador</th>
				<th>Diferencia</th>
				<th>Ganador</th>
				<th>Segundo</th>
				<th>Tercero</th>
			</tr>
		</thead>
		<tbody>
		<?php $count = 1;?>
		<?php foreach( $race_data as $order => $data):?>
			<tr>
				<td class="standing"><?php echo(sprintf('%d&ordm;',$data['puesto']))?></td>
				<td class="spc"><?php echo($data['ejemplar'])?></td>
				<td class="difference"><?php echo(!empty($data['difere']))?$data['difere']:'&nbsp;-&nbsp;';?></td>
				<td class="winner">
				<?php
				if (!empty($data['apuestas']['ganador'])) {
					echo(sprintf('%.2F',$data['apuestas']['ganador']));
				} else {
					echo('&nbsp;');
				} ?>
				</td>
				<td class="second">
				<?php
				if (!empty($data['apuestas']['segundo'])) {
					echo(sprintf('%.2F',$data['apuestas']['segundo']));
				} else {
					if( !empty($data['apuestas']['ganador']) ) echo('&nbsp;-&nbsp;');
						else echo('&nbsp;');
				} ?>
				</td>
				<td class="third">
				<?php
				if( !empty($data['apuestas']['tercero']) ){
					echo(sprintf('%.2F',$data['apuestas']['tercero']));
				}
				else{
					if( $count <= 3 ) echo('&nbsp;-&nbsp;');
					else echo('&nbsp;');
				} ?>
				</td>
			</tr>
			<?php $count++;?>
		<?php endforeach;?>
		</tbody>
		<tfoot></tfoot>
	</table>
	<br/>
	<table class="content" id="bets">
		<thead>
			<tr><th colspan="3">DIVIDENDOS</th></tr>
		</thead>
		<?php
		foreach( $results as $apuesta ){
			$ordenes = explode(' ',$apuesta['ordenes']);
			for($i = 0; $i < count($ordenes); $i++)
				$ordenes[$i] = ltrim($ordenes[$i],' 0');
			$html = "\t\t\t".'<tr><td class="bet-name">'.$apuesta['nombre'].'</td>';
			$html.= '<td class="bet-orders">'.implode(' - ',$ordenes).'</td>';
			$html.= '<td class="bet-pay">';
			if( !empty($apuesta['importe']) ){
				$html.= sprintf('%.2F',$apuesta['importe']);
			} else $html.= strtoupper($apuesta['descripcio']);
			$html.= '</td>'."\n\t\t\t".'</tr>';
			echo $html;
		}
		?>
	</table>
</div>