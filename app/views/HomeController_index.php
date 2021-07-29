<?php
class HomeController_index{

    public function returnMe()
    {   
        $blockContent="<style>
                 .asd{
                    padding: 10%;
                    margin: 5%;
                 }           
            </style>
        <div class=\"container\">    
            <div class=\"text-center asd mt-4\">
                <h1>Welcome to our home</h1>
                <p>you are viewing us from < ip :".self::loadIp()." ></p>
                <p>If you are here I bet you successfully created the starter template</p>
                <p>Sorry for lack of docs right now but be sure to check for updates</p>
            </div> 
        </div>";
        $array_from_me=['blockContent'=>$blockContent];
        return $array_from_me;
    }
    public function loadIp()
    {
        $ip=" my ip";
        return $ip;
    }

}

