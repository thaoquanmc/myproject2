<?php

class Language extends Controller
{
    function index()
    {
        if (isset($_SESSION["lang"])) {
            if($_SESSION["lang"]=="en"){
                $_SESSION["lang"] = "vi";
            } else{
                $_SESSION["lang"] = "en";
            }
        } else{
            $_SESSION["lang"] = "vi";
        }
        $this->view("theme-default");
    }
}