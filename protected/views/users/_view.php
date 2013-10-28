<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userid),array('view','id'=>$data->userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activedescription')); ?>:</b>
	<?php echo CHtml::encode($data->activedescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastloginIP')); ?>:</b>
	<?php echo CHtml::encode($data->lastloginIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastloginDate')); ?>:</b>
	<?php echo CHtml::encode($data->lastloginDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastloginBrowser')); ?>:</b>
	<?php echo CHtml::encode($data->lastloginBrowser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personid')); ?>:</b>
	<?php echo CHtml::encode($data->personid); ?>
	<br />

	*/ ?>

</div>