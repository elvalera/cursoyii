<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_completo'); ?>
		<?php echo $form->textField($model,'nombre_completo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_idioma'); ?>
		<?php echo $form->textField($model,'fk_idioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_pais'); ?>
		<?php echo $form->textField($model,'fk_pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_pregunta_secreta'); ?>
		<?php echo $form->textField($model,'fk_pregunta_secreta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respuesta_secreta'); ?>
		<?php echo $form->textField($model,'respuesta_secreta',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_perfil'); ?>
		<?php echo $form->textField($model,'foto_perfil',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagen_fondo'); ?>
		<?php echo $form->textField($model,'imagen_fondo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sitioweb'); ?>
		<?php echo $form->textField($model,'sitioweb',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biografia'); ?>
		<?php echo $form->textField($model,'biografia',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->