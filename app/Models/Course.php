<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;

class Course extends Model
{
    use HasFactory;

    public function student()
    {
    	return $this->belongsTo(Student::class);
    	//for child to paresnt relationship  (inverse relation)
    }
}
