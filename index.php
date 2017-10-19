<?php

require "vendor/autoload.php";

use Acme\Staff;
use Acme\Business;
use Acme\Users\Person;

$nick = new Person('Nick de Vries');
$henk = new Person('Henk de Boer');
$jan = new Person ('Jan Klaasman');

$staff = new Staff([$nick, $henk, $jan]);

$nickdude = new Business($staff);
$nickdude->hire(new Person('Shady Katmai'));

var_dump($nickdude->getStaffMembers());
