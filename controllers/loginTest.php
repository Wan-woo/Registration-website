<?php
$captcha = "";
$captchaErr = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    session_start();
    $captcha = $_POST["captcha"];
    if($_SESSION["verification"] == $captcha){

    }
    else{
        $captchaErr = "验证码错误！";
    }
}

/**
 * Created by PhpStorm.
 * User: 张皖渝
 * Date: 2/28/2019
 * Time: 2:09 PM
 */