<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function index(){
        $this->assign('_site' , array( 'title' => 'my small title'));
        $this->display('index' );
    }

    /**
     * GET /user/reg to get interface
     * POST /user/reg { email: $email, $password , captcha: $captcha ,[reg_code: $reg_code ] }
     */
    public function reg() {
        _fb('run' , __METHOD__);
        $this->assign('_site' , array( 'title' => 'my small title'));
        $this->display('reg' );
    }

    /**
     * GET /user/active?code=$code
     *
     * show slash page & redirect to user home page as logined user
     *
     */
    function active() {
        echo 'active';
//        $this->
    }

    /**
     * GET /user/login to get interface
     * POST /user/login { email: $email , password: $password ,captcha :$captcha }
     */
    function login() {
        $this->ajaxReturn( 0,1,1);
    }

    /**
     * 更新
     */
    function update() {

    }

    /**
     * 更新密码
     * POST /user/update_pwd { new_passwd: $new_passwd , old_passwd: $old_passwd }
     */
    function update_pwd() {

    }

    /**
     *
     */
    function bind_disk(){

    }


}