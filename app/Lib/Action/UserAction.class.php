<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends BaseAction {

    public function index(){
        $this->assign('_site' , array( 'title' => 'my small title'));
        $this->display('index' );
    }

    /**
     * GET /user/reg to get interface
     * POST (ajax) /user/reg { email: $email, $password , captcha: $captcha ,[reg_code: $reg_code ] }
     */
    public function reg() {
        _fb('run' , __METHOD__);

        if ($this->isAjax() || $this->isPost()) {
            $m = D('users');

            $data = $this->_post('user');

            $data['encrypted_password'] = UsersModel::gen_password();
            $r = $m->create($data);
            _fb($r, '$r');
            exit();
            $id =$m->add($data);
            _fb($m->getLastSql(),'lastSql');
            _fb($id, '$id');
            $this->ajaxReturn($data);
        }


        $this->assign('_site' , array( 'title' => 'my small title'));
        $this->addJs('libs/jquery.validate.js');
        $this->display('reg' );
    }

    /**
     * checkout if email || nickname already exists in system.
     */
    function exists() {
        _fb( I('user') ,'user' );
        $user = I('user');
        if ( $user && isset($user['email'])) {
            $email = $user['email'];
            $User = D('users');
            $exists = $User->find(array('email' => $email));
            _fb($exists ,'$exists');
            if ($exists) {
                $rtn = false;
            } else {
                $rtn = true;
            }
            $this->ajaxReturn($rtn);
        } else {
            _fb('aoth else','something');
        }
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
        if ($this->isAjax()) {
            $this->ajaxReturn( 0,1,1);
        }


        $this->display();
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

    function forgot_password() {

        $this->display();
    }

    /**
     *
     */
    function bind_disk(){

    }

    public function captcha() {
        //仿豆瓣验证码设置
        import ( '@.Rover.SimpleCaptcha' );
        $captcha = new SimpleCaptcha ();
        $captcha->Yperiod = 12;
        $captcha->Yamplitude = 4;
        $captcha->Xperiod = 10;
        $captcha->Xamplitude = 5;
        $captcha->lineWidth=3;
        //背景图，豆瓣是随机了多张，我随便弄了一张你可以修改它
        $captcha->im=imagecreatefromjpeg('resources/background.jpg');
        $captcha->scale=3;
        $captcha->blur=true;
//        $captcha->fonts =array( 'Candice.ttf','VeraSansBold.ttf' ,'Jura.ttf');
        $captcha->shadowColor=array(255,255,255);
        $captcha->debug = true;
        $captcha->CreateImage ();
    }

}