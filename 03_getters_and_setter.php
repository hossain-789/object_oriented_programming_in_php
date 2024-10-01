<?php

/* class User
{
    public $email;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$user = new User;
echo $user-> setEmail('me@hossain09.com');
echo $user-> getEmail(); */



/*class User
{
    public $email;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
$user = new User;
echo $user-> setEmail('csti@hossain.com');
echo $user->getEmail(); */


/*class User
{
    public $email;
    public function setEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return;
        }
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return strtolower($this->email);
    }
}

$user = new User;
echo $user-> setEmail('redex@HOSSAIN.com');
echo $user-> getEmail();*/

/*class User
{
    public $email;

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        $this -> email = $email;
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }
}

$user = new User;
echo $user->setEmail('info@HOSSAIN.com');
echo $user->getEmail();*/


class User
{
    public $email;

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }
}
$user = new User;
echo $user->setEmail('info@Hossain.com');
echo $user->getEmail();
