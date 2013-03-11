<?php
class jQueryCascade extends CWidget
{
    private $baseUrl;

    public function init()
    {
        $assets = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'js';
        $this->baseUrl = Yii::app()->getAssetManager()->publish($assets);
        $this->registerClientScript();

        parent::init();
    }

    protected function registerClientScript()
    {
        $js = $this->baseUrl . '/jquery.cascade-select.js';
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerScriptFile($js);
    }

    public function dropDownList($id, $selected, $data, $htmlOptions = array(), $source, $cascaded)
    {
        $script = "$('#" . $id . "').cascade({source:'" . $source . "',cascaded:'" . $cascaded . "'});";
        Yii::app()->clientScript->registerScript('jQueryCascade' . $id, $script, CClientScript::POS_READY);

        return CHtml::dropDownList($id, $selected, $data, $htmlOptions);
    }
}
