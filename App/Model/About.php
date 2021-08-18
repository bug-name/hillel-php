<?php

namespace App\Model;

class About extends AbstractModel
{
    public $titles = [
        'title1' => 'First about title',
        'title2' => 'Second about title',
        'title3' => 'Third about title',
    ];

    public  function getAboutByTitle($title)
    {
        if (array_key_exists($title, $this->titles)) {
            return $this->titles[$title];
        } else {
            return false;
        }
    }
    public function list()
    {
        return $this->titles;
    }
}
