<?php

class Person
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->getMembers();
    }
}

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function getMembers()
    {
        return $this->members;
    }

}

$nick = new Person('Nick de Vries');
$henk = new Person('Henk de Boer');
$jan = new Person ('Jan Klaasman');

$staff = new Staff([$nick, $henk, $jan]);

$nickdude = new Business($staff);
$nickdude->hire(new Person('Shady Katmai'));

$nickdude->getStaffMembers();
