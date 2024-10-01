<?php


/*class User
{
    public $userName = 'jhon';
    public function fullName()
    {
        return 'jhon smith';
    }
    public function avater($size = 100)
    {
        return $size;
    }

}
$user = new User;
echo $user -> avater(50);
var_dump($user -> avater(50));*/

class User
{
    public $name = 'Imtiaz mahi';

    public function fullName($suppos = 'Syud Amin ullah')
    {
        return $suppos;
    }
}
$user = new User;
echo $user-> fullName();
var_dump($user-> fullName('Tahmid'));