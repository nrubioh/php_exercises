<?php 
namespace App\Http;

class Response{
    protected $view; //it could be array,json,pdf,etc

    public function __construct($view){
        $this->view = $view;
    }

    public function getView(){
        return $this->view;
    }

    public function send(){
        $view = $this->getView();

        //3 $content = file_get_contents(__DIR__."/../../views/$view.php");
        //3 require __DIR__."/../../views/layout.php";
        $content = file_get_contents(viewPath($view));
        require viewPath('layout');
    }
}