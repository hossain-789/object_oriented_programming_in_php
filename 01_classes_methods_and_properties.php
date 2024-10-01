
<?php
/*
class User
{
    public $name = 'Hossain';

    public function fullName()
    {
        return 'Hossain Ahmed';
    }

    public function result($cGpa = 4.30)
    {
        return $cGpa;
    }

}
$user = new User;
echo $user -> result(5);*/


class User
{
    public $name = 'Hossain Ahmed';

    public function catName()
    {
        return 'Tom and Jerry';
    }

    public function catNumber($number = 587404)
    {
        return $number;
    }
}

$user = new User;
echo $user-> catNumber();