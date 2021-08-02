<?php
//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
class MainCLass
{
    public $param1 = 20;
    public $param2 = 15;

    public function getParam1()
    {
        return $this -> param1;
    }
    public function setParam1($a)
    {
        $this -> param1 = $a;
    }
    public function getParam2()
    {
        return $this -> param2;
    }
    public function setParam2($a)
    {
        $this -> param2 = $a;
    }
}

//2) Создать 3 наследника родительского класса
//Каждый наследник должен содержать одно свойство
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//Один наследник не должен быть наследуемым
//Один из наследников должен содержать абстрактную функцию возведения в степень
class ChildrenClass1 extends MainCLass
{
    public $param3 = 8;
    public function getParam3()
    {
        return $this -> param3;
    }
    public function setParam3($a)
    {
        $this -> param3 = $a;
    }
    public function sumParam1Param3()
    {
        return $this->getParam1() + $this->getParam3();
    }
}
$objChildren1 = new ChildrenClass1();
echo $objChildren1 -> sumParam1Param3();

final class ChildrenClass2 extends MainCLass
{
    public $param4 = 35;
    public function getParam4()
    {
        return $this -> param4;
    }
    public function setParam4($a)
    {
        $this -> param4 = $a;
    }
    public function sumParam2Param4()
    {
        return $this->getParam2() + $this->getParam4();
    }
}
$objChildren2 = new ChildrenClass2();
echo $objChildren2 -> sumParam2Param4();
class ChildrenClass3 extends MainCLass
{
    public $param5 = 3;
    public function getParam5()
    {
        return $this -> param5;
    }
    public function setParam5($a)
    {
        $this -> param5 = $a;
    }
    public function paramSquare()
    {
        $squareResult = $this->getParam5() * $this->getParam5();
        $this -> setParam5($squareResult);
    }
    public function sumParam1Param5()
    {
        return $this->getParam1() + $this->getParam5();
    }
}
$objChildren3 = new ChildrenClass3();
$objChildren3 -> paramSquare();
echo $objChildren3 -> sumParam1Param5();


