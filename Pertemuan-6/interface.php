<?php

interface Hewan{
    public function suara();
    public function kaki();
}

class Kucing implements Hewan {
    public function suara(){
        echo 'Meowww';
    }
    public function kaki(){
        echo 'Berkaki 4';
    }
}

$kucing = new Kucing();
$kucing->suara();
$kucing->kaki();