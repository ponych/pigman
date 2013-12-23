<?php
/**
 * Created by PhpStorm.
 * User: ep
 * Date: 13-12-18
 * Time: 下午4:45
 */


class BaseAction extends Action {
    public $_js = array(
      'libs/jquery-2.0.3.js' ,
        'main.js'
    );
    function __construct() {
        parent::__construct();

    }

    function addJs($js) {
        $this->_js[] = $js;
        return $this;
    }

    function display($templateFile='',$charset='',$contentType='',$content='',$prefix='') {

        $this->assign('_js' ,$this->_js);
        parent::display($templateFile,$charset,$contentType,$content,$prefix);
    }
}