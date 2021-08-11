<?php


namespace Core;


class ViewHome
{
    public static function view($name, $data = null)
    {
        require 'web/home/' . $name . '.php';
    }
}
