<?php
/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/2/2019
 * Time: 21:33
 */

class Router {
     public static $method='index';
     public static $className='HomeController';

    /**
     * @param $file
     */
    public function load($file){
        $file=explode('/',$file);
        if (!empty($file[1])){
            if (class_exists($file[1].'Controller')){
                self::$className=$file[1].'Controller';
            }
        }
        if (!empty($file[2])){
            if (method_exists(self::$className,$file[2])){
                self::$method=$file[2];
            }
        }
        $class = new self::$className();
        $LoadMethod =self::$method;
        $class->$LoadMethod();
    }
}