<?php
abstract class Hewan{ // Abstrcat Class

    abstract public function suara(); // Abstract Method

}

class Kucing extends Hewan{
    public function suara(){ // Implementasi Abstract Class dan bersifat wajib
        return 'Meowwwww';
    }
}

$kucing = new Kucing();
echo $kucing->suara();

