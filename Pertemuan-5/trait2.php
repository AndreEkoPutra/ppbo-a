<?php

trait Loggable{
    public function pesan(){
        return " Telah Keluar";
    }
}

Class User{
    use Loggable;
    private $username;
    
    public function __construct($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }
}

$user = new User('Dani Ali');
echo $user->getUsername() . $user->pesan();