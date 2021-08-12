<?php

namespace Controllers\Admin;

use Core\ViewAdmin;

class Admin
{
    public function __construct()
    {
        ViewAdmin::view('Admin');
    }
}
