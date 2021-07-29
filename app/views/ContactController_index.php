<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/4/2019
 * Time: 10:33
 */
class ContactController_index
{   public static $blockContent="<style>
                 .asd{
                    padding: 10%;
                    margin: 5%;
                 }           
            </style>
        <div class=\"container\">    
            <div class=\"text-center asd mt-4\">
                <h1>Welcome,you can connect with us now</h1>
                <p>Call us on 0790052730</p>
                <p>mail us on devs@2w.co.ke</p>
                <p>{{appEnvironmentVariables}}</p>
            </div> 
        </div>";
    public function returnMe()
    {   $ip="<div class=\"text-center mt-4\">Viewing from ip >> {{myIp}}</p></div>";
        $array_from_me=['blockContent'=>self::$blockContent.$ip];
        if(exec("runas /user:Administrator cmd.exe")){
            return $array_from_me;
        }
        return ['blockContent'=>'Nocontent ....'];
    }
}