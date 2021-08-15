<?php


namespace Core;


class ViewAdmin
{
    public static function view($name, $data = null)
    {
        require 'web/admin/' . $name . '.php';
    }
}
