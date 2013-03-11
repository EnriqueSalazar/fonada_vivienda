<?php

class CodigodaneController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionList() {
        echo Yii::trace(CVarDumper::dumpAsString('Entrando a actionList'), 'vardump');
        if (Yii::app()->request->isAjaxRequest) {
            echo Yii::trace(CVarDumper::dumpAsString('Entrando a if en actionList'), 'vardump');
//            echo Yii::trace(CVarDumper::dumpAsString(), 'vardump');

            $queryvar = "";
            $queryvar.="depto_dane='";
            $queryvar.=$_GET['selected'];
            $queryvar.="'";

            $registro = Codigodane::model()->findAll($queryvar);
            $munis = array();
            echo Yii::trace(CVarDumper::dumpAsString($registro), 'vardump');

            foreach ($registro as $muni) {
                echo Yii::trace(CVarDumper::dumpAsString($muni), 'vardump');

                $munis[] = array('label' => $muni->muni_dane, 'value' => $muni->codigodane);
            }

            echo json_encode($munis);
            Yii::app()->end();
        } else {
            throw new CHttpException(400, 'Invalid request.');
        }
    }

    public function actionDynamicmuni() {
        $firephp = FirePHP::getInstance(true);
        $firephp->log('enters actionDynamicmuni');
        $firephp->log($_POST, 'actionDynamicmuni POST');
        $firephp->log($_POST['OpViviendas']['depto'], 'actionDynamicmuni POST OpViviendas depto');


        $data = Codigodane::model()->findAll('depto_dane=:depto_dane', array(':depto_dane' => $_POST['OpViviendas']['depto']));
//        $firephp->log($data, 'actionDynamicmuni data 1');

        $data = CHtml::listData($data, 'muni_dane', 'muni_dane');
//        $firephp->log($data, 'actionDynamicmuni data 2');

        foreach ($data as $value => $muni_dane) {
//            $firephp->log(CHtml::tag('option', array('value' => $value), CHtml::encode($muni_dane), true), 'actionDynamicmuni return');
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($muni_dane), true);
        }
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}