<?php
class user
{
    public $userName = "Hossain";

    public function fullName()
    {
        return "Hossain Ahmed";
    }

    public function getYear($years = 70)
    {
        return $years;
    }
}

$user = new user;
echo $user->userName;
echo "<br />";
echo $user->fullName();
echo "<br />";
echo $user->getYear(90);

?>