<?php

class Controller
{
    protected function view($viewName, $layout = 'main')
    {
        $filePath = ROOT . '/views/' . $viewName . '.php';
        if(file_exists($filePath)){
            $layoutPath = ROOT . '/views/layout/' . $layout . '.php';
            if(file_exists($layoutPath)){
                include $layoutPath;
            }
        }
    }
}