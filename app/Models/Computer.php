<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

      protected $fillable = [
        'number',
        'brand',
<<<<<<< HEAD

        
    ];

       public function Apprentice(){
        return $this->hasOne('App\Models\Apprentice');
    }
=======
        
    ];
>>>>>>> 7b018d1cca67d3c49b6e453eca7fa766e31d831e
}
