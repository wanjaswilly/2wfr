<?php
/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/2/2019
 * Time: 18:54
 */
require_once 'bootstrap/app.php';
$RouterObj= new Router();
$RequestObj=new Request();

$RouterObj->load( $RequestObj->uri());