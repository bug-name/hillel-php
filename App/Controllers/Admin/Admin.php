<?php

namespace Admin;

use Core\ViewAdmin;

class Admin
{
    public function __construct()
    {
        ViewAdmin::view('admin');
    }
}
