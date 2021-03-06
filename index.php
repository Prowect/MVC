<?php

include(__DIR__ . "/vendor/autoload.php");

use Drips\MVC\Controller;

/*
View::on('create', function(){
    echo 'Creating view ...';
});
*/

class MyController extends Controller
{
    public function getAction()
    {
        echo "Hello World!";
        $this->smartyTest();
        echo "<pre>";
        var_dump($this->request);
    }

    protected function smartyTest()
    {
        $this->view->assign("msg", "Herzlich willkommen!");
        $this->view->display("test.tpl");
    }
}

$controller = new MyController;
