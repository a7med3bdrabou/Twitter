<?php 

    function h($string="")
    {
        return htmlspecialchars($_SERVER["PHP_SELF"]);
    }


    function isPostRequest()
    {
        return $_SERVER["REQUEST_METHOD"] === "POST";
    }

?>