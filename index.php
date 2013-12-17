<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// ThinkPHP 入口文件
// 记录开始运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);
// 记录内存初始使用
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems'] = memory_get_usage();
// 系统目录定义
defined('THINK_PATH') 	or define('THINK_PATH', dirname(__FILE__).'/');
defined('APP_PATH') 	or define('APP_PATH', dirname(__FILE__).'/app/');
defined('APP_DEBUG') 	or define('APP_DEBUG',true); // 是否调试模式
if(defined('ENGINE_NAME')) {
    defined('ENGINE_PATH') or define('ENGINE_PATH',THINK_PATH.'Extend/Engine/');
    require ENGINE_PATH.strtolower(ENGINE_NAME).'.php';
}else{
    defined('RUNTIME_PATH') or define('RUNTIME_PATH',APP_PATH.'Runtime/');
    $runtime = defined('MODE_NAME')?'~'.strtolower(MODE_NAME).'_runtime.php':'~runtime.php';
    defined('RUNTIME_FILE') or define('RUNTIME_FILE',RUNTIME_PATH.$runtime);
    if(!APP_DEBUG && is_file(RUNTIME_FILE)) {
        // 部署模式直接载入运行缓存
        function _fb() {}
        require RUNTIME_FILE;
    }else{
        $firephp = dirname(__FILE__).'/FirePHP.class.php';
        if (file_exists($firephp)) {
            require $firephp;


            function _fb($val ,$label) {
                static $fb = null;
                if (!$fb) {
                    $fb = FirePHP::getInstance(true);
                }

                switch ($label) {
                    default :
                        $fb->info($val, $label);
                        break;

                }
            }
        } else {
            function _fb(){};
        }
        // 加载运行时文件
        require THINK_PATH.'Common/runtime.php';
    }
}
