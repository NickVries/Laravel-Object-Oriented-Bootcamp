<?php





class BankAccount
{
    const TAX = 0.09;
}

//echo BankAccount::TAX;



class Person
{
    public $age =1;

    public function haveBirthday()
    {
        $this->age++;
    }
}

$joe = new Person;
$joe->haveBirthday(); //age = 2
$joe->haveBirthday();//age = 3

//echo $joe->age;

$jane = new Person;
$jane->haveBirthday(); //age = 2

//echo $jane->age;


class Math
{
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

//var_dump(Math::add(1, 2, 3, 4));

