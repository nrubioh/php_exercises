<?php
namespace Router;

class RouterHandler
{
    protected $method;
    protected $data;

    public function set_method($method){
        $this->method = $method;
    }

    public function set_data($data){
        $this->data = $data;
    }

    public function route($controller, $id){
        
    }
}
