<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div id="content">
		<?php echo $content; ?>
		<div id="content-footer" class="clearfix">
			<div id="button-back-container">
				<?php echo CHtml::link(CHtml::image('images/button-back.png','Back'),'javascript:history.back(-1)', array('htmlEncode'=>false))?>
			</div>
		</div>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>