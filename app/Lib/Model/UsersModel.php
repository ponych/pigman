<?php
/**
 * User: ericchen Date: 12/22/13
 * 
 */

class UsersModel extends Model{
//    var $tableName = 'users';
    protected $_validate = array(
        array('email' ,'required' ,'email必填') ,
        array('email' ,'email' ,'email格式不正确' ),
        array('created' ,'required' ,'测试') ,
    );

    function _before_add() {

    }
}