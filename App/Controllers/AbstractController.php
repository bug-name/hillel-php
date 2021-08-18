<?php
namespace Controllers;

abstract class AbstractController
{
    public function view($section, $name, $data = null)
    {
        if ($section === 'Admin') {
            require 'web/admin/' . $name . '.php';
        } else if ($section === 'Home') {
            require 'web/home/' . $name . '.php';
        }
    }
}

