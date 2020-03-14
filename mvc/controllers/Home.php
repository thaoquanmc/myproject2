<?php
class Home extends Controller {
    public function index(){
    $this->view("theme-default",["page"=>"home"]);
    }
}