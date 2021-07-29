<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/4/2019
 * Time: 10:38
 */
class ContactChatController_index
{
    public static $blockContent="
        <div class=\"container\">    
            <div class=\"text-center mt-4\">
                <h1>Welcome,chat with us now</h1>
                <p>chat ui here</p>
                <p>hahahahahaha</p>
            </div> 
        </div>";
    public function returnMe()
    {
        $array_from_me=['blockContent'=>self::$blockContent];
        return $array_from_me;
    }
}