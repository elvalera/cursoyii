<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'usuario',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>

	<?php echo $form->textFieldGroup($model,'correo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>80)))); ?>

	<?php echo $form->textFieldGroup($model,'nombre_completo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>256)))); ?>

<?php echo $form->dropDownListGroup( $model,'fk_idioma',
array( 'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
'widgetOptions' => array(
'data' => CHtml::listData(Idioma::model()->findAll(), 'id_idioma', 'idioma'),
'htmlOptions' => array('empty'=> 'Seleccione su idioma', 
//'style'=>'border:1px solid red;'
),
) ) ); ?>
<?php
echo $form->dropDownListGroup($model, 'fk_pais', array('wrapperHtmlOptions' =>
array('class' => 'col-sm-5',),
'widgetOptions' => array(
'data' => CHtml::listData(Pais::model()->findAll(array(
	'order' => 'pais')), 'id_pais', 'pais'),
	'htmlOptions' => array('empty' => 'Seleccione su País'),
)));
?>
<?php echo $form->dropDownListGroup( $model,'fk_pregunta_secreta',
array( 'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
'widgetOptions' => array(
'data' => CHtml::listData(PreguntaSecreta::model()->findAll(), 'id_pregunta_secreta', 'pregunta_secreta'),
'htmlOptions' => array('empty'=> 'Seleccione la Pregunta secreta', 
),
) ) ); ?>

	<?php echo $form->textFieldGroup($model,'respuesta_secreta',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>256)))); ?>

	<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

<?php echo $form->fileFieldGroup($model,'foto_perfil',
	array('wrapperHtmlOptions' => array('class' => 'col-sm-5',), )); 
//maxlen100?>

	<?php echo $form->textFieldGroup($model,'imagen_fondo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->checkBoxGroup($model,'activo'); ?>

	

	<?php echo $form->textFieldGroup($model,'sitioweb',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>60)))); ?>

	<?php echo $form->textFieldGroup($model,'biografia',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

<br/>
<div class="captcha">
<?php if(CCaptcha::checkRequirements()): ?>
<div class="row">
<?php echo $form->labelEx($model,'verifyCode'); ?>
<div>
<?php $this->widget('CCaptcha'); ?>
<?php echo $form->textField($model,'verifyCode'); ?>
</div>
<div class="hint">Por favor, introduzca las letras tal como se muestran en la imagen de arriba.
<br/>Las letras no distinguen entre mayúsculas y minúsculas.
</div>
<?php echo $form->error($model,'verifyCode'); ?>
</div>
<?php endif; ?>


<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
