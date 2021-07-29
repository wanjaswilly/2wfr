<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/3/2019
 * Time: 13:07
 */
class ViewsController
{
    /**
     *
     * @param $page_name
     * @param array $data
     */
    public function views($page_name, $data=[]){
        //add any global data
        $data['author']='author';
        $data['appname']='appname';
        $data['baseUrl']='baseurl';
        $page_name = new $page_name;
        $data_to_change=$page_name->returnMe();
        $viewTemplate= new viewTemplate();
        //do not return any html for ajax requests & responses
        if(isset($_POST) && !empty($_POST)){ }
        else{
            echo $viewTemplate->replaceTheChanged($data_to_change);
        }
    }
}
function serverArray(){
    $arr = array();
    foreach($_SERVER as $key=>$value)
        $arr[] = '&nbsp;&nbsp;&nbsp;\'' . $key . '\' => \'' . (isset($value)? $value : '-') . '\'';
    return @\sort($arr)? '$_SERVER = array(<br />' . implode($arr, ',<br />') . '<br />);' : false;
}