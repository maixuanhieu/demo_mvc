<?php

include_once("controllers/base_controller.php");
class ProductsController extends BaseController{
    protected function getFolder()
    {
        return "products";
    }
    
    public function index(){
        $this->render("index");

    }

    public function create() {
        $this->render("create");
    }

    public function edit(){
        $this->render("edit");
    }

}