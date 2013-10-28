<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'userid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'active',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'activedescription',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'lastloginIP',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'lastloginDate',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'lastloginBrowser',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'personid',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
