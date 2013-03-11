<?php

class OpHogaresController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new OpHogares;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['OpHogares'])) {
            $model->attributes = $_POST['OpHogares'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

//    public function actionCreate() {
//        Yii::import('ext.multimodelform.MultiModelForm');
//
//        $model = new OpVivienda;
//
//        $member = new OpHogares;
//        $validatedMembers = array();  //ensure an empty array
//
//        if (isset($_POST['OpHogares'])) {
//            $model->attributes = $_POST['OpHogares'];
//
//            if (//validate detail before saving the master
//                    MultiModelForm::validate($member, $validatedMembers, $deleteItems) &&
//                    $model->save()
//            ) {
//                //the value for the foreign key 'groupid'
//                $masterValues = array('groupid' => $model->id);
//                if (MultiModelForm::save($member, $validatedMembers, $deleteMembers, $masterValues))
//                    $this->redirect(array('view', 'id' => $model->id));
//            }
//        }
//
//        $this->render('create', array(
//            'model' => $model,
//            //submit the member and validatedItems to the widget in the edit form
//            'member' => $member,
//            'validatedMembers' => $validatedMembers,
//        ));
//    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
//	public function actionUpdate($id)
//	{
//	$firephp = FirePHP::getInstance(true);
//	
//            $model=$this->loadModel($id);
//                    $firephp->log($model, 'firemodel');
//                    Yii::trace(CVarDumper::dumpAsString($model),'tracemodel');
//
//		// Uncomment the following line if AJAX validation is needed
//		// $this->performAjaxValidation($model);
//                                        $firephp->log('loquesea1', 'POST_OpHogares');
//
//		if(isset($_POST['OpHogares']))
//		{
//                    $firephp->log($_POST['OpHogares'], 'POST_OpHogares');
//                    $firephp->log('loquesea2', 'POST_OpHogares');
//
//			$model->attributes=$_POST['OpHogares'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
//		}
//
//		$this->render('update',array(
//			'model'=>$model,
//		));
//	}


    public function actionUpdate($id) {
        $firephp = FirePHP::getInstance(true);
        $firephp->log($_POST, 'OpHogaresController actionUpdate');
        Yii::import('ext.multimodelform.MultiModelForm');
        $vimodel = OpViviendas::model()->findByPk($id); //the Group model
        $member = new OpHogares;
        $validatedMembers = array(); //ensure an empty array

        if (isset($_POST['OpHogares'])) {
            $vimodel->attributes = $_POST['OpHogares'];

            //the value for the foreign key 'groupid'
            $masterValues = array('id_bien_afectado' => $vimodel->id_bien_afec);

            if (//Save the master model after saving valid members
                    MultiModelForm::save($member, $validatedMembers, $deleteMembers, $masterValues) &&
                    $vimodel->save()
            ) {

                $msg = 'Se guardo exitosamente';
                $firephp->log($msg, 'OpHogaresController actionUpdate');

                echo "<script type='text/javascript'>alert('{$msg}');</script>";
                $this->redirect(array('view', 'id' => $vimodel->id_bien_afec));
            }
        }

        $this->render('update', array(
            'model' => $vimodel,
            //submit the member and validatedItems to the widget in the edit form
            'member' => $member,
            'validatedMembers' => $validatedMembers,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('OpHogares');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new OpHogares('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['OpHogares']))
            $model->attributes = $_GET['OpHogares'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return OpHogares the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = OpHogares::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param OpHogares $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'op-hogares-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
