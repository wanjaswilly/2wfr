<?php

/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/3/2019
 * Time: 12:47
 */
class HomeController
{
    public function index()
    {   $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}

class ContactController{

    public function index(){
        $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}
class ContactChatController{

    public function index(){
        $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}
class Error404Controller{
    public function index(){
        $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}
class Error500Controller{
    public function index(){
        $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}
class SetDomainNameController{
    public function index(){
        $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}
class listedDomainsController{
    public function index(){
        $view = new ViewsController();
        $view->views(get_class($this).'_index');
    }
}