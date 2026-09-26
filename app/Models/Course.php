<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['Course_name', 'day']; 



    public function Apprentice(){
        return $this->belongsTo('App\Models\Apprentice');
    }


    public function Teacher(){
        return $this->belongsTo('App\Models\Teacher');
    }


}





