<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
<<<<<<< HEAD


    public function Apprentice(){
        return $this->belongsTo('App\Models\Apprentice');
    }


    public function Teacher(){
        return $this->belongsTo('App\Models\Teacher');
    }


}


=======
}
>>>>>>> 7b018d1cca67d3c49b6e453eca7fa766e31d831e
