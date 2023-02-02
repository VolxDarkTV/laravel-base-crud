<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holy extends Model
{
    use HasFactory;

    private $name;
    private $surname;
    private $blessing_date;
    private $num_miracles;

    

    public function getName(){
        return $this -> name;
    }
    public function seTname($name){
        $this -> name = $name;
    }

    public function getSurname(){
        return $this -> surname;
    }
    public function seTsurname($surname){
        $this -> surname = $surname;
    }

    public function getBlessing_date(){
        return $this -> blessing_date;
    }
    public function seTblessing_date($blessing_date){
        $this -> blessing_date = $blessing_date;
    }
    
    public function getNum_miracles(){
        return $this -> num_miracles;
    }
    public function seTnum_miracles($num_miracles){
        $this -> num_miracles = $num_miracles;
    }
}
