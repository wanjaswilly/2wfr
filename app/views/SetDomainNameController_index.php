<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/6/2019
 * Time: 00:49
 */
class SetDomainNameController_index
{
    public static $blockContent="
        <div class=\"container\">    
            <div class=\"text-center mt-4 add-domain\">
            <style>
                 .add-domain{
                    padding: 10%;
                    margin: 5%;
                 }           
            </style>
                <h1>Welcome , Add your domain here </h1>
                <small>this will make your domain to be available to viewers in local network(the one you are currently using )</small>
                    <form class='save-domain'>
                    <div>
                        <input type='text' name='domain-name' class='form-control mx-lg-auto m-md-3 m-lg-2 m-sm-5' id='domain-name' required>
                    </div><br>
                    <div>
                        <input type='submit' name='submit' value='Save' class='btn btn-info'>
                    </div>
                    </form>
            </div> 
        </div>";
    public function returnMe()
    {
        $array_from_me=['blockContent'=>self::$blockContent];
        return $array_from_me;
    }
}