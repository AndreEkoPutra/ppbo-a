<?php
interface Hewan{
    public function suara();
}

class Kucing implements Hewan{
    public function suara(){
        echo 'Kucing Meowww ';
    }
}

class Anjing implements Hewan{
    public function suara(){
        echo 'Anjing Gukguk ';
    }
}

$hewan = [ new Kucing(), new Anjing() ];
foreach ($hewan as $item){
    echo $item->suara();
}