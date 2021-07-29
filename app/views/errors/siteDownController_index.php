<?php
class siteDownController_index{
    public static $blockHeader_content='
    <meta name="description" content="Site under maintenance">
    <meta name="author" content="{{ author }}">
    <meta name="ROBOTS" content="NOSNIPPET"/>
    <title>{{ appname }} SITE DOWN</title>
    <style>
        .center{
            margin-top: 20%;
        }
    </style>';
    public static $blockContent='
        <div class="container  center">
            <div class="body-content">
                <div class="text-center">
                    <h1><i class="fa fa-frown-o  red"></i> SITE UNDER MAINTENANCE</h1>
                    <p class="lead">Seems like site is down. Please check with us later</p>
                    <p><br></p>
                </div>
            </div>
        </div>';
    public function returnMe()
    {
        $array_from_me=['blockContent'=>self::$blockContent,
            'blockHeader_content'=>self::$blockHeader_content];
        return $array_from_me;
    }
}


