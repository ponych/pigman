<?php
// 本类由系统自动生成，仅供测试用途

class IndexAction extends Action {
    public function index(){

        $mUser = new Model('user');
        $user = $mUser->find(1);

        _fb($user, '$user');
        $this->display();
    }
}