<?php
$results_data = array();
$race_data    = array();
foreach( $raceEntries as $key => $entry )
{
	//echo('<pre>Pos:'.$key.'<br/>Attrs:'.print_r($entry->getAttributes(null),1).'</pre>');
	array_push($results_data,$entry->getAttributes(null));
	$race_data[$entry->orden] = $entry->getAttributes(null);
}

foreach( $results as $key => $result )
{
	$bet_name = strtolower($result->nombre);
	$bets2chop = array('ganador','segundo','tercero');
	if( in_array($bet_name, $bets2chop) )
	{
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
				<td class="mark"><?php echo(sprintf('%d&ordm;',$data['puesto']))?></td>
				<td><?php echo(sprintf('%d',$data['orden']))?></td>
				<td><?=(!empty($data['difere']))?$data['difere']:'&nbsp;-&nbsp;';?></td>
				<td>
				<?php
				if( !empty($data['apuestas']['ganador']) ){
					echo(sprintf('%.2f',$data['apuestas']['ganador']));
				}
				else{ 
					echo('&nbsp;'); 
				} ?>
				</td>
				<td>
				<?php
				if( !empty($data['apuestas']['segundo']) ){
					echo(sprintf('%.2f',$data['apuestas']['segundo']));
				}
				else{ 
					if( !empty($data['apuestas']['ganador']) ) echo('&nbsp;-&nbsp;');
					else echo('&nbsp;'); 
				} ?>
				</td>
				<td>
				<?php
				if( !empty($data['apuestas']['tercero']) ){
					echo(sprintf('%.2f',$data['apuestas']['tercero']));
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
</div>
<br/>
<div class="race-results">
	<table class="content" id="ERR">
		<thead>
			<tr><th colspan="3">DIVIDENDOS</th></tr>
		</thead>
		<?php
		foreach( $results as $apuesta ){
			$ordenes = explode(' ',$apuesta['ordenes']);
			for($i = 0; $i < count($ordenes); $i++)
				$ordenes[$i] = ltrim($ordenes[$i],' 0');
			$html = "\t\t\t".'<tr><td>'.$apuesta['nombre'].'</td>';
			$html.= '<td>'.implode(' - ',$ordenes).'</td>';
			$html.= '<td style="text-align:center;">';
			if( !empty($apuesta['importe']) ){
				$html.= sprintf('%.2f',$apuesta['importe']);
			} else $html.= strtoupper($apuesta['descripcio']);
			$html.= '</td>'."\n\t\t\t".'</tr>';
			echo $html;
		}
		?>
	</table>
</div>