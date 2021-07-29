<?php
/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/2/2019
 * Time: 21:32
 */


require 'vendor/Autoloader.php';
$AL=new Autoloader();
$AL;
if (isset($_POST)){
    if(!empty($_POST)){
        //save to db for display of sites.
        //echo exec('whoami');
        $postObject= new HandlePostRequests();
        $postObject->unloadPost();
    }
}