<?php
/**
 * Created by PhpStorm.
 * User: ep
 * Date: 13-12-17
 * Time: 下午6:09
 */

function is_login() {
    $s = session('user');
    return $s && isset($s['uid']);
}

function get_user() {
    $s = session('user');
    return $s;
}