<div class="race-detail">
	<?php $raceEntries = $this->getRaceDetails()?>
	<?php if(!empty($raceEntries)):?>
		<table>
			<thead>
				<tr>
					<th>N&ordm;</th>
					<th>S.P.C.</th>
					<th>Peso</th>
					<th>Edad</th>
					<th>Herraje</th>
					<th>Jockey</th>
					<th>Peso</th>
					<th>&Uacute;ltimas</th>
					<th>Stud</th>
					<th>Cuidador</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($raceEntries as $entry):?>
			<?php if( !empty($entry->puesto) && !is_numeric($entry->puesto) ):?>
				<tr class="not-running">
					<td class="order"><?php echo(ltrim($entry->orden,'0'))?></td>
					<td class="spc"><?php echo strtolower($entry->ejemplar)?></td>
					<td class="kg_spc retired" colspan="8">(<?php echo(Yii::t('translations','Retired').':'.$entry->puesto)?>)</td>
				</tr>
			<?php else:?>
				<tr>
					<td class="order"><?php echo(ltrim($entry->orden,'0'))?></td>
					<td class="spc">
					<?php echo strtolower($entry->ejemplar)?>
					<?php if( !empty($entry->tratamient) ):?>
						<div class="tratado">&nbsp;<?php echo($entry->tratamient)?></div>
					<?php endif;?>
					</td>
					<td class="kg_spc"><?php echo $entry->kiloscab?></td>
					<td class="spc-age"><?php echo($entry->edadeje)?></td>
					<td class="herraje"><?php echo $entry->herraje?></td>
					<td class="jockey<?php echo((is_numeric($entry->categojoc))?sprintf('%d',$entry->categojoc):'')?>"><?php echo strtolower($entry->jockey)?></td>
					<td class="kg_jockey"><?php echo formatWeight($entry->kilosrea)?></td>
					<td class=""><?php echo($entry->ultimas)?></td>
					<td class=""><?php echo($entry->caballer)?></td>
					<td class=""><?php echo($entry->cuidador)?></td>
				</tr>
			<?php endif;?>
			<?php endforeach;?>
			</tbody>
			<tfoot></tfoot>
		</table>
	<?php endif?>
</div>