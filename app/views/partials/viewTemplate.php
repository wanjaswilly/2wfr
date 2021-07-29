<?php
class viewTemplate{
    public static $blockStart='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
    public static $blockHeader_content='
            <meta name="description" content="">
            <meta name="author" content="{{author}}">
            <link rel="icon" href="favicon.ico">
            <title>{{shortAppName}} &middot; {{pageName}}</title>';
    public static $blockStyles='<link rel="stylesheet" href="public/css/bootstrap.css">';
    public static $blockCloseHeader='</head><body>';
    public static $blockNavigation='
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
            <a class="navbar-brand" href="{{baseUrl}}">{{appname}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#nav" aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{baseUrl}}Home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{baseUrl}}SetDomainName">ADD DOMAIN</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{baseUrl}}listedDomains">VIEW LISTED DOMAINS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{baseUrl}}contact">Contact us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{baseUrl}}ContactChat">Chat with us</a>
                    </li>
    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>';
    public static $blockContent ='
        <div class="container">
            <div class="text-center mt-4">
                No content added
            </div>
        </div>';
    public static $blockScripts ='
        <script src="public/js/jquery-1.11.3.min.js"></script>
        <script src="public/js/bootstrap.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <script src="public/js/app.js"></script>';
    public static $blockCloseAll='
    </body>
    </html>';

    /**
     *    gets the template data,
     *    replaces the old data with the new data,
     *    joins the chunks, and returns as a string html
     */

    public function replaceTheChanged($newArray){
        $page_content_array=[
            'blockStart' =>self::$blockStart,
            'blockHeader_content'=>self::$blockHeader_content,
            'blockStyles'=>self::$blockStyles,
            'blockCloseHeader'=>self::$blockCloseHeader ,
            'blockNavigation'=>self::$blockNavigation ,
            'blockContent'=>self::$blockContent ,
            'blockScripts'=>self::$blockScripts ,
            'blockCloseAll'=>self::$blockCloseAll
        ];
        $page_html_content='';
        foreach ($newArray as $blocks => $value ){
            $page_content_array[$blocks]=$value;
        }
        foreach ($page_content_array as $key =>$value){
            $page_html_content.=self::FunctionsInHtml($value);
        }
        return $page_html_content;
    }
    public function FunctionsInHtml($blockToSearch,$secondRun=false)
    {
        $found=strpos($blockToSearch, '{{');
        if ($found !== false) {
            $brokenBlockArray=explode('{{', $blockToSearch);
            $returnString='';
            $returnString=$brokenBlockArray[0];
            //var_dump($brokenBlockArray);
            for($counter=1;$counter<sizeof($brokenBlockArray);$counter++){
                $brokenBlockPart=explode('}}', $brokenBlockArray[$counter]);
                $functionName=$brokenBlockPart[0];
                $globalClassObject= new GlobalAppData();
                $dataReturnedByFunction= $globalClassObject->$functionName();
                $returnString.=$dataReturnedByFunction.$brokenBlockPart[1];
                //echo $returnString;
            }            
            return $returnString;
        }
        return $blockToSearch;
    }
}