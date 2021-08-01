<?php

class MyClass
{
    const CAR_NAME = 'Dodge';
    protected $name = 'test1';

    public function classFunc()
    {
        return $this -> name;
    }
    public static function staticFuncExample() {
        return 'example';
    }
}

class MySecondClass extends MyClass
{
    protected $name = 'test2';

    public function classFunc2()
    {
        return $this -> name;
    }

    public function getName()
    {
        return $this -> name;
    }
    public function setName($a)
    {
        $this -> name = $a;
    }
    public function setCarName($carname)
    {
        $this->CAR_NAME = 'Honda';
    }
    public function getCarName()
    {
        return $this->CAR_NAME;
    }
}


$newObj2 = new MySecondClass();
$newObj2->setName('Vasya');
//echo $newObj2->getName();

$student = new MySecondClass();
$newObj2->setCarName('Bilaz');
echo $newObj2->getCarName();
//echo $student->getName();



echo MyClass::staticFuncExample();






//$classObj = new MyClass();
//echo $classObj -> classFunc();
