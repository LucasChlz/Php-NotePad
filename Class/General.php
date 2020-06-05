<?php

class General
{
    public function loadViews()
    {
        if(isset($_GET['url']))
        {
            $url = explode('/',$_GET['url']);
            $urlCer = explode('.',$url[0]);
            $files = 'views/'.$urlCer[0].'.php';
            if(file_exists($files))
            {
                include($files);
            }else
            {
                header('Location: '.URL_PATH);
                die();
            }
        }else
        {
            include('views/home.php');
        }
    }

    public static function jsAlert($message)
    {
        echo "<script>alert('$message')</script>";
    }

}