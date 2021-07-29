<?php
class Error500Controller_index
{
    public static $blockHeader_content = '
        <meta name="description" content="Internal Server Error">
        <meta name="ROBOTS" content="NOSNIPPET"/>
        <title>{{ appname }}|500 Internal Server Error</title>';
    public static $blockContent = '
        <div class="content-wrapper">
            <div class="container text-center p-5">
    
                <div class="text-center">
                    <h1><i class="fa fa-frown-o  red"></i> 500 Internal Server Error</h1>
                    <p class="lead">The web server is returning an internal error</p>
                    <p><br></p>
                </div>
            </div>
            <div class="container">
                <div class="body-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>What happened?</h2>
                            <p class="lead">A 500 error status implies there is a problem with the web server`s software
                                causing it to malfunction.</p>
                        </div>
                        <div class="col-md-6">
                            <h2>What can I do?</h2>
                            <p> Nothing you can do at the moment. If you need immediate assistance, please send us an email
                                instead. We apologize for any inconvenience.</p>
    
                        </div>
                    </div>
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