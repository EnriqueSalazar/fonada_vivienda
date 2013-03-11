<?php
/* @var $this Controller */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vivienda_header.png" alt="<?php echo CHtml::encode($this->pageTitle); ?>"></center></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Inicio', 'url' => array('/site/index')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//                        array('label' => Yii::app()->user->Operador, 'url' => array('/site/contact')),
                        array('label' => 'Usuario', 'url' => array('/Users'), 'visible' => !(empty(Yii::app()->user->Operador)) and (Yii::app()->user->Operador=='fonada')),
                        array('label' => 'Base Reunidos', 'url' => array('/Query/admin'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Registro de Informacion', 'url' => array('/opViviendas/admin'), 'visible' => !Yii::app()->user->isGuest),
//                        array('label' => 'ReuViviendas', 'url' => array('/opReunidos'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Entrar', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Salir (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'homeLink' => CHtml::link('Inicio', Yii::app()->homeUrl),
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Fondo Adaptación<br/>
<!--                Copyright &copy; <?php //echo date('Y');  ?> by My Company.<br/>-->
                <!--                All Rights Reserved.<br/>-->
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
