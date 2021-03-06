<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'users-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'usuario'); ?>
<?php echo $form->textField($model, 'usuario', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'usuario'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password', array('size' => 11, 'maxlength' => 11)); ?>
<?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password_repeat'); ?>
<?php echo $form->passwordField($model, 'password_repeat', array('size' => 11, 'maxlength' => 11)); ?>
<?php echo $form->error($model, 'password_repeat'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
<?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tipo'); ?>
<?php echo $form->textField($model, 'tipo', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'tipo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'operador'); ?>
<?php echo $form->textField($model, 'operador', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'operador'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'lastlogin'); ?>
<?php //echo $form->textField($model, 'lastlogin'); ?>
<?php //echo $form->error($model, 'lastlogin'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'creado'); ?>
<?php //echo $form->textField($model, 'creado'); ?>
<?php //echo $form->error($model, 'creado'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'actualizado'); ?>
<?php //echo $form->textField($model, 'actualizado'); ?>
<?php //echo $form->error($model, 'actualizado'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->