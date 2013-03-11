<?php

class OpViviendasController extends Controller {

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
//	public function accessRules()
//	{
//		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array('index','view'),
//				'users'=>array('@'),
//			),
//			array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
//				'users'=>array('@'),
//			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
//		);
//	}

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
        $model = new OpViviendas;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['OpViviendas'])) {
            $model->attributes = $_POST['OpViviendas'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_bien_afec));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $firephp = FirePHP::getInstance(true);
        $firephp->log($_POST, 'OpViviendasController actionUpdate POST');
        $model = $this->loadModel($id);
        Yii::log("OpViviendasController actionUpdate Model", CLogger::LEVEL_WARNING);

        $firephp->log($model, 'OpViviendasController actionUpdate $model');
        echo Yii::trace('OpViviendasController actionUpdate 1');

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['OpViviendas'])) {
            echo Yii::trace(CVarDumper::dumpAsString($_POST), 'OpViviendasController actionUpdate $_POST');
            Yii::log("OpViviendasController actionUpdate POST OpViviendas", CLogger::LEVEL_WARNING);
            $firephp->log($_POST['OpViviendas'], 'OpViviendasController actionUpdate $_POST[OpViviendas]');

            $model->attributes = $_POST['OpViviendas'];
            $postdepto = $model->depto;
            $postmuni = $model->muni;
            $model->codigodane = Codigodane::model()->findByAttributes(array('depto_dane' => $postdepto, 'muni_dane' => $postmuni))->codigodane;

            $firephp->log($model->codigodane, 'OpViviendasController actionUpdate model->codigodane');



            $firephp->log($model->attributes, 'OpViviendasController actionUpdate $model->attributes');

            // $firephp->log($model->save(false), 'OpViviendasController actionUpdate $model->save()');
//            $result = $model->save(false);
//            var_dump($result); // check if save was successful
//            if (!$result)
//                var_dump($model->getErrors()); // show errors if save as not successful
//            die(); // exit so we'll see our debug messages
            if ($model->save()) {
                $firephp->log('OpViviendasController actionUpdate $model->save(false)');
                Yii::log("OpViviendasController actionUpdate model save true", CLogger::LEVEL_WARNING);

                $this->redirect(array('view', 'id' => $model->id_bien_afec));
            } else {
                Yii::log("OpViviendasController actionUpdate model save false", CLogger::LEVEL_WARNING);

                $firephp->log($model->getErrors(), 'OpViviendasController actionUpdate $model->getErrors');
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionUpdatehogares($id) {
        $firephp = FirePHP::getInstance(true);
        $firephp->log($id, 'Updatehogares_id');

        Yii::import('ext.multimodelform.MultiModelForm');

        $model = $this->loadModel($id);
        $firephp->log($model, 'Updatehogares_model');

        $member = new OpHogares;
//        $firephp->log($member, 'Updatehogares_member');

        $validatedMembers = array(); //ensure an empty array
        $firephp->log($_POST, 'POST');

        if (isset($_POST['OpViviendas'])) {
            $firephp->log($_POST['OpViviendas'], 'POST_OpViviendas');

            $model->attributes = $_POST['OpViviendas'];

            //the value for the foreign key 'groupid'
            $masterValues = array('id_bien_afectado' => $model->id_bien_afec);

//            $firephp->log($deleteMembers, '$deleteMembers');
//            $firephp->log($masterValues, '$masterValues');
//            $firephp->log(, '');


            if (//Save the master model after saving valid members
                    MultiModelForm::save($member, $validatedMembers, $deleteMembers, $masterValues) &&
                    $model->save()
            ) {
//                var_dump($msg); die();

                $this->redirect(array('confirm', 'id' => $id));
            }
        }
//        $firephp->log($member, '$member');
//        $firephp->log($validatedMembers, '$validatedMembers');
//        echo Yii::trace(CVarDumper::dumpAsString($validatedMembers), '$validatedMembers');
        $this->render('updatehogares', array(
            'model' => $model,
            //submit the member and validatedItems to the widget in the edit form
            'member' => $member,
            'validatedMembers' => $validatedMembers,
        ));
    }

    public function actionUploadfoto() {
        $firephp = FirePHP::getInstance(true);
//        $firephp->log($_POST, 'OpViviendasController actionUploadcsv id');
//                $firephp->log($_GET, 'OpViviendasController actionUploadcsv id');
        Yii::import("ext.EAjaxUpload.qqFileUploader");
        $id = $_GET['id'];
//        if (!is_dir(Yii::app()->getBasePath() . "\..\upload\\" . $id)) {
//            $firephp->log(Yii::app()->getBasePath() . "\..\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER NO EXISTE');
//            if (mkdir(Yii::app()->getBasePath() . "\..\upload\\" . $id)) {
//                $firephp->log(Yii::app()->getBasePath() . "\..\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER CREADO EXITOSAMENTE');
//            } else {
//                $firephp->log(Yii::app()->getBasePath() . "\..\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER CREACION FALLO');
//            }
//        } else {
//            $firephp->log(Yii::app()->getBasePath() . "\..\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER SI EXISTE');
//        }
//        $firephp->log($folder, 'OpViviendasController actionUploadcsv id');
//$firephp->log($this->parentId, 'OpViviendasController actionUploadcsv parent');
//        $folder = '../upload/'; // folder for uploaded files
//        $folder = Yii::app()->getBasePath() . "\..\upload\\" . $id . "\\";
        $folder = "upload/" . $id . "/";
//$firephp->log($Yii::app()->getBasePath(), 'OpViviendasController actionUploadfoto basepath');
//$firephp->log(Yii::app()->baseUrl, 'OpViviendasController actionUploadfoto baseUrl');
        $firephp->log($folder, 'OpViviendasController actionUploadcsv folder');
        if (!is_dir($folder)) {
            $firephp->log($folder, 'OpViviendasController actionUploadcsv FOLDER NO EXISTE');
            if (mkdir($folder, 0777, true)) {
                $firephp->log($folder, 'OpViviendasController actionUploadcsv FOLDER CREADO EXITOSAMENTE');
            } else {
                $firephp->log($folder, 'OpViviendasController actionUploadcsv FOLDER CREACION FALLO');
            }
        } else {
            $firephp->log($folder, 'OpViviendasController actionUploadcsv FOLDER SI EXISTE');
        }

//        if (!is_dir($folder . "thumb\\")) {
//            $firephp->log($folder . "thumb\\", 'OpViviendasController actionUploadcsv FOLDER NO EXISTE');
//            if (mkdir($folder . "thumb\\")) {
//                $firephp->log($folder . "thumb\\", 'OpViviendasController actionUploadcsv FOLDER CREADO EXITOSAMENTE');
//            } else {
//                $firephp->log($folder . "thumb\\", 'OpViviendasController actionUploadcsv FOLDER CREACION FALLO');
//            }
//        } else {
//            $firephp->log($folder . "thumb\\", 'OpViviendasController actionUploadcsv FOLDER SI EXISTE');
//        }
//        echo Yii::app()->user->name;
//        echo Yii::app()->user->Operador;
//        echo Yii::app()->user->Rol;
        $firephp->log($folder, 'OpViviendasController actionUploadfoto folder');
//        $firephp->log(Yii::app()->user->Operador, 'OpViviendasController actionUploadcsvYii::app()->user->Operador');
//        $folder = '';
        $allowedExtensions = array("jpg", "pdf"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $firephp->log($result, 'OpViviendasController actionUploadfoto $result');

        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $firephp->log($return, 'OpViviendasController actionUploadfoto $return');

        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
        $firephp->log($return, 'OpViviendasController actionUploadfoto $fileSize');

        $fileName = $result['filename']; //GETTING FILE NAME 
        $firephp->log($result, 'OpViviendasController actionUploadfoto $fileName');

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if ($result['success'] == 1) {
            $firephp->log('OpViviendasController actionUploadfoto iniciando $foto');
            $foto = new OpViviendasFiles;
            $firephp->log($foto->attributes, 'OpViviendasController actionUploadfoto iniciando $foto attributes');
//            $foto->setAttribute('id_bien_afect', $model->id_bien_afec);
//            $firephp->log($foto->attributes, 'OpViviendasController actionUploadfoto modificando $foto attributes');

            $foto->setAttributes(
                    array(
                        'id_bien_afect' => $id,
                        'filename' => $result['filename'],
                        'usuario' => Yii::app()->user->name,
                        'operador' => Yii::app()->user->Operador
                    )
            );
            $firephp->log($foto->attributes, 'OpViviendasController actionUploadfoto modificando $foto attributes');

            if (!$foto->save()) {
                $result['success'] = 0;
                $firephp->log('OpViviendasController actionUploadfoto $foto failed');
            } else {

//                $firephp->log(Yii::getPathOfAlias('webroot') . '/upload/' . $id . '/thumb/', 'OpViviendasController actionUploadfoto webroot');
//                $thumb = Yii::app()->thumb;
//                $thumb->setThumbsDirectory('/upload/' . $id . '/thumb/');
//                $firephp->log($thumb, '0');
//                $fileparts = pathinfo($result['filename']);
//                $filebasename=basename($result['filename'], $fileparts['extension']);
//                $firephp->log($filebasename, 'nombre sin extension');
//                $thumb
//                        ->load(Yii::getPathOfAlias('webroot') . '/upload/' . $id . '/' . $result['filename'])
//                        ->resize(100, 100)
////                        ->crop($area['x'], $area['y'], $area['width'], $area['height'])
//                        ->save($filebasename."gif", "GIF");
//                $firephp->log($thumb, '1');
//                Yii::import("ext.EPhpThumb.EPhpThumb");
//                $firephp->log('OpViviendasController actionUploadfoto iniciando thumb');
//
//                $thumb = Yii::app()->phpThumb->create($folder . $result['filename']);
////                $thumb = new EPhpThumb();
////                $firephp->log($thumb,'0');
////                $thumb->init(); //this is needed
////                $firephp->log($thumb,'1');
////                $thumb->create($folder . $result['filename']);
//                $firephp->log($thumb, '2');
//                $thumb->resize(100, 100);
//                $firephp->log($thumb, '3');
//                $thumb->save($folder . "thumb\\" . $result['filename']);
//                
//                
//                $firephp->log($thumb, 'OpViviendasController actionUploadfoto Yii::app()->thumb');
//                $thumb = Yii::app()->thumb;
//                $firephp->log($thumb, 'OpViviendasController actionUploadfoto Yii::app()->thumb');
//                $thumb->image = $folder . $result['filename'];
//                $firephp->log($thumb->image, 'OpViviendasController actionUploadfoto $thumb->image');
//                $firephp->log($thumb, 'OpViviendasController actionUploadfoto Yii::app()->thumb');                
//                $thumb->directory = $folder . "thumb\\";
//                $firephp->log($thumb->directory, 'OpViviendasController actionUploadfoto $thumb->directory');
//                $thumb->createThumb();
//                $firephp->log('OpViviendasController actionUploadfoto $thumb->createThumb');
//                $thumb->save();
//                $firephp->log('OpViviendasController actionUploadfoto $thumb->save()');
            }
        }
        echo $return; // it's array
    }

    public function actionUploaddocs() {
        $firephp = FirePHP::getInstance(true);
        Yii::import("ext.EAjaxUpload.qqFileUploader");
        $id = $_GET['id'];
        $folder = "upload/" . $id . "/docs/";
        if (!is_dir($folder)) {
            $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER NO EXISTE');
            if (mkdir($folder, 0777, true)) {
                $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER CREADO EXITOSAMENTE');
            } else {
                $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER CREACION FALLO');
            }
        } else {
            $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER SI EXISTE');
        }
        $allowedExtensions = array("pdf"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
        $fileName = $result['filename']; //GETTING FILE NAME 
        if ($result['success'] == 1) {
            $docs = new OpViviendasDocs;
            $docs->setAttributes(
                    array(
                        'id_bien_afect' => $id,
                        'filename' => $result['filename'],
                        'usuario' => Yii::app()->user->name,
                        'operador' => Yii::app()->user->Operador
                    )
            );
            if (!$docs->save()) {
                $result['success'] = 0;
            }
        }
        echo $return; // it's array
    }

    public function actionUploadcsv() {
        $firephp = FirePHP::getInstance(true);
        Yii::import("ext.EAjaxUpload.qqFileUploader");
        $folder = "upload/importcsv/" . Yii::app()->user->Operador . "/";
        if (!is_dir($folder)) {
            $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER NO EXISTE');
            if (mkdir($folder, 0777, true)) {
                $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER CREADO EXITOSAMENTE');
            } else {
                $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER CREACION FALLO');
            }
        } else {
            $firephp->log($folder, 'OpViviendasController actionUploaddoc FOLDER SI EXISTE');
        }
        $allowedExtensions = array("csv"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 1 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
//        $firephp->log($result, 'OpViviendasController actionUploadcsv $result');
        $datahandle = fopen($folder . $result['filename'], "r");
        while (($csvrowafterrow = fgetcsv($datahandle, 3000, ";", "\t")) !== FALSE) {
            $data[] = $csvrowafterrow;
        }
        $firephp->log($data, 'OpViviendasController actionUploadcsv $data fgetcsv');

        $rows = count($data);
//        $firephp->log($rows, 'OpViviendasController actionUploadcsv $rows');
        $fullerrorstring = '';
        $headererrorstring = 'ERRORES ENCONTRADOS' . CHR(10) . 'los siguientes ID_BIEN_AFECTADO no fueron cargados:' . CHR(10);

        if ($rows > 1 and in_array('id_bien_afec', $data[0], true) and !in_array('numero_documento', $data[0], true)) {
            for ($row = 1; $row < $rows; $row++) {
                $fixedrow = str_replace(array("\r\n", "\n", "\r", "NULL"), "", $data[$row]);
//                $firephp->log($fixedrow, 'OpViviendasController actionUploadcsv $fixedrow');
                $model = OpViviendas::model()->findByPk($fixedrow[0]);
                if (empty($model) == false) {
                    for ($index = 0; $index < count($fixedrow); $index++) {
                        $isempty = empty($fixedrow[$index]);
                        if (($isempty == false) or ($fixedrow[$index] === '0')) {
                            $firephp->log($data[0][$index] . ' => ' . $fixedrow[$index]);
                            $model->$data[0][$index] = $fixedrow[$index];
                        }
                    }
                    $firephp->log($model->getAttributes(), 'OpViviendasController actionUploadcsv ' . $fixedrow[0] . ' $model->getAttributes()');
                    $model->save();
                    $errors = $model->getErrors();
                    if (empty($errors) == false)
                        $fullerrorstring = $fullerrorstring . chr(10) . $data[0][0] . chr(32) . $fixedrow[0] . chr(32) . 'contiene los siguentes errores:' . chr(10);
                    foreach ($errors as $errorkey => $errorvalue) {
                        $firephp->log($errorkey . ' => ' . $errorvalue[0], 'OpViviendasController actionUploadcsv' . chr(32) . $fixedrow[0] . chr(32) . 'Errors');
                        $fullerrorstring = $fullerrorstring . chr(32) . chr(32) . chr(91) . $errorkey . chr(93) . chr(32) . $errorvalue[0] . chr(10);
                    }
                } else {
                    if (empty($fixedrow[0]) == false) {
                        $firephp->log($fixedrow, 'OpViviendasController actionUploadcsv $fixedrow emptymodel');
                        $fullerrorstring = $fullerrorstring . chr(10) . $data[0][0] . chr(32) . $fixedrow[0] . chr(32) . 'no existe.' . chr(10);
                    }
                }
            }
            if (empty($fullerrorstring) == false) {
                $fullerrorstring = $headererrorstring . $fullerrorstring;
            } else {
                $fullerrorstring = 'Archivo cargado existosamente.';
            }
            $result['error'] = $fullerrorstring;
        } else {
//            $firephp->log('THE ELSE');
            $result['error'] = 'Estructura de archivo incorrecta.';
        }

        $firephp->log($fullerrorstring, 'OpViviendasController actionUploadcsv $fullerrorstring');
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $firephp->log($return, 'OpViviendasController actionUploadcsv $return');
        echo $return; // it's array
    }

    public function actionUploadcsvhogares() {
        $firephp = FirePHP::getInstance(true);
        Yii::import("ext.EAjaxUpload.qqFileUploader");
        $folder = "upload/importcsv/" . Yii::app()->user->Operador . "/";
        if (!is_dir($folder)) {
            $firephp->log($folder, 'OpViviendasController actionUploadcsvhogares FOLDER NO EXISTE');
            if (mkdir($folder)) {
                $firephp->log($folder, 'OpViviendasController actionUploadcsvhogares FOLDER CREADO EXITOSAMENTE');
            } else {
                $firephp->log($folder, 'OpViviendasController actionUploadcsvhogares FOLDER CREACION FALLO');
            }
        } else {
            $firephp->log($folder, 'OpViviendasController actionUploadcsvhogares FOLDER SI EXISTE');
        }
        $allowedExtensions = array("csv"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 1 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $firephp->log($result, 'OpViviendasController actionUploadcsvhogares $result');
        $datahandle = fopen($folder . $result['filename'], "r");
        while (($csvrowafterrow = fgetcsv($datahandle, 3000, ";", "\t")) !== FALSE) {
            $data[] = $csvrowafterrow;
        }
        $firephp->log($data, 'OpViviendasController actionUploadcsvhogares $data fgetcsv');

        $rows = count($data);
        $firephp->log($rows, 'OpViviendasController actionUploadcsvhogares $rows');
        $fullerrorstring = '';
        $headererrorstring = 'ERRORES ENCONTRADOS' . CHR(10) . 'los siguientes ID_BIEN_AFECTADO no fueron cargados:' . CHR(10);
        if ($rows > 1 AND in_array('id_bien_afectado', $data[0]) AND in_array('numero_documento', $data[0])) {
            for ($row = 1; $row < $rows; $row++) {
                $fixedrow = str_replace(array("\r\n", "\n", "\r", "NULL"), "", $data[$row]);
//                $firephp->log($data[0], 'OpViviendasController actionUploadcsv $data[0]');
//                $firephp->log($fixedrow, 'OpViviendasController actionUploadcsv $fixedrow');
                $combinedrow = array_combine(array_values($data[0]), array_values($fixedrow));
                $firephp->log($combinedrow, 'OpViviendasController actionUploadcsv $combinedrow');
                $model = OpHogares::model()->findByAttributes(array('id_bien_afectado' => $combinedrow['id_bien_afectado'], 'numero_documento' => $combinedrow['numero_documento']));
                if (empty($model) == false) {
                    $noparentmodel = false;
                    foreach ($combinedrow as $keyrow => $valuerow) {
                        $isempty = empty($valuerow);
                        if (($isempty == false) or ($valuerow === '0')) {
                            $firephp->log($keyrow . ' => ' . $valuerow);
                            $model->$keyrow = $valuerow;
                        }
                    }
                } else {
                    if ($parentmodel = OpViviendas::model()->findByPk($combinedrow['id_bien_afectado'])) {

                        $parentmodel = OpViviendas::model()->findByPk($combinedrow['id_bien_afectado']);
                        if (empty($combinedrow['id_bien_afectado']) == false and empty($parentmodel) == false) {
                            $model = new OpHogares;
                            $model->setAttributes($combinedrow);
                            $noparentmodel = false;
                        }
                    } else {
                        $noparentmodel = true;
                        $firephp->log($noparentmodel, 'OpViviendasController actionUploadcsvhogares  $noparentmodel true');
                    }
                }
                $firephp->log($model->attributes, 'OpViviendasController actionUploadcsv $model->attributes');
//                $firephp->log($model, 'OpViviendasController actionUploadcsvhogares  $model');
                if (empty($model->ostenta_tenencia) == false)
                    $model->ostenta_tenencia = explode(',', $model->ostenta_tenencia);
                if ($noparentmodel == false) {
                    $firephp->log('OpViviendasController actionUploadcsvhogares  going to SAVE');
                    $model->save();
                    $errors = $model->getErrors();
                    $firephp->log($errors, 'OpViviendasController actionUploadcsvhogares  $errors');
                    if (empty($errors) == false)
                        $fullerrorstring = $fullerrorstring . chr(10) . 'id_bien_afectado' . chr(32) . $combinedrow['id_bien_afectado'] . chr(32) . 'numero_documento' . chr(32) . $combinedrow['numero_documento'] . chr(32) . 'contiene los siguentes errores:' . chr(10);
                    foreach ($errors as $errorkey => $errorvalue) {
                        $firephp->log($errorkey . ' => ' . $errorvalue[0], 'OpViviendasController actionUploadcsvhogares' . chr(32) . $combinedrow['id_bien_afectado'] . chr(32) . $combinedrow['numero_documento'] . chr(32) . 'Errors');
                        $fullerrorstring = $fullerrorstring . chr(32) . chr(32) . chr(91) . $errorkey . chr(93) . chr(32) . $errorvalue[0] . chr(10);
                    }
                } else {
                    $fullerrorstring = $fullerrorstring . chr(10) . 'id_bien_afectado' . chr(32) . $combinedrow['id_bien_afectado'] . chr(32) . 'No existe.' . chr(10);
                }
            }
            if (empty($fullerrorstring) == false) {
                $fullerrorstring = $headererrorstring . $fullerrorstring;
            } else {
                $fullerrorstring = 'Archivo cargado existosamente.';
            }
            $result['error'] = $fullerrorstring;
        } else {
            $firephp->log('THE ELSE');

            $result['error'] = 'Estructura de archivo incorrecta.';
        }

        $firephp->log($fullerrorstring, 'OpViviendasController actionUploadcsvhogares $fullerrorstring');
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $firephp->log($return, 'OpViviendasController actionUploadcsvhogares $return');
        echo $return; // it's array
    }

//    public function actionUploadcsv_old() {
//        $firephp = FirePHP::getInstance(true);
////        $firephp->log($_POST, 'OpViviendasController actionUploadcsv id');
////                $firephp->log($_GET, 'OpViviendasController actionUploadcsv id');
//        Yii::import("ext.EAjaxUpload.qqFileUploader");
//        $id = $_GET['id'];
//        if (!is_dir(Yii::app()->getBasePath() . "\upload\\" . $id)) {
//            $firephp->log(Yii::app()->getBasePath() . "\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER NO EXISTE');
//            if (mkdir(Yii::app()->getBasePath() . "\upload\\" . $id)) {
//                $firephp->log(Yii::app()->getBasePath() . "\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER CREADO EXITOSAMENTE');
//            } else {
//                $firephp->log(Yii::app()->getBasePath() . "\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER CREACION FALLO');
//            }
//        } else {
//            $firephp->log(Yii::app()->getBasePath() . "\upload\\" . $id, 'OpViviendasController actionUploadcsv FOLDER SI EXISTE');
//        }
//
////        $firephp->log($folder, 'OpViviendasController actionUploadcsv id');
////$firephp->log($this->parentId, 'OpViviendasController actionUploadcsv parent');
////        $folder = '../upload/'; // folder for uploaded files
//        $folder = Yii::app()->getBasePath() . "\upload\\" . $id . "\\";
////        echo Yii::app()->user->name;
////        echo Yii::app()->user->Operador;
////        echo Yii::app()->user->Rol;
//        $firephp->log($folder, 'OpViviendasController actionUploadcsv folder');
////        $firephp->log(Yii::app()->user->Operador, 'OpViviendasController actionUploadcsvYii::app()->user->Operador');
////        $folder = '';
//        $allowedExtensions = array("txt", "csv"); //array("jpg","jpeg","gif","exe","mov" and etc...
//        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
//        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
//        $result = $uploader->handleUpload($folder);
//        $firephp->log($result, 'OpViviendasController actionUploadcsv result');
//
//        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
//        $firephp->log($result, 'OpViviendasController actionUploadcsv result');
//
//        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
//        $fileName = $result['filename']; //GETTING FILE NAME 
//
//        echo $return; // it's array
//    }

    public function actionStartcsv() {
        $this->render('uploadcsv');
    }

    public function actionStartcsvhogares() {
        $this->render('uploadcsvhogares');
    }

    public function actionConfirm($id) {
        $firephp = FirePHP::getInstance(true);

        $msg = 'Se guardo exitosamente';
        $url = CHtml::normalizeUrl(array('opViviendas/updatehogares', 'id' => $id));
        $scrpt = "<script type='text/javascript'>alert('{$msg}'); window.location='{$url}' ;</script>";
        $firephp->log('OpViviendasController actionUpdatehogares: Se guardo exitosamente');
        $firephp->log($scrpt, '$scrpt');

        echo $scrpt;

//var_dump($msg); die();
//        sleep(3);
//                        $this->redirect(array('updatehogares', 'id' => $id));
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
        $dataProvider = new CActiveDataProvider('OpViviendas');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new OpViviendas('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['OpViviendas']))
            $model->attributes = $_GET['OpViviendas'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return OpViviendas the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = OpViviendas::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param OpViviendas $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'op-viviendas-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
