<?php
class SetUp extends Controller {
    public function index(){
        $objSetUp = $this->model("Config");
        $objSetUp->createDatabase();
    }
}