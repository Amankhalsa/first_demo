<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    //relations methods
     // protected $table = 'courses';

    public function course()
    {
    	return $this->hasOne(Course::class); // one to one
    }

    public function courses()
    {
    	return $this->hasMany(Course::class); // one to many
    }

}
