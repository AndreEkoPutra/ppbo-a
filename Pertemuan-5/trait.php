<?php

trait Loggable{
    public function pesan($pesan){
        return $pesan;
    }
}

Class User{
    use Loggable;
    private $username;

    public function __construct($username){
        $this->username = $username;
    }

    public function getUserName(){
        return $this->username;
    }

}

$user = new User("Dani Ali");
echo $user->getUserName() . $user->pesan(' Telah Keluar');