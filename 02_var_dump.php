<?php

class User
{
    public $name = 'Imtiaz mahi';

    public function fullName($suppos = 'Syud Amin ullah')
    {
        return $suppos;
    }
}
$user = new User;
echo $user->fullName();
var_dump($user->fullName());