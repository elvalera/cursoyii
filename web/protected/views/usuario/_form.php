<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_completo'); ?>
		<?php echo $form->textField($model,'nombre_completo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_completo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_idioma'); ?>
		<?php echo $form->textField($model,'fk_idioma'); ?>
		<?php echo $form->error($model,'fk_idioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_pais'); ?>
		<?php echo $form->textField($model,'fk_pais'); ?>
		<?php echo $form->error($model,'fk_pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_pregunta_secreta'); ?>
		<?php echo $form->textField($model,'fk_pregunta_secreta'); ?>
		<?php echo $form->error($model,'fk_pregunta_secreta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuesta_secreta'); ?>
		<?php echo $form->textField($model,'respuesta_secreta',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'respuesta_secreta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto_perfil'); ?>
		<?php echo $form->textField($model,'foto_perfil',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'foto_perfil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen_fondo'); ?>
		<?php echo $form->textField($model,'imagen_fondo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'imagen_fondo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sitioweb'); ?>
		<?php echo $form->textField($model,'sitioweb',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'sitioweb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biografia'); ?>
		<?php echo $form->textField($model,'biografia',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'biografia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->