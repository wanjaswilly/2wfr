<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/6/2019
 * Time: 01:27
 * 
 *----- to add ----
 * appMode = development/live
 * serviceMode =http/https
 * 
 */
class GlobalAppData
{
    public static function author(){
        return 'willy_the_geek';
    }
    public static function appname(){
        return 'Proxy & DNS Handler';
    }
    public static function shortAppName(){
        return 'P.D.H';
    }
    public static function baseUrl(){
        return 'http://localhost/2wframework/';
    }
    public static function myIp(){
        return $_SERVER['REMOTE_ADDR'];
    }
    public static function pageName(){
		$RequestObj=new Request();
		$requestUrl=$RequestObj->uri();
		$requestUrl=explode('/',$requestUrl);
        if (!empty($requestUrl[1])){
            $pageName=$requestUrl[1];
        	return $pageName;
        }
        return 'Home';
    }
    public static function appEnvironmentVariables(){
    	$data='';$file=self::baseUrl().'env.wwf';
    	$data.="The env file is :.two debrew framework filetype<br>";
    	$subData=file_get_contents($file);
    	$subData=explode(',',$subData);
    	foreach ($subData as $sd => $value){
    	    $data.=$value."<br>";
        }
    	$data.="Is the file readable :".is_readable($file)."\n";
        return $data;
    }
}