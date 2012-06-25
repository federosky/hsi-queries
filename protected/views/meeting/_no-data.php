<?php
echo('<pre>'.Yii::t('translations',$id).'</pre>');
echo(CHtml::image('images/'.$id.'.png', Yii::t('translations', $id), $htmlOptions));