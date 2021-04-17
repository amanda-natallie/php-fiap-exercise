<?php

if(isset($_POST)) {

    $text = $_POST["params"][0];
    $function = $_POST["params"][1];
    
    
    switch ($function) {
        case "strtoupper":
            return print_r(strtoupper($text));
            break;
        case "strtolower":
            return print_r(strtolower($text));
            break;
        case "substr":
            $init = $_POST["params"][2];
            $length = isset($_POST["params"][3]) ? $_POST["params"][3] : null ;
            return print_r(substr($text, $init, $length));
            break;
        case "str_replace":
            $search = $_POST["params"][2];
            $replace = $_POST["params"][3];
            return print_r(str_replace($search, $replace, $text));
            break;
        case "strpos":
            $findme = $_POST["params"][2];
            $pos = strpos($text, $findme);

            if ($pos !== false) {
                echo "A string \"$findme\" foi encontrada na posição $pos";
           } else {
                echo "A string \"$findme\" não foi encontrada dentro da frase informada";
           }
            break;
        
        default:
        return $function;
            break;
    }
    
}
