<?php
//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
class MainClass
{
    private $param1 = 20;
    private $param2 = 15;

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
class ChildrenClass1 extends MainClass
{
    private $param3 = 8;
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
echo $objChildren1 -> sumParam1Param3(); //28

final class ChildrenClass2 extends MainClass
{
    private $param4 = 35;
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
echo $objChildren2 -> sumParam2Param4();//50

abstract class ChildrenClass3 extends MainClass
{
    private $param5 = 3;
    public function getParam5()
    {
        return $this -> param5;
    }
    public function setParam5($a)
    {
        $this -> param5 = $a;
    }
    public function sumParam1Param5()
    {
        return $this->getParam1() + $this->getParam5();
    }
    public abstract function paramPow($param, $powVal);
}
//$objChildren3 = new ChildrenClass3(); //Cannot instantiate abstract class ChildrenClass3

//3) Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции
class Lv2Children1Class1 extends ChildrenClass1
{
    private $param6 = 100;
    public function getParam6()
    {
        return $this -> param6;
    }
    public function setParam6($a)
    {
        $this -> param6 = $a;
    }
    public function sumParam3Param6()
    {
        return $this->getParam3() + $this->getParam6();
    }
    public function sumParam1Param6()
    {
        return $this->getParam1() + $this->getParam6();
    }
}
$objLv2Children1Class1 = new Lv2Children1Class1();
echo $objLv2Children1Class1 -> sumParam3Param6(); //108
echo $objLv2Children1Class1 -> sumParam1Param6(); //120


class Lv2Children1Class2 extends ChildrenClass1
{
    private $param7 = 200;
    public function getParam7()
    {
        return $this -> param7;
    }
    public function setParam7($a)
    {
        $this -> param7 = $a;
    }
    public function sumParam3Param7()
    {
        return $this->getParam3() + $this->getParam7();
    }
    public function sumParam2Param7()
    {
        return $this->getParam2() + $this->getParam7();
    }
}
$objLv2Children1Class2 = new Lv2Children1Class2();
echo $objLv2Children1Class2 -> sumParam3Param7(); //208
echo $objLv2Children1Class2 -> sumParam2Param7(); //215


//class Lv2Children2Class1 extends ChildrenClass2
//{
//    public static function echoFinalError()
//    {
//        echo 'error';
//    }
//}
//Lv2Children2Class1::echoFinalError(); //Fatal error: Class Lv2Children2Class1 may not inherit from final class

class Lv2Children3Class1 extends ChildrenClass3
{
    private $param8 = 300;
    public function getParam8()
    {
        return $this -> param8;
    }
    public function setParam8($a)
    {
        $this -> param8 = $a;
    }
    public function sumParam5Param8()
    {
        return $this->getParam5() + $this->getParam8();
    }
    public function sumParam1Param8()
    {
        return $this->getParam1() + $this->getParam8();
    }
    public function paramPow($param, $powVal)
    {
        return pow($param, $powVal);
    }
}
$objLv2Children3Class1 = new Lv2Children3Class1();
echo $objLv2Children3Class1 -> sumParam5Param8(); //303
echo $objLv2Children3Class1 -> sumParam1Param8(); //320
echo $objLv2Children3Class1 -> paramPow($objLv2Children3Class1 -> getParam8(), 2); //90000

class Lv2Children3Class2 extends ChildrenClass3
{
    private $param9 = 400;
    public function getParam9()
    {
        return $this -> param9;
    }
    public function setParam9($a)
    {
        $this -> param9 = $a;
    }
    public function sumParam5Param9()
    {
        return $this->getParam5() + $this->getParam9();
    }
    public function sumParam2Param9()
    {
        return $this->getParam2() + $this->getParam9();
    }
    public function paramPow($param, $powVal)
    {
        $this->setParam9(pow($param, $powVal));
    }
}
$objLv2Children3Class2 = new Lv2Children3Class2();
echo $objLv2Children3Class2 -> sumParam5Param9(); //403
echo $objLv2Children3Class2 -> sumParam2Param9(); //415
$objLv2Children3Class2 -> paramPow($objLv2Children3Class2 -> getParam9(), 2);
echo $objLv2Children3Class2 -> getParam9(); //160000
