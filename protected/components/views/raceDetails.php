<div class="race-detail-header clearfix">
	<div class="column-header stud">Stud</div>
	<div class="column-header last-ones">4 &Uacute;ltimas</div>
	<div class="column-header order">N&ordm;</div>
	<div class="column-header spc">S.P.C.</div>
	<div class="column-header spc-weight">Peso</div>
	<div class="column-header spc-age">Edad</div>
	<div class="column-header horseshoe">Herraje</div>
	<div class="column-header jockey">Jockey</div>
	<div class="column-header jockey-weight">Peso</div>
	<div class="column-header keeper">Cuidador</div>
</div>
<div class="race-detail">
	<?php $raceEntries = $this->getRaceDetails()?>
	<?php if(!empty($raceEntries)):?>
		<table>
			<tbody>
			<?php foreach ($raceEntries as $entry):?>
			<?php if( !empty($entry->puesto) && !is_numeric($entry->puesto) ):?>
				<tr class="not-running">
					<td class="stud">&nbsp;</td>
					<td class="last-ones">&nbsp;</td>
					<td class="order"><?php echo(ltrim($entry->orden,'0'))?></td>
					<td class="spc"><?php echo strtolower($entry->ejemplar)?></td>
					<td class="kg_spc retired" colspan="6">(<?php echo(Yii::t('translations','Retired').':'.$entry->puesto)?>)</td>
				</tr>
			<?php else:?>
				<tr>
					<td class="stud"><?php echo($entry->caballer)?></td>
					<td class="last-ones"><?php echo($entry->ultimas)?></td>
					<td class="order"><?php echo(ltrim($entry->orden,'0'))?></td>
					<td class="spc">
					<?php echo strtolower($entry->ejemplar)?>
					<?php if( !empty($entry->tratamient) ):?>
						<div class="tratado">&nbsp;<?php echo($entry->tratamient)?></div>
					<?php endif;?>
					</td>
					<td class="spc-weight"><?php echo $entry->kiloscab?></td>
					<td class="spc-age"><?php echo($entry->edadeje)?></td>
					<td class="horseshoe"><?php echo $entry->herraje?></td>
					<td class="jockey<?php echo((is_numeric($entry->categojoc))?sprintf('%d',$entry->categojoc):'')?>"><?php echo strtolower($entry->jockey)?></td>
					<td class="jockey-weight"><?php echo formatWeight($entry->kilosrea)?></td>
					<td class="keeper"><?php echo($entry->cuidador)?></td>
				</tr>
			<?php endif;?>
			<?php endforeach;?>
			</tbody>
			<tfoot></tfoot>
		</table>
	<?php endif?>
</div>