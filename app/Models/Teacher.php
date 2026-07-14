<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function Course(){
        return $this->belongsToMany('App\Models\ Course');
    }
=======
>>>>>>> 7b018d1cca67d3c49b6e453eca7fa766e31d831e
}
