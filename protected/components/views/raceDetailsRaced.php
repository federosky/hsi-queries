<div class="race-detail-header clearfix">
	<div class="column-header standing">Puesto</div>
	<div class="column-header difference">Diferencia</div>
	<div class="column-header order">N&ordm;</div>
	<div class="column-header spc">S.P.C.</div>
	<div class="column-header spc-weight">Peso</div>
	<div class="column-header spc-age">Edad</div>
	<div class="column-header horseshoe">Herraje</div>
	<div class="column-header jockey">Jockey</div>
	<div class="column-header jockey-weight">Peso</div>
	<div class="column-header last-ones">4 &Uacute;ltimas</div>
	<div class="column-header would-paid">Pagar&iacute;a</div>
</div>
<div class="race-detail">
	<?php $raceEntries = $this->getRaceDetails()?>
	<?php if(!empty($raceEntries)):?>
		<table>
			<tbody>
			<?php foreach ($raceEntries as $entry):?>
				<?php if( empty($entry->puesto) ) continue;?>
				<tr>
					<td class="standing"><?php echo($entry->puesto)?></td>
					<td class="difference"><?php echo($entry->difere);?></td>
					<td class="order"><?php echo(ltrim($entry->orden,'0'))?></td>
					<td class="spc">
					<?php echo strtolower($entry->ejemplar)?>
					<?php if( !empty($entry->tratamient) ):?>
						<div class="tratado">&nbsp;<?php echo($entry->tratamient)?></div>
					<?php endif;?>
					</td>
					<td class="spc-weight"><?php echo($entry->kiloscab)?></td>
					<td class="spc-age"><?php echo($entry->edadeje)?></td>
					<td class="horseshoe"><?php echo $entry->herraje?></td>
					<td class="jockey<?php echo((is_numeric($entry->categojoc))?sprintf('%d',$entry->categojoc):'')?>"><?php echo strtolower($entry->jockey)?></td>
					<td class="jockey-weight"><?php echo formatWeight($entry->kilosrea)?></td>
					<td class="last-ones"><?php echo($entry->ultimas)?></td>
					<td class="would-paid"><?php echo($entry->divipa)?></td>
				</tr>
			<?php endforeach;?>
			</tbody>
			<tfoot></tfoot>
		</table>
	<?php endif?>
</div>