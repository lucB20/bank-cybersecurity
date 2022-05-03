<?php
if (!(isset($_GET["theme"]))){
    if(!(isset($_COOKIE["theme"]))){
        $theme = "light";
        setcookie("theme", $theme, time()+345678);
    }else {
        $theme = $_COOKIE["theme"];
        setcookie("theme", $theme, time()+345678);
    }

}else{
    if($_GET["theme"] == "dark"){
        $theme = "dark";
        setcookie("theme", $theme, time()+345678);
    }else{
        $theme = "light";
        setcookie("theme", $theme, time()+345678);
    }
}