<?php


namespace Core;


class View
{
    public static function view($name, $data = null)
    {
        require 'web/' . $name . '.php';
    }
}
