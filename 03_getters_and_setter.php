<?php

// class user
// {
//     public $email;

//     public function setEmail($email)
//     {
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             return;
//         }
//         $this->email = $email;
//     }
//     public function getEmale()
//     {
//         return strtolower($this->email);
//     }
// }

// $user = new user;
// $user->setEmail("me@Tahmid.com");
// echo $user->getEmale();


class user
{
    public $email;

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return;
        }
        $this->email = $email;
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }
}
$user = new user;
$user->setEmail("me@HossainAhemd.com");
echo $user->getEmail();
?>