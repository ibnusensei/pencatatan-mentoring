<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'publish'];

    public function mentors()
    {
        return $this->hasMany(Mentor::class);
    }

    public function getGetEndDateAttribute()
    {
        return date('d F Y', strtotime($this->end_date));
    }
<<<<<<< HEAD
=======

    public function getGetStartDateAttribute()
    {
        return date('d F Y', strtotime($this->start_date));
    }

    public function getDate($date)
    {
        return date('d F Y', strtotime($date));
    }
>>>>>>> b5f7697f9bc2b5b73bf7a77729e3167bce28dc64
}
