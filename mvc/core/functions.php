<?php

if (!function_exists("language")) {
    function language()
    {
        $lang = (isset($_SESSION["lang"])) ? $_SESSION["lang"] : "vi";
        $langCurrent = [];
        $langRS = file_get_contents("mvc/views/lang/lang.json");
        $langRS = json_decode($langRS, TRUE);
        if ($lang == "en") {
            foreach ($langRS as $key => $value) {
                $langCurrent[$key] = $value["en"];
            }
        } else{
            foreach ($langRS as $key => $value) {
                $langCurrent[$key] = $value["vi"];
            }
        }
        return $langCurrent;
    }
}