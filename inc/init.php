<?php
require_once 'funkcije.php';
/*
*Loduje pocetnu stranicu prosledjue parametar koji se uzima, naziv stranice
*/
function loadContent($where, $default)
{
    
    $content = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    $default = filter_var($default, FILTER_SANITIZE_STRING);
    
    $content=(empty($content))?$default:$content;
    
    if($content)
    {
        $html = include 'stranica/'.$content.'.php';
        return $html;
    }
}



/*
* Autoload klasa
*/
function __autoload($class_name)
{
   
    try
    {
           $class_file="classes/".$class_name.".php";
        if(is_file($class_file))
        {
            require_once $class_file;
        }
        else 
        {
            throw new Exception("Error $class_name u fajlu $class_file");
        }
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
}

?>