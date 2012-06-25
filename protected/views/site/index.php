<?php $this->pageTitle = Yii::app()->name; ?>
<?php
$this->widget('zii.widgets.CMenu',array(
	'htmlOptions' => array(
		'class' => 'navigation-menu'
	),
	'encodeLabel' => false,
	'items' => array(
		array(
			'label' => CHtml::image('images/nav-search-comingsoon.png', '.1 Buscar'),
		    //'url' => array('site/page'),//view' => 'nav-search'),
			'linkOptions' => array('class' => 'nav-search'),
		),
		array(
			'label' => CHtml::image('images/nav-view.png', '.2 Visualizar'),
			'url' => array('meeting/navigate'),
			'linkOptions' => array('class' => 'nav-view')
		),
		array(
			'label' => CHtml::image('images/nav-news-comingsoon.png', '.3 News'),
			//'url' => array('site/page'), //'view' => 'nav-news'),
			'linkOptions' => array('class' => 'nav-news')
		)
	)
)); ?>
