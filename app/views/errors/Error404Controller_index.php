<?php
class Error404Controller_index{
    public static $blockContent='
        <div class="container mt-5">
            <div class="body-content">
                <div class="text-center">
                    <h1><i class="fa fa-frown-o  red"></i>Error 404</h1>
                    <p class="lead">Blaaahh</p>
                    <p><br></p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>What happened?</h2>
                        <p class="lead">A 404 error status implies that the file or page that you are looking for could
                            not be found.</p>
                    </div>
                    <div class="col-md-6">
                        <h2>What can I do?</h2>
                        <p>Please use your browser`s back button and check that you`re in the right place. If you need
                            immediate assistance, please send us an email instead.</p>

                    </div>
                </div>
            </div>
        </div>';
    public static $blockHeader_content='
        <meta name="description" content="404 Not Found Error">
        <meta name="author" content="{{ author }}">
        <meta name="ROBOTS" content="NOSNIPPET"/>
        <title>{{ appname }} Error 404</title>';
    public function returnMe()
    {
        $array_from_me=['blockContent'=>self::$blockContent,
                        'blockHeader_content'=>self::$blockHeader_content];
        return $array_from_me;
    }
}



