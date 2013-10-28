<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <div class="row">
            <?= $form->labelEx($model,'username'); ?>
            <?= $form->textField($model,'username'); ?>
            <?= $form->error($model,'username'); ?>
        </div>
	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>256)); ?>

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
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
